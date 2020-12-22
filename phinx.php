<?php
declare(strict_types=1);

use App\Utils\DbUrl;
use josegonzalez\Dotenv\Loader;

require __DIR__ . '/config/constants.php';
require VENDOR_DIR . 'autoload.php';

if (file_exists(ROOT_DIR . '.env')) {
    (new Loader(ROOT_DIR . '.env'))->parse()->toEnv();
}

return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/config/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/config/seeds'
        ],
        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_environment' => 'local',
            'local' => DbUrl::expand($_ENV['DATABASE_URL'])
        ],
        'version_order' => 'creation'
    ];
