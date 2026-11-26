<?php 


use MyApp\App\assets\exceptions\UnauthorizedAccessException;

require_once __DIR__.'/../vendor/autoload.php';


try {
    
    defined('MY_APP') || throw new UnauthorizedAccessException('Sorry, but access forbidden', 403);
    
} catch (UnauthorizedAccessException $err) {
    
    $err->forbidAccess();
    
}

$about = array(
    [
        "type" => "about us",
        "text" => "lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ullam beatae doloremque cupiditate eveniet ea eaque quaerat nostrum, dignissimos eos aspernatur accusantium, explicabo repellendus sapiente sit cumque at quas nam?"
    ]
);

require_once __DIR__.'/assets/views/templates/about.tpl.php';

?>