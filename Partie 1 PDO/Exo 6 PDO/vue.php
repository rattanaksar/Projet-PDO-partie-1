<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Spectacle</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Exercice 6</h1>
    <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>
    <table class="table table-bordered">

        <thead>
            <tr>
                <th scope="col">Spectacle</th>
                <th scope="col">Artiste</th>
                <th scope="col">Date</th>
                <th scope="col">Heure de représentation</th>
            </tr>
        </thead>

        <tbody>

    <?php

    foreach($listeShows as $key=>$value){

    ?>
            <tr>
                <td><?= $value->Spectacle?></td>
                <td><?= $value->Artiste?></td>
                <td><?= $value->date?></td>
                <td><?= $value->Heure?></td>

            </tr>
    <?php 
    }
    ?>

        </tbody>

    </table>
</body>
</html>