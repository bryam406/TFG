<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {



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
		//cargar libreria redsys
		$this->load->library("RedsysAPI");
	}





// ------------------------------------- Registro Usuarios -----------------------


	function Registro(){

		$this->load->view("Inicio/Load");
		$this->load->view("Menus/Inicio");
		$this->load->view("empleados/header");
		$this->load->view('Inicio/registro');
	} 



	function Validarregistro(){

		$nuevoUsuario=$this->input->post();
		$datosUsu= $this->registro_model->insertarUsuario($nuevoUsuario);


		if ($datosUsu) {
			$this->session->set_flashdata("correcto", "Se ha registrado con exito");


		}else{
			$this->session->set_flashdata("error", "No Se ha registrado");

		}
		redirect(base_url().'/Cliente/Deportivos', 'refresh');

	}


// -------------------------------------  FIN  ---------------------------------------









// ---------------------------------  Inicio Sesion Usuarios  -------------------------------------

	function InicioUsuarios()
	{	
		$this->session->set_userdata("id_usuario", '');
		$dni = $this->input->post("dniusuario");
		$contrasena = $this->input->post("contrasenausuario");


		$datosUsu['datosUsu'] = $this->usuario_model->actualizarDBCliente($dni);

		$hacerLogin = $this->usuario_model->comprobarUsuario($dni, $contrasena);
	
		if($hacerLogin)
		{
			$this->load->view("Inicio/Load");
			$this->load->view("Menus/MenuUsuario");
			$this->load->view("empleados/header");
			$this->load->view('Usuarios/Sesion_iniciadaUsuarios',$datosUsu);
			$this->load->view("empleados/footer");
			$this->session->set_userdata("id_usuario", $hacerLogin['id']);


		}else{
			redirect(base_url().'/Welcome/Inicio_sesion', 'refresh');

		}
	}
// ----------------------------------------  Fin   ------------------------------------------------


	function Deportivos(){


		// 1 Obetener los datos de los coches
		$coches =  $this->inventario_model->verImagenDeportivos();


		// 2 Obtener las fotos de cada coche
		foreach ($coches as $key => $coche) {
			// var_dump($coche);
			$fotoscoche = array();
			$handle = opendir('fotos_coches/'.$coche['Carpeta_Img']);
			if ($handle) {
				while (($entry = readdir($handle)) !== FALSE) {
					$fotoscoche[] = $entry;
				}
			}
			closedir($handle);
			unset($fotoscoche[0]);
			unset($fotoscoche[1]);
			$coches[$key]['totalfotos'] = $fotoscoche;
			// var_dump($coche);
		}
		// var_dump($coches);
		$datos['prueba'] = $coches;
		//Envio de datos a la vista
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/MenuUsuario");
		$this->load->view("empleados/header");
		$this->load->view('Usuarios/Deportivos', $datos);
		
	}




	function Noticias(){
		$this->load->view("Inicio/Load");
		$this->load->view("Menus/MenuUsuario");
		$this->load->view("empleados/header");
		$this->load->view('Usuarios/Noticias');
		// $this->load->view("empleados/footer");
		
	}


	function Mi_inventario(){
		$idusuario = $this->session->userdata('id_usuario');

		$datos['recibos'] =  $this->usuario_model->mostrarrecibos($idusuario);


		$this->load->view("Inicio/Load");
		$this->load->view("Menus/MenuUsuario");
		$this->load->view("empleados/header");
		$this->load->view('Usuarios/Mi_inventario', $datos);
		$this->load->view("empleados/footer");
	}




	function Bolsa(){

		$idusuario = $this->session->userdata('id_usuario');

		$datos['inventarioCoche'] = $this->inventario_model->bolsa($idusuario);
		$datos['preciofinal'] = $this->inventario_model->preciofinal($idusuario);

		$this->load->view("Inicio/Load");
		$this->load->view("Menus/MenuUsuario");
		$this->load->view("empleados/header");
		$this->load->view('Usuarios/Bolsa_compra', $datos);
		$this->realizarPago($datos['preciofinal']);
		$this->load->view("empleados/footer");

	}



	function realizarPago($importe){
		$idusuario = $this->session->userdata('id_usuario');
		$datos = $this->inventario_model->bolsa($idusuario);


		if ($datos != null){
		//hacer todo
			$miObj = new RedsysAPI;
			$amount = $this->simplificarImporte($importe);
		//cantidad + centimos
			$url_tpv = 'https://sis.redsys.es/sis/realizarPago';
			$clave = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';
			$code = '999008881';
			$terminal = '1';
			$order = $datos[0]['factura'];
			$currency = '978';
			$transactionType = '0';
        $urlweb_ok = base_url().'cliente/resultadoCompra/1';  //Si el pago con tarjeta es exitoso
        $urlweb_ko = base_url().'cliente/resultadoCompra/2';  //Si el pago con tarjeta es erroneo

        $miObj->setParameter("DS_MERCHANT_AMOUNT", $amount);
        $miObj->setParameter("DS_MERCHANT_CURRENCY", $currency);
        $miObj->setParameter("DS_MERCHANT_ORDER", $order);
        $miObj->setParameter("DS_MERCHANT_MERCHANTCODE", $code);
        $miObj->setParameter("DS_MERCHANT_TERMINAL", $terminal);
        $miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE", $transactionType);
        $miObj->setParameter("DS_MERCHANT_URLOK", $urlweb_ok);
        $miObj->setParameter("DS_MERCHANT_URLKO", $urlweb_ko);

        // var_dump($miObj);
        $data['params'] = $miObj->createMerchantParameters();
        $data['signature'] = $miObj->createMerchantSignature($clave);

        $this->load->view("confirmarPago", $data);
    }
}




function simplificarImporte($importe)
{

	$precioRedsys = explode(".", $importe);

	switch(sizeof($precioRedsys))
	{
		case 1: return  $precioRedsys[0]."00"; break;
		case 2: return  $precioRedsys[0].$precioRedsys[1]; break;
	}

}





function resultadoCompra($status)
{
	switch($status)
	{
		case 1: 
		$idusuario = $this->session->userdata('id_usuario');
		$datos = $this->inventario_model->Comprado($idusuario);
		redirect(base_url().'/Cliente/recibo', 'refresh');
		$this->session->set_flashdata("correcto", "Se ha registrado");
		break;


		case 2: 
		redirect(base_url().'/Cliente/Bolsa', 'refresh');
		$this->session->set_flashdata("error", "No se ha podido realizar la compra");
		break;
	}
}



// ----------------------------------			FIN 			------------------------------------------







function bolsacompra($idCoche){

	$idusuario = $this->session->userdata('id_usuario');
	$getventas = $this->inventario_model->anadirBolsa($idCoche,$idusuario);   


	if ($getventas) {
		$this->session->set_flashdata("correcto", "Se ha registrado con exito");


	}else{
		$this->session->set_flashdata("error", "No Se hay stock");

	}
	redirect(base_url().'/Cliente/Deportivos', 'refresh');


}

function SumarVehi($idCoche){

	$idusuario = $this->session->userdata('id_usuario');
	$coches =  $this->inventario_model->sumar($idusuario,$idCoche);

	if ($coches) {
		$this->session->set_flashdata("correcto", "Se ha sumado con exito");



	}else{
		$this->session->set_flashdata("error", "No hay stock");

	}
	redirect(base_url().'Cliente/Bolsa', 'refresh');
}


function RestarVehi($idCoche){
	$idusuario = $this->session->userdata('id_usuario');
	$coches =  $this->inventario_model->restar($idusuario,$idCoche);

	if ($coches) {
		$this->session->set_flashdata("correcto", "Se ha restado con exito");


	}else{
		$this->session->set_flashdata("error", "No Se ha restado");

	}
	redirect(base_url().'Cliente/Bolsa', 'refresh');

}



function recibo(){

	$idusuario = $this->session->userdata('id_usuario');
	$datos['usuarios'] =  $this->usuario_model->usuarios($idusuario);
	$datos['recibos'] =  $this->usuario_model->recibo($idusuario);
	$datos['recibos2'] =  $this->usuario_model->totalrecibos($idusuario);


	$this->load->view("Inicio/Load");
	$this->load->view("Menus/MenuUsuario",$datos);
	$this->load->view("empleados/header");
	$this->load->view('recibos/recibo');
	

}

function mostrarrecibo($facturas){

	$idusuario = $this->session->userdata('id_usuario');
	$datos['usuarios'] =  $this->usuario_model->usuarios($idusuario);
	$datos['recibos'] =  $this->usuario_model->Pruebarecibo($idusuario,$facturas);
	$datos['recibos2'] =  $this->usuario_model->totalrecibos($idusuario);

	$this->load->view("Inicio/Load");
	$this->load->view("Menus/MenuUsuario",$datos);
	$this->load->view("empleados/header");
	$this->load->view('recibos/consultarecibos');
}




}?>



