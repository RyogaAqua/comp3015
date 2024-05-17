// Este es un ejemplo básico de un archivo JavaScript

// Función para validar un formulario de registro de usuario
function validarFormulario() {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;

    if (nombre === '' || email === '') {
        alert('Por favor, complete todos los campos.');
        return false; // Evita que el formulario se envíe si hay campos vacíos
    }

    // Si todos los campos están completos, se puede enviar el formulario
    return true;
}

// Función para agregar un efecto visual al hacer clic en un botón
function agregarEfectoVisual() {
    var boton = document.getElementById('botonEnviar');
    boton.style.backgroundColor = '#0056b3'; // Cambia el color de fondo
    setTimeout(function() {
        boton.style.backgroundColor = '#007bff'; // Restaura el color de fondo después de un tiempo
    }, 300);
}

// Agregar event listeners o manejadores de eventos a los elementos necesarios
document.getElementById('formulario').addEventListener('submit', validarFormulario);
document.getElementById('botonEnviar').addEventListener('click', agregarEfectoVisual);
