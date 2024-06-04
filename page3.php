<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<?php
// inclusion de page contenant mes variables
include_once(__DIR__ . '/variables.php');

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>DebutInPHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="my_css.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <!-- En-tête du projet -->
        <?php include_once(__DIR__ . '/header.php'); ?>
        
        <!-- début corps de ma page principale -->
        <div class="container">
            <table class="table"> <!-- insertion d'un formulaire dans une table -->
                <form action="page3reply.php" method="post"> 
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
                </form>
            </table>
        </div>
        <div id="image">
            <img src="eye.jpeg" alt="oeil" />
        </div>
        <!-- fin du corps de ma page principale -->

        <!-- inclusion du bas de page du site -->
        <?php include_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>