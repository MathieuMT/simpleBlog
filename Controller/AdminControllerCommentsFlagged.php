<?php
require_once 'Model/PostManager.php';
require_once 'Model/CommentManager.php';
require_once 'Model/AdminManagerCommentsFlagged.php';
require_once 'View/View.php';

class AdminControllerCommentsFlagged {
    private $post;
    private $comment;
    private $showAdminCommentsFlagged;
    
    public function __construct() {
        $this->post = new PostManager();
        $this->comment = new CommentManager();
        $this->showAdminCommentsFlagged = new AdminManagerCommentsFlagged();
    }

    // Get the comment flagged according to his id:
    public function flaggedComments($commentId) {
        
        $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);
        
        $view = new View("adminCommentsFlaggedView");
        $view->generate(array('flag' => $flag));
        
        exit();
        
    }
    
    // Comment to report based on its id and post id:
    public function flagComment($commentId, $postId) {
        
        $flag = $this->showAdminCommentsFlagged->flagComment($commentId);
        
        if ($flag > '0') {
            
            $post = $this->post->getPost($postId);
            $comments = $this->comment->getComments($postId);


            $view = new View("postView");
            $view->generate(array('post' => $post, 'comments' => $comments));
        
        exit();
        } 
        
    } 
    
    // Delete the comment flagged:
    public function deleteComment($commentId) {
        
        
        $deleteComment = $this->showAdminCommentsFlagged->removeFlaggedComment($commentId);
            
        if ($deleteComment) {
            
            $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);

            $view = new View("adminCommentsFlaggedView");
            $view->generate(array('flag' => $flag));
        
        exit();  
            
        }
    }
    
    // Approve the comment flagged:
    public function approveComment($commentId) {
        
        
        $approveComment = $this->showAdminCommentsFlagged->confirmFlaggedComment($commentId);
        
        if ($approveComment) {
            
            $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);

            $view = new View("adminCommentsFlaggedView");
            $view->generate(array('flag' => $flag));
        
        exit();  
            
        }

    }
} 







