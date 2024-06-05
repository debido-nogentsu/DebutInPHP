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
            <!-- insertion du code PHP -->
            <?php
                echo "<h1>";
                echo $title;
                echo "</h1>";
                echo "<p>";
                echo $ligne1;
                echo "</p>";
                echo "<p>";
                echo $ligne2;
                echo "</p>";   
            ?>             
            <!-- fin du code PHP-->   
        </div>
        <div id="image">
            <img src="eye.jpeg" alt="oeil" />
        </div>
        <div class="container">
            <!-- insertion du code PHP -->
            <?php
                echo "<p>";
                echo $ligne3;
                echo "</p>"; 
            ?>
            <!-- fin du code PHP -->
        </div>
        <!-- fin du corps de ma page principale -->

        <!-- inclusion du bas de page du site -->
        <?php include_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>
