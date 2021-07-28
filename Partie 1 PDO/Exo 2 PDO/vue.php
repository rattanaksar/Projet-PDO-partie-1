<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Types de spectacle</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type de spectacles</th>
    </thead>

    <tbody>
<?php

foreach($listeShowTypes as $key=>$value){

?>
        <tr>
            <td><?= $value->type?></td>
        </tr>
<?php 
}
?>

    </tbody>

</table>
    
</body>
</html>