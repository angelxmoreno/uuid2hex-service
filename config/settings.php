<?php
declare(strict_types=1);

use App\Utils\Env;
use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            'isDebug' => Env::isDebug(),
            'database_url' => Env::get('DATABASE_URL'),
            'displayErrorDetails' => Env::isDebug(), // Should be set to false in production
            'cache_path' => CACHE_DIR,
            'database' => [
                'database_url' => Env::get('DATABASE_URL'),
                'cache_url' => Env::get('CACHE_URL'),
            ],
            'logger' => [
                'name' => 'slimApp',
                'path' => LOGS_DIR . 'app2.log',
                'level' => Logger::DEBUG,
            ],
            'sentry' => [
                'dsn' => Env::get('SENTRY_DSN',''),
                'environment' => Env::get('SENTRY_ENVIRONMENT',''),
                'server_name' => Env::get('SENTRY_SERVER_NAME',''),
            ],
        ],
    ]);
};
