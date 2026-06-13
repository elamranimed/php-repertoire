<?php
include("connexion.php");

if(isset($_POST['ajouter']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $sql = "INSERT INTO contacts(nom, prenom, telephone, email, adresse)
            VALUES('$nom','$prenom','$telephone','$email','$adresse')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Contact</title>
</head>
<body>

<h2>Ajouter un contact</h2>

<form method="post">

    Nom :
    <input type="text" name="nom" required>
    <br><br>

    Prénom :
    <input type="text" name="prenom" required>
    <br><br>

    Téléphone :
    <input type="text" name="telephone" required>
    <br><br>

    Email :
    <input type="email" name="email">
    <br><br>

    Adresse :
    <input type="text" name="adresse">
    <br><br>

    <input type="submit" name="ajouter" value="Ajouter">

</form>

<br>
<a href="index.php">Retour</a>

</body>
</html>