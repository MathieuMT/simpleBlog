<?php
require_once 'Model/PostManager.php';
require_once 'Model/AdminManagerPost.php';
require_once 'View/View.php';

class AdminControllerPost {
    
    private $post;
    private $showAdminPost;
   
    
    
    public function __construct() {
        $this->post = new PostManager();
        $this->showAdminPost = new AdminManagerPost();
    }
    
    // Show list of all blog posts
    public function listPosts() {
        $posts = $this->post->getPostsWithNumberOfComments();
        $view = new View('adminPostView');
        $view->generate(array('posts' => $posts));
    }
    
    // Add a new post:
    public function newPost($author, $title, $content) {
        
        $author = htmlspecialchars($author);
        $title = htmlspecialchars($title);
        //$content = htmlspecialchars($content);
        
        
            
        if(isset($author) && isset($title) && isset($content) && !empty($author) && !empty($title) && !empty($content) ) {
           
            $newPost = $this->showAdminPost->addNewPost($author, $title, $content);    
        }
        
        $posts = $this->post->getPostsWithNumberOfComments(); 
        
        header('Location: index.php?action=showAdminPost&id='. $_SESSION['id']);
        
        $view = new View('adminPostView');
        $view->generate(array('posts' => $posts,'author' => $author, 'title' => $title, 'content' => $content));
            
       exit();
          
    }
    
    // Delete a post:
    public function removePost() {
        
        
        
        
        if (isset($_POST['submit_delete_post'])) {
            
            $postId = $_POST['postId'];
            
            $deletePost= $this->showAdminPost->deletePost($postId);

        }
        
        header('Location: index.php?action=showAdminPost&id='. $_SESSION['id']);
        
        $view = new View('adminPostView');
        $view->generate(array('showAdminPost' => $showAdminPost));
        
        exit();
    }
    
  
} 







