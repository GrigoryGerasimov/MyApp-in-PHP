<?php

use MyApp\App\core\exceptions\PageNotFoundException;
use MyApp\App\core\exceptions\GenericClientException;


function getRoute(object $controller, string $uri, ?string $uriId = null)
{
    try {
        
        getRoutesList($controller, $uri, $uriId);
        
    } catch (\UnhandledMatchError $err) {
        
        throw new PageNotFoundException('Page not found');
        
    } catch (\Throwable $err) {
        
        throw new GenericClientException($err->getMessage());
        
    }
}

function getRoutesList(object $controller, string $uri, ?string $uriId = null): void
{    
    match($uri) {
        
        '' => $controller->readAll(),
        
        'about' => require_once VIEWS.'/templates/about.tpl.php',
        
        "post/$uriId" => $controller->readById($uriId)
        
    };
}

