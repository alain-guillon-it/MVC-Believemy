<?php

    require "./model/UserModel.php";
    require_once "./model/TestimonialModel.php";

    // Page d'accueil
    function home() {
        $request = getAllUsers();
        require_once "./view/listUsersView.php";
    }

    // Page d'avis
    function testimonial() {
        $request = getAllTestimonials();
        require_once "./view/listTestimonialsView.php";
    }
