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

<main class="grid justify-items-center bg-gray-200 p-6">

<?php 

include VIEWS.'/templates/elements/post.tpl.php';

?>

</main>

<footer>

<?php 

include VIEWS.'/templates/elements/footer.tpl.php';

?>

</footer>
</body>
</html>