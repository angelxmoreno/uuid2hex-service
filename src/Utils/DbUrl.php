<?php
declare(strict_types=1);


namespace App\Utils;

/**
 * Class DbUrl
 * @package App\Utils
 */
class DbUrl
{
    /**
     * @param string $db_url
     * @return array
     */
    public static function expand(string $db_url)
    {
        $params = [
            'adapter' => parse_url($db_url, PHP_URL_SCHEME),
            'host' => parse_url($db_url, PHP_URL_HOST),
            'name' => trim(parse_url($db_url, PHP_URL_PATH), '/'),
            'user' => parse_url($db_url, PHP_URL_USER),
            'pass' => parse_url($db_url, PHP_URL_PASS),
            'port' => parse_url($db_url, PHP_URL_PORT),
        ];
        $queryStr = parse_url($db_url, PHP_URL_QUERY);
        parse_str($queryStr, $queryArr);

        //overrides
        if($params['adapter'] === 'postgres') $params['adapter'] = 'pgsql';

        return $params + $queryArr;
    }
}