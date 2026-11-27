<!DOCTYPE html>
<html lang='es'>

<?php 

require VIEWS.'/templates/elements/head.tpl.php';

?>

<body class="grid h-screen grid-rows-[auto_1fr_auto]">
<header>

<?php 

include VIEWS.'/templates/elements/header.tpl.php';

?>

</header>

<main class="grid grid-cols-5 gap-5 md:grid-cols-3 md:gap-3 bg-gray-200 p-6">

<?php 

foreach($posts as $post) {
    
    include VIEWS.'/templates/elements/post.tpl.php';
    
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