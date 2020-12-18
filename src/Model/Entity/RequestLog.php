<?php
declare(strict_types=1);

namespace App\Model\Entity;

use App\Model\Enum\HttpMethod;
use App\Model\Enum\RequestLogStatus;
use Cake\ORM\Entity;

/**
 * Class RequestLog
 * @package App\Model\Entity
 *
 * @property int $id
 * @property int $uuid2hex_id
 * @property string $ip
 * @property RequestLogStatus $status
 * @property HttpMethod $method
 * @property string $reason
 * @property array $body
 * @property array $headers
 * @property \DateTimeInterface $created
 * @property \DateTimeInterface $modified
 */
class RequestLog extends Entity
{

}