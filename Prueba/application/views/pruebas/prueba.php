<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tomar captura de página web</title>
</head>

<body>
    <!--
    En este caso le "tomamos" la foto al div. Podría ser a un div o 
    a cualquier elemento HTML
  -->
    <div id="contenedor">
        <h1>Tomar captura de pantalla con html2canvas</h1>
        <a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
        <p>Estamos probando la conversión de HTML a una imagen con html2canvas</p>
        <img style="max-width: 100%;" src="https://carros123.webcindario.com/imagenes/carro2.jpg">
    </div>
  <!--
    El botón no aparece porque está fuera del div
  -->
  
    <button id="btnCapturar">Tomar captura</button>
  <!--
    En este elemento vamos a poner al canvas que será generado.
  -->
  <div id="contenedorCanvas" style="border: 1px solid red;">
  </div>
  <!--
    Cargar el script de html2canvas, podría ser desde un servidor
    propio o como yo lo hago: desde jsdelivr
  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script> 

    <!--
      Después de eso, cargar el script que contiene nuestra lógica
    -->
    <script src="script.js"></script>
  </body>
  </html>