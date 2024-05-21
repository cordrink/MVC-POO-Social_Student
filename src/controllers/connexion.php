<?php
require_once 'src/model/EtudiantRepository.class.php';
require_once 'src/model/Etudiant.class.php';
require_once 'src/lib/DatabaseConnection.class.php';

function connexion($input) :void
{
    if (!empty($_SESSION['id'])) {
        header('Location: index.php?action=accueil&id=' . $_SESSION['id']);
    } else {
        if (isset($_POST['etudiant'])) {
            if (!empty($input)) {
                $etudiant = new Etudiant($input);

                if ($etudiant->isUserValide()) {
                    $etudiantrepo = new EtudiantRepository(new DatabaseConnection());

                    $state = $etudiantrepo->connexion($etudiant->getNom(), $etudiant->getMatricule(),$etudiant->getPassEtudiant());

                    $connectEtudiant = new Etudiant($state);

                    //var_dump($connectEtudiant);

                    session_start();
                    $_SESSION['id'] = $connectEtudiant->getIdEtudiant();
                    $_SESSION['nom'] = $connectEtudiant->getNom();
                    $_SESSION['mat'] = $connectEtudiant->getMatricule();
                    $_SESSION['ville'] = $connectEtudiant->getVille();
                    $_SESSION['sex'] = $connectEtudiant->getSexe();
                    $_SESSION['description'] = $connectEtudiant->getBio();
                    $_SESSION['dateEnregistrement'] = $connectEtudiant->getDateInscription();
                    $_SESSION['email'] = $connectEtudiant->getEmail();
                    $_SESSION['git'] = $connectEtudiant->getGit();
                    $_SESSION['filiere'] = $connectEtudiant->getFiliere();
                    $_SESSION['competence'] = $connectEtudiant->getCompetences();

                    header('Location: index.php?action=accueil&id=' . $_SESSION['id']);
                }

            } else {
                throw new Exception('Veuillez remplir tous les champs du formulaire');
            }
        } elseif (isset($_POST['entreprise'])) {
            if (!empty($input)) {
                $entreprise = new Entreprise($input);

                if ($entreprise->isUserValid()) {
                    $entrepriserepo = new EntrepriseRepository(new DatabaseConnection());

                    $state = $entrepriserepo->connexion($entreprise->getNomStructure(), $entreprise->getPassEntreprise());

                    $connectEntreprise = new Entreprise($state);

                    session_start();
                    $_SESSION['id'] = $connectEntreprise->getIdEntreprise();
                    $_SESSION['nom'] = $connectEntreprise->getNomUtilisateur();
                    $_SESSION['structure'] = $connectEntreprise->getNomStructure();

                    header('Location: index.php?action=accueilEntreprise&id=' . $_SESSION['id']);
                }

            } else {
                throw new Exception('Veuillez remplir tous les champs du formulaire');
            }
        } elseif (isset($_POST['admin'])) {
            if (!empty($input)) {
                $admin = new Admin($input);

                if ($admin->isUserValid()) {
                    $adminrepo = new AdminRepository(new DatabaseConnection());

                    $state = $adminrepo->connexion($admin->getNomAdmin(), $admin->getPassAdmin(), $admin->getDepartement());

                    $connectAdmin = new Admin($state);

                    session_start();
                    $_SESSION['id'] = $connectAdmin->getIdAdmin();
                    $_SESSION['nom'] = $connectAdmin->getNomAdmin();
                    $_SESSION['departement'] = $connectAdmin->getDepartement();

                    header('Location: index.php?action=accueilAdmin&id=' . $_SESSION['id']);
                }

            } else {
                throw new Exception('Veuillez remplir tous les champs du formulaire');
            }
        }
    }



    require 'templates/signup_login/login.php';
}

