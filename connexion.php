<?php

// Informations de connexion
$host = 'localhost';
$dbname = 'repertoire';
$username = 'root';
$password = '';

// Connexion procédurale
$conn = mysqli_connect ($host, $username, $password, $dbname);

// Vérification de la connexion
if (mysqli_connect_error()) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
echo "Connexion réussie avec MySQLi !";

?>