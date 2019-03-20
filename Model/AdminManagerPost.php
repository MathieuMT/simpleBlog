<?php

require_once 'Model/Model.php';

class AdminManagerPost extends Model  {
    
    // Add a new post in the database:
    public function addNewPost($author, $title, $content) {
        
        
        $sql = 'INSERT INTO posts(title, content, author, creation_date) VALUES (:title, :content, :author, NOW())';
        
        $result = $this->executeQuery($sql, array(
                                ':title' => $title,
                                ':content' => $content,
                                ':author' => $author,
                                 ));
        return $result;
            
    }
    
    // Delete a post in the database:
    public function deletePost($postId) {
        
        $sql = 'DELETE FROM posts WHERE id = :id';
        
        $result = $this->executeQuery($sql, array(
                                'id' => $postId
                                 ));
        
        return $result;
    }
 
}


