<?php

declare(strict_types=1);

error_reporting(-1);

if (session_status() === PHP_SESSION_NONE) {
    
    session_start();
}

require_once __DIR__.'/../env_const.php';

require_once ROOT.'/../vendor/autoload.php';

require_once HTTP.'/routes.php';

include_once CORE.'/utils/logg.php';


$requestUri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

$path = getRoutePath($requestUri);

require_once CONTROLLERS.$path;