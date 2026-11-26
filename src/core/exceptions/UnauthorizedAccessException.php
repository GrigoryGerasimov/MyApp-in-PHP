<?php

namespace MyApp\App\core\exceptions;


class UnauthorizedAccessException extends \Exception
{
    public function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }
    
    public function forbidAccess(): never
    {
        http_response_code($this->getCode());
        
        exit($this->message);
    }
    
}