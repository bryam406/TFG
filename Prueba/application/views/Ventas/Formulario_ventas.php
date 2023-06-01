
<div class="container" style="margin-top:100px">
    <div class="row resultadosDetalles"   style=" overflow-y:auto; height:250px" >
        <form action="<?php echo base_url();?>Empleados/Actualizardb" method="post">
            <table class="table">
              <thead>
                <tr>
                    <th scope="col">MARCA</th>
                    <th scope="col">MODELO</th>
                    <th scope="col">MATRICULA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">Stock</th>
                    <th scope="col">FECHA MATRICULACION</th>


                </tr>
            </thead>
    
                <tbody>
                    <tr>
                        <th >
                           <?php echo($inventarioCoche['Marca']);?></th >
                        <th ><?php echo($inventarioCoche['Modelo']);?></th >
                        <th ><?php echo($inventarioCoche['Matricula']);?></th >
                        <th ><?php echo($inventarioCoche['Precio']);?></th >
                        <th ><?php echo($inventarioCoche['Stock']);?> </th >
                        <th ><?php echo($inventarioCoche['Fecha_matriculacion']);?> </th >
                    </tr>
                </tbody>

            </table>

            <a href="<?php echo base_url();?>Empleado/vendido/<?php echo $inventarioCoche['id'];?>" class="btn btn-outline-success">Realizar venta</a>
            <a href="<?php echo base_url();?>Empleado/Inventario" class="btn btn-outline-danger">Cancelar</a>


        </div>
    </div>