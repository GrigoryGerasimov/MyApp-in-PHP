<?php

namespace MyApp\App\core\exceptions;


class DataNotFound extends AbstractCustomException
{
    public function __construct(string $message, int $code = 404)
    {
        parent::__construct($message, $code);
    }
}