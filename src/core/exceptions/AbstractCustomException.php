<?php

namespace MyApp\App\core\exceptions;


abstract class AbstractCustomException extends \Exception implements CustomExceptionInterface
{
    public function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }
    
    public function informUser(): never
    {
        http_response_code($this->code);
        
        exit($this->getMessage());
    }
}