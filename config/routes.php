<?php
declare(strict_types=1);

use App\Actions\Home\HomeAction;
use App\Actions\LookUp\LookUpAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', HomeAction::class);

    $app->map([
        'GET',
        'HEAD',
        'POST',
        'PUT',
        'DELETE',
        'CONNECT',
        'TRACE',
        'PATCH',
    ], '/lookup', LookUpAction::class);
};
