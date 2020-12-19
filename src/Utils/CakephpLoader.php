<?php
declare(strict_types=1);

namespace App\Utils;

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\Locator\TableLocator;
use DI\Factory\RequestedEntry;
use HaydenPierce\ClassFinder\ClassFinder;
use Psr\Container\ContainerInterface;

/**
 * Class CakephpLoader
 * @package App\Utils
 */
class CakephpLoader
{
    /**
     * @return \Closure[]
     * @throws \Exception
     */
    public static function getModelDefinitions()
    {
        $definitions = [
            TableLocator::class => function (ContainerInterface $c) {
                return CakephpLoader::loadTableLocator($c);
            }
        ];

        $tables = ClassFinder::getClassesInNamespace('App\\Model\\Table');
        foreach ($tables as $class_name) {
            $definitions[$class_name] = function (RequestedEntry $entry, ContainerInterface $c)  {
                return $c->get(TableLocator::class)->get($entry->getName());
            };
        }

        return $definitions;
    }

    /**
     * @param ContainerInterface $container
     * @return TableLocator
     */
    public static function loadTableLocator(ContainerInterface $container)
    {
        Configure::write('App.namespace', 'App');

        CakephpLoader::loadCache($container);
        CakephpLoader::loadConnectionManager($container);

        return new TableLocator();
    }

    /**
     * @param ContainerInterface $container
     */
    protected static function loadCache(ContainerInterface $container)
    {
        $cache_url = Settings::get($container, 'database.cache_url');
        Cache::setConfig('_cake_model_', [
            'url' => $cache_url,
            'path' => Settings::get($container, 'cache_path'),
        ]);
    }

    /**
     * @param ContainerInterface $container
     */
    protected static function loadConnectionManager(ContainerInterface $container)
    {
        $database_url = Settings::get($container, 'database.database_url');
        ConnectionManager::setConfig('default', [
            'url' => $database_url
        ]);
    }
}
