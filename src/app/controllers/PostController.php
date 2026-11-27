<?php

namespace MyApp\App\app\controllers;

use MyApp\App\core\exceptions\DataNotFound;
use MyApp\App\core\exceptions\EmptyDataArrayException;
use MyApp\App\core\exceptions\GenericServerException;


class PostController extends AbstractController
{
    private \PDO $connection;
    
    public function __construct(\PDO $connection)
    {
        if (!isset($this->connection)) {
            
            $this->connection = $connection;
            
        }
    }
    
    public function create(array $posts)
    {
        
    }
    
    public function store(array $posts)
    {
        try {
            
            if (!empty($posts)) {
                
                foreach($posts as $post) {
                    
                    $stmt = $this->connection->prepare('INSERT INTO posts (slug,title,content,author,date,url,avatar) VALUES (?,?,?,?,?,?,?)');
                    
                    $stmt->bindParam(1, $post['slug'], \PDO::PARAM_STR);
                    $stmt->bindParam(2, $post['title'], \PDO::PARAM_STR);
                    $stmt->bindParam(3, $post['content'], \PDO::PARAM_STR);
                    $stmt->bindParam(4, $post['author'], \PDO::PARAM_STR);
                    $stmt->bindParam(5, $post['date'], \PDO::PARAM_STR);
                    $stmt->bindParam(6, $post['url'], \PDO::PARAM_STR);
                    $stmt->bindParam(7, $post['avatar'], \PDO::PARAM_STR);
                    
                    if ($stmt->execute()) {
                        
                        http_response_code(201);
                        
                        return json_encode([
                            'status' => 'success',
                            'result' => 'post created'
                            
                        ]);
                    
                    } else {
                        
                        throw new GenericServerException(
                            json_encode([
                                'status' => 'failed',
                                'result' => 'post not created'
                                
                            ])
                            );
                    }
                }
            
            } else {
                
                throw new EmptyDataArrayException('Data array empty', 400);
                
            }
            
        } catch (GenericServerException|EmptyDataArrayException $err) {
            
            $err->informUser();
        }
    }
    
    public function readAll(): mixed
    {
        try {
            
            $stmt = $this->connection->prepare('SELECT * FROM posts');
            
            if ($stmt->execute()) {
                
                $result = $stmt->fetchAll();
                
                if (!$result) {
                    
                    throw new DataNotFound('No posts found');
                    
                }
                
                return $result;
                
            } else {
                
                throw new GenericServerException('Database connection went wrong, please try again later');
                
            }
            
        } catch (DataNotFound|GenericServerException $err) {
            
            $err->informUser();
            
        }
    }
    
    public function readById(string $id)
    {
        {
            try {
                
                $stmt = $this->connection->prepare('SELECT * FROM posts WHERE id=?');

                $stmt->bindParam(1, $id, \PDO::PARAM_STR);
                
                if ($stmt->execute()) {

                    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
                    
                    if (!$result) {
                        
                        throw new DataNotFound("Post with id $id found");
                        
                    }
                    
                    return $result;
                    
                } else {
                    
                    throw new GenericServerException('Database connection went wrong, please try again later');
                    
                }
                
            } catch (DataNotFound|GenericServerException $err) {
                
                $err->informUser();
                
            }
        }
    }
    
    public function edit(string $id, array $posts)
    {
        
    }
    
    public function update(string $id, array $posts)
    {
        try {
            
            if (!$this->readById($id)) {
                
                throw new DataNotFound("Post with id $id could not be found");
                
            }
            
            if (!empty($posts)) {
                
                foreach($posts as $post) {
                    
                    $stmt = $this->connection->prepare('UPDATE posts SET slug=?,title=?,content=?,author=?,date=?,url=?,avatar=? WHERE id=?');
                    
                    $stmt->bindParam(1, $post['slug'], \PDO::PARAM_STR);
                    $stmt->bindParam(2, $post['title'], \PDO::PARAM_STR);
                    $stmt->bindParam(3, $post['content'], \PDO::PARAM_STR);
                    $stmt->bindParam(4, $post['author'], \PDO::PARAM_STR);
                    $stmt->bindParam(5, $post['date'], \PDO::PARAM_STR);
                    $stmt->bindParam(6, $post['url'], \PDO::PARAM_STR);
                    $stmt->bindParam(7, $post['avatar'], \PDO::PARAM_STR);
                    
                    if ($stmt->execute()) {
                        
                        http_response_status(200);
                        
                        return json_encode([
                            'status' => 'success',
                            'result' => "post with id $id updated"
                        ]);
                        
                    } else {
                        
                        throw new GenericServerException(json_encode([
                            'status' => 'failed',
                            'result' => "post with id $id could not be updated"
                        ]));
                        
                    }
                }
            
            } else {
                
                throw new EmptyDataArrayException('Data array empty', 400);
                
            }
        
        } catch (DataNotFound|GenericServerException|EmptyDataArrayException $err) {
            
            $err->informUser();
            
        }
    }
    
    public function delete(string $id)
    {
        try {
            
            if (!$this->readById($id)) {
                
                throw new DataNotFound("Post with id $id could not be found");
                
            }
            
            $stmt = $this->connection->prepare('DELETE FROM posts WHERE id=?');
            
            $stmt->bindParam(1, $id, \PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                
                return json_encode([
                    'status' => 'success',
                    'result' => "post with id $id deleted"
                ]);
                
            } else {
                
                throw new GenericServerException(json_encode([
                    'status' => 'failed',
                    'result' => "post with id $id could not be deleted"
                ]));
            
            }
        
        } catch (DataNotFound|GenericServerException $err) {
            
            $err->informUser();
            
        }
    }
}