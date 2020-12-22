<?php
declare(strict_types=1);

if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
define('CONFIG_DIR', __DIR__ . DS);
define('ROOT_DIR', dirname(CONFIG_DIR) . DS);
define('VENDOR_DIR', ROOT_DIR . 'vendor' . DS);
define('CACHE_DIR', ROOT_DIR . 'cache' . DS);
define('LOGS_DIR', ROOT_DIR . 'logs' . DS);

