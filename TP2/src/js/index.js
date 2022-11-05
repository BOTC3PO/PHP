

function cargarindex() {
    dato = [document.getElementById("a0"), document.getElementById("a1"), document.getElementById("a2"), document.getElementById("a3"), document.getElementById("a4"), document.getElementById("a5"), document.getElementById("a6"), document.getElementById("a7")];
    carta = document.getElementsByClassName("texto");
    for (let index = 0; index < 8; index++) {
        dato[index].classList.add("card-img-top");
        dato[index].classList.add("img-fluid");
    }

    for (let index = 0; index < carta.length; index++) {
        carta[index].classList.add("mobilever");
        carta[index].classList.add("card-body");
    }


}

function cargarprod() {
    dato = document.getElementsByClassName("a");
    carta = document.getElementsByClassName("texto");
    for (let index = 0; index < dato.length; index++) {
        dato[index].classList.add("card-img-top");
        dato[index].classList.add("img-fluid");
    }

    for (let index = 0; index < carta.length; index++) {
        carta[index].classList.add("mobilever");
        carta[index].classList.add("card-body");
    }


}

function cargarmuestra() { 
    dato=document.getElementsByClassName("a");  
    for (let index = 0; index < dato.length; index++) {
        dato[index].classList.add("muestraimg");
        dato[index].classList.add("img-fluid");
    }
    }
    

