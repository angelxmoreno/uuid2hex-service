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
            'displayErrorDetails' => Env::isDebug(), // Should be set to false in production
            'cache_path' => CACHE_DIR,
            'database' => [
                'database_url' => Env::get('DATABASE_URL', 'mysql://user:pass@localhost/some_database'),
                'cache_url' => Env::get('CACHE_URL','file://cache?prefix=_cake_model&serialize=true'),
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
            'matomo' => [
                'enabled' => Env::get('MATOMO_ENABLED'),
                'site_id' => (int)Env::get('MATOMO_SITE_ID',0),
                'site_url' => Env::get('MATOMO_SITE_URL'),
            ]
        ],
    ]);
};
