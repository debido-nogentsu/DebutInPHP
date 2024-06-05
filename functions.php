<!-- DebutInPHP
     version 1.O
     by David Nogent, 2024
-->
<?php

function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}