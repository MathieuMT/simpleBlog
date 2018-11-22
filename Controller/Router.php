<?php

require_once 'Controller/HomeController.php';
require_once 'Controller/PostController.php';
require_once 'View/View.php';

class Router {
    
    private $homeCtrl;
    private $postCtrl;
    
    public function __construct() {
        $this->homeCtrl = new HomeController();
        $this->postCtrl = new PostController();
    }
    
    // Processes an incoming request:
    public function routerQuery() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'post') {
                        $postId = intval($this->getParameter($_GET, 'id'));
                        if ($postId != 0) {
                            $this->postCtrl->post($postId);
                        }
                        else
                            throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'comment') {
                        $author = $this->getParameter($_POST, 'author');
                        $content = $this->getParameter($_POST, 'content');
                        $postId = $this->getParameter($_POST, 'id');
                        $this->postCtrl->comment($author, $content, $postId);
                }
                else
                        throw new Exception("Action non valide");
            }
            else { // No action set: home view:
                $this->homeCtrl->home();
            }
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
    // Display an error
    private function error($errorMsg) {
        $view = new View("errorView");
        $view->generate(array('errorMsg' => $errorMsg));
    }
    
    // Search a parameter in a table:
    private function getParameter($table, $name) {
        if (isset($table[$name])) {
            return $table[$name];
        }
        else
            throw new Exception("Paramètre '$name' absent");
    }
}