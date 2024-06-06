<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <form name="Connexion" action="submit_login.php" onsubmit="return RecommandationW3C()" method="POST"> 
        <!-- si message d'erreur on l'affiche -->
        <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
            </div>
            <?php endif; ?>
<div class="container">
        <table class="table"> <!-- insertion d'un formulaire dans une table -->
                <thread>
                    <tr>
                        <th scope="col">NOM</th>
                        <th scope="col">PASSWORD</th>
                    </tr>
                </thread>
                <tbody>
                    <tr>
                        <td><input type="text" name="nom" /></td>
                        <td><input type="password" name="password" /></td>
                    </tr>
                    <tr>    
                        <td>&nbsp;</td>
                        <td><input type="submit" value="SOUMETTRE" /></td>
                    </tr>
                </tbody>
        </table>
</div>
    </form>
<?php else : ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $_SESSION['LOGGED_USER']['nom']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>