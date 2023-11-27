<?php 
include './connexion.php';


$id = $_GET['id']; 

$sql = "DELETE FROM contacts WHERE id_contact = $id";
mysqli_query($conn, $sql);



header('location: index.php'); 

?>