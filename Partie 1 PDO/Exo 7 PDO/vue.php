<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Clients</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Afficher tous les clients comme ceci : </p>
        <ul>
            <li>Nom : Nom de famille du client</li>
            <li>Prénom : Prénom du client</li>
            <li>Date de naissance : Date de naissance du client</li>
            <li>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</li>
            <li>Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</li>
        </ul>
    <table class="table table-bordered">
        <thead class ="table-primary">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Carte de fidelité</th>
                <th scope="col">Numéro carte de fidélité</th>
            </tr>
        </thead>

        <tbody>

    <?php

    foreach($listeClients as $key=>$value){

    ?>
            <tr>


                <td><?= $value->lastName?></td>
                <td><?= $value->firstName?></td>
                <td><?= $value->birthDate?></td>
                <td><?= $value->card?></td>
                <td><?= $value->cardNumber?></td>

            </tr>
    <?php 
    }
    ?>

        </tbody>

    </table>
</body>
</html>