function toggleContenedor() {
    var tarjeta = document.getElementById('tarjeta');
    tarjeta.classList.toggle('mostrar');
    var input=document.getElementById('cvv');
    input.classList.toggle('mostrar');
    var pagar=document.getElementById('pagar');
    pagar.classList.toggle('mostrar');
}