<?php

namespace Zyrass\MVC\model;

use PDO;

class TestimonialModel extends Manager {

    // Récupération de tous les avis en base de données
    function getAllTestimonials() {
        $bdd = $this->connexion();
        $request = $bdd->query('SELECT * FROM Testimonial');
        return $request;
    }

    // Ajouter un avis dans la base de donnée
    function postNewTestimonial($note, $message) {
        $bdd = $this->connexion();
        $request = $bdd->prepare(
            "INSERT INTO Testimonial(content, note) VALUES (:content, :note)"
        );
        $request->bindValue(":note", $note, PDO::PARAM_INT);
        $request->bindValue(":content", $message, PDO::PARAM_STR);
        $response = $request->execute();

        return $response;
    }

}
