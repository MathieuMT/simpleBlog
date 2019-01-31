<?php
//require_once 'Content/Captcha/captcha.php';
require_once 'Model/ConnexionManager.php';
require_once 'View/View.php';

class ConnexionController {
    
    private $manager;
    private $error;
    private $success;
    private $idConnect;
    //private $captcha;
    
    public function __construct() {
        $this->manager = new ConnexionManager();
    }
    
    // THE VIEW IF THE LOGIN FORM FROM THE HOME:
    public function showFormConnexion() {
        $view = new View('connexionView');
        $view->generate([]);
    }
    
    // THE CONNEXION FORM VIEW FROM A SPECIFIC POST:
    public function showFormConnexionFromPost($postIdRef) {
        $view = new View('connexionView');
        $view->generate(['postIdRef'=>$postIdRef]);
    }
    
    // LOGIN FROM HOME:
    public function loginMember($nicknameEmailConnect, $passConnect, $captcha, $idConnect=false) {
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */        
        $nicknameEmailConnect = htmlspecialchars($nicknameEmailConnect);
        $passConnect = htmlspecialchars($passConnect);
        $captcha = htmlspecialchars($captcha);
        
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
         
         
        if (!empty($nicknameEmailConnect) || !empty($passConnect) || !empty($captcha)) {
            if ($connectedMember) {
                if ($isPasswordCorrect) {


                    

                        if ($captcha == $_SESSION['captcha']) {
                            
                             if (!$idConnect){
                                 
                                $_SESSION['id'] = $connectedMember['id'];
                                $_SESSION['role'] = $connectedMember['role'];
                                $_SESSION['nickname'] = $connectedMember['nickname'];
                                $_SESSION['email'] = $connectedMember['email']; 
                                 
                                 
                                
                                $this->success['connexion'] = 'Vous êtes bien connecté !';
                                
                                header('Location: index.php?action=home');
                                 
                            }else{
                                 
                                 
                                $_SESSION['id'] = $connectedMember['id'];
                                $_SESSION['role'] = $connectedMember['role'];
                                $_SESSION['nickname'] = $connectedMember['nickname'];
                                $_SESSION['email'] = $connectedMember['email']; 
                                 
                                $this->success['connexion'] = 'Vous êtes bien connecté !';
                                 
                                header('Location: index.php?action=post&id='.$idConnect);
                            } 
                        }else {
                            $this->error['connexion'] = 'Captcha invalide !';
                        }    
                    
                                           

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
    
    // IS AN EMAIL:
    private function isEmail($nicknameEmailConnect) {
        
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $nicknameEmailConnect)) { 
        
            return true;
        }
        
        return false;
        
    }
    
    // LOGIN FROM A SPECIFIC POST:
    public function loginMemberFromPost($nicknameEmailConnect,$passConnect,$captcha,$idConnect) {
        
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        $nicknameEmailConnect = htmlspecialchars($nicknameEmailConnect);
        $passConnect = htmlspecialchars($passConnect);
        $idConnect = htmlspecialchars($idConnect);
        $captcha = htmlspecialchars($captcha);
        
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
        
        
        if (!empty($nicknameEmailConnect) || !empty($passConnect) || !empty($captcha) || !empty($idConnect)) {
            if ($idConnect) {
                if ($connectedMember) {
                    if ($isPasswordCorrect) {


                        
                        if ($captcha == $_SESSION['captcha']) {
                            
                            $_SESSION['id'] = $connectedMember['id'];
                            $_SESSION['role'] = $connectedMember['role'];
                            $_SESSION['nickname'] = $connectedMember['nickname'];
                            $_SESSION['email'] = $connectedMember['email'];
                        
                            
                            $this->success['connexion'] = 'Vous êtes bien connecté !';

                            header('Location: index.php?action=post&id='.$idConnect);
                        }else {
                            $this->error['connexion'] = 'Captcha invalide !';
                        }
                            

                   }else {
                       //Le return la aussi
                       $this->error['connexion'] = 'Votre Pseudo ou email ou mot de passe est invalide !';
                   }
               }else {
                   $this->error['connexion'] = 'Vous n\'êtes pas inscrit !<br /><button class="btn_register"><a class="link_register" href="index.php?action=showFormRegistration">S\'inscrire ici</a>';

                   header('Location:index.php?action=showFormRegistration');
               }   
            }else {
                $this->error['connexion'] = 'Identifiant inéxistant !';
            }
            
       } else {
           $this->error['field'] = 'Tous les champs doivent être remplis!';
       } 
        
        $view = new View('connexionView');
        $view->generate(['error' => $this->error, 'success' => $this->success]);   
    }
    
}