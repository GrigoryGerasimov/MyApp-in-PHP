<?php

namespace MyApp\App\assets\exceptions;


class ProcessTerminateException extends \Exception
{
    public function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }
}