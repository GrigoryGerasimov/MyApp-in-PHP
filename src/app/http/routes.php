<?php

use MyApp\App\core\exceptions\PageNotFoundException;
use MyApp\App\core\exceptions\GenericClientException;


function getRoutePath(string $uri, ?string $uriId = null): mixed
{
    try {
        $routePath = getRoutesList($uri, $uriId);

        return $routePath;
        
    } catch (\UnhandledMatchError $err) {
        
        throw new PageNotFoundException('Page not found');
        
    } catch (\Throwable $err) {
        
        throw new GenericClientException($err->getMessage());
        
    }
}

function getRoutesList(string $uri, ?string $uriId = null): string
{
    return match($uri) {
        
        '' => '/index.php',
        
        'about' => '/about.php',
        
        "post/$uriId" => "/post.php",
        
        default => '/404.php'
    };
}

