<?php


use MyApp\App\core\exceptions\ProcessTerminateException;


function logg(mixed $data, bool $exit = false): void
{
    echo '<pre style="padding:20px">';
    
    echo var_dump($data);
    
    if ($exit) {
        
        try {
            
            throw new ProcessTerminateException('Terminating process for debugging purpose', 500);
            
        } catch (ProcessTerminateException $err) {
            
            $err->informUser();
            
        }
    }
    
    echo '</pre>';
}

?>