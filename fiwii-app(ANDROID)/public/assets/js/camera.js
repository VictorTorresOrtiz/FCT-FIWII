"use strict"

let scanner = new Instascan.Scanner({
    video: document.getElementById("camera")
});

let resultado = document.getElementById("qrcode");
scanner.addListener("scan", function (content) {
    resultado.innerText = content;
    scanner.stop();
});
Instascan.Camera.getCameras()
    .then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            resultado.innerText = "No se ha encontrado ninguna cámara.";
        }
    })
    .catch(function (e) {
        resultado.innerText = e;
    });