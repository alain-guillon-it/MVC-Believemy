<?php
    $title = "MVC | Accueil";
    ob_start();
?>

<!-- SECTION -->
<section class="container">
    <h1>Bienvenue sur mon site MVC</h1>
    <p>Voici la liste des utilisateurs :</p>

    <?php
        // Boucle sur la Query
        while ( $users = $request->fetch()) :
    ?>
        <!-- Conception d'un paragraphe avec le contenu de la base de donner -->
        <p>
            <b><?= $users["first_name"] ?> <?= $users["last_name"] ?></b> : <?= $users["email"] ?>
        </p>
    <?php endwhile; ?>

</section>

<?php

    $content = ob_get_clean();
    require_once "./view/template/base.php";