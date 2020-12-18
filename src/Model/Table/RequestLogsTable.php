<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\TableBase;
use Cake\Database\Schema\TableSchemaInterface;

/**
 * Class RequestLogsTable
 * @package App\Model\Table
 */
class RequestLogsTable extends TableBase
{

    /**
     * @param TableSchemaInterface $schema
     * @return TableSchemaInterface
     */
    protected function _initializeSchema(TableSchemaInterface $schema): TableSchemaInterface
    {
        $schema->setColumnType('body', 'json');
        $schema->setColumnType('headers', 'json');
        return $schema;
    }
}