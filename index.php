<?php

use Zyrass\MVC\controller\ControllerManager;

ini_set("display_errors", 1);

require_once "vendor/autoload.php";

$URI = trim(htmlspecialchars(strtolower($_SERVER["REQUEST_URI"])));

try {
    switch ($URI) {
        case "/":
            $instance = new ControllerManager("MVC | Accueil");
            $instance->home();
            break;

        case "/avis":

            if ( 
                (isset($_POST["note"]) && ($_POST["note"] >= 0 || $_POST["note"] <= 5)) &&
                !empty($_POST["message"])
            ) {
                $note = trim(htmlspecialchars($_POST["note"]));
                $message = trim(htmlspecialchars($_POST["message"]));

                $instance = new ControllerManager();
                $instance->addTestimonial($note, $message);
            } else {
                $instance = new ControllerManager();
                $instance->testimonial();
            }

            break;

        default:
            throw new Exception("Désolé cette page n'existe pas...");
            break;
    }
} catch (Exception $e) {
    $error = $e->getMessage();
    require_once "view/errorView.php";
}

