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
            'cache_path' => __DIR__ . '/../cache/',
            'database' => [
                'database_url' => Env::get('DATABASE_URL'),
                'cache_url' => Env::get('CACHE_URL'),
            ],
            'logger' => [
                'name' => 'uuid2hex',
                'path' => __DIR__ . '/../logs/app.log',
                'level' => Logger::DEBUG,
            ],
        ],
    ]);
};
