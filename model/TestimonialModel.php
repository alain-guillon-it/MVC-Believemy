<?php

    // Récupération de tous les avis en base de données
    function getAllTestimonials() {
        try {
            // Connection à la base de donnée
            $bdd = new PDO('mysql:host=localhost;dbname=Believemy_PHP;charset=utf8', 'zyrass', 'Aa2fe1aec4$');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        $request = $bdd->query('SELECT * FROM Avis');
        return $request;
    }