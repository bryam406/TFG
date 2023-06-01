<?php
class Registro_model extends CI_Model {
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}







		function insertarUsuario($nuevoUsuario)
	{

		$añadircoche = $this->db->query("INSERT INTO usuarios
		(DNI, Contrasena, Nombre, Primer_Apellido, Segundo_Apellido, Direccion, Pais, Codig_postal,Telefono, Corre_electronico)
		 VALUES ('".$nuevoUsuario['Dni']."','".md5($nuevoUsuario['Clave1'])."','".$nuevoUsuario['Nombre']."','".$nuevoUsuario['Apellido']."',
		 	'".$nuevoUsuario['Apellido2']."','".$nuevoUsuario['Direccion']."','".$nuevoUsuario['Pais']."','".$nuevoUsuario['Cp']."','".$nuevoUsuario['Tlf']."', '".$nuevoUsuario['Email']."')");


		if ($añadircoche) {
			return True;
		}else{
			return False;

		}

	}

}
?>

