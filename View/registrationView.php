<!-- Inscription view -->
<?php $this->title = "Jean Forteroche - INSCRIPTION"; ?>
<div id="registration_wrapper">
    <h2>Inscription</h2>
    <br />
    <br />
    <div class="success"><?php if (isset($success['registration'])) echo $success['registration']; ?></div>
    <form method="post" action="index.php?action=registration" id="form_registration">
        <table>
            <tr>
                <td class="label">
                    <label for="nickname" class="stl-label">Pseudo : </label>
                </td>
                <td>
                    <input class="input_field style" type="text" placeholder="Votre pseudo" id="nickname" name="nickname" size="30" autofocus />
                </td>
                <td>
                    <span class="error"><?php if (isset($error['nickname'])) {echo $error['nickname'] ;} ?></span>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="pass" class="stl-label">Mot de passe : </label>
                </td>
                <td>
                    <input class="input_field style" type="password" placeholder="Mot de passe" id="pass" name="pass" size="30" />
                </td>
                <td>
                    <span class="error"><?php if (isset($error['pass'])) {echo $error['pass'] ;} ?></span>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="checkpass" class="stl-label">Confirmez mot de passe : </label>
                </td>
                <td>
                    <input class="input_field style" type="password" placeholder="Confirmez mot de passe" id="checkpass" name="checkpass" size="30" />
                </td>
                <td>
                    <span class="error"><?php if (isset($error['pass'])) {echo $error['pass'] ;} ?></span>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="email" class="stl-label">Email : </label>
                </td>
                <td>
                    <input class="input_field style" type="email" placeholder="Email" id="email" name="email" size="30" />
                </td>
                <td>
                    <span class="error"><?php if (isset($error['email'])) {echo $error['email'] ;} ?></span>
                </td>
            </tr>
            <tr class="label">
                <td colspan="3">
                    <br />
                    <input id="btn_registration" class="input_field" type="submit" value="S'inscrire" name="btn_inscription" />
                </td>
                <td></td>
            </tr>
        </table>
    </form>
    <div class="error"><?php if (isset($error['field'])) {echo $error['field'] ;} ?></div>
</div>