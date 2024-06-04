<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>DebutInPHP</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="my_css.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <!-- En-tête du projet -->
        <?php include_once(__DIR__ . '/header.php'); ?>
        
        <!-- début corps de ma page principale -->
        <div class="container">
            <h1>DebutInPHP</h1>
            <p>Ceci est le contenu principale de ma page.</p>
            <p>C'est une page HTML toute simple contenant du code PHP.</p>                    
        </div>
        <div id="image">
            <img src="eye.jpeg" alt="oeil" />
        </div>
        <!-- fin du corps de ma page principale -->

        <!-- inclusion du bas de page du site -->
        <?php include_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>