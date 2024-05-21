<?php

function inscription(array $input): void
{
    if (!empty($input)){
        if (isset($_POST['subEtudiant'])){
            $student = new Etudiant($input);
            if ($student->isUserValide()) {
                if ($student->getPassEtudiant() === $input['mdpConfirm']) {
                    $repoEtudiant = new EtudiantRepository(new DatabaseConnection());

                    $succes = $repoEtudiant->addStudent($student->getNom(), $student->getMatricule(), $student->getPassEtudiant(), $student->getFiliere());

                    if (!$succes) {
                        throw new Exception('Inscription impossible');
                    } else {
                        header('location:index.php');
                    }
                } else {
                    throw new Exception('Verifiez votre mot de passe');
                }
            } else {
                throw new Exception('Les valeurs entrées sont incorecte');
            }
        } elseif (isset($_POST['subEntreprise'])) {
            $entreprise = new Entreprise($input);
            var_dump($entreprise);
            if ($entreprise->isUserValid()) {
                if ($entreprise->getPassEntreprise() === $input['mdpStruct']) {
                    $repoEntreprise = new EntrepriseRepository(new DatabaseConnection());

                    $succes = $repoEntreprise->addStucture($entreprise->getNomStructure(), $entreprise->getNomUtilisateur(), $entreprise->getPassEntreprise());
                    if (!$succes) {
                        throw new Exception('Inscription impossible');
                    } else {
                        header('location:index.php');
                    }
                } else {
                    throw new Exception('Verifiez votre mot de passe');
                }
            } else {
                throw new Exception('les valeurs entreés sont incorrecte');
            }
        }

    }


    require 'templates/signup_login/signup.php';
}