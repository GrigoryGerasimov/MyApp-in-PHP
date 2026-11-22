<?php

namespace MyApp\App;


$posts = array(
    [
        "title" => "new post 1",
        "text" => "new text 1",
        "author" => "new author 1",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
        "title" => "new post 2",
        "text" => "new text 2",
        "author" => "new author 2",
        "date" => date('F j, Y, g:i a'),
        "url" => "https://images.unsplash.com/photo-1745510618470-69dfe80b99b6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=NHwxMjA3fDA%3D"
    ],
    [
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
        "href" => ""
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
)

?>


<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'/>
<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<script src='https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4'></script>
<link rel='stylesheet' href='assets/styles/css/index.css'/>
</head>
<body class="grid h-screen grid-rows-[auto_1fr_auto]">
<header>
<?php 

include __DIR__."/assets/views/templates/header.tpl.php";

?>
</header>

<main class="grid grid-cols-3 gap-3 bg-gray-200 p-6">

<?php 

foreach($posts as $post) {
    
    include __DIR__."/assets/views/templates/index.tpl.php";
    
}

?>

</main>

<footer>

<?php 

include __DIR__."/assets/views/templates/footer.tpl.php";

?>

</footer>
</body>
</html>