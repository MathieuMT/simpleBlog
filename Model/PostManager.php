<?php

require_once 'Model/Model.php';

class PostManager extends Model {
    
    
    // Returns the list of blog posts by decreasing creation date:
    public function getPosts() {
        
        $sql = 'SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC';
    
        $posts = $this->executeQuery($sql);
        return $posts;
    }
    
    // Returns information on a post:
    public function getPost($postId) {
        $sql = 'SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?';
        $post = $this->executeQuery($sql, array($postId));
        if ($post->rowCount() == 1)
            return $post->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun billet ne correspond à l'identifiant '$postId'");
    }
    
}

