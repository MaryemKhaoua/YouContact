<?php


   include 'Connexion.php';
   $id = $row['id_user'];
   $nom = $row['nom'];
   $tel = $row['tel'];
   $email = $row['email'];
   $adresse = $row['adresse'];
 
   $sql = "UPDATE contacts SET nom='$nom', tel='$tel', email='$email', adresse='$adresse' WHERE id_user=6";
   $qu =mysqli_query($conn, $sql);
   

     if($qu){
      header("Location: ./view.php");

     }
     else{
      echo "failed";
     }




?>