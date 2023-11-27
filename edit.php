
<?php
include 'connexion.php';

$id = $_GET['id'];
$select = "SELECT * FROM contacts WHERE id_contact = $id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($res);
    $ID = $row['id_contact'];
    $nom = $row['nom'];
    $tel = $row['tel'];
    $email = $row['email'];
    $adresse = $row['adresse'];
 
    if (isset($_POST['submit'])) {
        $id=$_POST["id"];
        $nom = $_POST["nom"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $adresse = $_POST["adresse"];
        $sql = "UPDATE `contacts` SET `nom`='$nom',`tel`='$tel',`email`='$email',`adresse`='$adresse' WHERE id_contact='$id'";
        $resu=mysqli_query($conn, $sql);
        if($resu){
        header('location: index.php'); }
    else{
        header('location: home.php');
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
    <h2>Edit Contact</h2>
    <form method="post" action="">
        <input type="hidden"  name="id" value="<?php echo $ID ?>">
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
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
            <div class=" col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/php/index.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
