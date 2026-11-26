<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'/>
<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>

<?php 

include VIEWS.'/templates/elements/title.tpl.php';

?>

<script src='https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4'></script>
<link rel='stylesheet' href='/assets/css/index.css'/>
</head>
<body class="grid h-screen grid-rows-[auto_1fr_auto]">
<header>

<?php 

include_once VIEWS.'/templates/elements/header.tpl.php';

?>

</header>

<main class="grid justify-items-center bg-gray-200 p-6">

<?php 

foreach($about as $aboutItem){
    
    $textItem = $aboutItem;
    
    include VIEWS.'/templates/elements/text.tpl.php';
    
}

?>

</main>

<footer>

<?php 

include VIEWS.'/templates/elements/footer.tpl.php';

?>

</footer>
</body>
</html>