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