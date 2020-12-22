<?php
declare(strict_types=1);

use Phinx\Db\Adapter\MysqlAdapter;

/**
 * Class Init
 */
class Init extends Phinx\Migration\AbstractMigration
{
    public function change()
    {
        $this->execute("ALTER DATABASE CHARACTER SET 'utf8mb4';");
        $this->execute("ALTER DATABASE COLLATE='utf8mb4_unicode_ci';");
        $this->table('request_logs', [
                'id' => false,
                'primary_key' => ['id'],
                'engine' => 'InnoDB',
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'comment' => '',
                'row_format' => 'DYNAMIC',
            ])
            ->addColumn('id', 'integer', [
                'null' => false,
                'limit' => MysqlAdapter::INT_REGULAR,
                'signed' => false,
                'identity' => 'enable',
            ])
            ->addColumn('uuid2hex_id', 'integer', [
                'null' => true,
                'default' => null,
                'limit' => MysqlAdapter::INT_REGULAR,
                'after' => 'id',
            ])
            ->addColumn('status', 'enum', [
                'null' => true,
                'default' => null,
                'limit' => 7,
                'values' => ['failed', 'created', 'fetched', 'pending'],
                'after' => 'uuid2hex_id',
            ])
            ->addColumn('reason', 'string', [
                'null' => true,
                'default' => null,
                'limit' => 200,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'status',
            ])
            ->addColumn('method', 'string', [
                'null' => false,
                'default' => '\'\'',
                'limit' => 10,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'reason',
            ])
            ->addColumn('headers', 'text', [
                'null' => false,
                'limit' => 65535,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'method',
            ])
            ->addColumn('ip', 'string', [
                'null' => false,
                'limit' => 20,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'headers',
            ])
            ->addColumn('body', 'text', [
                'null' => false,
                'limit' => 65535,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'ip',
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'after' => 'body',
            ])
            ->addColumn('modified', 'datetime', [
                'null' => true,
                'default' => null,
                'after' => 'created',
            ])
            ->addIndex(['uuid2hex_id'], [
                'name' => 'uuid2hex_id',
                'unique' => false,
            ])
            ->addIndex(['status'], [
                'name' => 'status',
                'unique' => false,
            ])
            ->create();
        $this->table('uuid2_hexs', [
                'id' => false,
                'primary_key' => ['id'],
                'engine' => 'InnoDB',
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'comment' => '',
                'row_format' => 'DYNAMIC',
            ])
            ->addColumn('id', 'integer', [
                'null' => false,
                'limit' => MysqlAdapter::INT_REGULAR,
                'signed' => false,
                'identity' => 'enable',
            ])
            ->addColumn('uuid', 'char', [
                'null' => false,
                'default' => '\'\'',
                'limit' => 36,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'id',
            ])
            ->addColumn('hex', 'char', [
                'null' => false,
                'default' => '\'\'',
                'limit' => 16,
                'collation' => 'utf8mb4_unicode_ci',
                'encoding' => 'utf8mb4',
                'after' => 'uuid',
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'after' => 'hex',
            ])
            ->addColumn('modified', 'datetime', [
                'null' => true,
                'default' => null,
                'after' => 'created',
            ])
            ->addIndex(['uuid'], [
                'name' => 'uuid',
                'unique' => true,
            ])
            ->addIndex(['hex'], [
                'name' => 'hex',
                'unique' => true,
            ])
            ->create();
    }
}
