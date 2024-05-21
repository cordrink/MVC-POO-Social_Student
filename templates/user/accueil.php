<?php $title = 'Accueil etudiant' ?>
<?php ob_start() ?>

    <!------------------- SECTION BANNER ------------------->
    <section class="banner">
      <div class="info-filiere">
        <h2>git</h2>
        <p>conception, développement et gestion <br> des systèmes d'information et de communication</p>
      </div>

      <div class="img-banner">
        <img src="./templates/user/ressources/Designer.png" alt="banner">
      </div>
    </section>
    <section class="cards-perform">
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
    </section>
<?php $content = ob_get_clean(); ?>

<?php require './templates/user/layout.php' ?>