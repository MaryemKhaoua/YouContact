<?php
include 'connexion.php';

     $nom = "";
     $tel ="";
     $email = "";
     $adresse = "";
     if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nom = $_POST['nom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];

        $sql = "INSERT INTO contacts (nom, tel, email, adresse) VALUES ('$nom', '$tel', '$email', '$adresse')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Contact added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2>New Contact</h2>
    <form method="post">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nom</label>
            <div>
                <input type="text" class="form-control" name="nom" value="<?php echo $nom ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Tel</label>
            <div>
                <input type="text" class="form-control" name="tel" value="<?php echo $tel ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
            <div>
                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Adresse</label>
            <div>
                <input type="text" class="form-control" name="adresse" value="<?php echo $adresse ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            <div class=" col-sm-3 d-grid">
                <a  class="btn btn-outline-primary" href="/php/index.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>