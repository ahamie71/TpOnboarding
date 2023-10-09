<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>TP OnBoarding</title>
</head>

<body>
    <?php
    include 'include/navbar.php';
    ?>
    <section class="mainContainer">
        <div class="container text-center py-5 mb-4 ">
            <div class="p-5 mb-4 lc-block">
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <h1 class="fw-bold display-2">Bienvenue dans notre boutique de lunettes</h1>
                        <h2 class="fw-bold display-2">Découvrez notre collection<br></h2>
                    </div>
                </div>
                <div class="lc-block mb-5">
                    <div editable="rich">
                        <p class="lead">Bienvenue dans notre boutique de lunettes<br>Découvrez notre collection de lunettes.</p>
                    </div>
                </div>
                <div class="lc-block mb-2">
                    <a class="btn btn-success" href="#" role="button">Go !</a>
                </div>
                <div class="lc-block">
                    <a class="btn btn-link btn-sm" href="#" role="button">En savoir plus</a>
                </div>
            </div>
        </div>


        <section class="container mt-5">
            <h2>Nos Produits Phares</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="/public//images/lunette1.jpg" alt="Lunette 1" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Lunette de Vue 1</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="/public//images/lunette2.jpg" alt="Lunette 2" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Lunette de Vue 2</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="btn btn-primary">Acheter maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php include 'include/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="public/js/main.js"></script>
</body>

</html>