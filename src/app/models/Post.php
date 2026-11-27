<?php

namespace MyApp\App\app\models;

use MyApp\App\core\exceptions\DataNotFound;
use MyApp\App\core\exceptions\EmptyDataArrayException;
use MyApp\App\core\exceptions\GenericServerException;


class Post
{
    public function store(\PDO $connection, array $postsCollection): mixed
    {
        try {
            
            if (!empty($postsCollection)) {
                
                foreach($postsCollection as $post) {
                    
                    $stmt = $connection->prepare('INSERT INTO posts (slug,title,content,author,date,url,avatar) VALUES (?,?,?,?,?,?,?)');
                    
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
    
    public function findAll(\PDO $connection): mixed
    {
        try {
            
            $stmt = $connection->prepare('SELECT * FROM posts');
            
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
    
    public function findOne(\PDO $connection, string $postId): mixed
    {
        try {
            
            $stmt = $connection->prepare('SELECT * FROM posts WHERE id=?');
            
            $stmt->bindParam(1, $postId, \PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                
                $result = $stmt->fetch(\PDO::FETCH_ASSOC);
                
                if (!$result) {
                    
                    throw new DataNotFound("Post with id $postId not found");
                    
                }
                
                return $result;
                
            } else {
                
                throw new GenericServerException('Database connection went wrong, please try again later');
                
            }
            
        } catch (DataNotFound|GenericServerException $err) {
            
            $err->informUser();
            
        }
    }
    
    public function update(\PDO $connection, string $postId, array $postsCollection): mixed
    {
        try {
            
            if (!$this->readById($postId)) {
                
                throw new DataNotFound("Post with id $postId could not be found");
                
            }
            
            if (!empty($postsCollection)) {
                
                foreach($postsCollection as $post) {
                    
                    $stmt = $connection->prepare('UPDATE posts SET slug=?,title=?,content=?,author=?,date=?,url=?,avatar=? WHERE id=?');
                    
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
                            'result' => "post with id $postId updated"
                        ]);
                        
                    } else {
                        
                        throw new GenericServerException(json_encode([
                            'status' => 'failed',
                            'result' => "post with id $postId could not be updated"
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
    
    public function delete(\PDO $connection, string $postId): mixed
    {
        try {
            
            if (!$this->readById($$postId)) {
                
                throw new DataNotFound("Post with id $postId could not be found");
                
            }
            
            $stmt = $connection->prepare('DELETE FROM posts WHERE id=?');
            
            $stmt->bindParam(1, $postId, \PDO::PARAM_STR);
            
            if ($stmt->execute()) {
                
                return json_encode([
                    'status' => 'success',
                    'result' => "post with id $postId deleted"
                ]);
                
            } else {
                
                throw new GenericServerException(json_encode([
                    'status' => 'failed',
                    'result' => "post with id $postId could not be deleted"
                ]));
                
            }
            
        } catch (DataNotFound|GenericServerException $err) {
            
            $err->informUser();
            
        }
    }
}