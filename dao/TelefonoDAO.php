<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassTelefono.php');

class TelefonoDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agreagr($telefono)
	{
		$numero 			= $telefono->getNumero();
		$idPersona 			= $telefono->getIdPersona();

		$sql = "INSERT INTO telefono
				(numero, idPersona, fechaCreacion, fechaModificacion, habilitado) VALUES 
				('".$numero."', '".$idPersona."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

		$this->conn->abrirConexion();

		if( $this->conn->querys( $sql ) )
		{
			return true;
		}
		else
		{
			return false;
		}

		$this->conn->cerrarConexion();
	}

	public function eliminar($id)
	{
		$sql = "UPDATE telefono 
				SET habilitado = 0, fechaModificacion = CURRENT_TIMESTAMP
				WHERE id = $id";

		$this->conn->abrirConexion();
		
		if($this->conn->querys($sql))
		{
			return true; 	
		}
		else
		{
			return false;
		}
		
		$this->conn->cerrarConexion();
	}

	public function listar($idPersona)
	{
		$sql = "SELECT id, numero
				FROM telefono
				WHERE habilitado = 1 AND idPersona = $idPersona";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$telefonos = array();

		while($fila = $resultado->fetch_array() )
		{
			$telefono = new Telefono();

			$telefono->setId($fila['id']);
			$telefono->setNumero($fila['numero']);
		
			$telefonos[] = $telefono;
		}

		return $telefonos;
		$this->conn->cerrarConexion();
	}
}


?>