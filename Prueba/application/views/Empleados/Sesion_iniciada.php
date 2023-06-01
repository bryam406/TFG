
<div class="container" style="margin-top: 100px">

  <div class="row" >
    <h1 style="text-align: center;">Tu Perfil</h1>
    
  </div>
  <div class="row" style="margin-top: 50px">
    <!-- izq -->
    <div class="col-lg-6";>
      <div class="card" style="width: ;">
        <div class="card-body">
         <img src="<?php echo base_url();?>imagenes/<?php echo $datosUsu['imagen_perfil'];?>" class="imgRedonda" />
         <form method="post" action="<?php echo base_url();?>Empleado/subirImagen" enctype="multipart/form-data" style="text-align:center"s>
          <input type="file" id="userfile" name="userfile" size="33" />
          <input type="submit" value="Subir Image"/>
        </form>
      </div>
    </div>





  </div>
  <!-- fin izq -->

  <!-- der -->
  <div class="col-lg-6">
    <form style="margin-bottom: 150px;">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo($datosUsu['Email']) ?> " >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">DNI</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo($datosUsu['DNI']) ?> " >
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo($datosUsu['NombreUsuario']) ?> " >
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo($datosUsu['Apellido']) ?> " >
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cumpleaños</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo($datosUsu['Cumpleanos']) ?> " >
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <button type="submit" class="btn btn-primary">Cambiar contraseña</button>

    </form>
  </div>
  <!-- fin der -->
</div>














</div>






<!-- <label for="inputName" class="col-sm-2 control-label"><?php echo($datosUsu['DNI']) ?></label> -->
