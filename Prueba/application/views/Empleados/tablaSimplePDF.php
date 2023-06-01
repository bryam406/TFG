<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
            <!-- <img src="<?php echo base_url();?>imagenes/Imagen1.png"  height="55px" width="58px"> -->

       <div class="row" style="text-align:center;">
        <h1>Ventas Realizadas</h1>
        <hr>
    </div>
<table class="table table-bordered table-striped" id="table">
        <thead>
           <th>DNI</th>
           <th>NombreUsuario</th>
           <th>Apellido</th>
           <th>Marca</th>
           <th>Modelo</th>

           <th>Matricula</th>
           <th>Precio</th>
           <th>Stock</th>
           <th>Fecha_Venta</th>
       </thead>
       <tbody>
        <?php
        foreach($tablaVentas as $coches)
        {
            ?>
            <tr>
                <td><?php echo $coches['DNI']; ?></td>
                <td ><?php echo $coches['NombreUsuario']; ?></td>
                <td><?php echo $coches['Apellido']; ?></td>
                <td><?php echo $coches['Marca']; ?></td>
                <td><?php echo $coches['Modelo']; ?></td>
                <td><?php echo $coches['Matricula']; ?></td>

                <td><?php echo $coches['Precio']; ?></td>
                <td><?php echo $coches['Stock']; ?></td>
                <td><?php echo $coches['Fecha_Venta']; ?></td>

            </div>
        </tr>
        <?php
    }
    ?>
</tbody>
</table>
</body>
</html>