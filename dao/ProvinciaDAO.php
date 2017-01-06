<?php

require_once('ClassConexion.php');
require_once('/../entidades/ClassProvincia.php');

class ProvinciaDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function listarProvincia($idRegion)
	{
		$sql = "SELECT id, provincia FROM provincia WHERE idRegion = $idRegion AND habilitado = 1";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$provincias = array();

		while($file = $resultado->fetch_array() )
		{
			$provincia = new Provincia();
			$provincia->setId($fila['id']);
			$provincia->setNombreProvincia($fila['provincia']);
			$provincias[] = $provincia;
		}
		
		$this->conn->cerrarConexion();
		return $provincias;
	}
}


?>