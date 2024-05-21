<?php
function rechercheEntreprise($input): void
{
    if (!empty($input['categorie'])) {
        $repostory = new EtudiantRepository(new DatabaseConnection());

        $etudiants = $repostory->getEtudiants($input['categorie']);
    }

    require 'templates/entreprise/dashboard_admin_search.php';
}