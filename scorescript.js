// Het element waarin we de reviews plaatsen
const container = document.getElementById('reviews-container');

// Fetch de data.json van de server
fetch('data.json')
    .then(response => {
        if (!response.ok) throw new Error('Kon de data niet laden');
        return response.json();
    })
    .then(data => {
        data.forEach(review => {
            // Maak een div voor elke review
            const div = document.createElement('div');
            div.classList.add('review');

            // Vul de review met de gegevens
            div.innerHTML = `
                <h3>${review.naam} (${review.land}) - ⭐ ${review.sterren}</h3>
                <p>${review.review}</p>
                <small>${review.datum}</small>
            `;

            container.appendChild(div);
        });
    })
    .catch(error => {
        container.innerHTML = `<p style="color:red;">Fout bij het laden van reviews: ${error}</p>`;
    });