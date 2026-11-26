<?php


use MyApp\App\core\exceptions\ProcessTerminateException;


function logg(mixed $data, bool $exit = false): void
{
    echo '<pre>';
    echo var_dump($data);
    echo '</pre>';
    
    if ($exit) {
        
        try {
            
            throw new ProcessTerminateException('Terminating process for testing purpose', 500);
            
        } catch (ProcessTerminateException $err) {
            
            $err->informUser();
            
        }
    }
}

?>