<?php

class Shows
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
    public function getAllShows(){
            // On récupère tout le contenu de la table Clients
        $sql = $this->pdo->query('SELECT`title`as Spectacle,`performer`as Artiste,`date`,`startTime` as Heure FROM shows ORDER BY `title`ASC');

        return $sql->fetchAll(PDO::FETCH_OBJ);
        $sql->closeCursor();
    }
}
