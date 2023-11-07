document.addEventListener("DOMContentLoaded", function() {
    // Obtener los botones y el contenido relacionado
    var buttons = {
        informacion: document.getElementById("button-informacion"),
        financiera: document.getElementById("button-financiera"),
        personal: document.getElementById("button-personal"),
        configuraciones: document.getElementById("button-configuraciones")
    };

    var content = {
        informacion: document.getElementById("informacion-contacto"),
        financiera: document.getElementById("informacion-financiera"),
        personal: document.getElementById("informacion-personal"),
        configuraciones: document.getElementById("configuraciones")
    };

    // Función para mostrar el contenido relacionado con un botón y ocultar el resto
    function mostrarContenido(id) {
        for (var key in content) {
            if (key === id) {
                content[key].style.display = "block";
            } else {
                content[key].style.display = "none";
            }
        }
    }

    // Agregar manejadores de clic a los botones
    buttons.informacion.addEventListener("click", function() {
        mostrarContenido("informacion");
    });

    buttons.financiera.addEventListener("click", function() {
        mostrarContenido("financiera");
    });

    buttons.personal.addEventListener("click", function() {
        mostrarContenido("personal");
    });

    buttons.configuraciones.addEventListener("click", function() {
        mostrarContenido("configuraciones");
    });
});
