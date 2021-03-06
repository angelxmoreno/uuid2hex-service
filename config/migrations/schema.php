<?php

return array(
    'database' =>
        array(
            'default_character_set_name' => 'utf8mb4',
            0 => 'utf8mb4',
            'default_collation_name' => 'utf8mb4_unicode_ci',
            1 => 'utf8mb4_unicode_ci',
        ),
    'tables' =>
        array(
            'phinxlog' =>
                array(
                    'table' =>
                        array(
                            'table_name' => 'phinxlog',
                            'engine' => 'InnoDB',
                            'table_comment' => '',
                            'table_collation' => 'utf8_general_ci',
                            'character_set_name' => 'utf8',
                            'row_format' => 'Dynamic',
                        ),
                    'columns' =>
                        array(
                            'version' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'phinxlog',
                                    'COLUMN_NAME' => 'version',
                                    'ORDINAL_POSITION' => '1',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'bigint',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => '19',
                                    'NUMERIC_SCALE' => '0',
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'bigint(20)',
                                    'COLUMN_KEY' => 'PRI',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'migration_name' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'phinxlog',
                                    'COLUMN_NAME' => 'migration_name',
                                    'ORDINAL_POSITION' => '2',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'varchar',
                                    'CHARACTER_MAXIMUM_LENGTH' => '100',
                                    'CHARACTER_OCTET_LENGTH' => '300',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8',
                                    'COLLATION_NAME' => 'utf8_general_ci',
                                    'COLUMN_TYPE' => 'varchar(100)',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'start_time' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'phinxlog',
                                    'COLUMN_NAME' => 'start_time',
                                    'ORDINAL_POSITION' => '3',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'timestamp',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'timestamp',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'end_time' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'phinxlog',
                                    'COLUMN_NAME' => 'end_time',
                                    'ORDINAL_POSITION' => '4',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'timestamp',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'timestamp',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'breakpoint' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'phinxlog',
                                    'COLUMN_NAME' => 'breakpoint',
                                    'ORDINAL_POSITION' => '5',
                                    'COLUMN_DEFAULT' => '0',
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'tinyint',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => '3',
                                    'NUMERIC_SCALE' => '0',
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'tinyint(1)',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                        ),
                    'indexes' =>
                        array(
                            'PRIMARY' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'phinxlog',
                                            'Non_unique' => '0',
                                            'Key_name' => 'PRIMARY',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'version',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => '',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                        ),
                    'foreign_keys' => NULL,
                ),
            'request_logs' =>
                array(
                    'table' =>
                        array(
                            'table_name' => 'request_logs',
                            'engine' => 'InnoDB',
                            'table_comment' => '',
                            'table_collation' => 'utf8mb4_unicode_ci',
                            'character_set_name' => 'utf8mb4',
                            'row_format' => 'Dynamic',
                        ),
                    'columns' =>
                        array(
                            'id' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'id',
                                    'ORDINAL_POSITION' => '1',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'int',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => '10',
                                    'NUMERIC_SCALE' => '0',
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'int(11) unsigned',
                                    'COLUMN_KEY' => 'PRI',
                                    'EXTRA' => 'auto_increment',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'uuid2hex_id' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'uuid2hex_id',
                                    'ORDINAL_POSITION' => '2',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'int',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => '10',
                                    'NUMERIC_SCALE' => '0',
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'int(11)',
                                    'COLUMN_KEY' => 'MUL',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'status' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'status',
                                    'ORDINAL_POSITION' => '3',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'enum',
                                    'CHARACTER_MAXIMUM_LENGTH' => '7',
                                    'CHARACTER_OCTET_LENGTH' => '28',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'enum(\'failed\',\'created\',\'fetched\',\'pending\')',
                                    'COLUMN_KEY' => 'MUL',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'reason' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'reason',
                                    'ORDINAL_POSITION' => '4',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'varchar',
                                    'CHARACTER_MAXIMUM_LENGTH' => '200',
                                    'CHARACTER_OCTET_LENGTH' => '800',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'varchar(200)',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'method' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'method',
                                    'ORDINAL_POSITION' => '5',
                                    'COLUMN_DEFAULT' => '\'\'',
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'varchar',
                                    'CHARACTER_MAXIMUM_LENGTH' => '10',
                                    'CHARACTER_OCTET_LENGTH' => '40',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'varchar(10)',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'headers' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'headers',
                                    'ORDINAL_POSITION' => '6',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'text',
                                    'CHARACTER_MAXIMUM_LENGTH' => '65535',
                                    'CHARACTER_OCTET_LENGTH' => '65535',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'text',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'ip' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'ip',
                                    'ORDINAL_POSITION' => '7',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'varchar',
                                    'CHARACTER_MAXIMUM_LENGTH' => '20',
                                    'CHARACTER_OCTET_LENGTH' => '80',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'varchar(20)',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'body' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'body',
                                    'ORDINAL_POSITION' => '8',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'text',
                                    'CHARACTER_MAXIMUM_LENGTH' => '65535',
                                    'CHARACTER_OCTET_LENGTH' => '65535',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'text',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'created' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'created',
                                    'ORDINAL_POSITION' => '9',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'datetime',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'datetime',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'modified' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'request_logs',
                                    'COLUMN_NAME' => 'modified',
                                    'ORDINAL_POSITION' => '10',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'datetime',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'datetime',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                        ),
                    'indexes' =>
                        array(
                            'PRIMARY' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'request_logs',
                                            'Non_unique' => '0',
                                            'Key_name' => 'PRIMARY',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'id',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => '',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                            'uuid2hex_id' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'request_logs',
                                            'Non_unique' => '1',
                                            'Key_name' => 'uuid2hex_id',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'uuid2hex_id',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => 'YES',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                            'status' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'request_logs',
                                            'Non_unique' => '1',
                                            'Key_name' => 'status',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'status',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => 'YES',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                        ),
                    'foreign_keys' => NULL,
                ),
            'uuid2_hexs' =>
                array(
                    'table' =>
                        array(
                            'table_name' => 'uuid2_hexs',
                            'engine' => 'InnoDB',
                            'table_comment' => '',
                            'table_collation' => 'utf8mb4_unicode_ci',
                            'character_set_name' => 'utf8mb4',
                            'row_format' => 'Dynamic',
                        ),
                    'columns' =>
                        array(
                            'id' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'uuid2_hexs',
                                    'COLUMN_NAME' => 'id',
                                    'ORDINAL_POSITION' => '1',
                                    'COLUMN_DEFAULT' => NULL,
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'int',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => '10',
                                    'NUMERIC_SCALE' => '0',
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'int(11) unsigned',
                                    'COLUMN_KEY' => 'PRI',
                                    'EXTRA' => 'auto_increment',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'uuid' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'uuid2_hexs',
                                    'COLUMN_NAME' => 'uuid',
                                    'ORDINAL_POSITION' => '2',
                                    'COLUMN_DEFAULT' => '\'\'',
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'char',
                                    'CHARACTER_MAXIMUM_LENGTH' => '36',
                                    'CHARACTER_OCTET_LENGTH' => '144',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'char(36)',
                                    'COLUMN_KEY' => 'UNI',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'hex' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'uuid2_hexs',
                                    'COLUMN_NAME' => 'hex',
                                    'ORDINAL_POSITION' => '3',
                                    'COLUMN_DEFAULT' => '\'\'',
                                    'IS_NULLABLE' => 'NO',
                                    'DATA_TYPE' => 'char',
                                    'CHARACTER_MAXIMUM_LENGTH' => '16',
                                    'CHARACTER_OCTET_LENGTH' => '64',
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => NULL,
                                    'CHARACTER_SET_NAME' => 'utf8mb4',
                                    'COLLATION_NAME' => 'utf8mb4_unicode_ci',
                                    'COLUMN_TYPE' => 'char(16)',
                                    'COLUMN_KEY' => 'UNI',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'created' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'uuid2_hexs',
                                    'COLUMN_NAME' => 'created',
                                    'ORDINAL_POSITION' => '4',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'datetime',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'datetime',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                            'modified' =>
                                array(
                                    'TABLE_CATALOG' => 'def',
                                    'TABLE_NAME' => 'uuid2_hexs',
                                    'COLUMN_NAME' => 'modified',
                                    'ORDINAL_POSITION' => '5',
                                    'COLUMN_DEFAULT' => 'NULL',
                                    'IS_NULLABLE' => 'YES',
                                    'DATA_TYPE' => 'datetime',
                                    'CHARACTER_MAXIMUM_LENGTH' => NULL,
                                    'CHARACTER_OCTET_LENGTH' => NULL,
                                    'NUMERIC_PRECISION' => NULL,
                                    'NUMERIC_SCALE' => NULL,
                                    'DATETIME_PRECISION' => '0',
                                    'CHARACTER_SET_NAME' => NULL,
                                    'COLLATION_NAME' => NULL,
                                    'COLUMN_TYPE' => 'datetime',
                                    'COLUMN_KEY' => '',
                                    'EXTRA' => '',
                                    'PRIVILEGES' => 'select,insert,update,references',
                                    'COLUMN_COMMENT' => '',
                                    'IS_GENERATED' => 'NEVER',
                                    'GENERATION_EXPRESSION' => NULL,
                                ),
                        ),
                    'indexes' =>
                        array(
                            'PRIMARY' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'uuid2_hexs',
                                            'Non_unique' => '0',
                                            'Key_name' => 'PRIMARY',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'id',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => '',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                            'uuid' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'uuid2_hexs',
                                            'Non_unique' => '0',
                                            'Key_name' => 'uuid',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'uuid',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => '',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                            'hex' =>
                                array(
                                    1 =>
                                        array(
                                            'Table' => 'uuid2_hexs',
                                            'Non_unique' => '0',
                                            'Key_name' => 'hex',
                                            'Seq_in_index' => '1',
                                            'Column_name' => 'hex',
                                            'Collation' => 'A',
                                            'Sub_part' => NULL,
                                            'Packed' => NULL,
                                            'Null' => '',
                                            'Index_type' => 'BTREE',
                                            'Comment' => '',
                                            'Index_comment' => '',
                                        ),
                                ),
                        ),
                    'foreign_keys' => NULL,
                ),
        ),
);