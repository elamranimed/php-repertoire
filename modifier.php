<?php
include("connexion.php");

$id = $_GET['id'];

$resultat = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$contact = mysqli_fetch_assoc($resultat);

if(isset($_POST['modifier']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $sql = "UPDATE contacts
            SET nom='$nom',
                prenom='$prenom',
                telephone='$telephone',
                email='$email',
                adresse='$adresse'
            WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Contact</title>
</head>
<body>

<h2>Modifier un contact</h2>

<form method="post">

    Nom :
    <input type="text" name="nom" value="<?php echo $contact['nom']; ?>">
    <br><br>

    Prénom :
    <input type="text" name="prenom" value="<?php echo $contact['prenom']; ?>">
    <br><br>

    Téléphone :
    <input type="text" name="telephone" value="<?php echo $contact['telephone']; ?>">
    <br><br>

    Email :
    <input type="email" name="email" value="<?php echo $contact['email']; ?>">
    <br><br>

    Adresse :
    <input type="text" name="adresse" value="<?php echo $contact['adresse']; ?>">
    <br><br>

    <input type="submit" name="modifier" value="Modifier">

</form>

</body>
</html>