<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./templates/entreprise/style/dashboard_admin.css">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard admin</title>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-smile'></i>
            <span class="text"><?= $_SESSION['structure'] ?></span>
        </a>

        <ul class="side-menu top">
            <li class="active">
                <a href="index.php?action=accueilEntreprise&id=<?= $_SESSION['id'] ?>">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li >
                <a href="index.php?action=rechercheEntreprise&id=<?= $_SESSION['id'] ?>">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Recherche</span>
                </a>
            </li>


            <li>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrund">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>

                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>

                        <li>
                            <a href="#" class="active">home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3><?= $nb ?></h3>
                        <p>Nombre de stage posté</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Liste des demandes</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter'></i>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Nom Etudiant</th>
                                <th>Date de demande</th>
                                <th>langage utilisé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.svg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">validé</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

    <script src="./templates/entreprise/js/dashboard_admin.js"></script>
</body>
</html>