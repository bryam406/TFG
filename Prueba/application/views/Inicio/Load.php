<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
  .loading {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: black;
    color: white;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    display: none;
    z-index:5 ;
  }

  .loading--show {
    display: flex;
  }



</style>
<script>
  document.addEventListener('DOMContentLoaded', () => {

      // Lista de urls que deseas precargar
    const LIST_IMAGES_PRELOAD = ["img/imagen-pesada-1.jpg", "img/imagen-pesada-2.jpg"];
      // Elemento visual del loading
    const LOADING = document.querySelector('.loading');
      // Obtiene elemento donde serán precargadas las imágenes
    const CONTAINER_IMAGES_PRELOAD = document.querySelector('#preload-images');
      // Tiempo de espera entre revisiones en ms
    const SLEEP_CHECK = 300;

      // Create una imagen por cada elemento de la lista LIST_IMAGES_PRELOAD y la guarda en el elemento CONTAINER_IMAGES_PRELOAD

    function makePreloadImages() {

      LIST_IMAGES_PRELOAD.forEach(urlImg => {
          // Crea la imagen
        const IMG_PRELOAD = document.createElement('img');
            // Añade su ruta
        IMG_PRELOAD.src = urlImg;
            // Oculta para que no se muestre
        IMG_PRELOAD.style = 'display: none';
            // Añade al contenedor
        CONTAINER_IMAGES_PRELOAD.appendChild(IMG_PRELOAD);
      });
    }


      // Herramienta para esperar un tiempo determinado en una función asíncrona

    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

      // Comprueba de forma recursiva si todas las imágenes se han completado
      // Si todas estan descargadas, quitará la clase 'loading--show' a 'loading' para ocultarlo

    async function checkIfAllImagesCompleted() {

        // Obtiene todas las imágenes sin completar
      const NO_COMPLETES = Array.from(CONTAINER_IMAGES_PRELOAD.querySelectorAll('img')).filter((img) => {
        return !img.complete;
      });

      if (NO_COMPLETES.length !== 0) {
          // Vuelve a iterar si existe alguna sin completar
        await sleep(SLEEP_CHECK);
        return checkIfAllImagesCompleted();
      } else {
          // Oculta el loading
        LOADING.classList.remove('loading--show');
      } 
      return true;
    }


      // Inicia

    makePreloadImages();
    checkIfAllImagesCompleted();

  });

</script>
<body>
  <div class="loading loading--show">
  	<img src="<?php echo base_url();?>imagenes/Imagen1.png"  height="55px" width="58px">
  </div>  
  <!-- Lugar donde se cargarán las imágenes de caché -->
  <div id="preload-images">

  </div>

</body>
</html>