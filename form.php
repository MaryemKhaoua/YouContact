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
    <form  method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
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