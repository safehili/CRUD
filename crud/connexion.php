<?php
   //créer la connexion
   $host = "localhost";
    $username = "root";
    $password = "";
    $database = "club";
    
    $mysqli = mysqli_connect($host, $username, $password, $database);
    
  //verifier la connexion
  if($mysqli->connect_error){
    die("Connection failed: " .$mysqli->connect_error);
  }

?>