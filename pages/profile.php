<?php session_start();
if(!isset($_SESSION['user'])){
    header('Location:auth_login.php'); 
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include '../include/navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/public/images/alexander-hipp-iEEBWgY_6lA-unsplash.jpg" class="card-img-top" alt="Image de profil">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name']?></h5>
                        <p class="card-text">Développeur Web</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Mon Profil
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Informations Personnelles</h5>
                        <p class="card-text">Nom: <?= $user['name']?></p>
                        <p class="card-text">Email: <?= $user['email']?></p>
                        <p class="card-text">Téléphone: (123) 456-7890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>