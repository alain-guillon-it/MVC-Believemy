<?php

    ini_set("display_errors", 1);

    require_once "./controller/controller.php";

    $URI = trim(htmlspecialchars(strtolower($_SERVER["REQUEST_URI"])));

    try {
        switch ($URI) {
            case "/":
                home();
                break;
    
            case "/avis":
                testimonial();
                break;

            default:
                throw new Exception("Désolé cette page n'existe pas...");
                break;
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
        require_once "./view/errorView.php";
    }

