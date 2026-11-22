<?php

if (session_status() === PHP_SESSION_NONE) session_start();

$posts = array(
    [
        "id" => "1",
        "title" => "new post 1",
        "text" => "new text 1",
        "author" => "new author 1",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "2",
        "title" => "new post 2",
        "text" => "new text 2",
        "author" => "new author 2",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "3",
        "title" => "new post 3",
        "text" => "new text 3",
        "author" => "new author 3",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ]
);


$navHeader = array(
    [
        "title" => "Acerca de nosotros",
        "href" => "about.php"
    ],
    [
        "title" => "Contenido",
        "href" => ""
    ],
    [
        "title" => "Blog",
        "href" => ""
    ]
);

$navFooter = array(
    [
        "title" => "Derechos de uso",
        "href" => ""
    ],
    [
        "title" => "Mapa del portal",
        "href" => ""
    ],
    [
        "title" => "Contactos",
        "href" => ""
    ]
);

$_SESSION['posts'] = $posts;
$_SESSION['navHeader'] = $navHeader;
$_SESSION['navFooter'] = $navFooter;

require_once __DIR__.'/assets/views/templates/index.tpl.php';