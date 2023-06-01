<style type="text/css">
  body{
    background-image: url(https://thumbs.dreamstime.com/b/interior-moderno-del-garaje-de-la-sala-exposici%C3%B3n-vac%C3%ADa-muro-cemento-con-el-piso-128436952.jpg);
  }
</style>


<body id="perro">

  <div class="container" style="margin-top:90px;"  >
    <div class="row text-black" style="text-align:center;">
      <h1 class="display-1"style = "font-family:Brush Script MT; text-align: center;" >   Mi Garaje  </h1>
      <hr>
    </div>
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:black;">
        <li class="nav-item" role="presentation">
          <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">FACTURAS</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">COCHES</button>
        </li>
      </ul>
      <div class="tab-content text-white" id="myTabContent" style="text-align:center;">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="background-color:black;">
          <div class="row">
            <table class="table text-white" style="width:90%;margin-left: 60px; margin-top: 50px;">
              <thead>
                <tr>
                  <th scope="col">Usuario</th>
                  <th scope="col">Cod. Vehivulo</th>

                  <th scope="col">Nº Recibo</th>
                  <th scope="col">Marca</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach ($recibos as $recibo){
                  ?>
                  <tr>
                    <th ><?php echo($recibo['id_usuario'])?> </th>
                    <th><?php echo($recibo['id_vehiculo'])?></th>
                    <th>
                      <a href="<?php echo base_url();?>Cliente/mostrarrecibo/<?php echo $recibo['facturas'];?>" class="btn btn-light  btn-sm"><?php echo($recibo['facturas'])?></a>
                    </th>
                    <th><?php echo($recibo['Marca'])?></th>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="row">
            <div class="col">
              <div class="card text-white bg-black mb-3" style="width: 52vh;">
                <img src="https://fondosmil.com/fondo/30410.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>







