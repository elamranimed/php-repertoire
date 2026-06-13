<?php
include("connexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recherche Contact</title>
</head>
<body>

<h2>Recherche</h2>

<form method="post">

    <input type="text" name="motcle" placeholder="Nom ou téléphone">

    <input type="submit" name="rechercher" value="Rechercher">

</form>

<br>

<?php

if(isset($_POST['rechercher']))
{
    $motcle = $_POST['motcle'];

    $sql = "SELECT * FROM contacts
            WHERE nom LIKE '%$motcle%'
            OR telephone LIKE '%$motcle%'";

    $resultat = mysqli_query($conn, $sql);

    while($ligne = mysqli_fetch_assoc($resultat))
    {
        echo $ligne['nom']." ";
        echo $ligne['prenom']." - ";
        echo $ligne['telephone'];
        echo "<br>";
    }
}

?>

<br>
<a href="index.php">Retour</a>

</body>
</html>