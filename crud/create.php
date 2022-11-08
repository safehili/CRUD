<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

<?php
include 'connexion.php';

    if ((isset ($_POST['nom']) && isset($_POST['prenom'])) && isset($_POST['datenaissance'])){
    if(isset($_POST['submit'])){
    $nom= $_POST['nom'];
    $prenom=$_POST['prenom'];
    $dateNaissance=$_POST['datenaissance'];

$sql = " INSERT INTO adherent (nom, prenom, datenaissance) VALUES ('$nom', '$prenom', '$dateNaissance')";
$resultat = mysqli_query($mysqli, $sql);
} 

if($resultat) {
    //echo" Données ajoutées avec succes !";
    header('location: listeUser.php');
}
/*else{
    die(mysqli_error($mysqli));
}*/
}
?>


<div class="container my-5">
    <h2>Nouveau adherent </h2>
 

    <form action ="" method="POST">
        <div class="row mb-3">
            <label class="col-sm- col-form-label">Nom</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nom" value="">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm- col-form-label">Prénom</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="prenom" value="">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm- col-form-label">Date de naissance</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="datenaissance" value="">
            </div> 
        </div>

        <div class="row mb-3">
            
            <div class="offset-sum-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary"> Valider</button>
            </div>

            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/CRUD/listeUser.php" role="button"> Annuler </a>
            </div>

        </div>

    </form>
</div>
</body>

</html>

