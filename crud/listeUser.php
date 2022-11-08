<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
  <!--ajouter marge pour le container --> 
<div class="container my-5">
    <h2>La liste des adherents</h2>
    <!-- le bouton qui permet d'ajouter et diriger vers la page creat.php -->
    <a class="btn btn-primary" href="/CRUD/create.php" role="button">Ajouter un adherent</a>
    <br>

    <table class="table">
<thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>

<?php include("connexion.php"); ?> 
 

 <?php
 $requeteRead = "SELECT * FROM adherent";
$result = mysqli_query($mysqli, $requeteRead);

//verifier si la requete est correcte
if (!$result) {
    die("Erreur requete" . $mysqli_error);
}

//lire les donnees de chaque ligne 

foreach($result as $adherent){

?> 
    <tr>
        <td><?= $adherent['id']; ?></td>
        <td><?= $adherent['nom']; ?></td>
        <td><?= $adherent['prenom']; ?></td>
        <td><?= $adherent['dateNaissance']; ?></td>
        <td>
            <a href="/CRUD/update.php" class="btn btn-success btn-sm">Modifier</a>
            <a href="/CRUD/delete.php" class="btn btn-danger btn-sm">Supprimer</a>
        </td> 
        
    </tr>
<?php
}




?>


    
</tbody>
    </table>
</div>
</body>
</html>