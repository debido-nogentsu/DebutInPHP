<?php

session_start();
require_once(__DIR__ . '/variables.php');
require_once(__DIR__. '/functions.php');


/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */
$postData = $_POST;

// Validation du formulaire
if (isset($postData['nom']) &&  isset($postData['password'])) {
        if ($nom === $postData['nom'] && $pw === $postData['password']) {
                $_SESSION['LOGGED_USER'] = [
                    'nom' => $postData['nom']
                ];
            }
        }

        if (!isset($_SESSION['LOGGED_USER'])) {
            $_SESSION['LOGIN_ERROR_MESSAGE'] = sprintf(
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $postData['nom'],
                strip_tags($postData['password'])
            );
        }

    redirectToUrl('page5.php');