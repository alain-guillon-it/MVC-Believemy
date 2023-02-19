<?php

$title = "MVC | Avis";
ob_start();

?>

<!-- SECTION -->
<section class="container">
    <h1>Bienvenue sur mon site MVC</h1>
    <p>Voici la liste des avis</p>

    <?php
        // Boucle sur la Query
        while ( $avis = $request->fetch()) :
    ?>
        <!-- Conception d'un paragraphe avec le contenu de la base de donner -->
        <dl>
            <dt><?= $avis["created_at"] ?>/5</dt>
            <dd>
                <h4><?= $avis["note"] ?>/5</h4>
                <p><?= $avis["content"] ?></p>
            </dd>
        </dl>
    <?php endwhile; ?>

</section>

<?php

    $content = ob_get_clean();
    require_once "./view/template/base.php";