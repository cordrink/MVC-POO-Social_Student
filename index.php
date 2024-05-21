<?php
session_start();
require_once 'src/model/EtudiantRepository.class.php';
require_once 'src/model/Etudiant.class.php';
require_once 'src/model/Entreprise.class.php';
require_once 'src/model/EntrepriseRepository.class.php';
require_once 'src/model/Admin.class.php';
require_once 'src/model/AdminRepository.class.php';
require_once 'src/model/Post.class.php';
require_once 'src/model/PostRepository.class.php';
require_once 'src/model/Stage.class.php';
require_once 'src/model/StageRepository.php';

require 'src/controllers/inscription.php';
require 'src/controllers/connexion.php';
require 'src/controllers/accueill.php';
require 'src/controllers/accueillEntreprise.php';
require 'src/controllers/accueilAdmin.php';
require 'src/controllers/rechercheAdmin.php';
require 'src/controllers/parametreEtudiant.php';
require 'src/controllers/deconnexion.php';
require 'src/controllers/rechercheEntreprise.php';
require 'src/controllers/post.php';
require 'src/controllers/detailEtudiant.php';
require 'src/controllers/stages.php';


try {
    if (isset($_GET['action']) and $_GET['action'] !== '') {
        if ($_GET['action'] === 'inscription') {
            inscription($_POST);
        } elseif ($_GET['action'] === 'accueil' and $_GET['id'] > 0) {
            accueill();
        } elseif ($_GET['action'] === 'parametreEtudiant' and $_GET['id'] > 0) {
            parametreEtudiant($_POST);
        } elseif ($_GET['action'] === 'accueilEntreprise' and $_GET['id'] > 0) {
            accueillEntreprise();
        } elseif ($_GET['action'] === 'accueilAdmin' and $_GET['id'] > 0) {
            accueilAdmin();
        } elseif ($_GET['action'] === 'rechercheAdmin' and $_GET['id'] > 0) {
            rechercheAdmin();
        }elseif ($_GET['action'] === 'rechercheEntreprise' and $_GET['id'] > 0) {
            rechercheEntreprise($_POST);
        } elseif ($_GET['action'] === 'post' and $_GET['id'] > 0) {
            post($_POST);
        } elseif ($_GET['action'] === 'stagepost' and $_GET['id'] > 0) {
            stage($_POST);
        }elseif ($_GET['action'] === 'deconnexion' and !empty($_SESSION['id'])) {
            $identifiant = $_SESSION['id'];
            deconnexion($identifiant);
        } elseif ($_GET['action'] === 'detaillEtudiant' and !empty($_SESSION['id'])) {
            $identifiant = $_GET['id'];
            detaillEtudiant($identifiant);
        } else {
            throw new Exception('La page que vous recherche n\'a pas été trouvé');
        }
    } else {
        connexion($_POST);
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require 'templates/error.php';
}