//-----------------Funciones para el acomodo de los productos------------------
let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");

let imgSeleccionada = document.getElementById("img");
let modeloSeleccionado = document.getElementById("modelo");
let descripSeleccionada = document.getElementById("descripcion");
let precioSeleccionado = document.getElementById("precio");
let cantidadesSeleccionado=document.getElementById("existente");

let producto_car=document.getElementById("producto");
let desc=document.getElementById("desc");
let imagen=document.getElementById("imagen");
let precio_producto=document.getElementById("precio_producto");
let cant=document.getElementById("cantidad");
let id_producto=document.getElementById("id_producto");


function cargar(producto){
    quitarBordes();
    mostrador.style.width  = "75%";
    seleccion.style.width = "25%";
    seleccion.style.opacity = "1";
    producto.style.border = "2px solid #0071b2";

   var almacen=producto.getElementsByTagName("h2")[0].innerHTML;

    imgSeleccionada.src = producto.getElementsByTagName("img")[0].src;
    imagen.value = producto.getElementsByTagName("img")[0].src;

    modeloSeleccionado.innerHTML =  producto.getElementsByTagName("h3")[0].innerHTML;
    producto_car.value = producto.getElementsByTagName("h3")[0].innerHTML;

    descripSeleccionada.innerHTML = producto.getElementsByClassName("descripcion_select")[0].innerHTML;
    desc.value = producto.getElementsByClassName("descripcion_select")[0].innerHTML;

    cant.value = 1;

    let cadena = producto.getElementsByTagName("span")[0].innerHTML;
    let cadenaSinPrimerCaracter = cadena.substring(1);
    precioSeleccionado.innerHTML =  cadena;
    precio_producto.value = cadenaSinPrimerCaracter;

    id_producto.value = producto.getElementsByClassName("id")[0].innerHTML;

    for (var i = 1; i <= almacen; i++) {
        var option = document.createElement("option"); // Crea un elemento option
        option.innerHTML = i+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;("+almacen+" disponibles)"; // Establece el texto de la opción
        option.value=i
        option.title="";
        cantidadesSeleccionado.add(option); // Agrega la opción al select
    }
}
function handleSelectChange() {
    // Obtener el valor seleccionado
    var valorSeleccionado = cantidadesSeleccionado.value;
    cant.value = valorSeleccionado;
}

// Agregar el event listener al elemento select
cantidadesSeleccionado.addEventListener("change", handleSelectChange);

function cerrar(){
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();
}
function quitarBordes(){
    var producto = document.getElementsByClassName("producto");
    for(i=0;i <producto.length; i++){
        producto[i].style.border = "none";
    }
}

function extender(){
    let cle=document.getElementById('2');
    if (window.getComputedStyle(cle).display==='none') {
        cle.style.display='block';
        cle.style.height='100%';
    }else{
        cle.style.display='none';
        cle.style.height='0%';
    }
}
function cortar() {
    cle.style.display='none';
    cle.style.height='0%';
}

window.addEventListener('scroll',function(){
    let muestra=document.getElementById('product');
    let mueve=document.getElementById('seleccion');
    let distancia=muestra.getBoundingClientRect().top;

    let footer=document.getElementById('footer');
    let fin=footer.getBoundingClientRect().top;
    
    distancia=distancia*-1;
    var mov=distancia-20;
    if (880<fin) {//le para 
    if (distancia>=-75) {
        mueve.style.transform='translateY('+mov+'px)';
    }
    }

});
 

//------------------------Funciones para las categorias----------------------
function pintar(nombre){
let parte=document.getElementById("categoryProductos");
let palabra=parte.getElementsByTagName("a")[nombre].style.color='#0071b2';

}

function despintar(){
    let parte=document.getElementById("categoryProductos");
    let palabra=parte.getElementsByTagName("a");
    for (let index = 0; index < palabra.length; index++) {
        palabra[index].style.color='#717171';
        
    }
}

function mostrar(cat){
    let num=document.querySelectorAll('#'+cat).length;
    for (var i = 0; i < num; i++) {
        let elemento=document.querySelectorAll('#'+cat)[i].style.display='block';
    }
}

function quitar(cat){
    let num=document.querySelectorAll('#'+cat).length;
    for (var i = 0; i < num; i++) {
        let elemento=document.querySelectorAll('#'+cat)[i].style.display='none';
    }
}

function mostrarTodo(){
despintar();
cortar();
mostrar('Focos');
mostrar('Cerraduras');
mostrar('Entretenimiento');
mostrar('Camaras');
pintar(0);
}

function mostrarCamaras(){
    despintar();
    cortar();
mostrar('Camaras');
quitar('Focos');
quitar('Cerraduras');
quitar('Entretenimiento')
pintar(1);
}
function mostrarCerraduras(){
    despintar();
    cortar();
    mostrar('Cerraduras');
    quitar('Focos');
    quitar('Camaras');
    quitar('Entretenimiento')
pintar(2);
}
function mostrarFocos(){
    despintar();
    mostrar('Focos');
    quitar('Camaras');
    quitar('Cerraduras');
    quitar('Entretenimiento')
pintar(3);
}

function mostrarLimpieza(){
    despintar();
    cortar();
    quitar('Camaras');
    quitar('Focos');
    quitar('Cerraduras');
    quitar('Entretenimiento')
pintar(4);
}
function mostrarEntretenimiento(){
    despintar();
    cortar();
    mostrar('Entretenimiento');
    quitar('Focos');
    quitar('Cerraduras');
    quitar('Camaras')
    extender();
pintar(5);
}
function mostrarDeporte(){
    despintar();
    cortar();
    quitar('Entretenimiento');
    quitar('Focos');
    quitar('Cerraduras');
    quitar('Camaras');/*
    quitar('interruptores')
    quitar('cosina')
    quitar('sensores')
    quitar('limpieza')*/
pintar(6);
}

function mostrarInterruptores(){
    despintar();
    cortar();
    quitar('Entretenimiento');
    quitar('Focos');
    quitar('Cerraduras');
    quitar('Camaras');/*
    quitar('deporte')
    quitar('cosina')
    quitar('cosina')
    quitar('limpieza')*/
pintar(7);
}
function mostrarCosina(){
    despintar();
    cortar();
    quitar('Entretenimiento');
    quitar('Focos');
    quitar('Cerraduras');
    quitar('Camaras');/*
    quitar('deporte')
    quitar('sensores')
    quitar('interruoptores')
    quitar('limpieza')*/
pintar(8);
}

function submitForm(linkElement) {
    // Crear un nuevo elemento de input
    var totalText = linkElement.textContent || linkElement.innerText;

    // Crear un nuevo elemento de input
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'searchProduct3';
    input.value = totalText;

    // Agregar el input al formulario
    document.getElementById('myForm').appendChild(input);

    // Enviar el formulario
    document.getElementById('myForm').submit();
}

function submitFormTodo() {
    // Crear un nuevo elemento de input

    // Crear un nuevo elemento de input
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'searchProduct3';
    input.value = "";

    // Agregar el input al formulario
    document.getElementById('myForm').appendChild(input);

    // Enviar el formulario
    document.getElementById('myForm').submit();
}