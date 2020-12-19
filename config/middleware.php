<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {
    $checkProxyHeaders = true;
    $trustedProxies = ['10.0.0.1', '10.0.0.2'];
    $app->add(new RKA\Middleware\IpAddress($checkProxyHeaders, $trustedProxies));
};
