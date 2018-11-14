<?php

class Model {
    
    // Returns a list of all posts, sorted by descending date:
    public function getPosts() {
        $db = $this->dbConnect();
        $posts = $db->query('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
        return $posts;
    }

    // Returns information on a post:
    public function getPost($postId) {
        $db = $this->dbConnect();
        $post = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $post->execute(array($postId));
        if ($post->rowCount() == 1)
            return $post->fetch(); // Access to the first result
        else
            throw new Exception ("Auncun billet ne correspon à l'identification ' $post '");
    }

    // Returns the list of comments associated with a post:
    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\')AS comment_date_fr FROM comments WHERE post_id = ?');
        $comments->execute(array($postId));
        return $comments->fetchAll(); // Get all the results at once
    }
    
    // Make the connextion to the database
    // Instantiates and returns the associated PDO object
    private function dbConnect() {
        // Access to database:
        $db = new PDO('mysql:host=localhost;dbname=simpleBlog;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}