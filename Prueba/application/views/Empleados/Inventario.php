
<div class="container" style="margin-top:60px">
    <div class="row" style="text-align:center;">
        <h1>Inventario</h1>
        <hr>
    </div>


    <!- --------------- muestra la bhase de datos ------------------- ->
     <h2>Consulta de datos.</h2>
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

   <!--   <div class="row" style="padding-left: 800px;">
        <form action="<?php echo base_url();?>Empleado/buscarM" method="POST">
            Matricula
            <input  name="matricula" type="text" class="container__input" style="width:150px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search" onclick="load(1);"></i></button>
        </form>
    </div>
 -->

    <div class="row "   style=" overflow-y:auto; height:300px">
        <table class="table table-striped">
            <thead>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>MATRICULA</th>
                <th>PRECIO</th>

                <th>STOCK</th>
                <th>FECHA MATRICULACION</th>
                <th>Ficha_tecnica</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php
                foreach($inventarioCoches as $coches)
                {
                    ?>
                    <tr>
                        <td ><?php echo $coches['Marca']; ?></td>
                        <td><?php echo $coches['Modelo']; ?></td>
                        <td><?php echo $coches['Matricula']; ?></td>
                        <td><?php echo $coches['Precio']; ?></td>
                        <td><?php echo $coches['Stock']; ?></td>
                        <td><?php echo $coches['Fecha_matriculacion']; ?></td>
                        <td><a href="<?php echo base_url();?>Empleado/verFicha/<?php echo $coches['id'];?>" class="btn btn-outline-dark">Ver</a></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" >
                                <a href="<?php echo base_url();?>Empleado/borrarBD/<?php echo $coches['id'];?>" class="btn btn-danger">Borrar</a>
                                <a href="<?php echo base_url();?>Empleado/edit/<?php echo $coches['id'];?>" class="btn btn-warning">Editar</a>
                            </div>
                        </td>

                         <!--    <form method="post" action="<?php echo base_url();?>Empleado/subirImagen" enctype="multipart/form-data" >
                                <input type="file" id="userfile" name="userfile" size="33" />
                                <input type="submit" value="Subir Image"/>
                            </form>-->
                        </div>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <! ---------------------------------------------------------- ->

        <br>


        <!---------- Tabla de inserccion de datos ------------>
        <div class="row"   style=" overflow-y:auto; height:300px">
            <form action="<?php echo base_url();?>Empleado/insertarBD" method="post">

                <table class=" table">
                    <h2>Inseccion de datos.</h2>
                    <thead>
                        <th>MARCA</th>
                        <th>MODELO</th>
                        <th>MATRICULA</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>FECHA MATRICULACION</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td><input name="marca" type="text" width="container__input" style="width:150px;" ></td>
                            <td><input  name="modelo" type="text" class="container__input " style="width:150px;"></td>
                            <td><input  name="matricula" type="text" class="container__input" style="width:150px;"></td>
                            <td><input  name="precio" type="text" class="container__input" style="width:150px;"></td>
                            <td><input  name="stock" type="text" style="width:150px;"></td>
                            <td><input  name="fecha_matricula" type="text" class="container__input" style="width:150px;"></td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" value="Registrar" >
            </form>

        </div>
        <! ---------------------------------------------------------- ->



        </div>



<script type="text/javascript">
    
    $(".msg").fadeOut(4000);


    function crearcarpeta(){


fs.mkdirSync('./folder1/folder2/',{recursive:true});


    }


</script>