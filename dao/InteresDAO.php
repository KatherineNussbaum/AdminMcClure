<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassInteres.php');

class InteresDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agregar($interes)
	{
		$fechaIngreso 	= $interes->getFechaIngreso();
		$busca  		= $interes->getBusca();
		$referencia		= $interes->getReferencia();
		$idPersona 		= $interes->getIdPersona();

		$sql = "INSERT INTO interes 
				(fechaIngreso, busca, referencia, idPersona, fechaCreacion, fechaModificacion, habilitado) VALUES 
				('".$fechaIngreso."', '".$busca."', '".$referencia."', ".$idPersona.", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

		$this->conn->abrirConexion();

		if( $this->conn->querys($sql) )
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
		$sql = "UPDATE interes 
				SET habilitado = 0 
				WHERE id = $id";

		$this->conn->abrirConexion();
		if($this->conn->querys($sql)) 	{	return true; 	}
		else 							{	return false;	}
		$this->conn->cerrarConexion();
	}

	public function listar($idPersona)
	{
		$sql = "SELECT id,fechaIngreso, busca, referencia, idPersona FROM interes WHERE idPersona = $idPersona AND habilitado = 1";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$interes = array();

		while($fila = $resultado->fetch_array() )
		{
			$interes = new Interes();
			$interes->setId($fila['id']);
			$interes->setFechaIngreso($fila['fechaIngreso']);
			$interes->setBusca($fila['busca']);
			$interes->setReferencia($fila['referencia']);
			$interes->setIdPersona($fila['idPersona']);

			$intereses[] = $interes;
		}
		if(!empty($intereses))
		{
			return $intereses;
		}
		
		$this->conn->cerrarConexion();
	}
}

?>