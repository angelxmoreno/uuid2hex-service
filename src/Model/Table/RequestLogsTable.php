<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\Database\Schema\TableSchemaInterface;
use Cake\ORM\Table;

/**
 * Class RequestLogsTable
 * @package App\Model\Table
 */
class RequestLogsTable extends Table
{

    /**
     * @param TableSchemaInterface $schema
     * @return TableSchemaInterface
     */
    protected function _initializeSchema(TableSchemaInterface $schema): TableSchemaInterface
    {
        $schema->setColumnType('body', 'json');
        return $schema;
    }
}