<?php
    $title = "MVC | ERROR";
    ob_start();
?>

<!-- SECTION -->
<section class="container">
    <h1>ERROR 404</h1>
    <p><?= $error ?></p>    
</section>

<?php

    $content = ob_get_clean();
    require_once "./view/template/base.php";