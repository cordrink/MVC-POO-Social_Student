<?php
function parametreEtudiant($input): void
{

    if ($input) {
        $etudiant  = new Etudiant($input);

        $repoEtudiant = new EtudiantRepository(new DatabaseConnection());

        $succes = $repoEtudiant->updateEtudiant($etudiant->getVille(), $etudiant->getEmail(), $etudiant->getSexe(), $etudiant->getBio(), $etudiant->getGit(), $etudiant->getCompetences());
        if ($succes) {
            $etudiantOne = $repoEtudiant->recupererEtudiant($_SESSION['id']);

            $etudiantUp = new Etudiant($etudiantOne);

            $_SESSION['nom'] = $etudiantUp->getNom();
            $_SESSION['mat'] = $etudiantUp->getMatricule();
            $_SESSION['ville'] = $etudiantUp->getVille();
            $_SESSION['sex'] = $etudiantUp->getSexe();
            $_SESSION['description'] = $etudiantUp->getBio();
            $_SESSION['dateEnregistrement'] = $etudiantUp->getDateInscription();
            $_SESSION['email'] = $etudiantUp->getEmail();
            $_SESSION['git'] = $etudiantUp->getGit();
            $_SESSION['filiere'] = $etudiantUp->getFiliere();
            $_SESSION['competence'] = $etudiantUp->getCompetences();
        }
    }

    require 'templates/user/parametre.php';
}