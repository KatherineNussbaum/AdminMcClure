<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassTipoPersona.php');

class TipoPersonaDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function listar()
	{
		$sql = "SELECT id, tipopersona 
				FROM tipopersona 
				WHERE habilitado = 1 ORDER BY tipopersona ASC";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$tipoPersonas = array();

		while($fila = $resultado->fetch_array() )
		{
			$tipoPersona = new TipoPersona();

			$tipoPersona->setId($fila['id']);
			$tipoPersona->setTipoPersona($fila['tipopersona']);
		
			$tipoPersonas[] = $tipoPersona;
		}

		return $tipoPersonas;
		$this->conn->cerrarConexion();
	}
	
}


?>