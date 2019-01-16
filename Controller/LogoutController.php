<?php

require_once 'View/View.php';

class LogoutController {
    
    
    public function logoutMember() {
        
        if (isset($_SESSION['nickname'])) {
            
            unset ($_SESSION['id'], $_SESSION['role'], $_SESSION['nickname'], $_SESSION['email']);
            
            session_destroy();
            
            header('Location:index.php?action=home');
        }
        
    }
}