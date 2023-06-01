
<div class="container">
    <div class="row" style="text-align:center;">
        <h1>Ventas Realizadas</h1>
        <hr>
    </div>
    <!- --------------- muestra la bhase de datos ------------------- ->
       <div class="row" >
        <div class="col-lg-6">
            <span>Exportar</span>

            <div class="btn-group btn-group-sm" role="group">
                <a href="<?php echo base_url(); ?>Empleado/estadoVentasPDF" class="btn btn-danger" height="30px">PDF</a>

              <a href="<?php echo base_url(); ?>Empleado/exportAllProyectOrders" class="btn btn-success" height="30px">Excel</a>
          </div>
      </div>
</div>


<div class="row ">
    <table class="table table-striped" id="table">
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
                <td ><?php echo $coches['DNI']; ?></td>
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
    <div class="row">

            <?php 
            if(!is_null($pagination))
            {
                echo $pagination; 
            }else{
                ?>
                <?php
            }
            ?>
    </div>
