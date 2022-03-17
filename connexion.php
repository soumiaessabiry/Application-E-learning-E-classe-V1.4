<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db='e_classe_db';

    //On établit la connexion
    $conn = mysqli_connect($servername, $username, $password,$db);

    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    // echo 'Connexion réussie';
?>