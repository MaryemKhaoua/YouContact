<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
$Nom= ($_POST["Nom"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$address = htmlspecialchars($_POST["address"]);

if (strlen($Nom) < 2 )
{
    echo " Le nom d'utilisateur doit comporter au moins trois caractères";
}
else {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "youcontact";

    $conn = mysqli_connect('localhost', 'root', '','youcontact');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $date = date("Y-m-d");
    $sql = "INSERT INTO contacts (nom, tel, email, adresse) VALUES ('$Nom', '$tel', '$email', '$address')";
  
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
        header("Location: formulaire.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}