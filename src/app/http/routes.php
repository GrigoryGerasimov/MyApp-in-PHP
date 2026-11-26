<?php

use MyApp\App\core\exceptions\PageNotFoundException;
use MyApp\App\core\exceptions\GenericClientException;


function getRoutePath(string $uri): mixed
{
    try {
        
        $routePath = getRoutesList($uri);
        
        return $routePath;
        
    } catch (\UnhandledMatchError $err) {
        
        $error = new PageNotFoundException('Page not found', 404);
        
        $error->informUser();
        
    } catch (\Throwable $err) {
        
        $error = new GenericClientException($err->getMessage());
        
        $error->informUser();
    }
}

function getRoutesList(string $uri): string
{
    return match($uri) {
        '' => '/index.php',
        'about' => '/about.php',
        default => '/404.php'
    };
}

