<?php

require_once('ClassConexion.php');
require_once('/../entidades/ClassComuna.php');

class ComunaDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function listarComuna()
	{
		$sql = "SELECT id, comuna FROM comuna WHERE habilitado = 1 ORDER BY comuna ASC";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$comunas = array();

		while($fila = $resultado->fetch_array() )
		{
			$comuna = new Comuna();
			$comuna->setId($fila['id']);
			$comuna->setNombreComuna($fila['comuna']);
			$comunas[] = $comuna;
		}
		
		$this->conn->cerrarConexion();
		return $comunas;
	}
}


?>