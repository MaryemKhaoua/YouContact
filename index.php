<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container my-5">
    <h2>Contacts List</h2>
    <a class="btn btn-primary" href="/php/insert.php" role="button">Nouveau Contact</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connexion.php';
            
            $query = "SELECT * FROM contacts";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                <td>$row[id_contact]</td>
                <td>$row[nom]</td>
                <td>$row[tel]</td>
                <td>$row[email]</td>
                <td>$row[adresse]</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='/php/edit.php?id=$row[id_contact]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id_contact]'>delete</a>
                </td>
                </tr> ";
            }
            ?>

        </tbody>
    </table>
    </div>
</body>
</html>