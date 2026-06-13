<?php

include("connexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id=$id";

mysqli_query($conn, $sql);

header("Location:index.php");

?>