<?php

require_once 'Model/Model.php';

class AdminManagerCommentsFlagged extends Model  {
    
    // Comment to report in the database:
    public function flagComment($commentId) {
        
        $sql = 'UPDATE comments SET flagged = 1 WHERE id = ?';
        
        $flaggedComment = $this->executeQuery($sql, array($commentId));
        
        return $flaggedComment;
    }
    
    // Select the comment flagged in the database according to its id:
    public function getFlaggedComments($commentId) {
        $sql = 'SELECT c.id, p.title, c.post_id, c.author, c.comment, c.flagged, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments c INNER JOIN posts p ON p.id = c.post_id WHERE flagged = 1 ORDER BY comment_date DESC';
        
        $flaggedComment = $this->executeQuery($sql,array($commentId));
        
        return $flaggedComment;
    }
    
    // Confirm the comment flagged in the database according to its id: 
    public function confirmFlaggedComment($commentId) {
        $sql = 'UPDATE comments SET flagged = 0 WHERE id = ?';
        
        $req = $this->executeQuery($sql, array($commentId));
        
        $confirmFlaggedComment = $req->rowCount();
        
        return $confirmFlaggedComment; 
    }
    
    // Delete the comment flagged in the database according to its id:
    public function removeFlaggedComment($commentId) {
        
        $sql = 'DELETE FROM comments WHERE id = ?';
        
        $req = $this->executeQuery($sql, array($commentId));
        
        $removeFlaggedComment = $req->rowCount();
        
        return $removeFlaggedComment;
    }
}


