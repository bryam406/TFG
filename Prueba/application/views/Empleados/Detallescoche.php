
<div class="container" style="margin-top:90px;">
	<h1 class="display-1"style = "font-family:Brush Script MT; text-align: center;" > ~ <?php echo($inventarioCoche['Marca']);?> - <?php echo($inventarioCoche['Modelo']);?>  ~ </h1>
</div>



<div class="container" >
	<div class="row" style="margin-top: 50px">
		<div class="col-lg-6 " >
			<div class="card2" style="width: auto;">
				<div class="card2-body">
					<input type="radio" name="slider" id="item-1"checked	>
					<input type="radio" name="slider" id="item-2">
					<input type="radio" name="slider" id="item-3">
					<div class="cards">
						<?php 
						$cnt=1;
						foreach($ventas as $venta)
						{
							?>
							<label class="card2" for="item-<?php echo $cnt;?>" id="song-<?php echo $cnt;?>">
								<img src="<?php echo $urlimg.$venta;?>" alt="" width="400px">
							</label> 
							<?php 
							$cnt++;
						}
						?>
						
					</div> 
				</div>
			</div>
		</div>


		<div class="col-lg-6 ">

			<div style="opacity: 1;">
				<h3 class="Ferrari">
					<span class="">
						<span>Datos Generales&nbsp;</span>
					</span>
				</h3>
			</div>



			<div class="row">
				<div class="col-5"><table class="table">
					<tbody>
						<tr>
							<td>Año: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Combustible: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<th>Potencia:&nbsp;</th>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-5">
				<table class="table">
					<tbody>
						<tr>
							<td>Año: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Combustible: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<th>Potencia:&nbsp;</th>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>



		<div style="opacity: 1">
			<h3 class="Ferrari">
				<span>Disponibilidad&nbsp;</span>
			</h3>
		</div>
		<table class="table">
			<tbody>
				<tr>
					<td>Stock disponible: &nbsp;</td>
					<td> <?php echo($inventarioCoche['Stock']);?> </td>
				</tr>
				<tr>
					<td>Reservados: &nbsp;</td>
					<td>...</td>
				</tr>
			</tbody>
		</table>

	</div>	
</div>


<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">
		<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Carroceria</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Motor</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Extras</button>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<div class="row">
			<div class="col-6">
				<div style="width: 23rem;">
					<img src="https://assets0.autocasion.com/ao-assets/img/medidas.png?ef452877b040815eb26ae7988f170c6f0" class="card-img-top" alt="https://assets0.autocasion.com/ao-assets/img/medidas.png?ef452877b040815eb26ae7988f170c6f0">
					<div class="card-body">
						<div class="col-lg-6">
							<p>Largo: 3000cm</p>
						</div>
						<div class="col-lg-6">
							<p>Ancho: 3000cm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Carrocería: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Peso/Masa max. autorizado (kg): &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Número de puertas: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Capacidad del maletero (l): &nbsp;</td>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<div class="row">
			<div class="col-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Carrocería: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Peso/Masa max. autorizado (kg): &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Número de puertas: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Capacidad del maletero (l): &nbsp;</td>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Carrocería: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Peso/Masa max. autorizado (kg): &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Número de puertas: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Capacidad del maletero (l): &nbsp;</td>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<div class="row">
			<div class="col-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Carrocería: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Peso/Masa max. autorizado (kg): &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Número de puertas: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Capacidad del maletero (l): &nbsp;</td>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-6">
				<table class="table">
					<tbody>
						<tr>
							<td>Carrocería: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Peso/Masa max. autorizado (kg): &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Número de puertas: &nbsp;</td>
							<td>...</td>
						</tr>
						<tr>
							<td>Capacidad del maletero (l): &nbsp;</td>
							<td>...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<?php 
	if ($inventarioCoche['Stock'] > 0){
		?>
		<a href="<?php echo base_url();?>Empleado/FormVenta/<?php echo($inventarioCoche['id']);?>" class="btn btn-outline-success">Tramitar venta</a>

	<?php } else { ?>

		<a href="<?php echo base_url();?>Empleado/Inventario" class="btn btn-outline-warning">No hay Stock de este modelo</a>
	<?php } ?>

</div>

</div>

