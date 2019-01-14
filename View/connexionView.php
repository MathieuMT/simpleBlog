<!-- Connexion view -->
<?php $this->title = "Jean Forteroche - CONNEXION"; ?>


<div id="connexion_wrapper">
    <h2>Connexion</h2>
    <br />
    <br />
    <div class="success"><?php if (isset($success['connexion'])) echo $success['connexion']; ?></div>
    <form method="post" action="index.php?action=connexion" id="form_connexion">
        <table>
            <tr>
                <td class="label">
                    <label for="nicknameEmailConnect">Pseudo ou Email : </label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo ou votre email" id="nicknameEmailConnect" name="nicknameEmailConnect" size="30" autofocus />
                </td>
            </tr>
            
            <tr>
                <td class="label">
                    <label for="passConnect">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" placeholder="Mot de passe" id="passConnect" name="passConnect" size="30" />
                </td>
            </tr>
            
            <tr class="label">
                <td colspan="2">
                    <br />
                    <input type="submit" value="Se connecter" name="btn_connexion" />
                </td>
                <td></td>
            </tr>
        </table>
    </form>
    <div class="error"><?php if (isset($error['connexion'])) echo $error['connexion']; ?></div>
    <div class="error"><?php if (isset($error['field'])) {echo $error['field'] ;} ?></div>
</div>
