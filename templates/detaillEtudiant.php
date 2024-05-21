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
    <title>detaill etudiant</title>
</head>
<body>
    <section class="parametre-config-profil">
        <div class="presentation-profil">
            <h2>profil de <?= $etudiantUp->getNom() ?></h2>
            <div class="profile">
                <div class="img">
                    <img src="./templates/entreprise/ressources/profit.svg" alt="parametre profil">
                </div>

                <ul class="list-contact">
                    <li class="img-name"> <span style="text-decoration: none; color: black; font-weight: bold">Nom: </span>
                        <?= $etudiantUp->getNom() ?>
                    </li>
                    <li>
                        <span> <span style="text-decoration: none; color: black; font-weight: bold">Mail: </span>
                            <?php
                            if (!empty($etudiantUp->getEmail())) {
                                echo $etudiantUp->getEmail();
                            } else {
                                echo 'Enregistez un email';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span> <span style="text-decoration: none; color: black; font-weight: bold">GITHUB: </span>
                            <?php
                            if (!empty($etudiantUp->getGit())) {
                                echo '@' . $etudiantUp->getGit();
                            } else {
                                echo 'Pseudo GITHUB';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span><span style="text-decoration: none; color: black; font-weight: bold">Ville: </span>
                            <?php
                            if (!empty($etudiantUp->getVille())) {
                                echo $etudiantUp->getVille();
                            } else {
                                echo 'Enregistez votre ville';
                            }
                            ?>
                        </span>
                    </li>
                    <li>
                        <span><span style="text-decoration: none; color: black; font-weight: bold">Competance: </span>
                            <?php
                            if (!empty($etudiantUp->getCompetences())) {
                                echo $etudiantUp->getCompetences();
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
                    if (!empty($etudiantUp->getBio())) {
                        echo  $etudiantUp->getBio();
                    } else {
                        echo "<span style='color: gray'>Je suis...(faite une biographie)</span>";
                    }
                    ?>
                </p>
            </div>
        </div>

        <div class="complete-profil">
            <?php
            foreach ($posts as $post) {
                ?>
                <div class="card">
                    <div class="pre-decription">
                        <img src="templates/user/ressources/photo_2022-11-24_07-09-01.jpg" alt="preview card">
                    </div>

                    <p class="description-project">
                        <img src="./templates/entreprise/ressources/profit.svg" alt="photo de profil">
                        <span class="decription"><span style="background: lightseagreen; color: white;margin: 0 3px; border-radius: 5px"><?= $post->getType() ?></span> <?= $post->getDescription() ?> . . .</span>
                        <span class="nb-comment"> >>> <a href="<?= $post->getLink() ?>">voir</a> <?= $post->getTitle() ?></span>
                    </p>
                </div>
            <?php } ?>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>

<?php require './templates/user/layout.php' ?>