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

    public function flaggedComments($commentId) {
        
        $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);
        
        $view = new View("adminCommentsFlaggedView");
        $view->generate(array('flag' => $flag));
        
        exit();
        
    }
 
    public function flagComment($commentId, $postId) {
        $comments = $this->comment->getComments($postId);
        $postId = $_GET['id'];
        $flag = $this->showAdminCommentsFlagged->flagComment($commentId);
        
        if ($flag > '0') {
            
        $post = $this->post->getPost($postId);
        $comments = $this->comment->getComments($postId);
        
        $view = new View("postView");
        $view->generate(array('post' => $post, 'comments' => $comments));
        
        exit();
        }
        
    } 
    
    public function deleteComment($commentId) {
        
        $commentId = $_GET['commentId'];
        
        $deleteComment = $this->showAdminCommentsFlagged->removeFlaggedComment($commentId);
            
        if ($deleteComment) {
            
        $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);
        
        $view = new View("adminCommentsFlaggedView");
        $view->generate(array('flag' => $flag));
        
        exit();  
            
        }
    }
    
    public function approveComment($commentId) {
        
        $commentId = $_GET['commentId'];
        
        $approveComment = $this->showAdminCommentsFlagged->confirmFlaggedComment($commentId);
        
        if ($approveComment) {
            
        $flag = $this->showAdminCommentsFlagged->getFlaggedComments($commentId);
        
        $view = new View("adminCommentsFlaggedView");
        $view->generate(array('flag' => $flag));
        
        exit();  
            
        }

    }
} 







