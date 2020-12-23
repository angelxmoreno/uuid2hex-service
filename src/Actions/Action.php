<?php
declare(strict_types=1);

namespace App\Actions;

use App\Utils\Analytics;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Log\LoggerInterface;
use Slim\Exception\HttpBadRequestException;

/**
 * Class Action
 * @package App\Actions
 */
abstract class Action
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var Analytics
     */
    protected $analytics;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Response
     */
    protected $response;

    /**
     * @var array
     */
    protected $args;

    /**
     * @param LoggerInterface $logger
     * @param Analytics $analytics
     */
    public function __construct(LoggerInterface $logger, Analytics $analytics)
    {
        $this->logger = $logger;
        $this->analytics = $analytics;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param mixed $args
     * @return Response
     * @throws HttpBadRequestException
     */
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;

        $this->analytics->trackEventApiRequest($request);
        return $this->action();
    }

    /**
     * @return Response
     * @throws HttpBadRequestException
     */
    abstract protected function action(): Response;

    /**
     * @return array|object
     * @throws HttpBadRequestException
     */
    protected function getFormData()
    {
        $input = json_decode(file_get_contents('php://input'));

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpBadRequestException($this->request, 'Malformed JSON input.');
        }

        return $input;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws HttpBadRequestException
     */
    protected function resolveArg(string $name)
    {
        if (!isset($this->args[$name])) {
            throw new HttpBadRequestException($this->request, "Could not resolve argument `{$name}`.");
        }

        return $this->args[$name];
    }

    /**
     * @param array|object|null $data
     * @return Response
     */
    protected function respondWithData($data = null, int $statusCode = 200): Response
    {
        $payload = new ActionPayload($statusCode, $data);

        return $this->respond($payload);
    }

    /**
     * @param ActionPayload $payload
     * @return Response
     */
    protected function respond(ActionPayload $payload): Response
    {
        $json = json_encode($payload, JSON_PRETTY_PRINT);
        $this->response->getBody()->write($json);

        return $this->response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($payload->getStatusCode());
    }
}
