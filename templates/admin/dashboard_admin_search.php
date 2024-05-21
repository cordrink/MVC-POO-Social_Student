<?php $title = 'Recherche etudiant' ?>
<?php ob_start() ?>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bx-smile'></i>
            <span class="text">Admin POLYC</span>
        </a>

        <ul class="side-menu top">
            <li>
                <a href="dashboard_admin.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li class="active">
                <a href="#">
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
                <a href="#">
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
                <img src="./ressources/profit.jpeg" alt="profit">
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
                
                <a href="#" class="btn-download">
                    <i class="bx bxs-cloud-download"></i>
                    <span class="text">Download</span>
                </a>
            </div>
            <!-- zone de chngement principale -->
            

            <section class="fromSearch">
                <div class="title-form">
                    <i class='bx bx-search'></i>
                    <h3>Critères de recherche</h3>
                </div>
        
                <form action="" method="post">
                    <table class="table-search">
                        <tr>
                            <td><label for="name">Nom</label></td>
                            <td><input type="text" id="name"></td>
                        </tr>
                        <tr>
                            <td><label for="mat">Matricule</label></td>
                            <td><input type="text" id="mat"></td>
                        </tr>
                        <tr>
                            <td><label for="axe">Axe</label></td>
                            <td>
                                <select name="" id="">
                                    <option selected value="">-- Tous les axes --</option>
                                    <option value="">GLO</option>
                                    <option value="">GRT</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="cate">Categorie</label></td>
                            <td class="category">
                                <select name="" id="">
                                    <option class="select" selected value="">-- Toutes les catégories --</option>
                                    <optgroup label="Developpement">
                                        <option value="Python">Python</option>
                                        <option value="hc">html/css</option>
                                    </optgroup>
                                    <optgroup label="Developpement">
                                        <option value="Python">Python</option>
                                        <option value="hc">html/css</option>
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
        </main>
    </section>

    <script src="./js/dashboard_admin.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require './templates/admin/layout.php' ?>