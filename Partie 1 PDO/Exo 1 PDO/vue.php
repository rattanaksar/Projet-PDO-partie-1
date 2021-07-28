<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste CLients</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Numéro carte de fidélité</th>
        </tr>
    </thead>

    <tbody>


<?php

foreach($listeClients as $key=>$value){

?>
        <tr>


            <td><?= $value->nom?></td>
            <td><?= $value->prenom?></td>
            <td><?= $value->dateNaissance?></td>
            <td><?= $value->carteFidelite?></td>

        </tr>
<?php 
}
?>

    </tbody>

</table>
    
</body>
</html>