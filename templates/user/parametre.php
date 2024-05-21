<?php $title = 'Parametre etudiant' ?>
<?php ob_start() ?>
    <section class="parametre-config-profil">
        <div class="presentation-profil">
            <h2>profil de <?= $_SESSION['nom'] ?></h2>
            <div class="profile">
                <div class="img">
                    <img src="./templates/entreprise/ressources/profit.svg" alt="parametre profil">
                </div>
                
                <ul class="list-contact">
                    <li class="img-name"> <span style="text-decoration: none; color: black; font-weight: bold">Nom: </span>
                        <?= $_SESSION['nom'] ?>
                    </li>
                    <li>
                        <span> <span style="text-decoration: none; color: black; font-weight: bold">Mail: </span>
                            <?php
                            if (!empty($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            } else {
                                echo 'Enregistez un email';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span> <span style="text-decoration: none; color: black; font-weight: bold">GITHUB: </span>
                            <?php
                            if (!empty($_SESSION['git'])) {
                                echo '@' . $_SESSION['git'];
                            } else {
                                echo 'Pseudo GITHUB';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span><span style="text-decoration: none; color: black; font-weight: bold">Ville: </span>
                            <?php
                            if (!empty($_SESSION['ville'])) {
                                echo $_SESSION['ville'];
                            } else {
                                echo 'Enregistez votre ville';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span><span style="text-decoration: none; color: black; font-weight: bold">Competance: </span>
                            <?php
                            if (!empty($_SESSION['competence'])) {
                                echo $_SESSION['competence'];
                            } else {
                                echo "Enregistez une competences";
                            }
                            ?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="description-profil">
                <p>
                    <?php
                    if (!empty($_SESSION['description'])) {
                        echo  $_SESSION['description'];
                    } else {
                        echo "<span style='color: gray'>Je suis...(faite une biographie)</span>";
                    }
                    ?>
                </p>
            </div>
        </div>

        <div class="complete-profil">
            <h2>Compléter mon profil</h2>
            <form method="post">
                <div class="config">
                    <div class="from-group">
                        <label for="nom">Nom utilisateur*</label>
                        <input type="text" disabled value="<?php if (!empty($_SESSION['nom'])) echo $_SESSION['nom'] ?>" required>
                    </div>
        
                    <div class="from-group">
                        <label for="ville">Ville*</label>
                        <input type="text" name="ville" id="ville" value="<?php if (!empty($_SESSION['ville'])) echo $_SESSION['ville'] ?>" required>
                    </div>
        
                    <div class="from-group">
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email" value="<?php if (!empty($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
                    </div>
        
                    <div class="from-group">
                        <label for="sexe">sexe</label>
                        <select name="sexe" id="sexe">
                            <option value="">-- Choisissez votre sexe --</option>
                            <option value="0">Femme</option>
                            <option value="1">Homme</option>
                        </select>
                    </div>
        
                    <div class="from-group">
                        <label for="git">Github*</label>
                        <input type="text" value="<?php if (!empty($_SESSION['git'])) echo $_SESSION['git']?>" id="git" name="git" required>
                    </div>
        
                    <div class="from-group">
                        <label for="cat">Categorie*</label>
                        <select name="competences" id="cat">
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
                    </div>
                </div>
    
                <!--<div class="statut-emploi">
                    <input type="checkbox" name="" id="emploi">
                    <label for="emploi">disponible pour emploi?</label>
                </div>-->
    
                <div class="biographie">
                    <label for="bio">Biographie*</label>
                    <textarea name="bio" id="bio" cols="30" rows="14"></textarea>
                </div>
    
                <div class="form-submit">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require './templates/user/layout.php' ?>