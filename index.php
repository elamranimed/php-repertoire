
<?php
include("connexion.php");

$sql = "SELECT * FROM contacts";
$resultat = mysqli_query($conn, $sql);

while($ligne = mysqli_fetch_assoc($resultat))
{
    echo $ligne['id']." ";
    echo $ligne['nom']." ";
    echo $ligne['prenom']." ";
    echo $ligne['telephone']." ";
    echo "<br>";
}
?>
