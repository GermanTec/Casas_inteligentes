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

//Mostrar Pantallas de funciones
let formC1=document.getElementById('productFormCA');
let formC2=document.getElementById('productFormCM');
let formC3=document.getElementById('productFormCE');
//Mostrar Agregar producto
function mostrarCategoriaA(){
  formC1.style.display='block';
  formC2.style.display='none';
  formC3.style.display='none';
  }
  //Mostrar Modificar producto
  function mostrarCategoriaM(){
    formC1.style.display='none';
    formC2.style.display='block';
    formC3.style.display='none';
  }
  //Mostrar Eliminar producto
  function mostrarCategoriaE(){
    formC1.style.display='none';
    formC2.style.display='none';
    formC3.style.display='block';
  }

//Transpasar los datos del producto a modificar
const table=document.getElementById('table')
const inputs=document.getElementById('productForm2').querySelectorAll("input")
const textAreas=document.getElementById('productForm2').querySelectorAll("textarea")
const select=document.getElementById('productForm2').querySelector("select")

const inputs2=document.getElementById('productForm').querySelectorAll("input")


/* FUNCIONES PARA MODIFICAR Y ALIMINAR PRODUCTOS*/
function click2(event){
  if (event.target.tagName === 'BUTTON') {
    event.stopPropagation();
    let data = event.target.parentElement.parentElement.children;
    fillData(data);
  }
  
  function fillData(data){
    
    inputs[0].value=data[0].textContent
    inputs[1].value=data[1].textContent
    inputs[2].value=data[7].textContent
    inputs[3].value=data[4].textContent
    inputs[4].value=data[6].textContent
    textAreas[0].value=data[3].textContent
    
    for (let index = 0; index < select.length; index++) {
      if (select[index].text==data[5].textContent) {
        select.selectedIndex=index;
      }
    }
    mostrarM();
  }
}

function click3(event){
  if (event.target.tagName === 'BUTTON') {
    event.stopPropagation();
    let data = event.target.parentElement.parentElement.children;
    fillData(data);
  }
  
  function fillData(data){
    inputs2[0].value=data[0].textContent   
    mostrarE();
  }
}


const tableCategoria=document.getElementById('table2')
const inputsModiCat=document.getElementById('productFormCM').querySelectorAll("input")
const textAreaModiCat=document.getElementById('productFormCM').querySelectorAll("textarea")

const inputsModiCat2=document.getElementById('productFormCE').querySelectorAll("input")
/* FUNCIONES PARA MODIFICAR Y ALIMINAR CATEGORIAS*/
function click4(event){
  if (event.target.tagName === 'BUTTON') {
    event.stopPropagation();
    let data = event.target.parentElement.parentElement.children;
    fillData(data);
  }
  
  function fillData(data){
    
    inputsModiCat[0].value=data[0].textContent
    inputsModiCat[1].value=data[1].textContent
    textAreaModiCat[0].value=data[2].textContent
    
    mostrarCategoriaM();
  }
}

function click5(event){
  if (event.target.tagName === 'BUTTON') {
    event.stopPropagation();
    let data = event.target.parentElement.parentElement.children;
    fillData(data);
  }
  
  function fillData(data){
    inputsModiCat2[0].value=data[0].textContent   
    mostrarCategoriaE();
  }
}