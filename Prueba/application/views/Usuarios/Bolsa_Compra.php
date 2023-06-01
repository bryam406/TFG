


<body style="background-color:black;">
  <div class="container">

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

    <div class="row text-white" style="text-align:center;margin-top: 80px;">
      <h1> Carrito de compra</h1>
    </div>
    <br>
    <div class="row" >
      <div class="col-lg-3";>
        <table class="table text-white   ">
          <thead>
            <tr>
              <th scope="col">Cod_usuario</th>
              <th scope="col">Cod_Garaje</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo($this->session->userdata('id_usuario'));?></th>
              <td>...</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-9";>
       <table class="table text-white">
        <thead>
          <tr>
            <th scope="col">Cod.</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col"> + / -</th>
            <th scope="col"> Totalº  </th>
          </tr>
        </thead>
        <tbody>
         <?php
         if ($inventarioCoche == null){

         }else {
           foreach($inventarioCoche as $coches)
           {
            ?>
            <tr>
              <td><?php echo($coches['ID_usuario']);?></td>

              <th scope="row"><?php echo($coches['Marca']);?></th>
              <td><?php echo($coches['Modelo']);?></td>
              <td><?php echo($coches['Precio']);?></td>
              <td><?php echo($coches['cantidad']);?></td>

              <td>
               <div class="btn-group btn-group-sm" role="group">

                <a href="<?php echo base_url(); ?>Cliente/RestarVehi/<?php echo($coches['id']);?>" 
                  class="btn btn-danger" height="30px">-</a>

                <a href="<?php echo base_url(); ?>Cliente/SumarVehi/<?php echo($coches['id']);?>" 
                  class="btn btn-success" height="30px">+</a>
              </div>
              <td><?php echo($coches['Total']);?></td>

            </td>
          </tr>

          <?php
        }}
        ?>
        <tr  >
          <th scope="row"></th>
          <td colspan="4" class="table-active text-center"></td>
          <td  class="table-light "> Precio Final: </td>
          <td  class="table-light">
            <?php 
            echo $preciofinal;

          ?></td>

        </tr>
      </tbody>
    </table>
    <div class="btn-group btn-group-sm" role="group" style="text-align: center;">

    </div>

  </div>
</div>
</div>


</body>

<script type="text/javascript">

  $(".msg").fadeOut(2000);



</script>
