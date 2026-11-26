<?php

namespace MyApp\App\core\exceptions;


class GenericServerException extends CustomException
{
    public function __construct(string $message, int $code = 500)
    {
        parent::__construct($message, $code);
    }
}