<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/svdsu');
define("HELPERS", ROOT . '/vendor/svdsu/helpers');
define("CAHCE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", ROOT . 'svdsu');
define("PATH", ROOT . 'http://frameworck');
define("ADMIN", ROOT . 'http://frameworck/admin');

require_once ROOT .'/vendor/autoload.php';
