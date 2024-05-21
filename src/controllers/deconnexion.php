<?php

function deconnexion($identifiant): void
{
    if (isset($identifiant)) {
        session_unset();
        session_destroy();

        header('Location:index.php');
    } else {
        throw new Exception('vous n\'etes pas connecte !');
    }
}