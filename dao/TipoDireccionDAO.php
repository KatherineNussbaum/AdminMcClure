<?php

require_once('ClassConexion.php');
require_once('/../entidades/ClassTipoDireccion.php');

class TipoDireccionDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function listar()
	{
		$sql = "SELECT id, tipoDireccion FROM tipoDireccion WHERE habilitado = 1";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$tipoDirecciones = array();

		while($fila = $resultado->fetch_array() )
		{
			$tipoDireccion = new TipoDireccion();
			$tipoDireccion->setId($fila['id']);
			$tipoDireccion->setTipoDireccion($fila['tipoDireccion']);
			$tipoDirecciones[] = $tipoDireccion;
		}
		
		$this->conn->cerrarConexion();
		return $tipoDirecciones;
	}
}


?>