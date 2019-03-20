<?php

require_once 'Model/Model.php';

class CommentManager extends Model {
    
    // Returns the list of comments associated with a post:
    public function getComments($postId) {
        $sql = 'SELECT id, post_id, author, comment, flagged, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ?';
        $comments = $this->executeQuery($sql, array($postId));
        return $comments;
    }
    
    // Add a comment in the database:
    public function addComment($author, $content, $postId) {
        $sql = 'INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, ?)';
        $date = date(DATE_W3C); // Get the current date.
        $result = $this->executeQuery($sql, array($postId, $author, $content, $date));
        
        return $result;
    }
}