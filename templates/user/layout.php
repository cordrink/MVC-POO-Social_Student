<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./templates/user/css/accueil.css" />
    <link rel="stylesheet" href="./templates/user/css/parametre.css" />
    <link rel="stylesheet" href="./templates/user/css/cards.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title ?></title>
</head>
<body>
<!------------------- SECTION NAV ------------------->
<section class="nav">
    <div class="top-left">
        <div class="logo">IUG <span>search</span></div>

        <div class="nav-btn">
            <a href="index.php?action=post&id=<?= $_SESSION['id'] ?>">Nouveau post</a>
            <a href="">Pour Entreprise</a>
        </div>
    </div>

    <div class="profil">
        <button>

            <img src="./templates/entreprise/ressources/profit.svg" alt="profil">
            <i class='bx bx-chevron-up'></i>
        </button>
    </div>

    <nav class="profil-nav none">
        <ul class="list-profil">
            <li>
                <img src="./templates/entreprise/ressources/profit.svg" width="40" alt="profil">
                <span><?= $_SESSION['nom'] ?></span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-dashboard' ></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span>Profil etudiant</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=parametreEtudiant&id=<?= $_SESSION['id'] ?>">
                    <i class='bx bxs-cog'></i>
                    <span>parametre</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=deconnexion">
                    <i class='bx bx-log-out' ></i>
                    <span>Deconnexion</span>
                </a>
            </li>
        </ul>
    </nav>
</section>
    <?= $content ?>

<script src="./templates/user/js/accueil.js"></script>
</body>
</html>