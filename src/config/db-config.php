<?php

$dbConfig = array(
    
    'driver' => 'pgsql',
    'host' => 'localhost',
    'port' => '5432',
    'dbname' => 'postgres',
    'username' => 'grigorygerasimov',
    'password' => 'root',
    'sslmode' => 'prefer',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    
);