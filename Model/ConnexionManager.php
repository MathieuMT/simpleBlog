<?php
require_once 'Model/Model.php';

class ConnexionManager extends Model  {
    
    public function connectedMember($nicknameEmailConnect, $isEmail) {
    
        if($isEmail) {
            // Good Email in db:
            $sql = 'SELECT * FROM members WHERE email = :email';

            $result = $this->executeQuery($sql, array('email' => $nicknameEmailConnect));

            return $result->fetch();
        }else {
            // Good Nickname in db:
            $sql = 'SELECT * FROM members WHERE nickname = :nickname';

            $result = $this->executeQuery($sql, array('nickname'=>$nicknameEmailConnect));

            return $result->fetch();
        } 
    }

}