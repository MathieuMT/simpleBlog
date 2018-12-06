<?php
require_once 'Model/RegistrationManager.php';
require_once 'View/View.php';

class RegistrationController {
    
    private $registeredMember;
    
    public function __construct() {
        $this->registeredMember = new RegistrationManager();
    }

    public function showFormRegistration() {
        $view = new View('registrationView');
        $view->generate([]);
    }
    
    public function newMemberRegistration() {
        

        // Verification of the validity of the information:
        // If we click on the "S'incrire" button:
        if (isset($_POST['btn_inscription'])) {
            //echo 'ok';
            
            // We check that the fields of the form are not empty:
            if(!empty($_POST['nickname']) && !empty($_POST['pass']) && !empty($_POST['check_pass']) && !empty($_POST['email'])) {
                //echo 'ok';
                
                /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
                $nickname = htmlspecialchars($_POST['nickname']);
                $pass = htmlspecialchars($_POST['pass']);
                $checkPass = htmlspecialchars($_POST['check_pass']);
                $email = htmlspecialchars($_POST['email']);
                
                // Password hash:
                $hashPass = password_hash($pass, PASSWORD_DEFAULT);
                $hashCheckPass = password_hash($checkPass, PASSWORD_DEFAULT);
                
                /* We check that the nickname is less than 255 characters: */
                
                $lenghtNickname = strlen($nickname);
        
                if ($lenghtNickname <= 255) {
                    
                    /* We check the existence of the nickname in the database: */
                    $existingNickname = $this->registeredMember->checkNickname($nickname);
                    
                    /* We check that the pseudo does not already exist in the database: */
                    if (!$existingNickname) {
                        //echo 'ok: nickname doesn\'t already exist';
                        
                         /* We check if the email adress already exists : */
                        $existingEmail = $this->registeredMember->checkEmail($email);
                        
                        /* If the email adress doesn't exist on a row of the "members" table: */
                        if ($existingEmail == 0) {
                            //echo 'ok: email doesn\'t already exist';
                            
                            /* We check if the password and its confirmation are very identical: */
                            if ($pass == $checkPass) 
                            {
                                //echo 'ok :good pass';
                                
                                /* We check if the email adress has a valid form: */
                                if (preg_match("#^[a-z09._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email)) {
                                    
                                    // echo 'ok: email valid';
                                    
                                    /* Inserting the new member into the database "members" table: */
                                    
                                   
                                    
                                    $newMember = $this->registeredMember->addNewMember($role, $nickname, $hashPass, $email);
                                    
                                    
                                    $success['registration'] = 'Votre inscription est bien enregistrée !';
                                    
                                    
                                    
                                    
                                }
                                else {
                                    $error['email'] = 'L\'adresse ' . $email . ' n\'est pas une adresse email valide,veuillez recommencer !';
                                }
                                
                            }
                            else {
                                $error['pass'] = 'Vos mots de passe ne correspondent pas !<br />Veuillez rentrer à nouveau votre mot de passe et la confirmation de votre mot de passe de manière identique !';
                            }
                            
                        }
                        else {
                            $error['email'] = 'Votre adresse email est déjà utilisée !';
                        }
                       
                    }
                    else {
                        $error['nickname'] = 'Ce pseudo est déjà utilisé, veuillez en choisir un autre !';
                    }
                    
                }
                else {
                    $error['nickname'] = "Votre pseudo ne doit pas dépasser 255 caractères !";
                }
                
            }
            else {
                $error['fields'] = 'Tous les champs doivent être remplis!';
            }
        }
        
        $view = new View('registrationView');
        $view->generate(['error' => $error, 'success' => $success]); 
             
        
    }
}