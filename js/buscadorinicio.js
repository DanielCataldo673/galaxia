function cambiarVista() {  
    const input = document.getElementById('buscarInput').value.toLowerCase(); // Convertir a minúsculas para comparación   
    const mensajeError = document.getElementById('mensajeError');  

    // Cambiar la acción basada en el valor del input  
    if (input.includes('peliculas')) {  
        document.getElementById('miFormulario').action = "buscadorpeliculas.php"; // Vista de películas   
        mensajeError.style.display = 'none'; // Ocultar mensaje de error  

    } else if (input.includes('personajes')) {  
        document.getElementById('miFormulario').action = "buscadorpersonajes.php"; // Vista de personajes   
        mensajeError.style.display = 'none'; // Ocultar mensaje de error  

    } else if (input.includes('sables')) {  
        document.getElementById('miFormulario').action = "buscadorsables.php"; // Vista de sables   
        mensajeError.style.display = 'none'; // Ocultar mensaje de error  

    } else {  
        // Mostrar mensaje de error si no hay coincidencias  
        document.getElementById('miFormulario').action = "buscadorpeliculas.php";   
        mensajeError.textContent = "Por favor, introduce una búsqueda válida (películas, personajes, sables).";  
        mensajeError.style.display = 'block'; // Mostrar mensaje de error  
    }  
}  

document.getElementById('btnBorrar').addEventListener('click', function () {  
    document.getElementById('buscarInput').value = ''; // Borra el contenido del input   
    document.getElementById('mensajeError').style.display = 'none'; // Ocultar mensaje de error al borrar  
});