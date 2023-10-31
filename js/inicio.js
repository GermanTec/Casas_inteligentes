let cles=document.getElementById('extend');


function cortador(){
    console.log(cles.style.display);
    if (cles.style.display=="block") {
        cles.style.height='0%'; 
        cles.style.display='none';
        console.log(cles.style.display);
    }else if(cles.style.display=="none"){
        console.log("se abre");
        cles.style.height='100%';
        cles.style.display='block';
    } 
}


