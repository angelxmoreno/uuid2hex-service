<?php
declare(strict_types=1);

use App\Application\Handlers\HttpErrorHandler;
use App\Application\Handlers\ShutdownHandler;
use App\Application\Middleware\SentryMiddleware;
use App\Application\ResponseEmitter\ResponseEmitter;
use App\Utils\Env;
use Cake\Core\Configure;
use DI\ContainerBuilder;
use josegonzalez\Dotenv\Loader;
use Psr\Log\LoggerInterface;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;

// constants
require __DIR__ . '/../config/constants.php';
require VENDOR_DIR . 'autoload.php';

try {
    //set up env
    $Loader = new Loader(ROOT_DIR . '.env');
    // Parse the .env file
    $Loader->parse();
    // Send the parsed .env file to the $_ENV variable
    $Loader->toEnv();
    Configure::write('App.namespace', 'App');
    Configure::write('debug', Env::isDebug());

    // Instantiate PHP-DI ContainerBuilder
    $containerBuilder = new ContainerBuilder();
    if (!Env::isDebug()) { // Should be set to true in production
        $containerBuilder->enableCompilation(CACHE_DIR);
    }

    // Set up settings
    $settings = require CONFIG_DIR . 'settings.php';
    $settings($containerBuilder);

    // Set up dependencies
    $dependencies = require CONFIG_DIR . 'dependencies.php';
    $dependencies($containerBuilder);

    // Build PHP-DI Container instance
    $container = $containerBuilder->build();
    Sentry\init($container->get('settings')['sentry']);

    // Instantiate the config
    AppFactory::setContainer($container);
    $app = AppFactory::create();
    $callableResolver = $app->getCallableResolver();

    // Register middleware
    $middleware = require CONFIG_DIR . 'middleware.php';
    $middleware($app);

    // Register routes
    $routes = require CONFIG_DIR . 'routes.php';
    $routes($app);

    /** @var bool $displayErrorDetails */
    $displayErrorDetails = $container->get('settings')['displayErrorDetails'];

    // Create Request object from globals
    $serverRequestCreator = ServerRequestCreatorFactory::create();
    $request = $serverRequestCreator->createServerRequestFromGlobals();

    // Create Error Handler
    $responseFactory = $app->getResponseFactory();
    $errorHandler = new HttpErrorHandler($callableResolver, $responseFactory, $container->get(LoggerInterface::class));

    // Create Shutdown Handler
    $shutdownHandler = new ShutdownHandler($request, $errorHandler, $displayErrorDetails);
    register_shutdown_function($shutdownHandler);

    // Add Routing Middleware
    $app->addRoutingMiddleware();


    // Add Error Middleware
    $app->add(SentryMiddleware::class);
    $errorMiddleware = $app->addErrorMiddleware($displayErrorDetails, false, false);
    $errorMiddleware->setDefaultErrorHandler($errorHandler);

    // Run App & Emit Response
    $response = $app->handle($request);
    $responseEmitter = new ResponseEmitter();
    $responseEmitter->emit($response);
} catch (\Exception $e) {
    \Sentry\captureException($e);
    echo "An error has happened: " . $e->getMessage() . PHP_EOL;
}