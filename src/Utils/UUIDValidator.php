<?php
declare(strict_types=1);

namespace App\Utils;

/**
 * Class UUIDValidator
 * @package App\Utils
 */
class UUIDValidator
{
    /**
     * @param string $uuid
     * @return bool
     */
    public static function isValid(string $uuid):bool
    {
        return !!preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i', $uuid);
    }
}