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

            <li class="active">
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
                    <h1>Recherche etudiant</h1>
                    <ul class="breadcrund">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>

                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>

                        <li>
                            <a href="#" class="active">recherche</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- zone de chngement principale -->
            

            <section class="fromSearch">
                <div class="title-form">
                    <i class='bx bx-search'></i>
                    <h3>Critères de recherche</h3>
                </div>
        
                <form method="post">
                    <table class="table-search">
                        <tr>
                            <td><label for="axe">Axe</label></td>
                            <td>
                                <select name="axe" id="axe">
                                    <option selected value="">-- Tous les axes --</option>
                                    <option value="">GLO</option>
                                    <option value="">GRT</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="cate">Categorie</label></td>
                            <td class="category">
                                <select name="categorie" id="cate">
                                    <option value="">-- Choisissez votre categorie --</option>
                                    <optgroup label="Designe">
                                        <option value="web">Designer web</option>
                                        <option value="mobile">Designer mobile</option>
                                        <option value="Infographie">Infographie</option>
                                    </optgroup>
                                    <optgroup label="Developpeur">
                                        <option value="PHP">PHP</option>
                                        <option value="Javascript">Javascript</option>
                                        <option value="JEE">JEE</option>
                                    </optgroup>
                                    <optgroup label="Codeur">
                                        <option value="C">C</option>
                                        <option value="C#">C#</option>
                                        <option value="C++">C++</option>
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                    </table>
        
                    <div class="validation">
                        <input type="submit" value="Recherche">
                    </div>
                </form>
            </section>

            <section>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Resultat des rechreche</h3>
                            <i class='bx bx-search' ></i>
                            <i class='bx bx-filter'></i>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>Nom Etudiant</th>
                                    <th>Categorie</th>
                                    <th>Savoir plus</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($etudiants)){

                            foreach ($etudiants as $etudiant)
                            {
                                ?>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.svg" alt="">
                                    <p><?= $etudiant->getNom() ?></p>
                                </td>
                                <td><?= $etudiant->getCompetences() ?></td>
                                <td>
                                    <a href="index.php?action=detaillEtudiant&id=<?= $etudiant->getIdEtudiant() ?>">
                                        <span class="status pending">détail</span>
                                    </a>
                                </td>
                            </tr>
                            <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </section>

    <script src="./js/dashboard_admin.js"></script>
</body>
</html>