<?php

namespace Zyrass\MVC\controller;

use Exception;
use Zyrass\MVC\model\UserModel;
use Zyrass\MVC\model\TestimonialModel;

class ControllerManager {
    private $_title;

    private function getTitle() {
        return $this->_title;
    }

    private function setTitle($title) {
        $this->_title = $title;
    }

    // Page d'accueil
    function home() {
        $userModel = new UserModel();
        $request = $userModel->getAllUsers();
        $this->setTitle("MVC | Liste des utilisateurs");
        $title = $this->getTitle();

        require_once "view/listUsersView.php";
    }

    // Page d'avis
    function testimonial() {
        $testimonialModel = new TestimonialModel();
        $request = $testimonialModel->getAllTestimonials();
        $this->setTitle("MVC | Liste des avis");
        $title = $this->getTitle();
        require_once "view/listTestimonialsView.php";
    }

    // Ajouter un avis
    function addTestimonial($note, $message) {
        $testimonialModel = new TestimonialModel();
        $response = $testimonialModel->postNewTestimonial($note, $message);

        if (!$response) {
            throw new Exception("Impossible d'ajouter votre avis pour le moment.");
        } else {
            header("Location: /avis");
        }
    }
}
