<?php
declare(strict_types=1);

namespace App\Model\Enum;

use MyCLabs\Enum\Enum;

/**
 * Class RequestLogStatus
 * @package App\Model\Enum
 *
 * @method static RequestLogStatus FAILED()
 * @method static RequestLogStatus CREATED()
 * @method static RequestLogStatus FETCHED()
 * @method static RequestLogStatus PENDING()
 */
class RequestLogStatus extends Enum
{
    private const FAILED = 'failed';
    private const CREATED = 'created';
    private const FETCHED = 'fetched';
    private const PENDING = 'pending';
}
