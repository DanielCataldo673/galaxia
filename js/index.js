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

// Alert cuando se enfoca el input  
const buscarInput = document.getElementById('buscarInput');  
const alertMessage = document.getElementById('alertMessage');  

buscarInput.addEventListener('focus', () => {  
    alertMessage.style.display = 'block'; // Mostrar el mensaje  
});  

buscarInput.addEventListener('blur', () => {  
    alertMessage.style.display = 'none'; // Esconder el mensaje al salir  
});