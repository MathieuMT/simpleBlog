<?php
require_once 'Model/Model.php';


class RegistrationManager extends Model {
    
    public function addNewMember($role, $nickname, $hashPass, $email) {
        
        $sql = 'INSERT INTO members(role, nickname, pass, email, registration_date) VALUES(:role, :nickname, :pass, :email, CURDATE())';
        
        $newMember = $this->executeQuery($sql, array('role' => 'membre', 'nickname' => $nickname, 'pass' => $hashPass, 'email' => $email));
    }
    
    public function checkNickname($nickname) {
        
        $sql = 'SELECT * FROM members WHERE nickname = :nickname';
        
        $req = $this->executeQuery($sql, array('nickname' => $nickname));
        $result = $req->fetch();
    }
    
    public function checkEmail($email) {
        
        $sql = 'SELECT * FROM members WHERE email = ?';
        
        $req = $this->executeQuery($sql, array($email));
        $result = $req->rowCount();
    }
    
}