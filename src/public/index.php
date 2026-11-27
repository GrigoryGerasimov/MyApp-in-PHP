<?php

declare(strict_types=1);

error_reporting(-1);

if (session_status() === PHP_SESSION_NONE) {
    
    session_start();
}

use MyApp\App\app\db\PdoDsnBuilder;
use MyApp\App\app\db\DbConnector;
use \MyApp\App\core\exceptions\GenericServerException;
use MyApp\App\core\exceptions\PageNotFoundException;
use MyApp\App\core\exceptions\GenericClientException;

require_once __DIR__.'/../config/config.php';
require_once ROOT.'/../vendor/autoload.php';
require_once HTTP.'/routes.php';
include_once CORE.'/utils/logg.php';
include_once CORE.'/utils/str_normalize.php';
include_once CONFIG.'/db-config.php';


$dsnBuilder = new PdoDsnBuilder();

$dsn = $dsnBuilder
->setDriver($dbConfig['driver'])
->setHost($dbConfig['host'])
->setPort($dbConfig['port'])
->setDbName($dbConfig['dbname'])
->setSslMode($dbConfig['sslmode'])
->buildDsn();

try {
    
    $connection = DbConnector::init($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options'])::getConnection();
    
    
    $requestUri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    
    $postId = preg_match('#^post/(\d+)$#', $requestUri, $matches) ? $matches[1] : null;
    
    $path = getRoutePath($requestUri, $postId);
    
    if (file_exists(CONTROLLERS.$path)) {
        
        require_once CONTROLLERS.$path;
    
    } else {
        
        http_response_code(307);
        
        header('Location: /');
    
    }

} catch (GenericServerException|GenericClientException|PageNotFoundException $err) {
    
    require CONTROLLERS."/{$err->getCode()}.php";
    
    $err->informUser();

}