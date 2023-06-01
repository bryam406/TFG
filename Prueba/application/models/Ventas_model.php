	<?php
	class Ventas_model extends CI_Model {
		function __construct()
		{
			parent:: __construct();
			$this->load->database();
		}


		function getVentas()
		{
			$sql = "SELECT empledos.id, empledos.NombreUsuario, 
			CASE
			WHEN SUM(ventas.empleadoID) IS NULL THEN 0
			ELSE SUM(ventas.empleadoID)
			END AS Total
			FROM empledos 	
			LEFT JOIN ventas
			ON empledos.id = ventas.empleadoID
			GROUP BY empledos.id";

			$query = $this->db->query($sql);
			return $query->result_array();
			
		}



		function getGanancias(){
			$sql = "SELECT 
			inventario.Precio, ventas.empleadoID
			FROM inventario 
			LEFT JOIN ventas
			ON inventario.id = ventas.empleadoID";
			$query = $this->db->query($sql);
			return $query->result_array();
		}



		function getCohes(){

			$sql = "SELECT marca, inventario.id, count(*) as vendidos
			from inventario
			left join ventas on ventas.vehiculoID = inventario.id         
			group by inventario.id";
			$query = $this->db->query($sql);
			return $query->result_array();



		}

		function getmodelos(){

			$sql = "SELECT  modelo , count(*) as vendidos
			from ventas
			left join inventario on inventario.id = ventas.vehiculoID
			where inventario.marca = 'Lamborghini'
			group by inventario.id";

			$query = $this->db->query($sql);
			return $query->result_array();

		}
		
		function getmodelosP(){

			$sql = "SELECT  modelo , count(*) as vendidos
			from ventas
			left join inventario on inventario.id = ventas.vehiculoID
			where inventario.marca = 'Bugatti'
			group by inventario.id";
			$query = $this->db->query($sql);
			return $query->result_array();


		}


		function getmodelosL(){

			$sql = "SELECT  modelo , count(*) as vendidos
			from ventas
			left join inventario on inventario.id = ventas.vehiculoID
			where inventario.marca = 'Nissan'
			group by inventario.id";
			$query = $this->db->query($sql);
			return $query->result_array();


		}

		function ventas($limit, $start){

			$sql = "SELECT empledos.DNI, empledos.NombreUsuario, empledos.Apellido,inventario.Marca, inventario.Modelo, inventario.Matricula,inventario.Precio,inventario.Stock, ventas.Fecha_Venta
			FROM empledos
			INNER JOIN ventas
			ON empledos.id = ventas.empleadoID
			INNER JOIN inventario
			ON ventas.vehiculoID = inventario.id
			LIMIT ".$start.",".$limit."";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		function ventas2(){

			$sql = "SELECT empledos.DNI, empledos.NombreUsuario, empledos.Apellido,inventario.Marca, inventario.Modelo, inventario.Matricula,inventario.Precio,inventario.Stock, ventas.Fecha_Venta
			FROM empledos
			INNER JOIN ventas
			ON empledos.id = ventas.empleadoID
			INNER JOIN inventario
			ON ventas.vehiculoID = inventario.id";
			$query = $this->db->query($sql);
			return $query->result_array();
		}










		function exportAllProyectOrder(){

			$allDatosAExportar = $this->db->query("SELECT empledos.DNI, empledos.NombreUsuario, empledos.Apellido,inventario.Marca, inventario.Modelo, inventario.Matricula,inventario.Precio,inventario.Stock, ventas.Fecha_Venta
				FROM empledos
				INNER JOIN ventas
				ON empledos.id = ventas.empleadoID
				INNER JOIN inventario
				ON ventas.vehiculoID = inventario.id");
			return $allDatosAExportar;
		}
		
		function totalSedes(){

			$allDatosAExportar = $this->db->query("SELECT  COUNT(*) AS total FROM ventas")->row()->total;
			return $allDatosAExportar;
		}
		
		

	}?>