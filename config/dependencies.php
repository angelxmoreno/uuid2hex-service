<?php
declare(strict_types=1);

use App\Middleware\SentryMiddleware;
use App\Utils\Analytics;
use App\Utils\CakephpLoader;
use App\Utils\Settings;
use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions(CakephpLoader::getModelDefinitions());
    $containerBuilder->addDefinitions([
        Analytics::class => function (ContainerInterface $container) {
            return new Analytics(
                $container->get(MatomoTracker::class),
                Settings::get($container, 'matomo.enabled')
            );
        },
        MatomoTracker::class => function (ContainerInterface $container) {
            $tracker = new MatomoTracker(
                Settings::get($container, 'matomo.site_id'),
                Settings::get($container, 'matomo.site_url')
            );
            $tracker->disableSendImageResponse();

            return $tracker;
        },
        SentryMiddleware::class => function (ContainerInterface $container) {
            return new SentryMiddleware($container->get('settings')['sentry']);
        },
        LoggerInterface::class => function (ContainerInterface $c) {
            $loggerSettings = Settings::get($c, 'logger');
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $logger->pushHandler(new StreamHandler($loggerSettings['path'], $loggerSettings['level']));
            $logger->pushHandler(new StreamHandler('php://stderr', Logger::WARNING));

            return $logger;
        },
    ]);
};
