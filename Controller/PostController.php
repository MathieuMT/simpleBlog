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
        
        //$postId = $_POST['id'];
            
        $commentPost = $this->comment->addComment($author, $content, $postId);
             
        header('Location: index.php?action=post&id='.$postId);
       
        exit();
        
    }
    
    /*
    public function refreshComments($postId, $author, $commentText) {
        
        $refreshComments = $this->comment->getComments($postId);
        
        if (isset($author) && isset($commentText)) {
            
            $flux = array(
                    "author" => $author,
                    "commentText" => $commentText,
                    
                    "comments" => "author = " . $author . " à dit : " . $commentText
            
            );
            
            echo json_encode($flux);
        }
        
        */
        
        
        
        
        /*
        $refreshComments = $this->comment->getComments($postId);
        
        $json = '{';
        
        foreach($refreshComments as $comment) {
            $json .= "{'author':'".$comment['author']."',";
            $json .= "'comment':'".$comment['comment']."'},";
        }
        
        $json .= '}';
        
        echo $json;
        
        */
    /*
    }
    */
    
    
    
    
 }









