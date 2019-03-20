<!-- admin user view -->
<?php $this->title = "Jean Forteroche - ADMINISTRATION / GESTION DES UTILISATEURS"; ?>


<?php
if (isset($_SESSION['id']) && $_SESSION['role'] === '2') {
?>

<p><u><h3 class="titre_gestion_blog">GESTION DES UTILISATEURS</h3></u></p>

<div id="users">
   
    <form method="post" action="index.php?action=roleUsers" id="form_roleUsers">
        
        
        <fieldset>Sélectionner le rôle des utilisateurs à afficher:
        
            <select name="role" id="role">
                
                <option value="nothing">Aucun rôle</option>
                
                <?php foreach($roleOfUsers as $r_users): ?>

                    <option value="<?= $r_users['role_id']; ?>"><?= $r_users['role_name']; ?></option>

                <?php endforeach; ?>
                
            </select>
            
            <input type="submit" name="btn_dropdown_role" value="Sélectionner" />
        
        </fieldset><br /><br />
     </form>
       
        <fieldset>Liste de utilisateurs par rôle:

           <?php foreach($usersByRole as $u_role ): ?> 
                <ul>
                    <li>
                        
                        <?= $u_role['nickname'] ?> => <?= $u_role['role_name'] ?><br />
                        
                        
                        
                        
                        <form method="post" action="index.php?action=updateRoleUsers">
                        
                           <input type="hidden" name="idUser" value="<?php echo $u_role['id'] ?>" />
                   
                        <label>Modifier le rôle de l'utilisateur : </label>
                       
                        <select name="updateRole">
                            
                            <option value="1" <?php if ($u_role['role_id'] === '1') {
        ?>selected="selected"<?php
    } ?>>membre</option>
                            <option value="2" <?php if ($u_role['role_id'] === '2') {
        ?>selected="selected"<?php
    } ?>>administrateur</option> 
                             
                        </select>
                        
                        <input type="submit" name="btn_update_role" value="Modifier rôle" />
                    
                        </form>
                       
                        <form method="post" action="index.php?action=deleteUser">
                    
                            <input type="hidden" name="idUser" value="<?php echo $u_role['id'] ?>" />
                            
                            <label for="deleteUser">Supprimer l'utilisateur : </label><button type="submit" name="deleteUser" id="deleteUser"><i class="fas fa-trash-alt"></i></button>
                            
                        </form>     
 
                        <hr />
                    </li>
                </ul>
            
            <?php endforeach; ?>
            
        </fieldset>
            
</div>



<?php
}
?>  
   
                                   