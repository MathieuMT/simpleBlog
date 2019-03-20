<?php
require_once 'Model/PostManager.php';
require_once 'Model/AdminUpdatePostManager.php';
require_once 'View/View.php';

class AdminUpdatePostController {

    private $post;
    private $showUpdatePost;
    
    
    public function __construct() {
        $this->post = new PostManager();
        $this->showUpdatePost = new AdminUpdatePostManager();
    }

    // Get the post according to his id:
    public function post($postId) {
        $post = $this->post->getPost($postId);
        $view = new View("adminUpdatePostView");
        $view->generate(array('post' => $post));
    }
    
    // Edit the author and post content based on the post id:
    public function updateEditPost($title, $content, $author, $postId) {
        
        $postId = intval($postId);
        $author= htmlspecialchars($author);
        $title = htmlspecialchars($title);
        //$content = htmlspecialchars($content);
        
        if (isset($author) && isset($title) && isset($content) && !empty($author) && !empty($title) && !empty($content)) {

                $updatePost = $this->showUpdatePost->updatePost($title, $content, $author, $postId);
            }
        
        $post = $this->post->getPost($postId);
        
        header('Location: index.php?action=showAdminPost&id='. $_SESSION['id']);

        $view = new View('adminUpdatePostView');
        $view->generate(array('post' => $post,'author' => $author, 'title' => $title, 'content' => $content));
            
       exit();
    }
 
}









