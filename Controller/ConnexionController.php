<?php

require_once 'Model/ConnexionManager.php';
require_once 'View/View.php';

class ConnexionController {
    
    private $manager;
    private $error;
    private $success;
   
    
    public function __construct() {
        $this->manager = new ConnexionManager();
    }
    
    public function showFormConnexion() {
        $view = new View('connexionView');
        $view->generate([]);
    }
    
    public function loginMember($nicknameEmailConnect, $passConnect) {
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        $nicknameEmailConnect = htmlspecialchars($nicknameEmailConnect);
        $passConnect = htmlspecialchars($passConnect);
        
        $connectedMember;
        
        if ($this->isEmail($nicknameEmailConnect)) {
            // If the Email is valid:
            $connectedMember = $this->manager->connectedMember($nicknameEmailConnect, true);
        }
        else {
            // If the Nickname is valid:
            $connectedMember = $this->manager->connectedMember($nicknameEmailConnect, false);
        }
            
        $isPasswordCorrect =  password_verify($passConnect, $connectedMember['pass']);
         //var_dump($isPasswordCorrect);
        
        if (!empty($nicknameEmailConnect) || !empty($passConnect)) {
            if ($connectedMember) {
                if ($isPasswordCorrect) {
                
               
                    $_SESSION['id'] = $connectedMember['id'];
                    $_SESSION['role'] = $connectedMember['role'];
                    $_SESSION['nickname'] = $connectedMember['nickname'];
                    $_SESSION['email'] = $connectedMember['email'];

                    $this->success['connexion'] = 'Vous êtes bien connecté !';
                    
                    header('Location:index.php?action=home');
                
                
                }else {
                    //Le return la aussi
                    $this->error['connexion'] = 'Votre Pseudo ou email ou mot de passe est invalide !';
                }
            }else {
                $this->error['connexion'] = 'Vous n\'êtes pas inscrit !<br /><button class="btn_register"><a class="link_register" href="index.php?action=showFormRegistration">S\'inscrire ici</a>';
                
                header('Location:index.php?action=showFormRegistration');
            } 
        } else {
            $this->error['field'] = 'Tous les champs doivent être remplis!';
        }
        
        
        $view = new View('connexionView');
        $view->generate(['error' => $this->error, 'success' => $this->success]);  
    }
    
    
    private function isEmail($nicknameEmailConnect) {
        
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $nicknameEmailConnect)) { 
        
            return true;
        }
        
        return false;
        
    } 
}