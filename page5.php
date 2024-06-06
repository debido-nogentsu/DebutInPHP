<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<?php
session_start();
// inclusion de page contenant mes variables
require_once(__DIR__ . '/variables.php');

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>DebutInPHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="my_css.css" rel="stylesheet">
    <script src="form_js_control.js"></script>
    </head>

    <body class="d-flex flex-column min-vh-100">
        <!-- En-tête du projet -->
        <?php include_once(__DIR__ . '/header.php'); ?>
        
        <!-- début corps de ma page principale -->
        
        <?php include_once(__DIR__ . '/login.php'); ?>
        <?php include_once(__DIR__ . '/image.php'); ?>

        <!-- fin du corps de ma page principale -->

        <!-- inclusion du bas de page du site -->
        <?php include_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>