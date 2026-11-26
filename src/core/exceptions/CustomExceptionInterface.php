<?php

namespace MyApp\App\core\exceptions;


interface CustomExceptionInterface
{
    public function informUser(): never;
}