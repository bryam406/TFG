

<?php
class usuario_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}


	//buscar usuario en bbdd con usuario y contrasena del controlador
		//si existe devolvemos true
		//si no existe devolvemos false


	function comprobar($dni, $contrasena){

		$existe = $this->db->query("SELECT * FROM empledos WHERE DNI = '".$dni."' AND ContrasenaUsuario = '".md5($contrasena)."'")->row_array();

		if ($existe){
			
			return $existe;
		}else {
			return FALSE;
		}

	}

	function usuarios($idusuario){
		$existe = $this->db->query("SELECT * FROM usuarios WHERE id = '".$idusuario."'")->result_array();
		return $existe;

	}

	function actualizarDB($dni){
		$listaCoches = $this->db->query("SELECT * FROM tfg.empledos WHERE DNI = '".$dni."'")->row_array();
		return $listaCoches;

	}

	function actualizarDBCliente($dni){
		$listaCoches = $this->db->query("SELECT * FROM tfg.usuarios WHERE DNI = '".$dni."'")->row_array();
		return $listaCoches;

	}
	


	function updateImagen($imagen, $dni)
	{
		$this->db->query("UPDATE empledos SET imagen_perfil = '".$imagen."' WHERE dni = '".$dni."'");
	}




	function comprobarUsuario($dni, $contrasena){

		$existe = $this->db->query("SELECT * FROM usuarios WHERE DNI = '".$dni."' AND Contrasena = '".md5($contrasena)."'")->row_array();

		if ($existe){
			
			return $existe;
		}else {
			return FALSE;
		}

	}





	function recibo($idusuario){

		$ultimaFactura = $this->db->query("SELECT factura 
			FROM facturas LEFT JOIN ventas_online 
			ON facturas.facturas = ventas_online.factura
			LEFT JOIN inventario 
			ON ventas_online.id_vehiculo = inventario.id
			WHERE ventas_online.id_usuario = '".$idusuario."' order by facturas.id DESC LIMIT 1")->row()->factura;


		$recibo = $this->db->query("SELECT facturas.facturas, ventas_online.id_usuario ,facturas.total, ventas_online.id_vehiculo, inventario.Marca, inventario.Modelo, inventario.Matricula, inventario.Precio, ventas_online.cantidad, ventas_online.total

			FROM facturas
			LEFT JOIN ventas_online 
			ON facturas.facturas = ventas_online.factura
			LEFT JOIN inventario 
			ON ventas_online.id_vehiculo = inventario.id
			WHERE facturas.facturas = '".$ultimaFactura."'" )->result_array();


	// $recibo = $this->db->query("SELECT * FROM facturas WHERE facturas = '".$ultimaFactura."'")->row_array();

//opscion 2
		// SELECT facturas.facturas, ventas_online.id_usuario , ventas_online.id_vehiculo, inventario.Marca, inventario.Modelo, inventario.Matricula, inventario.Precio, ventas_online.cantidad, ventas_online.total

		// 	FROM facturas
		// 	LEFT JOIN ventas_online 
		// 	ON facturas.facturas = ventas_online.factura
		// 	LEFT JOIN inventario 
		// 	ON ventas_online.id_vehiculo = inventario.id
		// 	WHERE facturas.facturas = (SELECT factura FROM ventas_online WHERE ventas_online.id_usuario =  '".$idusuario."' ORDER BY id DESC LIMIT 1 )



		return $recibo;


	}

	function totalrecibos($idusuario){
		$ultimaFactura = $this->db->query("SELECT factura 
			FROM facturas LEFT JOIN ventas_online 
			ON facturas.facturas = ventas_online.factura
			LEFT JOIN inventario 
			ON ventas_online.id_vehiculo = inventario.id
			WHERE ventas_online.id_usuario = '".$idusuario."' order by facturas.id DESC LIMIT 1")->row()->factura;
		$recibo = $this->db->query("SELECT * FROM facturas WHERE facturas = '".$ultimaFactura."'")->row_array();
		return $recibo;
	}




	function mostrarrecibos($idusuario){

		$recibo = $this->db->query("SELECT facturas.facturas, ventas_online.id_usuario , ventas_online.id_vehiculo, inventario.Marca, inventario.Modelo, inventario.Matricula, inventario.Precio, ventas_online.cantidad

			FROM facturas
			LEFT JOIN ventas_online 
			ON facturas.facturas = ventas_online.factura
			LEFT JOIN inventario 
			ON ventas_online.id_vehiculo = inventario.id
			WHERE ventas_online.id_usuario = '".$idusuario."'" )->result_array();
		return $recibo;

	}


	function Pruebarecibo($idusuario,$facturas){

		$recibo = $this->db->query("SELECT * FROM ventas_online 
			LEFT JOIN inventario ON inventario.id = ventas_online.id_vehiculo WHERE factura = '".$facturas."' AND id_usuario = '".$idusuario."'")->result_array();
		return $recibo;
	}










}
?>