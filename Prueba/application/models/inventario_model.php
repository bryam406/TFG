<?php
class inventario_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function getInventario($idCoche = NULL)
	{
		if($idCoche != NULL)
		{
			$listaCoches = $this->db->query("	 '".$idCoche."'")->row_array();
		}else{
			$listaCoches = $this->db->query("SELECT * FROM inventario")->result_array();
		}

		return $listaCoches;
	}

	function insertarVehiculo($nuevoVehiculo)
	{

		
		$añadircoche = $this->db->query("INSERT INTO inventario
			(Marca, Modelo, Matricula, Precio, Stock, Fecha_matriculacion)
			VALUES ('".$nuevoVehiculo['marca']."','".$nuevoVehiculo['modelo']."','".$nuevoVehiculo['matricula']."','".$nuevoVehiculo['precio']."','".$nuevoVehiculo['stock']."', '".$nuevoVehiculo['fecha_matricula']."')");


			if ($añadircoche) {
				return True;
			}else{
				return False;

			}

		}




		function buscar($busqueda){
			$busquedaMatri  = $this->db->query("SELECT Marca, Matricula FROM inventario WHERE Matricula = '".$busqueda['matricula']."'")->row_array();


			if ($busquedaMatri) {
				return True;
			}else{
				return False;

			}

		}



		function ver($idCoche){
			$listaCoches = $this->db->query("SELECT * FROM tfg.inventario WHERE id = '".$idCoche."'")->row_array();
			return $listaCoches;


			if ($busquedaMatri) {
				return True;
			}else{
				return False;

			}

		}


		function eliminarVehiculo($vehiculoborrado){		
			$borrarcoche = $this->db->query("DELETE FROM inventario WHERE id='$vehiculoborrado'");

			if ($borrarcoche) {
				return True;
			}else{
				return False;

			}


		}

		function actualizarDB($idCoche){
			$listaCoches = $this->db->query("SELECT * FROM tfg.inventario WHERE id = '".$idCoche."'")->row_array();
			return $listaCoches;


		}

		function ActualzarRegistro($updateVehiculo){

			$datosActualizadosProyecto = $this->db->query("UPDATE inventario SET
				Marca='{$updateVehiculo['marca']}',
				Modelo='{$updateVehiculo['modelo']}',
				Matricula='{$updateVehiculo['matricula']}',
				Precio='{$updateVehiculo['precio']}',
				Stock='{$updateVehiculo['stock']}',
				Fecha_matriculacion='{$updateVehiculo['fecha_matricula']}'
				WHERE id= '{$updateVehiculo['id']}'
				");
			if ($datosActualizadosProyecto) {
				return True;
			}else{
				return False;

			}

		}




		function verImagen($idCoche){
			$idCoche = $this->db->query("SELECT Carpeta_Img  FROM inventario WHERE id = '".$idCoche."'")->row()->Carpeta_Img;
			return $idCoche;
		}



		function verImagenDeportivos(){
			$idCoche = $this->db->query("SELECT id, Modelo, Carpeta_Img , Matricula, Marca  FROM inventario")->result_array();
			return $idCoche;
		}


		function venta($idCoche){
			$listaCoches = $this->db->query("UPDATE inventario SET Stock = (Stock)-1 WHERE  Stock >0 AND id = '".$idCoche."'" );
			if ($listaCoches) {

				
				return True;
			}else{
				return False;

			}


		}





		function anadirBolsa($idCoche, $idusuario){


			$comprobarstock = $this->db->query("SELECT Stock FROM inventario WHERE id = '".$idCoche."'")->row_array();


			$comprobarstockbolsa = $this->db->query
			("SELECT cantidad FROM bolsa_compra WHERE ID_usuario ='".$idusuario."'  AND ID_Vehiculo = '".$idCoche."'")->row_array();


			if ($comprobarstock['Stock'] >  $comprobarstockbolsa['cantidad']){
				$listaCoches = $this->db->query("

					INSERT INTO bolsa_compra (ID_Vehiculo,ID_usuario, cantidad) VALUES ('".$idCoche."', '".$idusuario."','1') ON DUPLICATE KEY UPDATE cantidad = cantidad+1 ");



					if ($listaCoches){

						return True;



					}else{
						return False;

					}

				}else{
					return False;


				}


			}


			function bolsa($idusuario){
				mt_srand (time());
				$numero_aleatorio = mt_rand();
				$factura = ("PD070".$numero_aleatorio."");


				do {

					$comprobarfac =  $this->db->query("SELECT * FROM ventas_online WHERE factura = '".$factura."' ")->row();


					if ($comprobarfac == null) {

						$insertarfac = $this->db->query("
							UPDATE bolsa_compra SET factura = '".$factura."' 	WHERE ID_usuario = '".$idusuario."'

							");

					}else{
						$factura = ("PD070".$numero_aleatorio."");


					}
				} while ($comprobarfac != null);


				$listaCoches= $this->db->query("UPDATE bolsa_compra SET Total = cantidad * (select precio from inventario where inventario.id = bolsa_compra.ID_Vehiculo); ");

				$listaCoches = $this->db->query("SELECT inventario.id, bolsa_compra.cantidad , inventario.Marca, inventario.Modelo, inventario.Precio, bolsa_compra.ID_usuario, bolsa_compra.Total, bolsa_compra.factura
					FROM inventario
					LEFT JOIN bolsa_compra on bolsa_compra.ID_Vehiculo = inventario.id
					WHERE bolsa_compra.ID_usuario =   '".$idusuario."'")->result_array();


				if ($listaCoches){

					return $listaCoches;
				}

			}




			function preciofinal($idusuario){


				$listaCoches2 = $this->db->query("SELECT SUM(total) as total FROM bolsa_compra
					WHERE id_usuario = '".$idusuario."'")->row()->total;

				return $listaCoches2;
			}





			function sumar($idusuario,$idCoche){

				$comprobarstock = $this->db->query("SELECT Stock FROM inventario WHERE id = '".$idCoche."'")->row_array();

				$comprobarstockbolsa = $this->db->query("
					SELECT cantidad FROM bolsa_compra WHERE ID_usuario ='".$idusuario."'  AND ID_Vehiculo = '".$idCoche."'")->row_array();


				if ($comprobarstock['Stock'] >  $comprobarstockbolsa['cantidad']){

					$listaCoches = $this->db->query("

						UPDATE bolsa_compra SET cantidad=cantidad+1 WHERE ID_usuario = '".$idusuario."'  AND ID_Vehiculo = '".$idCoche."'"

					);
					if($listaCoches){

						return True;
					}else {
						return False;
					}
				}else {
					return False;
				}

			}






			function restar($idusuario,$idCoche){





				$comprobar = $this->db->query("
					SELECT cantidad FROM bolsa_compra WHERE ID_usuario = '".$idusuario."'AND ID_Vehiculo ='".$idCoche."' ")->row()->cantidad;

				if ($comprobar <= 1 ){

					$eliminar = $this ->db->query("DELETE FROM bolsa_compra WHERE ID_usuario = '".$idusuario."' AND ID_Vehiculo = '".$idCoche."'");

				}else {
					$listaCoches = $this->db->query("UPDATE bolsa_compra SET cantidad=cantidad-1
						WHERE ID_usuario = '".$idusuario."' AND ID_Vehiculo = '".$idCoche."' " );

					if($listaCoches){
						return True;
					}else {
						return False;
					}

				}

				
			}








			function Comprado($idusuario){


				// Aagrega la compra a la tabla ventas online
				$agregarcompra = $this->db->query("INSERT INTO ventas_online (id_usuario , id_vehiculo, cantidad, total, factura )
					SELECT ID_usuario, ID_Vehiculo, cantidad,Total, factura   FROM bolsa_compra 
					WHERE ID_usuario = '".$idusuario."'");


				// $agregargaraje = $this->db->query("
				// 	INSERT INTO mi_garaje (	id_usuario ,	id_vehiculo , mi_garaje.cantidad )
				// 	SELECT ID_usuario, ID_Vehiculo   , bolsa_compra.cantidad
				// 	FROM bolsa_compra 
				// 	WHERE ID_usuario =  '".$idusuario."' AND ID_Vehiculo = id_vehiculo
				// 	ON DUPLICATE KEY UPDATE mi_garaje.cantidad = mi_garaje.cantidad+1

				// 	");











				// Agrega la factura a la tabla facturas
				$agregarfactura = $this->db->query("INSERT INTO facturas (facturas, total)
					SELECT factura , SUM(Total) as Total FROM bolsa_compra
					WHERE ID_usuario = '".$idusuario."'");




				// $prueba = $this->db->query("SELECT ID_Vehiculo , cantidad FROM bolsa_compra WHERE ID_usuario = '".$idusuario."'")->result_array();





				$restaStock = $this->db->query("   UPDATE inventario
					LEFT JOIN bolsa_compra ON inventario.id=bolsa_compra.ID_Vehiculo
					SET inventario.Stock=inventario.Stock -  bolsa_compra.cantidad
					WHERE bolsa_compra.ID_usuario = '".$idusuario."'");

				// Elimina la bolsa temporal

				$listaCoches = $this->db->query("DELETE FROM bolsa_compra WHERE ID_usuario = '".$idusuario."'");







			}




		}
