<?php $title = 'Accueill Admin' ?>
<?php ob_start() ?>


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
                <img src="./templates/entreprise/ressources/profit.jpeg" alt="profit">
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
                
                <a href="#" class="btn-download">
                    <i class="bx bxs-cloud-download"></i>
                    <span class="text">Download</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Nombre d'etudiant</p>
                    </span>
                </li>

                <li>
                    <i class="bx bxs-calendar-check"></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New order</p>
                    </span>
                </li>

                <li>
                    <i class='bx bxs-file-import' ></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>fichier du mois</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Order</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter'></i>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.jpeg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">validé</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.jpeg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">validé</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.jpeg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">validé</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.jpeg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">validé</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="./templates/entreprise/ressources/profit.jpeg" alt="">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">validé</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="todo">
                    <div class="head">
                        <h3>A faire</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>

                    <ul class="todo-list">
                        <li class="not-completed">
                            <p>liste des taches</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="completed">
                            <p>liste des taches</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="not-completed">
                            <p>liste des taches</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="completed">
                            <p>liste des taches</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="not-completed">
                            <p>liste des taches</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </section>

    <script src="./templates/entreprise/js/dashboard_admin.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require './templates/admin/layout.php' ?>