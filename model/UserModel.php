<?php

use PDO;

// Récupération de toutes les données
function getAllUsers() {
    try {
        // Connection à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=Believemy_PHP;charset=utf8', 'zyrass', 'Aa2fe1aec4$');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    // Request SQL
    $request = $bdd->query('SELECT * FROM Users');
    return $request;
}
