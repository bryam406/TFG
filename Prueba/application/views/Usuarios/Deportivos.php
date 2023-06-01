  <?php 

  if($this->session->flashdata("correcto"))
  {
    ?>  
    <div class="alert alert-success msg" style="text-align: center;"><b><?php echo $this->session->flashdata("correcto");?></b></div>
    <?php
  }elseif($this->session->flashdata("error")){
    ?>
    <div class="alert alert-danger msg" style="text-align: center;"><b><?php echo $this->session->flashdata("error");?></b></div>
    <?php
  }
  ?>
  <section >

    <img src="https://i.pinimg.com/originals/30/38/3a/30383a9c8b7950d0c5e3306d7e1fb378.jpg" style="width: 100%; height: 100vh;" >

  </section>

  <?php
  $idCoche = 0;
  foreach ($prueba as $coche){
   ?>
   <section class="bg-black py-8 pt-0" id="store">
    <div id="carouselExampleControls<?php echo ($idCoche);?>" class="carousel slide" data-bs-ride="carousel" style="width: 50%; height: 56.8vh; position: absolute;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url();?>imagenes/Captura.png" class="d-block w-100" style="width: 50%; height: 56.8vh;">
        </div>
        <?php 
        foreach($coche['totalfotos'] as $img)
        {
          ?>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>fotos_coches/<?php echo($coche['Carpeta_Img']);?>/<?php echo ($img) ?>      "class="d-block w-100" style="width: 50%; height: 56.8vh;">
          </div> 
          <?php 
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls<?php echo ($idCoche);?>" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls<?php echo ($idCoche);?>" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container-lg" style=" height: 56.8vh;">
      <div class="row flex-center ">
        <div class="col-6 order-md-0 text-center text-md-start"></div>
        <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start text-white" >   
          <h1 style="margin-top: 50px;text-align: center;"><?php echo $coche['Marca'] ?>  <?php echo $coche['Modelo'] ?></h1>
          <p style="text-align: center;">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West</p>
          <a href="<?php echo base_url();?>Cliente/bolsacompra/<?php echo $coche['id'];?>" class="btn btn-light  btn-sm">Comprar</a   >
        </div>
      </div>
    </section>
    <?php 
    $idCoche++;
  }
  ?>

  <script type="text/javascript">

    $(".msg").fadeOut(2000);



  </script>
