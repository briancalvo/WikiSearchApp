// Agrega un 'event listener' al botón de búsqueda.
document.getElementById('search-button').addEventListener('click', function() {
    var searchTerm = document.getElementById('search-term').value;
    searchInWikipedia(searchTerm);
});

function searchInWikipedia(searchTerm) {
    // Construye la URL para la API de Wikipedia. Usa 'encodeURIComponent' para asegurar que el término
    // de búsqueda se añada a la URL de manera segura, especialmente si contiene caracteres especiales.
    
    var url = `https://es.wikipedia.org/w/api.php?action=query&list=search&srsearch=${encodeURIComponent(searchTerm)}&format=json&origin=*`;

    fetch(url)
    .then(response => response.json())
    .then(data => {
        displayResults(data.query.search);
        saveSearchTerm(searchTerm);
    })
    .catch(error => console.error(error));
}

function displayResults(results) {
    var resultsContainer = document.getElementById('results-container');
    resultsContainer.innerHTML = ''; // Limpiar resultados anteriores

    results.forEach(result => {
        var element = document.createElement('div');
        element.innerHTML = `<h3>${result.title}</h3><p>${result.snippet}</p>`;
        resultsContainer.appendChild(element);
    });
}

function saveSearchTerm(searchTerm) {
    // Realiza una solicitud POST a 'save-search.php'.
    fetch('/php/save-search.php', {
        method: 'POST', // Método POST
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded', // Tipo de contenido esperado por el servidor
        },
        body: `searchTerm=${encodeURIComponent(searchTerm)}` // El cuerpo de la solicitud, que contiene el término de búsqueda
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));
}