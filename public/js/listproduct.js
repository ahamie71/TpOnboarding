// trier les produits par nom et prix ordres croissants et ordre decroissant
function sortCards(attribute, order) {
    const cards = Array.from(document.querySelectorAll('.col-md-4'));

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
// rechercher par nom les produits
function filterCards() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const cards = Array.from(document.querySelectorAll('.col-md-4'));

    cards.forEach(card => {
        const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
        if (cardTitle.includes(searchInput)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.getElementById('searchInput').addEventListener('input', filterCards);


// afficher les nnombres de produits sur la page listproducts

// dark mode
// JavaScript pour la bascule du mode sombre


