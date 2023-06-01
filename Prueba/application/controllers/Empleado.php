<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {



	function __construct()
	{
		parent:: __construct();

		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("usuario_model");
		$this->load->model("inventario_model");
		$this->load->model("registro_model");
		$this->load->model("Ventas_model");
		$this->load->library('export');
		$this->load->library('pagination');
		$this->load->library('pdf');

	}



	function Perfil(){

		$dni = $this->session->userdata("dni_usuario");
		$datosUsu['datosUsu'] = $this->usuario_model->actualizarDB($dni);
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("empleados/header");
		$this->load->view('Empleados/Sesion_iniciada',$datosUsu);
		$this->load->view("empleados/footer");
	}





// ---------------------------------- Base de datos -------------------------------

	function Inventario()
	{

		
		$idusuario = $this->session->userdata('dni_usuario');
		$datos = $this->inventario_model->bolsa($idusuario);
		var_dump($idusuario);


		$datos['inventarioCoches'] = $this->inventario_model->getInventario();
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("Empleados/header");
		$this->load->view('Empleados/Inventario', $datos);
		$this->load->view("Empleados/footer");
	}


	// -------------			FIN 			 ----------------------




// ---------------------------- Inicio de sesion Empleados  --------------------------


	function Inicio()
	{	
		$this->session->set_userdata("id_usuario", '');
		$dni = $this->input->post("dni");
		$contrasena = $this->input->post("contrasena");
		$hacerLogin = $this->usuario_model->comprobar($dni, $contrasena);
		if($hacerLogin)
		{
		$datosUsu['datosUsu'] = $this->usuario_model->actualizarDB($dni);
			$this->load->view("Inicio/Load");
			$this->load->view("Menus/Empleado");
			$this->load->view("empleados/header");
			$this->load->view('Empleados/Sesion_iniciada', $datosUsu);
			$this->load->view("empleados/footer");
			$this->session->set_userdata("dni_usuario", $hacerLogin['DNI']);

		}else{
			redirect(base_url().'/Welcome/Inicio_sesion', 'refresh');
			$this->session->set_flashdata("error", "No Se ha registrado");

		}
	}













// ----------------------------------  Graficas --------------------------------------
	function Ventas(){
	// ------ Circular empleados -----

		$getventas = $this->Ventas_model->getVentas();   
		$datos["ventas"]=$getventas;


	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// ------ Lineal ganancias -----

		$getganacias = $this->Ventas_model->getGanancias();
		$datos["ganancias"]=$getganacias;


	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// ------ Barras Coches -----

		$getcoches = $this->Ventas_model->getCohes();
		$datos["coches"]=$getcoches;


	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// ------ Ciruclar Coches Ferrari -----

		$getmarcas = $this->Ventas_model->getmodelos();
		$datos["modelos"]=$getmarcas;


	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// 	------ Ciruclar Coches Porche -----

		$getmarcasP = $this->Ventas_model->getmodelosP();
		$datos["modelosP"]=$getmarcasP;


	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// ------ Ciruclar Coches Ferrari -----

		$getmarcasL = $this->Ventas_model->getmodelos();
		$datos["modelosL"]=$getmarcasL;

	// ------ 			FIN 			 -----
	// --------------------------------------
	// --------------------------------------
	// ------ Envio de datos a la vista -----
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("empleados/header");
		$this->load->view('Empleados/Ventas',$datos);
		$this->load->view("empleados/footer");


	// ------ 			FIN 			 -----
	}

// ---------------------------------- FIN  de Graficas -------------------------------




// ------------------------ Foto perfil usuario --------------------

	function subirImagen()
	{

		$config['upload_path']          = './imagenes/';
		$config['allowed_types']        = '*';
		$config['max_size']     = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
		$config['file_name'] = "imagen_profile_".$this->session->userdata("dni_usuario");
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			echo "<script>alert(' No Se ha registrado');
			window.history.go(-1);</script>";  
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

                //update imagen
			$this->usuario_model->updateImagen($data['upload_data']['file_name'], $this->session->userdata("dni_usuario"));


			echo "<script>alert('Se ha registrado con exito');
			window.location='/Empleado/Perfil'</script>";   


		}
	}
	// ------------------------------ FIN  --------------------------


	// -------------	 	Paginacion de tabla  	 ------------------

	function EstadoVentas(){

		$config['base_url'] = site_url('index.php/Empleado/EstadoVentas');
		$config['per_page'] = "10";
		$config['total_rows'] = $this->Ventas_model->totalSedes();
		$config['uri_segment'] = 3;
		$config['num_links'] = '5';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Último';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';


		$this->pagination->initialize($config);
		$datos['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

																			// limit            start
		$datos['tablaVentas'] = $this->Ventas_model->ventas($config['per_page'], $datos['page']);
		$datos['pagination'] = $this->pagination->create_links();


		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("empleados/header");
		$this->load->view('Empleados/EstadoVentas',$datos);
		$this->load->view("empleados/footer");
	}


	// -------------			FIN 			 ------------------





	// -------------	 	Exportar a Excel   	 -------------------

	function exportAllProyectOrders()
	{
		$result = $this->Ventas_model->exportAllProyectOrder();
		$this->export->to_excel($result, 'listaProyectos');
	}

	// -------------			FIN 			 ------------------
	





	// -------------	 	Exportar a PDF   	 -------------------

	function estadoVentasPDF()
	{
		$datos['tablaVentas'] = $this->Ventas_model->ventas2();
		$html = $this->load->view('Empleados/tablaSimplePDF', $datos, true);
		$this->pdf->createPDF($html, 'mypdf', false);
	}

	// -------------			FIN 			 ------------------




	// -------------	 	Insertar datos de la BD   	 -------------------

	function insertarBD(){

		$nuevoVehiculo=$this->input->post();
		// var_dump($nuevoVehiculo);
		$datosvehi= $this->inventario_model->insertarVehiculo($nuevoVehiculo);
		var_dump($nuevoVehiculo);

		if ($datosvehi) {

			$this->session->set_flashdata("correcto", "Se ha registrado con exito");
			$dir='./fotos_coches/'.$nuevoVehiculo['modelo']."/";
			mkdir($dir,777);



			// echo "<script>alert('Se ha registrado con exito');
			// window.location='/Empleado/inventario'</script>";
		}else{
			$this->session->set_flashdata("error", "No Se ha registrado");
			// echo "<script>alert(' No Se ha registrado');
			// window.history.go(-1);</script>"; 
		}
		redirect(base_url().'empleado/inventario', 'refresh');

	}

	// -------------			FIN 			 ----------------------







	// -------------	 Borrar datos de la BD   	 ------------------

	function borrarBD($vehiculoborrado){

		$borrar = $this->inventario_model->eliminarVehiculo($vehiculoborrado);
		if ($borrar) {
			$this->session->set_flashdata("correcto", "Se ha eliminado con exito");

			// echo "<script>alert('Se ha eliminado con exito');
			// window.location='/Empleado/inventario'</script>";
		}else{
			$this->session->set_flashdata("error", "No se ha eliminado");

			// echo "<script>alert(' No Se ha eliminado');
			// window.history.go(-1);</script>"; 
		}
		redirect(base_url().'empleado/inventario', 'refresh');

	}

	// -------------			FIN 			 ----------------------





	// -------------	 Editar datos de la BD   	 ------------------


	function edit($idCoche)
	{

			// ------ Envio de datos a la vista -----

		$datos['inventarioCoche'] = $this->inventario_model->actualizarDB($idCoche);


		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("Empleados/header");
		$this->load->view("Empleados/Editar_inventario" , $datos);
		$this->load->view("Empleados/footer");

			// ------FIN Envio de datos a la vista -----

	}

	// -------------			FIN 			 ----------------------






	// -------------	 Editar datos de la BD   	 ------------------

	function FormVenta($idCoche){

		$datos['inventarioCoche'] = $this->inventario_model->actualizarDB($idCoche);

		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("empleados/header");
		$this->load->view('Ventas/Formulario_ventas', $datos);
		$this->load->view("empleados/footer");
	}


	// -------------			FIN 			 ----------------------






	// -------------	 VH vendido  de la BD   	 ------------------


	function vendido($idCoche){

		$vendido['inventarioCoche'] = $this->inventario_model->venta($idCoche);
		if ($vendido) {
			$this->session->set_flashdata("correcto", "Se ha Vendido con exito");

			 // echo "<script>alert('Se ha Vendido con exito');
			 // window.location='/Empleado/inventario'</script>";
		}else{
			$this->session->set_flashdata("error", "No Se ha Vendido");
			 //echo "<script>alert(' No Se ha Vendido ha ocurrido un problema');
			 // window.history.go(-1);</script>"; 
		}
		redirect(base_url().'empleado/inventario', 'refresh');
	}

	// -------------			FIN 			 ----------------------

	// -------------	 Datos tecnicos del Vehiculo 	---------------


	function verFicha($idCoche){

		$carpeta= $this->inventario_model->verImagen($idCoche);




		$arrFiles = array();
		$handle = opendir('fotos_coches/'.$carpeta);
		if ($handle) {
			while (($entry = readdir($handle)) !== FALSE) {
				$arrFiles[] = $entry;
			}
		}
		closedir($handle);
		unset($arrFiles[0]);
		unset($arrFiles[1]);

		$datos["ventas"]=$arrFiles;




		$datos['inventarioCoche'] = $this->inventario_model->actualizarDB($idCoche);

		$datos['urlimg'] = base_url()."fotos_coches/".$carpeta. "/";


		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Empleado");
		$this->load->view("empleados/header");
		$this->load->view('Empleados/Detallescoche',$datos);
		$this->load->view("empleados/footer");


	}

	function Actualizardb(){
		$updateVehiculo=$this->input->post();
		$datosvehi= $this->inventario_model->ActualzarRegistro($updateVehiculo);


		if ($datosvehi) {
			$this->session->set_flashdata("correcto", "Se ha Actualizado con exito");

			// echo "<script>alert('Se ha Actualizado con exito');
			// window.location='/Empleado/inventario'</script>";
		}else{
			$this->session->set_flashdata("error", "No Se ha Actualizado");

			// echo "<script>alert(' No Se ha registrado');
			// window.history.go(-1);</script>"; 
		}
		redirect(base_url().'empleado/inventario', 'refresh');


	}


// -----------------------------------------------------------------	 FIN EMPLEADO  











	function probar(){

	}

}?>