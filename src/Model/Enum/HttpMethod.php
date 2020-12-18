<?php
declare(strict_types=1);

namespace App\Model\Enum;

use MyCLabs\Enum\Enum;

/**
 * Class HttpMethod
 *
 * @package App\Model\Enum
 *
 * @method static HttpMethod GET()
 * @method static HttpMethod HEAD()
 * @method static HttpMethod POST()
 * @method static HttpMethod PUT()
 * @method static HttpMethod DELETE()
 * @method static HttpMethod CONNECT()
 * @method static HttpMethod OPTIONS()
 * @method static HttpMethod TRACE()
 * @method static HttpMethod PATCH()
 */
class HttpMethod extends Enum
{
    private const GET = 'GET';
    private const HEAD = 'HEAD';
    private const POST = 'POST';
    private const PUT = 'PUT';
    private const DELETE = 'DELETE';
    private const CONNECT = 'CONNECT';
    private const OPTIONS = 'OPTIONS';
    private const TRACE = 'TRACE';
    private const PATCH = 'PATCH';
}