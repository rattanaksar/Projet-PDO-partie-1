<?php

class Clients
{

    private $pdo;

    function __construct(){
        try {
            // On se connecte à MySQL
            $this->pdo = new PDO("mysql:host=localhost;dbname=colyseum;charset=utf8", 'root', 'root');

        }
        catch( PDOException $Exception ) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Error : ' . $Exception->getMessage());
        }
    }
            // Si tout va bien, on peut continuer
    public function getAllClient(){
            // On récupère tout le contenu de la table Clients
        $sql = $this->pdo->query('SELECT`lastName` as nom, `firstname` as prenom, `birthDate` as dateNaissance, `cardNumber` as carteFidelite FROM clients WHERE `card` = 1');

        return $sql->fetchAll(PDO::FETCH_OBJ);
        $sql->closeCursor();
    }
    
}
