<?php include 'connexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouConact</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="1.png" class="w-100" alt="image1">
            </div>
            <div class="col-md-6 text-center">
                <h1 class="display-3">Bienvenue sur YouContact</h1>
                <p>Découvrez une nouvelle expérience de gestion de contacts avec YouContact. Créez votre compte dès maintenant pour accéder à des fonctionnalités exclusives. Simplifiez la gestion de vos contacts personnels et professionnels de manière intuitive et sécurisée.</p>
                <p>
                  <a href="inscription.php" class="btn btn-success">S'inscrire</a>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Se connecter</a>
              </p>
              </div>
        </div>
    </div>
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 YouContact. All rights reserved.</p>
    </footer>
</body>
</html>