<?php
require_once 'Model/Model.php';

class ConnexionManager extends Model  {
    
    // Function for connectec user:
    public function connectedMember($nicknameEmailConnect, $isEmail) {
    
        if($isEmail) {
            // Good Email in db:
            $sql = 'SELECT id, role, nickname, pass, email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, avatar, signature FROM members WHERE email = :email';

            $result = $this->executeQuery($sql, array('email' => $nicknameEmailConnect));

            return $result->fetch();
        }else {
            // Good Nickname in db:
            $sql = 'SELECT id, role, nickname, pass, email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, avatar, signature FROM members WHERE nickname = :nickname';

            $result = $this->executeQuery($sql, array('nickname'=>$nicknameEmailConnect));

            return $result->fetch();
        } 
    }

}