<?php


function detaillEtudiant($id) {

    $repoEtudiant = new EtudiantRepository(new DatabaseConnection());
    $etudiantOne = $repoEtudiant->recupererEtudiant($id);
    $etudiantUp = new Etudiant($etudiantOne);

    $repository = new PostRepository(new DatabaseConnection());
    $posts = $repository->getPosts($id);

    require './templates/detaillEtudiant.php';
}