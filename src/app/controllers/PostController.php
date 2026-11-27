<?php

namespace MyApp\App\app\controllers;

use MyApp\App\app\models\Post;


class PostController extends AbstractController
{
    private \PDO $connection;
    private Post $post;
    
    public function __construct(\PDO $connection)
    {
        if (!isset($this->connection)) {
            
            $this->connection = $connection;
            
        }
        
        if (!isset($this->post)) {
            
            $this->post = new Post();
            
        }
    }
    
    public function create(array $posts)
    {
        $result = json_decode($this->store($this->connection, $posts));
        
        if (isset($result['status']) && $result['status'] === 'success') {
            
            require_once VIEWS.'/templates/index.tpl.php';
            
        }
    }
    
    public function store(array $posts)
    {
        return $this->post->create($this->connection, $posts);
    }
    
    public function readAll()
    {
        $posts = $this->post->findAll($this->connection);
        
        if (!empty($posts)) {
            
            require_once VIEWS.'/templates/index.tpl.php';
            
        }
    }
    
    public function readById(string $id)
    {
        $post = $this->post->findOne($this->connection, $id);
        
        if (isset($post)) {
            
            require_once VIEWS.'/templates/postInfo.tpl.php';
            
        }
    }
    
    public function edit(string $id, array $posts)
    {
        $result = json_decode($this->update($this->connection, $id, $posts));
        
        if (isset($result['status']) && $result['status'] === 'success') {
            
            require_once VIEWS.'/templates/index.tpl.php';
            
        }
    }
    
    public function update(string $id, array $posts)
    {
        return $this->post->update($this->connection, $id, $posts);
    }
    
    public function destroy(string $id)
    {
        $result = json_decode($this->delete($this->connection, $id));
        
        if (isset($result['status']) && $result['status'] === 'success') {
            
            require_once VIEWS.'/templates/index.tpl.php';
            
        }
    }
}