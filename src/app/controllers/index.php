<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

use MyApp\App\app\controllers\PostController;


$navHeader = array(
    [
        "title" => "Acerca de nosotros",
        "path" => "about"
    ],
    [
        "title" => "Contenido",
        "path" => ""
    ],
    [
        "title" => "Blog",
        "path" => ""
    ]
);

$navFooter = array(
    [
        "title" => "Derechos de uso",
        "path" => ""
    ],
    [
        "title" => "Mapa del portal",
        "path" => ""
    ],
    [
        "title" => "Contactos",
        "path" => ""
    ]
);

$postController = new PostController($connection);
$posts = $postController->readAll();

$post = $postController->readById(4);

logg($post);

$_SESSION['posts'] = $posts;
$_SESSION['navHeader'] = $navHeader;
$_SESSION['navFooter'] = $navFooter;

$pageTitle = 'My App - Main';


require_once VIEWS.'/templates/index.tpl.php';