<?php
declare(strict_types=1);

namespace App\Application\Actions\Home;

use App\Model\Table\RequestLogsTable;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;

/**
 * Class HomeAction
 * @package App\Application\Actions\Home
 */
class HomeAction extends \App\Application\Actions\Action
{
    /**
     * @var RequestLogsTable
     */
    protected $requestLogsTable;

    /**
     * @param LoggerInterface $logger
     * @param RequestLogsTable $requestLogsTable
     */
    public function __construct(LoggerInterface $logger, RequestLogsTable $requestLogsTable)
    {
        parent::__construct($logger);
        $this->requestLogsTable = $requestLogsTable;
    }

    /**
     * @inheritDoc
     */
    protected function action(): Response
    {
        $connection = $this->requestLogsTable->getConnection();
        $driver = get_class($connection->getDriver());
        $isConnected = $connection->getDriver()->enabled();
        $cache = get_class($connection->getCacher());
        return $this->respondWithData([
            'database' => compact('isConnected', 'cache', 'driver')
        ]);
    }
}