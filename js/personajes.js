function redirigirSiSeleccionado(faccion) {  
    const checkBox = document.getElementById(faccion);  
    if (checkBox.checked) {  
        // Desmarcar todos los checkboxes  
        var checkboxes = document.querySelectorAll("input[type='checkbox']");  
        checkboxes.forEach(function(item) {  
            item.checked = false;  
        });  
        // Redirige a la página PHP correspondiente según el checkbox  
        switch (faccion) {  
            case 'republica':  
                window.location.href = 'republica.php';  
                break;  
            case 'imperio':  
                window.location.href = 'imperio.php';  
                break;  
            case 'alianza':  
                window.location.href = 'alianza.php';  
                break;  
            case 'orden-jedi':  
                window.location.href = 'orden.php';  
                break;  
            case 'sith':  
                window.location.href = 'sith.php';  
                break;  
            case 'caballeros':  
                window.location.href = 'caballeros.php';  
                break;  
            case 'resistencia':  
                window.location.href = 'resistencia.php';  
                break;  
            case 'primera-orden':  
                window.location.href = 'primera.php';  
                break;  
            default:  
                break;  
        }  
    }  
}  




// Alert cuando se enfoca el input  
const buscarInput = document.getElementById('buscarInput');  
const alertMessage = document.getElementById('alertMessage');  

buscarInput.addEventListener('focus', () => {  
    alertMessage.style.display = 'block'; // Mostrar el mensaje  
});  

buscarInput.addEventListener('blur', () => {  
    alertMessage.style.display = 'none'; // Esconder el mensaje al salir  
}); 


const characters = [  
    { name: "Luke Skywalker", image: "../img/jpg/luke.jpg" },  
    { name: "Darth Vader", image: "../img/webp/dark6.webp" },  
    { name: "Leia Organa", image: "../img/jpg/leia-star-wars-8-1532775543.jpg" },  
    { name: "Han Solo", image: "../img/jpg/han.jpg" },  
    { name: "Yoda", image: "../img/webp/yoda2.webp" },  
    { name: "Obi-Wan Kenobi", image: "../img/png/obi-wan-kenobi-tv-series.png" },  
    { name: "Chewbacca", image: "../img/jpg/chewbacca.jpg" },  
    { name: "R2-D2", image: "../img/jpg/r2-d2-fondo.jpg" },  
    { name: "C-3PO", image: "../img/jpg/c-3po.jpg" },  
    { name: "Mace Windu", image: "../img/jpg/mace.jpg" },  
    { name: "Darth Bane", image: "../img/jpg/darthbane34.jpg" },  
    { name: "Wicket", image: "../img/jpg/Wicket3.jpg" },  
];  

// Duplicar cada personaje para tener pares  
const gameCharacters = [...characters, ...characters]; // Aseguramos que haya 12 pares  

// Elementos del DOM  
const gameContainer = document.getElementById('gameContainer');  
const pairsCounter = document.getElementById('pairsCounter');  
const resetButton = document.getElementById('resetButton');  

let firstCard, secondCard;  
let lockBoard = false;  
let matchedCards = 0;  

// Mezclar las cartas  
function shuffle(array) {  
    for (let i = array.length - 1; i > 0; i--) {  
        const j = Math.floor(Math.random() * (i + 1));  
        [array[i], array[j]] = [array[j], array[i]];  
    }  
}  

// Crear cartas  
function createCards() {  
    shuffle(gameCharacters); // Mezclar el nuevo arreglo de personajes  

    gameCharacters.forEach(character => {  
        const carta = document.createElement('div');  
        carta.classList.add('cartas');  
        carta.setAttribute('data-name', character.name);  
        carta.setAttribute('data-image', character.image);  
        carta.addEventListener('click', flipCard);  

        // Crear imagen para cada carta  
        const img = document.createElement('img');  
        img.src = character.image;  
        img.alt = character.name;  
        img.style.display = "none"; // Ocultar imagen inicialmente  

        // Manejar errores de carga de imagen  
        img.onerror = function () {  
            console.error(`Error al cargar la imagen: ${character.image}`);  
            img.src = "../img/default-image.jpg"; // Cambia a una imagen predeterminada si es necesario  
        };  

        carta.appendChild(img);  
        gameContainer.appendChild(carta);  
    });  
}  

// Funciones del juego  
function flipCard() {  
    if (lockBoard) return;  
    this.classList.add('flipped');  

    const img = this.querySelector('img');  
    img.style.display = "block"; // Mostrar imagen al voltear la carta  

    if (!firstCard) {  
        firstCard = this;  
        return;  
    }  

    secondCard = this;  
    lockBoard = true;  

    checkForMatch();  
}  

function checkForMatch() {  
    const isMatch = firstCard.dataset.name === secondCard.dataset.name;  
    isMatch ? disableCards() : unflipCards();  
}  

function disableCards() {  
    matchedCards += 1;  
    pairsCounter.textContent = `Pares encontrados: ${matchedCards}`;  
    resetBoard();  

    // Comprobar si se han encontrado todas las cartas  
    if (matchedCards === gameCharacters.length / 2) {  
        setTimeout(() => {  
            alert(`¡Felicidades! Has encontrado todas las parejas.`);  
            resetGame(); // Reiniciar el juego  
        }, 500);  
    }  
}  

function unflipCards() {  
    setTimeout(() => {  
        firstCard.classList.remove('flipped');  
        secondCard.classList.remove('flipped');  

        // Ocultar las imágenes de ambas cartas cuando no coinciden  
        firstCard.querySelector('img').style.display = "none";  
        secondCard.querySelector('img').style.display = "none";  

        resetBoard();  
    }, 1000);  
}  

function resetBoard() {  
    // Restablecer las variables después de cada intento  
    [firstCard, secondCard, lockBoard] = [null, null, false];  
}  

// Reiniciar el juego  
function resetGame() {  
    matchedCards = 0; // Reiniciar el contador de pares  
    pairsCounter.textContent = "Pares encontrados: 0"; // Reiniciar el contador visual  
    gameContainer.innerHTML = ''; // Limpiar el contenedor de cartas  
    createCards(); // Volver a crear las cartas  
}  

// Evento del botón de reinicio  
resetButton.addEventListener('click', resetGame);  

// Inicializar el juego  
createCards();