<?php
require_once 'Model/Model.php';


class RegistrationManager extends Model {
    
    private $role= "1";
    
    //  Add a new user:
    public function addNewMember($role, $nickname, $hashPass, $email) {
        
        $sql = 'INSERT INTO members(role, nickname, pass, email, registration_date) VALUES(:role, :nickname, :pass, :email, CURDATE())';
        
        $newMember = $this->executeQuery($sql, array('role' => $this->role, 'nickname' => $nickname, 'pass' => $hashPass, 'email' => $email));
        
        if ($newMember) {
            return true;
        } else {
            return false;
        }
    }
    
    // Check the nickname of the registrered user:
    public function checkNickname($nickname) {
        
        $sql = 'SELECT * FROM members WHERE nickname = :nickname';
        
        $req = $this->executeQuery($sql, array('nickname' => $nickname));
        $result = $req->fetch();
        
        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    
    // Check the e-mail of the registrered user:
    public function checkEmail($email) {
        
        $sql = 'SELECT * FROM members WHERE email = ?';
        
        $req = $this->executeQuery($sql, array($email));
        $result = $req->rowCount();
        
        if ($result) {
            return true;
        }else {
            return false;
        }
        
    }

}