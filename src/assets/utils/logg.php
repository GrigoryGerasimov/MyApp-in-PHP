<?php

function logg(mixed $data, bool $exit = false): void
{
    if (!$exit) {
    
        ?>
        
        <pre><?=var_dump($data)?></pre>
        
        <?php 
    
    } else {
    
        ?>
        
        <pre>
        
        <?php 
        
        var_dump($data);
        
        exit();
        
        ?>
        
        </pre>
        
        <?php
    
    }

};

?>