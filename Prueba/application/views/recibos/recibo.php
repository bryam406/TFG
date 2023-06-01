
<body style="background-color:;">
    <div class="container" style="margin-top:70px;background-color: white;" >


        <button  type="button" class="btn btn-outline-dark" onclick="inicio()"  width="30px" >Descarga PDF</button>

        <br>


        <div id="pagina">
            <div class="row">
                <div class="col-lg-4" style="text-align: left;">
                    <h1 style = "font-family:Copperplate; " >MI FACTURA  </h1>
                </div>
                <div class="col-lg-4" style="text-align: center;">
                    <img src="../imagenes/Imagen1.png"  height="100px" width="100px"/>
                </div>
                <div class="col-lg-4" style="text-align: right;">
                    Empresa: BDR Motors <br>
                    Direccion: Avenida de San Diego 1 <br>
                    Telefono: 696969696 <br>
                </div>
            </div>




            <div class="row" style="text-align: center; margin-top:120px;">
                <div class="col-lg-3">
                    <h4> Facturar: </h4>



                    <?php foreach($usuarios as $usuario){ ?>
                        <p1><?php echo($usuario['Nombre']) ?> </p1>  <br>
                        <p1><?php echo($usuario['Primer_Apellido']) ?> </p1>  <br>
                        <p1><?php echo($usuario['Segundo_Apellido']) ?> </p1>  <br>


                    <?php } ?>
                </div>
                <div class="col-lg-3">
                    <h4> Contacto </h4>
                    <?php foreach($usuarios as $usuario){ ?>

                        <p1><?php echo($usuario['Telefono']) ?> </p1>  <br>
                        <p1><?php echo($usuario['Corre_electronico']) ?> </p1>  <br>


                    <?php } ?>
                </div>

                <div class="col-lg-3">
                   <h4> Enviar: </h4>
                   <?php foreach($usuarios as $usuario){ ?>
                    <p1><?php echo($usuario['Pais']) ?> </p1>  <br>
                    <p1><?php echo($usuario['Codig_postal']) ?> </p1>  <br>
                    <p1><?php echo($usuario['Direccion']) ?> </p1>  <br>

                <?php } ?>
            </div>
            <div class="col-lg-3">
                <h4> Numero de factura: </h4>
                


                <strong ><?php echo($recibos[0]['facturas']) ?> </strong>  <br>


                
            </div>



        </div>





        <div class="row" style="text-align: center; margin-top:90px;">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio unitario</th>
                        <th scope="col">Importe unitario</th>
                        <th scope="col">Importe total</th>   

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($recibos as $recibo){
                        ?>
                        <tr>

                            <th scope="row"><?php echo($recibo['cantidad']);?></th>
                            <td><?php echo($recibo['Marca']);?></td>
                            <td><?php echo($recibo['Modelo']);?></td>
                            <td><?php echo($recibo['Precio']);?></td>

                        </tr>
                    <?php } ?>
                    <tr  >

                        <td colspan="3" class="table-active text-center"></td>
                        <td  class="table-light "> Precio Final: </td>
                        <td  class="table-light">
                            <strong><?php   echo( $recibos2['total']); ?></strong>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>


        <div class="row">
         <div class="col-lg-6" >  
         <img src="../imagenes/ruedas.jpg" width="40%" >        
         </div>
         <div class="col-lg-6" style="text-align: center;">  
           <img src="../imagenes/firma.png" width="140%">
           <strong>Empresa</strong>
       </div>
   </div>
</div>
</div>
</body>
