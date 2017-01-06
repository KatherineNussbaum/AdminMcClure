<?php

require_once('ClassConexion.php');
require_once('/../entidades/ClassPersonaDireccion.php');

class PersonaDireccionDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agregar($personaDireccion)
	{
		$idPersona 			= $personaDireccion->getIdPersona();
		$idDireccion 		= $personaDireccion->getIdDireccion();
		$idTipoDireccion 	= $personaDireccion->getIdTipoDireccion();

		$sql = "INSERT INTO relpersonadireccion 
				(idPersona, idDireccion, idTipoDireccion, fechaCreacion, fechaModificacion, habilitado) VALUES 
				(".$idPersona.", ".$idDireccion.", ".$idTipoDireccion.", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1) ";

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

	public function listarPorPersona($idPersona)
	{
		$sql = "SELECT pd.id, d.calle, c.comuna, td.tipodireccion
				FROM tipodireccion as td
				JOIN relpersonadireccion as pd
				ON pd.idTipoDireccion = td.id
				JOIN direccion as d 
				ON d.id = pd.idDireccion
				JOIN comuna as c 
				ON c.id = d.idComuna
				WHERE pd.idPersona = $idPersona AND pd.habilitado = '1'";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$personaDirecciones = array();

		while($fila = $resultado->fetch_array() )
		{
			$personaDireccion = new PersonaDireccion();

			$personaDireccion->setId($fila['id']);
			$personaDireccion->setCalle($fila['calle']);
			$personaDireccion->setComuna($fila['comuna']);
			$personaDireccion->setTipoDireccion($fila['tipodireccion']);
		
			$personaDirecciones[] = $personaDireccion;
		}
		$this->conn->cerrarConexion();
		return $personaDirecciones;
	}

	


	public function eliminar($id)
	{
		$sql = "UPDATE relpersonadireccion
				SET habilitado = 0, fechaModificacion = CURRENT_TIMESTAMP
				WHERE id = $id";

		$this->conn->abrirConexion();
		
		if($this->conn->querys($sql))
		{
			$this->conn->cerrarConexion();
			return true; 	
		}
		else
		{
			$this->conn->cerrarConexion();
			return false;
		}	
	}


}


?>