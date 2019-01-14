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
        if ($post->rowCount() > 0)
            return $post->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun billet ne correspond à l'identifiant '$postId'");
    }
    
    
    // Return all articles with their number of comments per article:
    public function getPostsWithNumberOfComments() {

        $sql = 'SELECT p.*, DATE_FORMAT(p.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, COUNT(c.post_id) AS nb_comments FROM posts p LEFT JOIN comments c ON p.id = c.post_id GROUP BY p.id, c.post_id';
        $nbCommentByPost = $this->executeQuery($sql);
        $articles = $nbCommentByPost->fetchAll();
        //var_dump($articles);
        return $articles;
    }
    
    // Return extract of all articles with their number of comments per article:
    public function getExtractPostsWithNumberOfComments() {
        
        $sql = 'SELECT p.id, p.title, left(p.content,150) AS extract, p.author, DATE_FORMAT(p.creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, COUNT(c.post_id) AS nb_comments FROM posts p LEFT JOIN comments c ON p.id = c.post_id GROUP BY p.id, c.post_id';
        
        $nbCommentByExtractPost = $this->executeQuery($sql);
        $extractArticles = $nbCommentByExtractPost->fetchAll();
        
        return $extractArticles;
    }
    
}




  
      