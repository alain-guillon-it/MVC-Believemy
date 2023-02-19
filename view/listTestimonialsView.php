<?php ob_start() ?>

<!-- SECTION -->
<section class="container">
    <h1>Bienvenue sur mon site MVC</h1>

    <fieldset>
        <legend>Ajouter un avis</legend>
        <form action="/avis" method="post">
            
                <label for="note">Note sur 5</label>
                <input type="number" name="note" id="note" min="0" max="5">

                <label for="message">Message</label>
                <input type="text" name="message" id="message"></input>
            
                <button type="submit">Ajouter cet avis</button>
            
        </form>
    </fieldset>
    <br><br>
    <fieldset>
        <legend>Les avis</legend>

        <p>Voici la liste des avis</p>
        <?php
            // Boucle sur la Query
            while ( $avis = $request->fetch()) :
        ?>
            <!-- Conception d'un paragraphe avec le contenu de la base de donner -->
            <ul>
                <li>
                    <strong><?= $avis["note"] ?>/5</strong> &mdash; <em><?= $avis["content"] ?></em>
                </li>
            </ul>
        <?php endwhile; ?>
    </fieldset>



</section>

<?php

    $content = ob_get_clean();
    require_once "view/template/base.php";