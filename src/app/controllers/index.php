<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$posts = array(
    [
        "id" => "1",
        "slug" => "post1",
        "title" => "new post 1",
        "text" => "new text 1",
        "author" => "new author 1",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117070-7aa2955b25f8?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "2",
        "slug" => "post2",
        "title" => "new post 2",
        "text" => "new text 2",
        "author" => "new author 2",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117027-4275d3f84385?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "3",
        "slug" => "post3",
        "title" => "new post 3",
        "text" => "new text 3",
        "author" => "new author 3",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117013-4fb21771e7ca?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "4",
        "slug" => "post4",
        "title" => "new post 4",
        "text" => "new text 4",
        "author" => "new author 4",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117012-bb53ad05e370?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "5",
        "slug" => "post5",
        "title" => "new post 5",
        "text" => "new text 5",
        "author" => "new author 5",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117044-2af197eea287?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "6",
        "slug" => "post6",
        "title" => "new post 6",
        "text" => "new text 6",
        "author" => "new author 6",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117070-7aa2955b25f8?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "7",
        "slug" => "post7",
        "title" => "new post 7",
        "text" => "new text 7",
        "author" => "new author 7",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117013-4fb21771e7ca?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "8",
        "slug" => "post8",
        "title" => "new post 8",
        "text" => "new text 8",
        "author" => "new author 8",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117012-bb53ad05e370?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "9",
        "slug" => "post9",
        "title" => "new post 9",
        "text" => "new text 9",
        "author" => "new author 9",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117027-4275d3f84385?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "id" => "10",
        "slug" => "post10",
        "title" => "new post 10",
        "text" => "new text 10",
        "author" => "new author 10",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D",
        "avatar" => "https://images.unsplash.com/photo-1740252117044-2af197eea287?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ]
);

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

$_SESSION['posts'] = $posts;
$_SESSION['navHeader'] = $navHeader;
$_SESSION['navFooter'] = $navFooter;

$pageTitle = 'My App - Main';


require_once VIEWS.'/templates/index.tpl.php';