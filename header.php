<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<!-- Fichier menu du projet DebutInPHP -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">DebutInPHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">Page 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page3.php">Page 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page4.php">Page 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page5.php">Page 5 (avec gestion session)</a>
                </li>
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">D&eacute;connexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>