<?php
include '../include/navbar.php';
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/listproducts.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
 
<body>
    <!-- Include your navigation bar -->
    
   

    <h1 class="text-center mt-4">Liste de Lunettes</h1>
    <div class="container mt-2">
    <input type="text" id="searchInput" class="form-control" placeholder="Rechercher par nom...">
</div>

    <div class="container mt-2">
        <button onclick="sortCards('name', 'asc')" class="btn btn-dark">Trier par Nom (Croissant)</button>
        <button onclick="sortCards('name', 'desc')" class="btn btn-dark">Trier par Nom (Décroissant)</button>
        <button onclick="sortCards('price', 'asc')" class="btn btn-dark">Trier par Prix (Croissant)</button>
        <button onclick="sortCards('price', 'desc')" class="btn btn-dark">Trier par Prix (Décroissant)</button>
    </div>


    <div class="container mt-4">
        <div class="row" id="glassesContainer">
          
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette1.jpg"  style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 1">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de soleil</h5>
                            <p class="card-text">Prix : 49.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette2.png" style="width: 300px; height: 200px;"  class="card-img-top" alt="Lunette 2">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de piscine</h5>
                            <p class="card-text">Prix : 213.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette3.jpg"  style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de soleil</h5>
                            <p class="card-text">Prix : 134.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette8.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de piscine</h5>
                            <p class="card-text">Prix : 434.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette6.jpg" style="width: 300px; height: 200px;"class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunette de luxe</h5>
                            <p class="card-text">Prix : 554.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette90.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes vertes </h5>
                            <p class="card-text">Prix : 834.99 €</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette90.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes vertes </h5>
                            <p class="card-text">Prix : 834.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette90.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes vertes </h5>
                            <p class="card-text">Prix : 834.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../public/images/lunette90.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes vertes </h5>
                            <p class="card-text">Prix : 834.99 €</p>
                        </div>
                    </div>
                </div>
              
                <!-- Add more cards here -->
            
        </div>
    </div>

    <!-- Include your JavaScript libraries, such as Bootstrap and jQuery, here -->

    <script src="../public/js/listproduct.js">
   
    </script>

</body>
</html>

