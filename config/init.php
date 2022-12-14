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
define("LAYOUT",'svdsu');
define("PATH", 'http://frameworck');
define("ADMIN", 'http://frameworck/admin');


require_once ROOT .'/vendor/autoload.php';
