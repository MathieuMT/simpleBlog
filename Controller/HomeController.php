<?php

require_once 'Model/PostManager.php';
require_once 'View/View.php';


class HomeController {
    private $post;
    
    
    public function __construct(){
        $this->post = new PostManager();
    }
    
    // Show list of all blog posts
    public function home() {
        $posts = $this->post->getLastPostWithNumberOfComments();
        $view = new View('homeView');
        $view->generate(array('posts' => $posts));
    }
    
}






