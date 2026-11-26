<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'/>
<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<script src='https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4'></script>
<link rel='stylesheet' href='assets/css/index.css'/>
</head>
<body class="grid h-screen grid-rows-[auto_1fr_auto]">
<header>
<?php 

include VIEWS."/templates/elements/header.tpl.php";

?>
</header>

<main class="grid grid-cols-5 gap-5 bg-gray-200 p-6">

<?php 

foreach($posts as $post) {
    
    include VIEWS."/templates/elements/post.tpl.php";
    
}

?>

</main>

<footer>

<?php 

include VIEWS."/templates/elements/footer.tpl.php";

?>

</footer>
</body>
</html>