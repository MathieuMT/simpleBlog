<?php

require_once 'Model/Model.php';



class AdminManagerUser extends Model  {
   
    // Get role of users:
    public function getRoleOfUsers() {

        $sql = 'SELECT * FROM roles';

        $roleOfUsers = $this->executeQuery($sql);

        if ($roleOfUsers->rowCount() > 0) {

            return $roleOfUsers->fetchAll();

        } 
    }
    
    // Get users by role:
    public function getUsersByRole($role = NULL) {
        
        $usersByRole;
        
        if ($role == NULL) {
            
             $sql = 'SELECT m.id, m.role, m.nickname, m.pass, m.email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, m.avatar, m.signature, r.role_id, r.role_name FROM members m LEFT JOIN roles r ON m.role = r.role_id';
            
            $usersByRole = $this->executeQuery($sql);
            
        } else {
            
            $sql = 'SELECT m.id, m.role, m.nickname, m.pass, m.email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, m.avatar, m.signature, r.role_id, r.role_name FROM members m LEFT JOIN roles r ON m.role = r.role_id WHERE r.role_id = :role_id';
            
            $usersByRole = $this->executeQuery($sql, array('role_id' => $role));
        }

            if ($usersByRole->rowCount() >= 0) {
            
                return $usersByRole->fetchAll();
            
            }
    }
    
    // Update role of registered user:
    public function updateRoleUser($role, $idUser) {
       
       $sql = 'UPDATE members SET role = :role WHERE id = :id';
    
        $updateRole = $this->executeQuery($sql,array(
                    'role' => $role,
                    'id' => $idUser
                    ));
        
         if ($updateRole->nextRowset() > 0) {   
                return $updateRole->fetchAll();
            
         }
        
    }
    
    // Delete user:
    public function deleteUser($idUser) {
        
        $sql = 'DELETE FROM members WHERE id = :id';
        $result = $this->executeQuery($sql,array('id' => $idUser));
        
        return $result;
        
    }

}


