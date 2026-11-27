<?php


use MyApp\App\app\controllers\PostController;

$pageTitle = "Post # $postId";

$postController = new PostController($connection);
$post = $postController->readById($postId);

require_once VIEWS.'/templates/postInfo.tpl.php';