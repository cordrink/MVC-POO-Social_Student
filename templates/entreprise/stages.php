<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./templates/entreprise/style/dashboard_admin.css">
    <link rel="stylesheet" href="./templates/entreprise/style/searchF.css">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard admin</title>
</head>

<style>

    main form {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
    }

    main h1 {
        text-align: center;
        color: blue;
        margin-bottom: 20px;
    }

    main label {
        display: block;
        margin-bottom: 5px;
        color: black;
        font-weight: bold;
    }

    main input[type="text"], textarea, select {
        width: 90%;
        padding: 10px 20px;
        margin-bottom: 10px;
        border: none;
        background: #f1f1f1;
        outline: none;
    }

    main input[type="submit"] {
        background-color: #4CAF50;
        display: block;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    main input[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>

<body>
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bx-smile'></i>
        <span class="text"><?= $_SESSION['structure'] ?></span>
    </a>

    <ul class="side-menu top">
        <li>
            <a href="index.php?action=accueilEntreprise&id=<?= $_SESSION['id'] ?>">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="index.php?action=rechercheEntreprise&id=<?= $_SESSION['id'] ?>">
                <i class='bx bxs-group' ></i>
                <span class="text">Recherche</span>
            </a>
        </li>


        <li class="active">
            <a href="index.php?action=stagepost&id=<?= $_SESSION['id'] ?>">
                <i class='bx bxs-badge-check'></i>
                <span class="text">Stage post</span>
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
            <a href="index.php?action=deconnexion&id=<?= $_SESSION['id']?>">
                <i class='bx bx-log-out'></i>
                <span class="text">Deconnexion</span>
            </a>
        </li>
    </ul>
</section>

<!-- CONTENT -->
<section id="content">
    <nav>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Rechercher...">
                <button type="submit" class="btn-seach"><i class='bx bx-search'></i></button>
            </div>
        </form>

        <a href="#">
            <img src="./templates/entreprise/ressources/profit.svg" alt="profit">
        </a>
    </nav>

    <main>

        <div class="head-title">
            <div class="left">
                <h1>Enregistrer un post</h1>
                <ul class="breadcrund">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>

                    <li>
                        <i class='bx bx-chevron-right'></i>
                    </li>

                    <li>
                        <a href="#" class="active">post</a>
                    </li>
                </ul>
            </div>

        </div>

        <form method="post">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" name="titre" id="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" id="description" required></textarea>
            </div>

            <input type="submit" name="post" value="Poster">
        </form>
    </main>
</section>

<script src="./js/dashboard_admin.js"></script>
</body>
</html>