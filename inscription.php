<?php
include 'connexion.php';

if (isset($_POST['inscri'])) {
    $username = ($_POST["username"]);
    $password = ($_POST["password"]);
    $confirmPassword = ($_POST["confirmPassword"]);
    $date = date('Y-m-d');

    $sql = "INSERT INTO utilisateurs (username, pssword, date_iscription) VALUES ('$username', '$password', '$date')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $id_user = mysqli_insert_id($conn);
        $_SESSION['id_user'] = $id_user;
        
        header("Location: profile.php");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>YouContact</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<main class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <img src="2.png" class="img-fluid" alt="image2">
        </div>
        <div class="col-md-6">
            <h2 class="text-center mb-4">Inscription</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Vérification du mot de passe</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                </div>
                <button type="submit" name="inscri" class="btn btn-primary btn-block">S'inscrire</button>
            </form>
        </div>
    </div>
</main>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>