//Mostrar Pantallas de funciones
let form1=document.getElementById('productForm3');
let form2=document.getElementById('productForm2');
let form3=document.getElementById('productForm');

//Mostrar Agregar producto
function mostrarA(){
form1.style.display='block';
form2.style.display='none';
form3.style.display='none';
}
//Mostrar Modificar producto
function mostrarM(){
  console.log("Presion")
  form1.style.display='none';
  form2.style.display='block';
  form3.style.display='none';
}
//Mostrar Eliminar producto
function mostrarE(){
  form1.style.display='none';
  form2.style.display='none';
  form3.style.display='block';
}

//Transpasar los datos del producto a modificar
const table=document.getElementById('table')
const inputs=document.getElementById('productForm2').querySelectorAll("input")
const textAreas=document.getElementById('productForm2').querySelectorAll("textarea")
let cont=0;

table.addEventListener('click',(e)=>{
  e.stopPropagation();
  let data=e.target.parentElement.parentElement.children;
  fillData(data);
  cont=0;
})

const fillData = (data)=>{
  for(let index=0; index< 2;index++){
    var inpus=inputs[index];
    inpus.value=data[cont].textContent
    cont+=1;
  }
  cont=4;
  for(let index=3; index< 6;index++){
    var inpus=inputs[index];
    inpus.value=data[cont].textContent
    cont+=1;
  }
  textAreas[0].value=data[3].textContent
}








