<?php

namespace Zyrass\MVC\model;

use PDO;
use Exception;

class Manager {

    // Connexion
    protected function connexion() {
        try {
            // Connection à la base de donnée
            $bdd = new PDO('mysql:host=localhost;dbname=Believemy_PHP;charset=utf8', 'zyrass', 'Aa2fe1aec4$');
        } catch (Exception $e) {
            throw new Exception('Erreur : '.$e->getMessage());
        }
        return $bdd;
    }

}
