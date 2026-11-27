<?php

namespace MyApp\App\app\db;


final class PdoDsnBuilder
{
    private string $driver = '';
    private string $host = '';
    private string $port = '';
    private string $dbName = '';
    private string $sslMode = '';
    private string $charset = '';
    
    
    public function setDriver(string $driver): self
    {
        $this->driver = str_normalize($driver);
        
        return $this;
    }
    
    public function setHost(string $host): self
    {
        $this->host = str_normalize($host);
        
        return $this;
    }
    
    public function setPort(string $port): self
    {
        $this->port = str_normalize($port);
        
        return $this;
    }
    
    public function setDbName(string $dbName): self
    {
        $this->dbName = str_normalize($dbName);
        
        return $this;
    }
    
    public function setSslMode(string $sslMode): self
    {
        $this->sslMode = str_normalize($sslMode);
        
        return $this;
    }
    
    public function buildDsn(): string
    {
        
        return "{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbName};sslmode={$this->sslMode}";
    }
}