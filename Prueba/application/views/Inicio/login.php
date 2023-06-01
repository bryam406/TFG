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

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Empleados </span><span>Usuarios</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form action="<?php echo base_url();?>Empleado/Inicio" method="post">
												<h4 class="mb-4 pb-3">Empleados</h4>
												<div class="form-group">
													<input type="text" placeholder="DNI" name="dni"  id="dni"required class="form-style"><br>
													<i class="input-icon uil uil-at"></i>
												</div>  
												<div class="form-group mt-2">
													<input type="password" placeholder="Contraseña" name="contrasena" id="contrasena"required class="form-style"><br>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button id="Login" type="submit" name="Login" class="btn mt-4">Login</button>
												<p class="mb-0 mt-4 text-center"><a href="" class="link">Forgot your password?</a></p>
											</form>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<form action="<?php echo base_url();?>Cliente/InicioUsuarios" method="post">
												<h4 class="mb-4 pb-3">Usuarios</h4>
													<div class="form-group">
													<input type="text" placeholder="DNI" name="dniusuario"  id="dniusuario"required class="form-style"><br>
													<i class="input-icon uil uil-at"></i>
												</div>  
												<div class="form-group mt-2">
													<input type="password" placeholder="Contraseña" name="contrasenausuario" id="contrasenausuario"required class="form-style"><br>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button id="Login" type="submit" name="Login" class="btn mt-4">Login</button>s
												<a href="<?php echo base_url();?>Cliente/registro " class="btn mt-4">Register</a>
												<p class="mb-0 mt-4 text-center"><a href="" class="link">Forgot your password?</a></p>
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


 
<script type="text/javascript">
    
    $(".msg").fadeOut(4000);


</script>