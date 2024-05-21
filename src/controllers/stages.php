<?php

function stage($input): void
{
    if (!empty($input)) {
        $stage = new Stage($input);

        $stage->setIdEntreprise($_SESSION['id']);

        $repository = new StageRepository(new DatabaseConnection());

        header('Location:templates/entreprise/dashboard_admin.php');
    }




    require './templates/entreprise/stages.php';
}