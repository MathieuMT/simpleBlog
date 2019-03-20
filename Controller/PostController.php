<?php

require_once 'Model/PostManager.php';
require_once 'Model/CommentManager.php';
require_once 'View/View.php';

class PostController {
    
    private $post;
    private $comment;
    
    public function __construct() {
        $this->post = new PostManager();
        $this->comment = new CommentManager();
    }
    
    // Show post detail:
    public function post($postId) {
        $post = $this->post->getPost($postId);
        $comments = $this->comment->getComments($postId);
        
        
        
        $view = new View("postView");
        $view->generate(array('post' => $post, 'comments' => $comments));
        
        exit();
    }
    
    // Add a comment to a post:
    public function comment($author, $content, $postId) {
        
        
        $author = htmlspecialchars($author);
        $content = htmlspecialchars($content);
            
        $commentPost = $this->comment->addComment($author, $content, $postId);
             
        header('Location: index.php?action=post&id='.$postId);
       
        exit();
        
    }
    
 }









