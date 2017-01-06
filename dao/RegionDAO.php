<?php

require_once('ClassConexion.php');
require_once('/../entidades/ClassRegion.php');

class RegionDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function listar()
	{
		$sql = "SELECT id, region FROM region WHERE habilitado = 1";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$regiones = array();

		while($fila = $resultado->fetch_array() )
		{
			$region = new Region();
			$region->setId($fila['id']);
			$region->setNombreRegion($fila['region']);
			$regiones[] = $region;
		}
		
		$this->conn->cerrarConexion();
		return $regiones;
	}
}


?>