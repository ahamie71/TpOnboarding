<?php
include '../include/navbar.php';
?>

<body>
    <h1 class="text-center mt-4">Liste de Lunettes</h1>

    <div class="container mt-4">
        <div class="row" id="glassesContainer">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../public/images/lunette.jpg" class="card-img-top" alt="Lunette 1">
                    <div class="card-body">
                        <h5 class="card-title">Lunettes de soleil</h5>
                        <p class="card-text">Prix : 49.99 €</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../public/images/lunette2.jpg" class="card-img-top" alt="Lunette 2">
                    <div class="card-body">
                        <h5 class="card-title">Lunettes de lecture</h5>
                        <p class="card-text">Prix : 19.99 €</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../public/images/lunette3.jpg" class="card-img-top" alt="Lunette 3">
                    <div class="card-body">
                        <h5 class="card-title">Lunettes de sport</h5>
                        <p class="card-text">Prix : 34.99 €</p>
                    </div>
                </div>
            </div>
            <!-- Ajoutez plus de cartes ici pour d'autres lunettes -->
        </div>
    </div>

    <div class="container mt-2">
        <button onclick="sortCards('name', 'asc')" class="btn btn-primary">Trier par Nom (Croissant)</button>
        <button onclick="sortCards('name', 'desc')" class="btn btn-primary">Trier par Nom (Décroissant)</button>
        <button onclick="sortCards('price', 'asc')" class="btn btn-primary">Trier par Prix (Croissant)</button>
        <button onclick="sortCards('price', 'desc')" class="btn btn-primary">Trier par Prix (Décroissant)</button>
    </div>

    <!-- Inclure le lien vers Bootstrap JavaScript et jQuery (si nécessaire) -->

    <script>
    function sortCards(attribute, order) {
        const cards = Array.from(document.querySelectorAll('.card'));

        cards.sort((a, b) => {
            const aValue = a.querySelector('.card-title').textContent;
            const bValue = b.querySelector('.card-title').textContent;

            if (attribute === 'price') {
                const aPrice = parseFloat(a.querySelector('.card-text').textContent.replace('Prix : ', '').trim());
                const bPrice = parseFloat(b.querySelector('.card-text').textContent.replace('Prix : ', '').trim());

                if (order === 'asc') {
                    return aPrice - bPrice;
                } else {
                    return bPrice - aPrice;
                }
            }

            if (order === 'asc') {
                return aValue.localeCompare(bValue);
            } else {
                return bValue.localeCompare(aValue);
            }
        });

        const container = document.getElementById('glassesContainer');
        container.innerHTML = '';

        cards.forEach(card => {
            container.appendChild(card);
        });
    }
</script>
