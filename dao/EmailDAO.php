<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassEmail.php');

class EmailDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agreagr($email)
	{
		$correo 			= $email->getCorreo();
		$idPersona 			= $email->getIdPersona();

		$sql = "INSERT INTO email
				(correo, idPersona, fechaCreacion, fechaModificacion, habilitado) VALUES 
				('".$correo."', '".$idPersona."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

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
		$sql = "UPDATE email 
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
		$sql = "SELECT id, correo
				FROM email
				WHERE habilitado = 1 AND idPersona = $idPersona";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$emails = array();

		while($fila = $resultado->fetch_array() )
		{
			$email = new Email();

			$email->setId($fila['id']);
			$email->setCorreo($fila['correo']);
		
			$emails[] = $email;
		}

		return $emails;
		$this->conn->cerrarConexion();
	}
}


?>