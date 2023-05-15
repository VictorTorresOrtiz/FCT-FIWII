"use strict"
var video = document.getElementById('preview');
var modal = document.getElementById('modal');
var qrDataElement = document.getElementById('qr-data');
var closeButton = document.getElementsByClassName('close')[0];

// Configurar el escáner
var scanner = new Instascan.Scanner({ video: video });

// Al detectar un código QR
scanner.addListener('scan', function(content) {
    qrDataElement.innerHTML = "<a href='" + content + "'>" + content + "</a>";  // Convertir el resultado en un enlace
    modal.style.display = 'block';  // Mostrar el modal
});

// Cerrar el modal al hacer clic en el botón de cierre
closeButton.onclick = function() {
  modal.style.display = 'none';
};

// Iniciar la cámara y comenzar a escanear
Instascan.Camera.getCameras().then(function(cameras) {
  if (cameras.length > 0) {
    scanner.start(cameras[0]);  // Utilizar la primera cámara encontrada
  } else {
    console.error('No se encontraron cámaras en el dispositivo.');
  }
}).catch(function(e) {
  console.error(e);
});
