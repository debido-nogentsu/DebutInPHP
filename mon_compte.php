<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<?php
session_start();
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
            
        <?php
        // redéfinition de mes variables
        // $username et $userpassword ont été prédéfini dans variables.php
        $nom = $username;
        $pw = $userpassword;
        // récupération globale des données du formulaire
        $postData = $_POST;

        if (isset($postData['nom']) && isset($postData['password'])) {
                    if ($nom === $postData['nom'] && $pw === $postData['password']) {
                        echo "<h1>BIENVENUE ";
                        echo $nom;
                        echo "</h1>";
                        echo "<h2>Vous &ecirc;tes ici chez vous !</h2>";
                }
                else {
                    echo "Les donn&eacute;es saisies ne correspondent pas aux donn&eacute;es pr&eacute;d&eacute;finies.";
                    echo "<br>";               
                    echo "<a href='page4.php'>retour</a>";
                }
        }
        ?>
        </div>
        <div id="image">
            <img src="eye.jpeg" alt="oeil" />
        </div>
        <div class="container">
            <h3><a href="logout.php">QUITTER</a></h3>
        </div>
        <!-- fin du corps de ma page principale -->

        <!-- inclusion du bas de page du site -->
        <?php include_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>