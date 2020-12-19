<?php
declare(strict_types=1);

namespace App\Application\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Throwable;

/**
 * Class SentryMiddleware
 * @package App\Application\Middleware
 */
class SentryMiddleware implements MiddlewareInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * The constructor.
     *
     * @param array $options The sentry options
     */
    public function __construct(array $options)
    {
        $this->options = $options;
    }

    /**
     * Invoke middleware.
     *
     * @param ServerRequestInterface $request The request
     * @param RequestHandlerInterface $handler The handler
     *
     * @return ResponseInterface The response
     * @throws Throwable
     *
     */
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface
    {
        try {
            \Sentry\init($this->options);

            return $handler->handle($request);
        } catch (Throwable $exception) {
            \Sentry\captureException($exception);

            throw $exception;
        }
    }
}