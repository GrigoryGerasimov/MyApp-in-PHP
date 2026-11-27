<!DOCTYPE html>
<html lang='es'>

<?php 

require VIEWS.'/templates/elements/head.tpl.php';

?>

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