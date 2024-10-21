function cambiarVista() {
    const input = document.getElementById('buscarInput').value.toLowerCase(); // Convertir a minúsculas para comparación 
    // Cambiar la acción basada en el valor del input
    if (input.includes('naves')) {
        document.getElementById('miFormulario').action = "buscadornaves.php"; // Vista de naves 

    } else if (input.includes('peliculas')) {
        document.getElementById('miFormulario').action = "buscadorpeliculas.php"; // Vista de películas 

    } else if (input.includes('personajes')) {
        document.getElementById('miFormulario').action = "buscadorpersonajes.php"; // Vista de personajes 

    } else if (input.includes('sables')) {
        document.getElementById('miFormulario').action = "buscadorsables.php"; // Vista de sables 

    } else { document.getElementById('miFormulario').action = "buscadornaves.php"; } // Valor por defecto } 
}



document.getElementById('btnBorrar').addEventListener('click', function () {
    document.getElementById('buscarInput').value = ''; // Borra el contenido del input 
});
