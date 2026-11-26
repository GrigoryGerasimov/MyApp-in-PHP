<?php

use MyApp\App\core\exceptions\UnauthorizedAccessException;


function guard(string $constName)
{
    try {
        
        defined($constName) || throw new UnauthorizedAccessException('Sorry, but access forbidden', 403);
        
    } catch (UnauthorizedAccessException $err) {
        
        $err->forbidAccess();
        
    }
}