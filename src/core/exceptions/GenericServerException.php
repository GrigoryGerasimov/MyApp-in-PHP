<?php

namespace MyApp\App\core\exceptions;


class GenericServerException extends AbstractCustomException
{
    public function __construct(string $message, int $code = 500)
    {
        parent::__construct($message, $code);
    }
}