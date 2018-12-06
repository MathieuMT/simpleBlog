<!-- Inscription view -->
<?php $this->title = "Jean Forteroche - INSCRIPTION"; ?>
<div id="registration_wrapper">
    <h2>Inscription</h2>
    <br />
    <br />
    <form method="post" action="index.php?action=registration" id="form_registration">
        <table>
            <tr>
                <td class="label">
                    <label for="nickname">Pseudo : </label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" id="nickname" name="nickname" size="30" autofocus />
                    <span><?php if (isset($error)) {echo $error['nickname'] ;} ?></span>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="pass">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" placeholder="Mot de passe" id="pass" name="pass" size="30" />
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="check_pass">Confirmez mot de passe : </label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmez mot de passe" id="check_pass" name="check_pass" size="30" />
                    <span><?php if (isset($error)) {echo $error['pass'] ;} ?></span>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label for="email">Email : </label>
                </td>
                <td>
                    <input type="email" placeholder="Email" id="email" name="email" size="30" />
                    <span><?php if (isset($error)) {echo $error['email'] ;} ?></span>
                </td>
            </tr>
            <tr class="label">
                <td colspan="2">
                    <br />
                    <input type="submit" value="S'inscrire" name="btn_inscription" /><span><?php if (isset($success)) {echo $success['registration'] ;} ?></span>
                </td>
                <td><span><?php if (isset($success)) {echo $success['fields'] ;} ?></span></td>
            </tr>
        </table>
    </form>
</div>