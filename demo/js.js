"use strict"

let loaderContainer = document.querySelector(".loader-container");
let web = document.querySelector(".web");
let puntos = 0;

function loader() {

    if(puntos === 3) {
        //renicio de puntos
        puntos = 0;
    }

    let loaderPuntos = "";

    for (let i = 0; i <= puntos; i++) {
        loaderPuntos += "<i class='bi bi-circle-fill p-1'></i>";
    }

    document.querySelector(".loader").innerHTML = loaderPuntos;
    puntos++;

    //Tiempo de reinicio
    setTimeout(loader, 200);
}

loader();

setTimeout( function () {
    loaderContainer.style.display = "none";
    web.style.display = "block";
}, 1000);
