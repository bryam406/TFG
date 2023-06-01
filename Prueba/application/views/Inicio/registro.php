<!-- <div class="registro"></div>


<div class="container">
	<div class="regr"style="margin-bottom: 299px;">
		<form action="<?php echo base_url();?>Welcome/Validarregistro" method="post" >
			<br>
			<input type="text" placeholder="DNI" name="dni"  id="dni"required><br>
			<input type="text" placeholder="Nombre" name="usuario"  id="usuario"required><br>
			<input type="text" placeholder="Apellido" name="apellido" id="apellido"required><br>
			<input type="password" placeholder="Contraseña" name="contrasena" id="contrasena"required><br>
			<input type="text" placeholder="Correo" name="correo" id="correo"required><br>
			<input type="date" placeholder="Fecha de nacimiento" name="fechaNacimineto" style="margin-top: 10px; margin-left: 40%;" id="fechaNacimineto"required ><br>
			<input type="submit" value="Registrate" style="margin-top: 10px; margin-left: 26%;">

		</form>
	</div>
</div>


-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body{
			font-family: 'Poppins', sans-serif;

			background-size: cover;

			background-image: url(https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80);

		}
		a:hover {
			text-decoration: none;
		}
		.link {
			color: #ffeba7;
		}
		.link:hover {
			color: #c4c3ca;
		}
		p {
			font-weight: 500;
			font-size: 14px;
		}
		h4 {
			font-weight: 600;
		}
		h6 span{
			padding: 0 20px;
			font-weight: 700;
		}
		.section{
			position: relative;
			width: 100%;
			display: block;
		}
		.full-height{
			min-height: 100vh;
		}
		[type="checkbox"]:checked,
		[type="checkbox"]:not(:checked){
			display: none;
		}
		.checkbox:checked + label,
		.checkbox:not(:checked) + label{
			position: relative;
			display: block;
			text-align: center;
			width: 60px;
			height: 16px;
			border-radius: 8px;
			padding: 0;
			margin: 10px auto;
			cursor: pointer;
			background-color: #ffeba7;
		}
		.checkbox:checked + label:before,
		.checkbox:not(:checked) + label:before{
			position: absolute;
			display: block;
			width: 36px;
			height: 36px;
			border-radius: 50%;
			color: #ffeba7;
			background-color: #020305;
			font-family: 'unicons';
			content: '\eb4f';
			z-index: 20;
			top: -10px;
			left: -10px;
			line-height: 36px;
			text-align: center;
			font-size: 24px;
			transition: all 0.5s ease;
		}
		.checkbox:checked + label:before {
			transform: translateX(44px) rotate(-270deg);
		}
		.card-3d-wrap {
			position: relative;
			width: 600px;
			max-width: 100%;
			height: 400px;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
			perspective: 800px;
			margin-top: 60px;
		}
		.card-3d-wrapper {
			width: 100%;
			height: 100%;
			position:absolute;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
			transition: all 600ms ease-out; 
		}
		.card-front, .card-back {
			width: 100%;
			height: 100%;
			background-color: #2b2e38;
			position: absolute;
			border-radius: 6px;
			-webkit-transform-style: preserve-3d;
		}
		.card-back {
			transform: rotateY(180deg);
		}
		.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
			transform: rotateY(180deg);
		}
		.center-wrap{
			position: absolute;
			width: 100%;
			padding: 0 35px;
			top: 50%;
			color: white;

			left: 0;
			transform: translate3d(0, -50%, 35px) perspective(100px);
			z-index: 20;
			display: block;
		}
		.form-group{ 
			position: relative;
			display: block;
			margin: 0;
			padding: 0;
		}
		.form-style {
			padding: 13px 20px;
			padding-left: 55px;
			height: 48px;
			width: 100%;
			font-weight: 500;
			border-radius: 4px;
			font-size: 14px;
			line-height: 22px;
			letter-spacing: 0.5px;
			color: black;
			background-color: white;
			border: none;
			-webkit-transition: all 200ms linear;
			transition: all 200ms linear;
			box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
		}
		.form-style:focus,
		.form-style:active {
			border: none;
			outline: none;
			box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
		}
		.input-icon {
			position: absolute;
			top: 0;
			left: 18px;
			height: 48px;
			font-size: 24px;
			line-height: 48px;
			text-align: left;
			color: white;

			-webkit-transition: all 200ms linear;
			transition: all 200ms linear;
		}
		.btn{  
			border-radius: 4px;
			height: 44px;
			font-size: 13px;
			font-weight: 600;
			text-transform: uppercase;
			-webkit-transition : all 200ms linear;
			transition: all 200ms linear;
			padding: 0 30px;
			letter-spacing: 1px;
			display: -webkit-inline-flex;
			display: -ms-inline-flexbox;
			display: inline-flex;
			align-items: center;
			background-color: #ffeba7;
			color: #000000;
		}
		.btn:hover{  
			background-color: #000000;
			color: #ffeba7;
			box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
		}

	</style>
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form action="<?php echo base_url();?>Empleado/Validarregistro" method="post"> 
												<h4 class="mb-4 pb-3">Registro</h4>

												<div class="input-group mt-2">
													<input type="text" placeholder="DNI" name="dni"  id="Dni"required class="form-control" >
													<input type="text" placeholder="Nombre" name="Nombre"  id="Nombre"required class="form-control">
												</div>
												<div class="input-group mt-2">
													<input type="text" placeholder="1º Apellido" name="Apellido"  id="Apellido"required class="form-control" >
													<input type="text" placeholder="2º Apellido" name="Apellido2"  id="Apellido2"required class="form-control">
												</div>
												<div class="input-group mt-2">
													<input type="password" placeholder="Contraseña" name="Clave1" id="Clave1" required class="form-control">	
													<!-- <input type="password" placeholder="Repita contraseña" name="contrasena" id="clave2" required class="form-control">	 -->
												</div>
												<div class="input-group mt-2">
													<input type="text" placeholder="Direccion" name="Direccion"  id="Direccion"required class="form-control" >
													<input type="text" placeholder="Codigo Postal" name="Cp"  id="Cp"required class="form-control">
												</div>
												<div class="input-group mt-2">
													<input type="text" placeholder="Telefono" name="Tlf"  id="Tlf"required class="form-control" >
													<input type="email" placeholder="Email" name="Email"  id="Email"required class="form-control">
												</div>
												<button id="Login" type="submit" name="Login" class="btn mt-4">Login</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

<!-- 
	<script type="text/javascript">


		function comprobarClave() {
			let clave1 = document.getElementById("clave1").value
			let clave2 = document.getElementById("clave2").value

			if (clave1 == clave2) {
				return true;
			} else {
				return false;
			}
		}

	</script> -->