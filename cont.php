<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des contacts</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
include('navbar.php');
?>
    <div class="container mt-4">
      <h1>Liste des contacts</h1>
      
      <!-- Code PHP ajouté -->
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $tel = htmlspecialchars($_POST["telephone"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["adresse"]);

        if (strlen($nom) < 2) {
          echo "Le nom d'utilisateur doit comporter au moins deux caractères.";
        } else {
          $servername = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "youcontact";

          $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "INSERT INTO contacts (nom, tel, email, adresse) VALUES ('$nom', '$tel', '$email', '$address')";

          if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie!";
            header("Location: formulaire.php");
            exit();
          } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();
        }
      }
      ?>
      <!-- Fin du code PHP ajouté -->

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Adresse</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Boucle pour afficher les contacts -->
          <!-- Remplacer les éléments <td> avec les données réelles -->
          <tr>
            <td>John Doe</td>
            <td>(123) 456-7890</td>
            <td>john.doe@example.com</td>
            <td>123 Rue Principale</td>
            <td>
              <a href="#" class="btn btn-primary">Modifier</a>
              <a href="#" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>
        </tbody>
      </table>

      <h2>Ajouter/Modifier un contact</h2>

      <form method="POST" action="">
        <div class="form-group">
          <label for="nom">Nom*</label>
          <input type="text" class="form-control" id="nom" name="Nom" required>
          <!-- Afficher un message d'erreur si le nom est vide -->
          <div class="invalid-feedback">Ce champ est obligatoire.</div>
        </div>
        <div class="form-group">
          <label for="telephone">Téléphone</label>
          <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9()+-]{10,}" maxlength="15">
          <!-- Afficher un message d'erreur si le téléphone est invalide -->
          <div class="invalid-feedback">Numéro de téléphone invalide.</div>
        </div>
        <div class="form-group">
          <label for="email">E-mail*</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <!-- Afficher un message d'erreur si l'e-mail est invalide -->
          <div class="invalid-feedback">E-mail invalide.</div>
        </div>
        <div class="form-group">
          <label for="adresse">Adresse</label>
          <textarea class="form-control" id="adresse" name="adresse" maxlength="255"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
    </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>