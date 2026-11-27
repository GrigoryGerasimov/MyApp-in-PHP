<?php

use MyApp\App\core\exceptions\PageNotFoundException;
use MyApp\App\core\exceptions\GenericClientException;


function getRoutePath(string $uri): mixed
{
    try {
        
        $routePath = getRoutesList($uri);
        
        return $routePath;
        
    } catch (\UnhandledMatchError $err) {
        
        throw new PageNotFoundException('Page not found', 404);
        
    } catch (\Throwable $err) {
        
        throw new GenericClientException($err->getMessage(), 400);
        
    }
}

function getRoutesList(string $uri): string
{
    return match($uri) {
        
        '' => '/index.php',
        
        'about' => '/about.php',
        
        'post' => '/post.php',
        
        default => '/404.php'
            
    };
}

