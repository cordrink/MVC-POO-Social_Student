<?php $title = 'Connexion' ?>
<?php ob_start() ?>
    <div class="contGlobal">
        <div class="panneauGauche">
            <h1><strong>IUG</strong> search</h1>

            <form action="index.php" method="post" class="formbloc noneForm">
                <h3>Identifiez-vous</h3>

                <div class="formGroup">
                    <label for="utilisateur">Nom_Etudiant</label>
                    <input type="text" id="utilisateur" name="nom" required>
                </div>

                <div class="formGroup">
                    <label for="matricule">Matricule</label>
                    <input type="text" id="matricule" name="matricule" required>
                </div>

                <div class="formGroup">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="passEtudiant" required>
                </div>

                <div class="formGroup submit">
                    <input type="submit" value="Connexion" name="etudiant" class="buttonSub">
                </div>

                <div class="mdpPerdu">
                    <a href="#">Mot de passe perdu ?</a>
                </div>
            </form>

            <form action="index.php" method="post" class="formbloc noneForm">
                <h3>Identifiez votre structure</h3>

                <div class="formGroup">
                    <label for="structure">Nom_Structure</label>
                    <input type="text" id="structure" name="nomStructure" required>
                </div>

                <div class="formGroup">
                    <label for="mdp1">Mot de passe</label>
                    <input type="password" id="mdp1" name="passEntreprise" required>
                </div>

                <div class="formGroup submit">
                    <input type="submit" value="Connexion" name="entreprise" class="buttonSub">
                </div>

                <div class="mdpPerdu">
                    <a href="#">Mot de passe perdu ?</a>
                </div>
            </form>

            <form action="index.php" method="post" class="formbloc noneForm admin">
                <h3>Identifiez vous Admin</h3>

                <div class="formGroup">
                    <label for="admin">Pseudo_admin</label>
                    <input type="text" id="admin" name="nomAdmin" required>
                </div>

                <div class="formGroup">
                    <label for="mdp2">Mot de passe</label>
                    <input type="password" id="mdp2" name="passAdmin" required>
                </div>

                <div class="formGroup">
                    <select name="departement" id="departement">
                        <option value="">-- Choisissez le departement --</option>
                        <option value="GLO3">GLO3</option>
                        <option value="GLO4">GLO4</option>
                        <option value="GL05">GL05</option>
                    </select>
                </div>

                <div class="formGroup submit">
                    <input type="submit" value="Connexion" name="admin" class="buttonSub">
                </div>

                <div class="mdpPerdu">
                    <a href="#">Mot de passe perdu ?</a>
                </div>
            </form>
        </div>

        <div class="panneauDroit">
            <div class="font_login">
                <img src="./templates/signup_login/ressource/Login_presentation.jpg" alt="font login">
            </div>

            <h1>Se connecter en <br> tant que...</h1>

            <div class="illustration">
                <div class="login_stick">
                    <img src="./templates/signup_login/ressource/rafiki%20svg2.svg" alt="">
                    <span>Etudiant</span>
                </div>

                <div class="login_stick">
                    <img src="./templates/signup_login/ressource/rafiki%20startup.svg" alt="">
                    <span>Entreprise</span>
                </div>

                <div class="login_stick">
                    <img src="./templates/signup_login/ressource/rafiki%205.svg" alt="">
                    <span>Administrateur</span>
                </div>
            </div>

            <div class="btn-change">
                <a href="index.php?action=inscription">Inscription</a>
            </div>
        </div>
    </div>

    <script>
        const input_fields = document.querySelectorAll('input');

        for (let i = 0; i < input_fields.length; i++) {
            let field = input_fields[i];

            field.addEventListener('input', function (e) {
                if (e.target.value !== "") {
                    e.target.parentNode.classList.add('animation');
                } else {
                    e.target.parentNode.classList.remove('animation');
                }
            });
        }
    </script>
    <script src="./templates/signup_login/js/connection.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require './templates/signup_login/layout.php' ?>
