<?php
require_once 'Model/RegistrationManager.php';
require_once 'View/View.php';

class RegistrationController {
    
    private $manager;
    private $error;
    private $success;
    private $role = "membre";
    
    public function __construct() {
        $this->manager = new RegistrationManager();
    }

    public function showFormRegistration() {
        $view = new View('registrationView');
        $view->generate([]);
    }
    
    // Add a new user:    
    public function newMemberRegistration($nickname, $pass, $checkPass, $email) {
        
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        $nickname = htmlspecialchars($nickname);
        $pass = htmlspecialchars($pass);
        $checkPass = htmlspecialchars($checkPass);
        $email = htmlspecialchars($email);

        $checkParams = $this->verifyParameters($nickname, $pass, $checkPass, $email);
        
        if ($checkParams) {
            
            // Password hash:
            $hashPass = password_hash($pass, PASSWORD_DEFAULT);
            
            $newMember = $this->manager->addNewMember($this->role, $nickname, $hashPass, $email);
            
            if ($newMember) {
                $this->success['registration'] = 'Votre inscription est bien enregistrée !';
            }
        }
        
        $view = new View('registrationView');
        $view->generate(['error' => $this->error, 'success' => $this->success]); 
    }
    
    // Check parameters of the form of registration:
    private function verifyParameters($nickname, $pass, $checkPass, $email) {
        
        $checkNickname = $this->verifyNickname($nickname);
        $checkEmail = $this->verifyEmail($email);
        $checkPassword = $this->verifyPassword($pass, $checkPass);
        $checkField = $this->verifyFieldEmpty($nickname, $pass, $checkPass, $email);
        
        if ($checkNickname && $checkEmail && $checkPassword && $checkField) {
            return true;
        }else {
            return false;
        }
        
    }
    
     // Check the nickname of the registrered user:
    private function verifyNickname($nickname) {
        
        $check = true;
        
        // Check length nickname:
        /* We check that the nickname is between 3 and 25 characters */
        $lengthNickname = strlen($nickname);
        if (($lengthNickname < 3) || ($lengthNickname > 25)) {
            
            $this->error['nickname'] = "Votre pseudo doit comprendre entre 3 et 25 caractères !";
            
            $check = false;  
        }
        
        // Check existing nickname:
        $existingNickname = $this->manager->checkNickname($nickname);
        if ($existingNickname) {
            $this->error['nickname'] = "Votre pseudo est déjà utilisé !";
            
             $check = false;
        }
        return $check;
    }
    
    // Check the e-mail of the registrered user:
    private function verifyEmail($email) {
        
        $check = true;
        
        // Check existing email
        $existingEmail = $this->manager->checkEmail($email);
        if ($existingEmail) {
            $this->error['email'] = "Votre email existe déjà !";
            $check = false;
        }
        
        if (!preg_match("#^[a-z09._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email)) {
            $this->error['email'] = "Votre email n'a pas une forme valide !";
            $check = false;
        }
        return $check;
    }
    
    // Check the password l of the registrered user:
    private function verifyPassword($pass, $checkPass) {
        
        $check = true;
                
        // Check identicals passwords
        if ($pass !== $checkPass) {
            $this->error['pass'] = "Vos mots de passe ne correspondent pas !";
            $check = false;
        }
        return $check;
    }
    
    // Check the field of the form of the registrered user is not empty:
    private function verifyFieldEmpty($nickname, $pass, $checkPass, $email) {
        
        $check = true;
        
        // Check fields aren't empty
        if (empty($nickname) || empty($pass) || empty($checkPass) || empty($email)) {
            $this->error['field'] = 'Tous les champs doivent être remplis!';
            
            $check = false;
        }
        return $check;
    }
    
}


