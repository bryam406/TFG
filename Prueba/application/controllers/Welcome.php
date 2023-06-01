<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		$this->load->library('curl');

	}



	// El codigo esta coemntado y divido en 3 partes sigiendo el siguiente orden
	// 1. inicio: En esta es la pagina WEB basica sin loguearse
	// 2. EMPLEADO: en esta parte esta todo el contenido, consultas, cargas de vista solo de dicho susuario.
	// 3. USUARIO:  en esta parte esta todo el contenido, consultas, cargas de vista solo de dicho susuario.




// -----------------------------------------------------------------	INICIO     -----------------------------------------------------------

	public function index()
	{

		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("Menus/videoInicio");
		$this->load->view("Inicio/header2");
		$this->load->view('Inicio/Home');
			// $this->load->view("empleados/footer");


	}


	function Registro(){

		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("empleados/header");
		$this->load->view('Inicio/registro');
	}

	function Inicio_sesion(){
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("empleados/header");
		$this->load->view("css/LoginStyle");
		$this->load->view('Inicio/login');
	}


	function cerrarSesion()
	{
		$this->session->sess_destroy();
		header("Location: ".base_url(). "/Welcome/Inicio_sesion");
	}


	function Home(){
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("Menus/videoInicio");
		$this->load->view("Inicio/header2");
		$this->load->view('Inicio/Home');
		$this->load->view("empleados/footer");
	}


	function galeria(){
		
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("empleados/header");
		$this->load->view('Inicio/Nuestros_coches');
		$this->load->view("empleados/footer");
	}


	function contactos(){
		

		// $id_usuario = $this->session->userdata("id_usuario");
		// $this->inventario_model->inventada($this->session->userdata("id_usuario"), $id_producto);



		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("empleados/header");
		$this->load->view('Inicio/contacto');
		$this->load->view("empleados/footer");
	}



// ----------------------------------	Carga de vistas USUARIO	------------------------------------------


}


