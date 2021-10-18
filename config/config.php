<?php
//site name
use Symfony\Component\HttpFoundation\Request;

define('SITE_NAME', 'localhost');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_SUBFOLDER', '/carassist');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'cars');

$request = Request::createFromGlobals();
define ('REQUEST_ROOT', $request->getSchemeAndHttpHost().URL_SUBFOLDER."/");
