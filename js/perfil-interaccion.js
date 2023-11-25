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
                    buttons[key].classList.add("active");
                    buttons[key].querySelector("i").classList.remove("bi-hand-index-thumb");
                    buttons[key].querySelector("i").classList.add("bi-hand-index-thumb-fill");
                } else if (content[key]) {
                    content[key].style.display = "none";
                    buttons[key].classList.remove("active");
                    buttons[key].querySelector("i").classList.add("bi-hand-index-thumb");
                    buttons[key].querySelector("i").classList.remove("bi-hand-index-thumb-fill");
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

function agregarT(){
    var contenedorInterior = document.querySelector('.new-tarjeta');
        
        contenedorInterior.classList.add('active')

        var boton = document.querySelector('.agregar');  
        boton.classList.add('visible');
}

function toggleElementos(elementoOcultarId, elementoMostrarId) {
    // Evita que el enlace realice la acción predeterminada (navegar a una nueva página)
    event.preventDefault();

    // Obtén los elementos por sus IDs
    var elementoOcultar = document.getElementById(elementoOcultarId);
    var elementoMostrar = document.getElementById(elementoMostrarId);

    // Realiza la lógica para mostrar u ocultar los elementos
    elementoOcultar.style.display = 'none';
    elementoMostrar.style.display = 'block';
  }

  const btnAbrirModal=document.getElementById("btnAbrirModal")
  const btnCerrarModal=document.getElementById("btnCerrarModal")
  const modal=document.querySelector('#modal');

  btnAbrirModal.addEventListener("click",()=>{
    console.log("hse")
    modal.showModal();
    
  })

  btnCerrarModal.addEventListener("click",()=>{
    modal.close();
  })
