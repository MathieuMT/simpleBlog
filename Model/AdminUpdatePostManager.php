<?php

require_once 'Model/Model.php';

class AdminUpdatePostManager extends Model  {
    
    // Update post in the database:
    public function updatePost($title, $content, $author, $postId) {
        
        
        $sql = 'UPDATE posts SET title = :title,
                content= :content, author= :author, creation_date = NOW() WHERE id = :id' ;
        
        $result = $this->executeQuery($sql, array(
        
                                ':title' => $title,
                                ':content' => $content,
                                ':author' => $author,
                                ':id' => $postId
                                 ));
        return $result;
        
    }
 
    
}
