<?php

function getRoutePath(string $uri): mixed
{
    try {
        
        $routePath = getRoutesList($uri);
        
        return $routePath;
        
    } catch (\UnhandledMatchError $err) {
        
        http_response_code(404);
        
        exit('Page not found');
        
    } catch (\Throwable $error) {
        
        http_response_code(400);
        
        exit($error->getMessage());
        
    }
}

function getRoutesList(string $uri): string
{
    return match($uri) {
        '' => '/index.php',
        'about' => '/about.php'
    };
}

