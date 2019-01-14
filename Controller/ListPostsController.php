<?php

require_once 'Model/PostManager.php';
require_once 'View/View.php';


class ListPostsController {
    private $post;
    
    public function __construct(){
        $this->post = new PostManager();
    }
    
    // Show list of all blog posts
    public function listPosts() {
        $posts = $this->post->getExtractPostsWithNumberOfComments();
        $view = new View('listPostsView');
        $view->generate(array('posts' => $posts));
    }
    
}






