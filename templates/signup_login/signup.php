<!doctype html>
<?php $title = 'Inscription' ?>
<?php ob_start() ?>
<div class="contGlobal">
    <div class="panneauGauche">
        <h1><strong>IUG</strong> search</h1>

        <!--------------------   formulaire etudiant   ------------------>
        <form action="index.php?action=inscription" method="post" class="formbloc noneForm">
            <h3>Inscrivez-vous</h3>

            <div class="formGroup">
                <label for="utilisateur">Utilisateur</label>
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

            <div class="formGroup">
                <label for="mdpConfirm">Confirmation du passe</label>
                <input type="password" id="mdpConfirm" name="mdpConfirm" required>
            </div>

            <div class="formGroup">
                <select name="filiere" id="departement">
                    <option value="">-- Choisissez votre filiere --</option>
                    <option value="GLO3">GLO3</option>
                    <option value="GLO4">GLO4</option>
                    <option value="GL05">GL05</option>
                </select>
            </div>

            <div class="formGroup submit">
                <input type="submit" value="Inscription" name="subEtudiant" class="buttonSub">
            </div>
        </form>

        <!--------------------   formulaire Entreprise   ------------------>
        <form action="index.php?action=inscription" method="post" class="formbloc noneForm">
            <h3>Enregistrez votre structure</h3>

            <div class="formGroup">
                <label for="structure">Nom_Structure</label>
                <input type="text" id="structure" name="nomStructure" required>
            </div>

            <div class="formGroup">
                <label for="idStruct">Utilisateur</label>
                <input type="text" id="idStruct" name="nomUtilisateur" required>
            </div>

            <div class="formGroup">
                <label for="mdp1">Mot de passe</label>
                <input type="password" id="passEntreprise" name="passEntreprise" required>
            </div>

            <div class="formGroup">
                <label for="mdpStruct">Confirmation du passe</label>
                <input type="password" id="mdpStruct" name="mdpStruct" required>
            </div>

            <div class="formGroup submit">
                <input type="submit" value="Inscription" name="subEntreprise" class="buttonSub">
            </div>
        </form>
    </div>

    <!----      panneau droit Zone de choix de connection      ---->
    <div class="panneauDroit">
        <div class="font_login">
            <img src="./templates/signup_login/ressource/Login_presentation.jpg" alt="font login">
        </div>

        <h1>S'inscrire en <br> tant que...</h1>

        <div class="illustration">
            <div class="login_stick">
                <img src="./templates/signup_login/ressource/rafiki%20svg2.svg" alt="stick_etudiant">
                <span>Etudiant</span>
            </div>

            <div class="login_stick">
                <img src="./templates/signup_login/ressource/rafiki%20startup.svg" alt="stick_entreprise">
                <span>Entreprise</span>
            </div>
        </div>

        <div class="btn-change">
            <a href="index.php">connexion</a>
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
<script src="./templates/signup_login/js/inscription.js"></script>
<?php $content = ob_get_clean(); ?>

<?php require './templates/signup_login/layout.php' ?>