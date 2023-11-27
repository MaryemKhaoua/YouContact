<?php 




if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $sql = "UPDATE contacts SET nom='$nom', tel='$tel', email='$email', adresse='$adresse' WHERE id_user=$id";
    mysqli_query($conn, $sql);
    header('location: index.php'); }








?>