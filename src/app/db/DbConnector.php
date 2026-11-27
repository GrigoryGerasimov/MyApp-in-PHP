<?php

namespace MyApp\App\app\db;


class DbConnector
{
    private static \PDO $connection;
    private static $instance;
    
    private function __construct(array $data)
    {
        try {
            
            if (!empty($data)) {
                
                list($dsn, $username, $password, $options) = $data;
                
                static::$connection = new \PDO($dsn, $username, $password, $options);
            
            }
        
        } catch (\Throwable $err) {
            
            logg($err->getMessage(), true);
            
        }
        
    }
    
    final static function init(...$args): self
    {
        
        if (!isset(static::$instance)) {
            
            static::$instance = new static($args);
        }
        
        return static::$instance;
        
    }
    
    final static function getConnection(): \PDO
    {
        return static::$connection;
    }
}