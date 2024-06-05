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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="my_css.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <!-- En-tête du projet -->
        <?php include_once(__DIR__ . '/header.php'); ?>
        
        <!-- début corps de ma page principale -->
        <div class="container">
          <?php
          // récupération des données du formulaire page3.php
          $postData = $_POST;
          ?>
          <table class="table">
                <form action="page3.php"> 
                <thread>
                    <tr>
                        <th scope="col">NOM</th>
                        <th scope="col">PASSWORD</th>
                    </tr>
                </thread>
                <tbody>
                    <tr> <!-- affichage des données saisies dans le formulaire -->
                        <td><?php echo($postData['nom']); ?></td>
                        <td><?php echo($postData['password']); ?></td>
                    </tr>
                    <tr>    
                        <td>&nbsp;</td>
                        <td><input type="submit" value="QUITTER" /></td>
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
