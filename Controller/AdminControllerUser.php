<?php

require_once 'Model/AdminManagerUser.php';
require_once 'View/View.php';



class AdminControllerUser {
    
 
    private $roleOfUsers;
   /* private $listRole;*/
   /* private $usersByRole;*/
    
    
    public function __construct() {
        $this->roleOfUsers = new AdminManagerUser();
    }
   
    public function showRoles() {
        
        $usersByRole;
        
        $roleOfUsers = $this->roleOfUsers->getRoleOfUsers();
        
        if (isset($_POST['role'])) {
            
            $usersByRole = $this->roleOfUsers->getUsersByRole($_POST['role']);
            
            if ($_POST['role'] == 'tous') {
                $usersByRole = $this->roleOfUsers->getAllUsersByRole($_POST['role']);
            }
            
        }else {

            $usersByRole = $this->roleOfUsers->getUsersByRole();
            
        }

        $view = new View("adminUserView");
        $view->generate(array('roleOfUsers' => $roleOfUsers, 'usersByRole' => $usersByRole));
    }
    
    public function changeRoleUser() {
         
        if (isset($_POST['updateRole'])) {
            
            $idUser = $_POST['idUser'];
            
            $updateRole = $this->roleOfUsers->updateRoleUser($_POST['updateRole'], $idUser);

        }
        
        header('Location: index.php?action=roleUsers&id='. $_SESSION['id']);
        
        $view = new View("adminUserView");
        $view->generate(array('roleOfUsers' => $roleOfUsers, 'usersByRole' => $usersByRole));
 
    }
    
    public function removeUser() {
        
        
        if (isset($_POST['deleteUser'])) {
            $idUser = $_POST['idUser'];
            $deleteUser = $this->roleOfUsers->deleteUser($idUser);
        } 

        header('Location: index.php?action=roleUsers&id='. $_SESSION['id']);
        
        $view = new View("adminUserView");
        $view->generate(array('roleOfUsers' => $roleOfUsers, 'usersByRole' => $usersByRole));
        
        
    }
    
}    
    
