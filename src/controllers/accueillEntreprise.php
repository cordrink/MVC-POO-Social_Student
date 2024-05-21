<?php

function accueillEntreprise(): void
{
    $nbEtudiant = new EtudiantRepository(new DatabaseConnection());
    $nb = $nbEtudiant->nbEtudiant();
    require 'templates/entreprise/dashboard_admin.php';
}