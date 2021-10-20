<?php
//site name
use App\Utils\RequestHolder;

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_SUBFOLDER', '/carassist');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'cars');

$requestHolder = RequestHolder::getInstance();
define ('REQUEST_ROOT', $requestHolder->getRequest()->getSchemeAndHttpHost().URL_SUBFOLDER."/");
