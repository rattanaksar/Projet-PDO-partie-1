<?php

class Clients
{

    private $pdo;

    function __construct(){
        try {
            // On se connecte à MySQL
            $this->pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'root');

        }
        catch( PDOException $Exception ) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Error : ' . $Exception->getMessage());
        }
    }
            // Si tout va bien, on peut continuer
    public function getAllClient(){
            // On récupère tout le contenu de la table Clients
        $sql = $this->pdo->query('SELECT `lastName` as lastName, `firstname` as firstName, `birthDate` as birthDate, `cardNumber` as `cardNumber`, CASE 
        WHEN `card` = 1 THEN \'Oui\'
        ELSE \'Non\'
        END as `card`
        FROM clients');

        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

}
/* WHERE `card` = 1 AND `cardNumber` IS NOT NULL */