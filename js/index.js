let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

// Config param  
let countItem = items.length;
let itemActive = 0;

// Evento next click  
next.onclick = function () {
    itemActive = itemActive + 1;
    if (itemActive >= countItem) {
        itemActive = 0;
    }
    showSlider();
}

// Evento prev click  
prev.onclick = function () {
    itemActive = itemActive - 1;
    if (itemActive < 0) {
        itemActive = countItem - 1;
    }
    showSlider();
}

// Auto run slider  
let refreshInterval = setInterval(() => {
    next.click();
}, 5000);

function showSlider() {
    // Remove item active old  
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // Active new item  
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // Clear auto time run slider  
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000);
}

// Click thumbnail  
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    });
});

/* FULL SCREEN */
document.querySelectorAll('.fullscreen-btn').forEach(button => {
    button.addEventListener('click', () => {
        const img = button.parentElement.parentElement.querySelector('img');
        const fullscreenDiv = document.createElement('div');
        fullscreenDiv.classList.add('fullscreen');

        // Crear la cruz de cierre  
        const closeButton = document.createElement('span');
        closeButton.textContent = '✖'; // Puedes usar un icono o un carácter diferente  
        closeButton.classList.add('close-button'); // Añade una clase para darle estilo  
        closeButton.style.position = 'absolute';
        closeButton.style.top = '10px';
        closeButton.style.right = '10px';
        closeButton.style.color = 'white';
        closeButton.style.fontSize = '24px';
        closeButton.style.cursor = 'pointer';

        fullscreenDiv.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
        fullscreenDiv.appendChild(closeButton);

        // Cerrar pantalla completa al hacer clic en la cruz  
        closeButton.addEventListener('click', (event) => {
            event.stopPropagation(); // Evitar que el clic se propague al div  
            fullscreenDiv.remove();
        });

        document.body.appendChild(fullscreenDiv);
    });
});


// Asumiendo que tienes un HTML que contiene un formulario para la búsqueda  
const endpoints = ['people', 'planets', 'vehicles', 'species', 'films'];  

document.getElementById('miFormulario').addEventListener('submit', async function (event) {  
    event.preventDefault();  

    const query = document.getElementById('buscarInput').value.toLowerCase();  
    const resultadoDiv = document.getElementById('resultado');  
    resultadoDiv.innerHTML = '';  
    let hasResults = false;  

    try {  
        const headerResultados = document.createElement('h2');  
        headerResultados.textContent = 'Resultados de la búsqueda';  
        resultadoDiv.appendChild(headerResultados);  

        for (const endpoint of endpoints) {  
            const response = await fetch(`https://swapi.dev/api/${endpoint}/?search=${query}`);  
            const data = await response.json();  

            if (data.count > 0) {  
                hasResults = true;  

                const header = document.createElement('h3');  
                header.textContent = `Resultados de ${endpoint.charAt(0).toUpperCase() + endpoint.slice(1)}:`;  
                resultadoDiv.appendChild(header);  

                data.results.forEach(item => {  
                    const div = document.createElement('div');  
                    div.className = 'resultado-item';  
                    div.innerHTML = `  
                        <div class="resultado-titulo">${item.name || item.title || `ID: ${item.url.split('/')[5]}`}</div>  
                        <p>${formatDetails(item, endpoint)}</p>  
                    `;  
                    resultadoDiv.appendChild(div);  
                });  
            }  
        }  

        if (hasResults) {  
            resultadoDiv.style.display = 'block';  
        } else {  
            resultadoDiv.innerHTML = '<p class="no-resultados">No se encontraron resultados.</p>';  
            resultadoDiv.style.display = 'block';  
        }  
    } catch (error) {  
        console.error('Error al buscar:', error);  
        resultadoDiv.innerHTML = '<p class="no-resultados">Error al buscar, intenta más tarde.</p>';  
    }  
});  

// Función para formatear detalles basados en el tipo de objeto  
function formatDetails(item, type) {  
    let details = '';  
    switch (type) {  
        case 'people':  
            details += `Nombre: ${item.name}<br>`;  
            details += `Altura: ${item.height} cm<br>`;  
            details += `Peso: ${item.mass} kg<br>`;  
            details += `Color de pelo: ${item.hair_color}<br>`;  
            details += `Color de ojos: ${item.eye_color}<br>`;  
            details += `Nacimiento: ${item.birth_year}<br>`;  
            details += `Género: ${item.gender}<br><br>`;  
            break;  
        case 'planets':  
            details += `Nombre: ${item.name}<br>`;  
            details += `Período de rotación: ${item.rotation_period} horas<br>`;  
            details += `Período orbital: ${item.orbital_period} días<br>`;  
            details += `Diámetro: ${item.diameter} km<br>`;  
            details += `Clima: ${item.climate}<br>`;  
            details += `Gravedad: ${item.gravity}<br>`;  
            details += `Terreno: ${item.terrain}<br>`;  
            details += `Agua: ${item.surface_water}<br>`;  
            details += `Población: ${item.population}<br><br>`;  
            break;  
        case 'vehicles':  
            details += `Nombre: ${item.name}<br>`;  
            details += `Modelo: ${item.model}<br>`;  
            details += `Fabricante: ${item.manufacturer}<br>`;  
            details += `Costo en créditos: ${item.cost_in_credits}<br>`;  
            details += `Capacidad de pasajeros: ${item.passengers}<br>`;  
            details += `Tripulación: ${item.crew}<br>`;  
            details += `Velocidad máxima: ${item.max_atmosphering_speed}<br>`;  
            details += `Clase: ${item.vehicle_class}<br><br>`;  
            break;  
        case 'species':  
            details += `Nombre: ${item.name}<br>`;  
            details += `Clasificación: ${item.classification}<br>`;  
            details += `Designación: ${item.designation}<br>`;  
            details += `Color de piel: ${item.skin_colors}<br>`;  
            details += `Color de ojos: ${item.eye_colors}<br>`;  
            details += `Esperanza de vida: ${item.lifespan}<br>`;  
            details += `Inteligencia: ${item.intelligence}<br>`;  
            details += `Idioma: ${item.language}<br><br>`;  
            break;  
        case 'films':  
            details += `Título: ${item.title}<br>`;  
            details += `Episodio: ${item.episode_id}<br>`;  
            details += `Director: ${item.director}<br>`;  
            details += `Productor: ${item.producer}<br>`;  
            details += `Fecha de lanzamiento: ${item.release_date}<br>`;  
            details += `Descripción: ${item.opening_crawl}<br><br>`;  
            break;  
        default:  
            details = 'Detalles no disponibles.';  
            break;  
    }  
    return details;  
}  

// Evento para el botón de Borrar  
document.getElementById('borrarButton').addEventListener('click', function() {  
    const resultadoDiv = document.getElementById('resultado');  
    resultadoDiv.innerHTML = ''; // Borra el contenido de resultados  
    resultadoDiv.style.display = 'none'; // Oculta el div de resultados  
    document.getElementById('buscarInput').value = ''; // Limpia el campo de búsqueda  
});