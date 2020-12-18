<?php
declare(strict_types=1);

namespace App\Utils;

use Cake\Utility\Hash;
use Psr\Container\ContainerInterface;

/**
 * Class Settings
 * @package App\Utils
 */
class Settings
{
    /**
     * @param ContainerInterface $container
     * @param string $path
     * @param array|\ArrayAccess|mixed|null $default
     * @return array|\ArrayAccess|mixed|null
     */
    public static function get(ContainerInterface $container, string $path, $default = null)
    {
        $settings = $container->get('settings');
        return Hash::get($settings, $path, $default);
    }
}