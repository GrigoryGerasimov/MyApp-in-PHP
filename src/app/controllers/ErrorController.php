<?php

namespace MyApp\App\app\controllers;


final class ErrorController
{
    public function handle(int $errorCode): void
    {
        require_once VIEWS."/templates/errors/$errorCode.tpl.php";
    }
}