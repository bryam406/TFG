
<div class="container" style="margin-top:100px">
    <div class="row resultadosDetalles"   style=" overflow-y:auto; height:250px" >
    <form action="<?php echo base_url();?>Empleado/Actualizardb" method="post">

        <table id="theTable" class="display table table-bordered">

            <thead>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>MATRICULA</th>
                <th>PRECIO</th>

                <th>STOCK</th>
                <th>FECHA MATRICULACION</th>
                <th>Ficha_tecnica</th>


            </thead>
            <tfoot>
                <tr>
                    <td><input name="marca" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Marca']);?> " ></td>
                    <td><input name="modelo" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Modelo']);?> " ></td>
                    <td><input name="matricula" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Matricula']);?> " ></td>
                    <td><input name="precio" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Precio']);?> " ></td>
                    <td><input name="stock" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Stock']);?> " ></td>
                    <td><input name="fecha_matricula" type="text" width="container__input" style="width:140px;" value="<?php echo($inventarioCoche['Fecha_matriculacion']);?> " ></td>
                </tr>
            </tfoot>

        </table>
        <input type="submit" value="Registrar" style="height: 40px;"class="btn btn-success">
    </form>
    <form action="<?php echo base_url();?>Empleado/Inventario" method="post">
        <input type="submit" value="Cancelar" style="height: 40px;" class="btn btn-danger" >

    </div>
</div>