<?php

class ShowTypes
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
    public function getAllShowTypes(){
            // On récupère tout le contenu de la table Clients
        $sql = $this->pdo->query('SELECT `type` FROM `showTypes`');

        return $sql->fetchAll(PDO::FETCH_OBJ);
    } 
}
