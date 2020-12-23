<?php
declare(strict_types=1);

namespace App\Actions\Home;

use App\Model\Table\RequestLogsTable;
use Cake\Cache\Cache;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;

/**
 * Class HomeAction
 * @package App\Actions\Home
 */
class HomeAction extends \App\Actions\Action
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
        $cache = [
            'engine'=>get_class($connection->getCacher()),
            'config'=> Cache::getConfig('_cake_model_')
        ];
        return $this->respondWithData([
            'database' => compact('isConnected', 'cache', 'driver')
        ]);
    }
}