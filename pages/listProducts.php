


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


 
<body>
    <!-- Include your navigation bar -->
      
    <?php
    include '../include/navbar.php';
  ?>

    <div class="container mt-4">
    <div class="row">
        <div class="col-12">
            
            <div id="nombre-produits" class="float-right mb-3"></div>


         

        </div>
    </div>
</div>

     



   
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
          

                <div class="col-md-4 mb-4 product-card">
                    <div class="card">
                        <img src="../public/images/lunet1.jpg"  style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 1">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de soleil</h5>
                            <p class="card-text">Prix : 49.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-card">
                    <div class="card">
                        <img src="../public/images/lunette2.png" style="width: 300px; height: 200px;"  class="card-img-top" alt="Lunette 2">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de piscine</h5>
                            <p class="card-text">Prix : 213.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-card">
                    <div class="card">
                        <img src="../public/images/lunette3.jpg"  style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de soleil</h5>
                            <p class="card-text">Prix : 134.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-card">
                    <div class="card">
                        <img src="../public/images/lunette8.png" style="width: 300px; height: 200px;" class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunettes de piscine</h5>
                            <p class="card-text">Prix : 434.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-card">
                    <div class="card">
                        <img src="../public/images/lunette6.jpg" style="width: 300px; height: 200px;"class="card-img-top" alt="Lunette 3">
                        <div class="card-body">
                            <h5 class="card-title">Lunette de luxe</h5>
                            <p class="card-text">Prix : 554.99 €</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-card">
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



    <?php
    
    include '../include/footer.php';

  ?>

    <script src="../public/js/listproduct.js">
      
    </script>



</body>

<style>
 /* styles.css */

/* Styles pour le mode sombre */
body.dark-mode {
    background-color: #333; /* Fond sombre */
    color: #fff; /* Texte clair */
}

/* Autres styles spécifiques au mode sombre */
.card.dark-mode {
    background-color: #444; /* Fond sombre pour les cartes */
    color: #fff; /* Texte clair pour les cartes */
}

/* Ajoutez d'autres styles selon vos besoins */

</style>

</html>

