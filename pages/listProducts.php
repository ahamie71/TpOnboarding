<?php
include '../dbConnect.php';

$db = databaseConnect();
$req = "SELECT * FROM products";
$stmt = $db->prepare($req);
$stmt->execute();
$products = $stmt->fetchAll();
$numberOfProducts = count($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Lunettes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include '../include/navbar.php';
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
            <div id="nombre-produits" class="float-right mb-3">Nombre de produits: <?php echo $numberOfProducts; ?></div>
            </div>
        </div>
    </div>
    <h1 class="text-center mt-4">Liste de Lunettes</h1>
    <div class="container mt-2">
    <div class="button-container mb-2"  style="padding-bottom: 20px;">
     <h1 style="padding-bottom: 20px;">Ajouter</h1>
    <a href="ajoutproduit.php" class="custom-button"><i class="fa-solid fa-circle-plus fa-2xl" style="color: #1fdbbb;"></i></a>
  </div>
  <div class="container mt-2">
        <input type="text" id="searchInput" class="form-control" placeholder="Rechercher par nom...">
    </div>
    <div class="container mt-2">
        <div class="container mt-2">
            <button onclick="sortAndDisplay('name', 'asc')" class="btn btn-dark">Trier par Nom (Croissant)</button>
            <button onclick="sortAndDisplay('name', 'desc')" class="btn btn-dark">Trier par Nom (Décroissant)</button>
            <button onclick="sortAndDisplay('price', 'asc')" class="btn btn-dark">Trier par Prix (Croissant)</button>
            <button onclick="sortAndDisplay('price', 'desc')" class="btn btn-dark">Trier par Prix (Décroissant)</button>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row" id="glassesContainer">
            <?php
            foreach ($products as $product) {
                echo '<div class="col-md-4 mb-4 product-card">';
                echo '<div class="card">';
                echo '<img src="../images/' . $product['image'] . '" ;" class="card-img-top" alt="' . $product['name'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product['name'] . '</h5>';
                echo '<p class="card-text">Prix : ' . $product['price'] . ' €</p>';
                echo '<button onclick="toggleDescription(this)" class="btn btn-dark">Afficher la description</button>';
                echo '<p class="product-description" style="display: none;">' . $product['description'] . '</p>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <?php
    include '../include/footer.php';
    ?>
    <script src="../public/js/listproduct.js"></script>
<script>
var products = <?php echo json_encode($products); ?>;
    function searchProductsByName() {
  
        var searchInput = document.getElementById('searchInput');
        var searchTerm = searchInput.value.toLowerCase();

        var filteredProducts = products.filter(function(product) {
            return product.name.toLowerCase().includes(searchTerm);
        });

        displayFilteredProducts(filteredProducts);
    }
  
function sortAndDisplay(property, order) {
  
    products.sort((a, b) => {
        if (order === 'asc') {
            return a[property] > b[property] ? 1 : -1;
        } else {
            return a[property] < b[property] ? 1 : -1;
        }
    });

    displaySortedProducts();
}
        function displaySortedProducts() {

            const container = document.getElementById('glassesContainer');
            container.innerHTML = '';
            products.forEach((product) => {
                const card = document.createElement('div');
                card.className = 'col-md-4 mb-4 product-card';
                card.innerHTML = `
            <div class="card">
                <img src="../images/${product.image}" class="card-img-top" alt="${product.name}">
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text">Prix : ${product.price} €</p>
                </div>
            </div>
        `;

                container.appendChild(card);
            });
        }

        function toggleDescription(button) {
            
            const description = button.nextElementSibling;
            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                button.textContent = 'Masquer la description';
            } else {
                description.style.display = 'none';
                button.textContent = 'Afficher la description';
            }
        }
    </script>

        container.appendChild(card);
    });
}

function displayFilteredProducts(filteredProducts) {
            const container = document.getElementById('glassesContainer');
            container.innerHTML = '';
            filteredProducts.forEach((product) => {
                const card = document.createElement('div');
                card.className = 'col-md-4 mb-4 product-card';
                card.innerHTML = `
                    <div class="card">
                        <img src="../images/${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">Prix : ${product.price} €</p>
                        </div>
                    </div>
                `;
                container.appendChild(card);
            });
        }
    
function toggleDescription(button) {
    const description = button.nextElementSibling;
    if (description.style.display === 'none' || description.style.display === '') {
        description.style.display = 'block';
        button.textContent = 'Masquer la description';
    } else {
        description.style.display = 'none';
        button.textContent = 'Afficher la description';
    }

}

var searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', function() {
    searchProductsByName();
});
</script>
</body>
<style>
    body.dark-mode {
        background-color: #333;
        color: #fff;
    }

    .card.dark-mode {
        background-color: #444;
        color: #fff;
    }
    .modal-dialog {
        max-width: 800px;

        .modal-dialog {
            max-width: 800px;
        }

        .button-container {
       
      
      margin-left: 1000px;
      float: left;
    }
</style>

</html>