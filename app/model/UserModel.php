<?php

namespace Zyrass\MVC\model;

class UserModel extends Manager {

    // Récupération de toutes les données
    function getAllUsers() {
        $bdd = $this->connexion();
        $request = $bdd->query('SELECT * FROM User');
        return $request;
    }

}
