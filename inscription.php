<?php
(isset($_POST['submit'])){
    
$Nom= ($_POST["Nom"]);
$tel = ($_POST["tel"]);
$email = ($_POST["email"]);
$address = ($_POST["address"]);

if (strlen($Nom) < 2 )
{
    echo " Le nom d'utilisateur doit comporter au moins trois caractères";
}

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "youcontact";
    $date = date("Y-m-d");

    $sql = "INSERT INTO contacts (nom, tel, email, adresse) VALUES ('$Nom', '$tel', '$email', '$address')";
    mysqli_query($conn, $sql);

header("Location: formulaire.php");
}
?>