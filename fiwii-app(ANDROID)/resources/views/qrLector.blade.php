<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="reader"></div>


</body>

<script src="https://cdn.jsdelivr.net/npm/quagga/dist/quagga.min.js"></script>

    <!----Test--->
    <script>
        const config = {
        inputStream: {
            name: "Live",
            type: "LiveStream",
            target: document.querySelector("#reader"),
        },
        decoder: {
            readers: ["code_128_reader", "ean_reader", "upc_reader"],
        },
    };
    </script>

    <script>
        Quagga.init(config, function (err) {
      if (err) {
        console.log(err);
        return;
      }
      console.log("Lector de códigos QR inicializado correctamente");
      Quagga.start();
    });
    </script>
</html>



