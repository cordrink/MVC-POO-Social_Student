<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="templates/admin/style/searchF.css">
    <link rel="stylesheet" href="templates/admin/style/dashboard_admin.css">
    <title><?= $title ?></title>
</head>
<body>
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bx-smile'></i>
        <span class="text">Admin IUG</span>
    </a>

    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="index.php?action=rechercheAdmin&id=<?= $_SESSION['id_admin'] ?>">
                <i class='bx bxs-group' ></i>
                <span class="text">Recherche</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class='bx bxs-chat' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class='bx bxs-badge-check'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
    </ul>

    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Parametre</span>
            </a>
        </li>

        <li class="log-out">
            <a href="index.php?action=deconnexion">
                <i class='bx bx-log-out'></i>
                <span class="text">Deconnexion</span>
            </a>
        </li>
    </ul>
</section>
    <?= $content ?>
</body>
</html>