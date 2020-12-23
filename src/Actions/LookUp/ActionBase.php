<?php
declare(strict_types=1);

namespace App\Actions\LookUp;

use App\Actions\Action;
use App\Model\Table\RequestLogsTable;
use App\Model\Table\Uuid2HexsTable;
use App\Utils\Analytics;
use Psr\Log\LoggerInterface;

/**
 * Class ActionBase
 * @package App\Actions\LookUp
 */
abstract class ActionBase extends Action
{
    /**
     * @var RequestLogsTable
     */
    protected $RequestLogs;

    /**
     * @var Uuid2HexsTable
     */
    protected $Uuid2Hexs;

    /**
     * ActionBase constructor.
     * @param LoggerInterface $logger
     * @param Analytics $analytics
     * @param RequestLogsTable $RequestLogs
     * @param Uuid2HexsTable $Uuid2Hexs
     */
    public function __construct(LoggerInterface $logger, Analytics $analytics, RequestLogsTable $RequestLogs, Uuid2HexsTable $Uuid2Hexs)
    {
        parent::__construct($logger, $analytics);
        $this->RequestLogs = $RequestLogs;
        $this->Uuid2Hexs = $Uuid2Hexs;
    }


}