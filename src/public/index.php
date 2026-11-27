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
use MyApp\App\app\controllers\PostController;
use MyApp\App\app\controllers\ErrorController;

require_once __DIR__.'/../config/config.php';
require_once ROOT.'/../vendor/autoload.php';
require_once HTTP.'/routes.php';
require_once CONFIG.'/db-config.php';
require_once CORE.'/utils/logg.php';
require_once CORE.'/utils/str_normalize.php';


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
    
    $postController = new PostController($connection);

    $requestUri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    
    $postId = preg_match('#^post/(\d+)$#', $requestUri, $matches) ? $matches[1] : null;
    
    getRoute($postController, $requestUri, $postId);

} catch (GenericServerException|GenericClientException|PageNotFoundException $err) {
    
    $errorController = new ErrorController();
    
    $errorController->handle($err->getCode());

}