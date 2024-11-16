const draggables = document.querySelectorAll('.draggable');  
const dropZone = document.getElementById('dropZone');  
const info = document.getElementById('info');  
const clearButton = document.getElementById('clearButton');  
const gallery = document.querySelector('.gallery'); // Asegúrate de que este sea el contenedor de tus imágenes  

// Añadir eventos de drag a cada draggable   
draggables.forEach(draggable => {  
    draggable.addEventListener('dragstart', () => {  
        draggable.classList.add('is-dragging');  
        // Almacenar la información relacionada con el draggable  
        info.dataset.currentInfo = draggable.dataset.info;  // Suponiendo que cada draggable tiene un atributo 'data-info'.  
    });  

    draggable.addEventListener('dragend', () => {  
        draggable.classList.remove('is-dragging');  
    });  
});  

// Añadir eventos de drop zone  
dropZone.addEventListener('dragover', (event) => {  
    event.preventDefault(); // Necesario para permitir el drop  
    dropZone.classList.add('highlight');  
});  

dropZone.addEventListener('dragleave', () => {  
    dropZone.classList.remove('highlight');  
});  

dropZone.addEventListener('drop', (event) => {  
    event.preventDefault();  
    dropZone.classList.remove('highlight');  

    // Verificar si la zona de drop ya tiene un elemento  
    if (dropZone.childElementCount === 0) {  
        // Mover el draggable a la zona de drop  
        const draggedElement = document.querySelector('.is-dragging');  
        if (draggedElement) {  
            dropZone.appendChild(draggedElement); // Añadir el elemento arrastrado a la zona de drop  

            // Mostrar la información de este draggable en el elemento de info  
            showInfo(info.dataset.currentInfo);   

            draggedElement.classList.remove('is-dragging'); // Limpiar la clase de arrastre  
        }  
    } else {  
        // Opcional: Mostrar un mensaje si ya hay un elemento  
        alert("Ya hay una imagen en la zona de drop. Solo se permite una imagen a la vez.");  
    }  
});  

// Modificar la función showInfo para que reciba un argumento  
function showInfo(infoText) {  
    // Ocultar todos los bloques de información  
    const allInfoBlocks = document.querySelectorAll('.draggablecuerpoinfo > div');  
    allInfoBlocks.forEach(block => {  
        block.style.display = 'none';  // Ocultar todos los bloques  
    });  

    // Mostrar el bloque de información correspondiente  
    const selectedInfoBlock = document.getElementById(infoText);  
    if (selectedInfoBlock) {  
        selectedInfoBlock.style.display = 'block';  // Mostrar el bloque correspondiente  
    }  

    info.classList.remove('info-hidden');  
    info.classList.add('info-visible');  
}  

// Función para borrar la selección  
function clearSelection() {  
    const allInfoBlocks = document.querySelectorAll('.draggablecuerpoinfo > div');  
    allInfoBlocks.forEach(block => {  
        block.style.display = 'none';  // Ocultar todos los bloques  
    });  
    
    info.classList.remove('info-visible'); // Ocultar la información  
    info.classList.add('info-hidden');  
    dropZone.classList.remove('highlight'); // También borrar el estilo resaltado si está aplicado  

    // Mover los elementos de vuelta a la galería  
    while (dropZone.firstChild) {  
        const draggedElement = dropZone.firstChild; // Obtener el primer hijo  
        gallery.appendChild(draggedElement); // Moverlo de vuelta a la galería  
        
        // Limpiar la información al quitar la imagen  
        clearInfo();  
    }  
}  

// Función para limpiar la información  
function clearInfo() {  
    const allInfoBlocks = document.querySelectorAll('.draggablecuerpoinfo > div');  
    allInfoBlocks.forEach(block => {  
        block.style.display = 'none'; // Ocultar todos los bloques  
    });  
    
    info.classList.remove('info-visible'); // Ocultar la información  
    info.classList.add('info-hidden'); // Añadir clase de ocultar  
}  

// Añadir evento al botón para limpiar la selección  
clearButton.addEventListener('click', clearSelection);


/* ahorcado */



// Variables globales  
const palabras = [  
    "HALCON MILENARIO",   
    "SUPER DESTRUCTOR ESTELAR",   
    "CAZA ESTELAR ALA X",   
    "CAZA ESTELAR TIE",   
    "SILENCIADOR TIE DE KYLO REN",   
    "RAZOR CREST",   
    "SLAVE I",   
    "DESTRUCTOR ESTELAR INTERDICTOR",   
    "TANTIVE IV",   
    "EL FANTASMA",   
    "Y WING",   
    "ALA B"  
];  

let palabraSeleccionada = "";   
let letrasAdivinadas = [];   
let errores = 0; // Contador de errores   
const maxErrores = 6; // Define el número máximo de errores permitidos  

// Selector de elementos  
const wordDisplay = document.getElementById("wordDisplay");  
const message = document.getElementById("message");  
const errorCount = document.getElementById("errorCount");  
const letterInput = document.getElementById("letterInput");  
const submitLetter = document.getElementById("submitLetter");  
const restartGame = document.getElementById("restartGame");  
const usedLetters = document.getElementById("usedLetters");  

// Objeto de imágenes  
const imagenesNaves = {  
    "HALCON MILENARIO": "../img/naves/Halcón_Milenario.jpg",  
    "SUPER DESTRUCTOR ESTELAR": "../img/naves/destructorestelar.jpg",  
    "CAZA ESTELAR ALA X": "../img/naves/cazaestelar.jpg",   
    "CAZA ESTELAR TIE": "../img/naves/cazas-tie.webp",  
    "SILENCIADOR TIE DE KYLO REN": "../img/naves/tiekylo.jpg",  
    "RAZOR CREST": "../img/naves/razorcrest.jpg",  
    "SLAVE I": "../img/naves/slave1.webp",  
    "DESTRUCTOR ESTELAR INTERDICTOR": "../img/naves/interdictor.jpg",  
    "TANTIVE IV": "../img/naves/MP-Tantive.webp",  
    "EL FANTASMA": "../img/naves/espiritu.webp",  
    "Y WING": "../img/naves/y-wing.jpg",  
    "ALA B": "../img/naves/ala-b2.jpg"  
};  

// Inicializa el juego  
function iniciarJuego() {  
    palabraSeleccionada = palabras[Math.floor(Math.random() * palabras.length)];  
    letrasAdivinadas = [];  
    errores = 0;  
    message.textContent = "";  
    errorCount.textContent = "Errores: 0";  
    mostrarPalabra(); // Mostrar la palabra al inicio  
    usedLetters.textContent = "Letras usadas: ";  
    letterInput.value = "";  
    submitLetter.disabled = false;  
    letterInput.disabled = false;  
    restartGame.style.display = "block";  
    document.getElementById("imageContainer").innerHTML = ""; // Limpiar la imagen anterior  
}  

// Función para mostrar la palabra con las letras adivinadas  
function mostrarPalabra() {  
    const palabrasSeparadas = palabraSeleccionada.split(" "); // Separa en palabras  
    const displayPalabras = palabrasSeparadas.map(palabra =>   
        palabra.split("").map(letra => letrasAdivinadas.includes(letra) || letra === " " ? letra : "_").join("") // Muestra letras adivinadas  
    ).join("<br><br>"); // Une las palabras con <br><br> entre ellas  
    wordDisplay.innerHTML = displayPalabras; // Actualiza el contenido de wordDisplay  

    // Limpia la imagen al inicio  
    const imageContainer = document.getElementById("imageContainer");  
    imageContainer.innerHTML = "";  

    // Mostrar la imagen si la palabra ha sido completamente adivinada  
    if (!wordDisplay.textContent.includes("_")) {  
        const img = document.createElement("img");  
        img.src = imagenesNaves[palabraSeleccionada];  // Obtiene la ruta de la imagen  
        img.alt = palabraSeleccionada;  
        img.style.width = "200px";  
        img.style.height = "200px";  
        img.style.display = "block";  
        img.style.margin = "0 auto"; // Centra la imagen  
        imageContainer.appendChild(img);  
    }  
}  

// Función para verificar si se ha adivinado la palabra o ha fallado  
function checkEndGame() {  
    if (errores >= maxErrores) {  
        message.textContent = "¡Juego terminado! La palabra era: " + palabraSeleccionada;  
        submitLetter.disabled = true;  
        letterInput.disabled = true;  
        restartGame.style.display = "block";  
    } else if (!wordDisplay.textContent.includes("_")) {  
        message.textContent = "¡Felicidades! Has adivinado la palabra.";  
        submitLetter.disabled = true;  
        letterInput.disabled = true;  
        restartGame.style.display = "block";  
    }  
}  

// Función para manejar el envío de la letra  
submitLetter.addEventListener("click", () => {  
    const letra = letterInput.value.toUpperCase();  
    letterInput.value = "";  
    
    if (letra && !letrasAdivinadas.includes(letra)) {  
        letrasAdivinadas.push(letra);  

        if (!palabraSeleccionada.includes(letra)) {  
            errores++;  
            errorCount.textContent = "Errores: " + errores;  
        }  

        usedLetters.textContent = "Letras usadas: " + letrasAdivinadas.join(", ");  
        mostrarPalabra();  
        checkEndGame();  
    }  
});  

// Reiniciar el juego  
restartGame.addEventListener("click", iniciarJuego);  

// Inicia el juego al cargar la página  
iniciarJuego();