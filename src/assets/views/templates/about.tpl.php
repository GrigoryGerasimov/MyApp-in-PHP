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

include __DIR__.'/elements/header.tpl.php';

include_once __DIR__.'/../../utils/log.php';

?>
</header>

<main class="grid justify-items-center bg-gray-200 p-6">

<?php 

foreach($about as $aboutItem){
    
    $textItem = $aboutItem;
    
    include __DIR__.'/elements/text.tpl.php';
    
}

?>

</main>

<footer>

<?php 

include __DIR__."/elements/footer.tpl.php";

?>

</footer>
</body>
</html>