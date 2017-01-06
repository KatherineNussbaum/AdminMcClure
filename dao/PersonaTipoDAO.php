<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassPersonaTipo.php');


class PersonaTipoDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agregar($personaTipo)
	{
		$idPersona = $personaTipo->getIdPersona();
		$idTipoPersona = $personaTipo->getIdTipoPersona();

		$sql = "INSERT INTO relpersonatipo 
				(idPersona, idTipoPersona, fechaCreacion, fechaModificacion, habilitado) VALUES 
				('".$idPersona."', '".$idTipoPersona."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

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
		$sql = "UPDATE relpersonatipo
				SET habilitado = 0, fechaModificacion = CURRENT_TIMESTAMP
				WHERE id = '$id'";

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

	public function listarPersona($idPersona)
	{
		$sql = "SELECT rpt.id, tp.tipoPersona
				FROM relpersonatipo as rpt
				JOIN tipopersona as tp
				ON rpt.idTipoPersona = tp.id
				WHERE rpt.idPersona = $idPersona AND rpt.habilitado = 1 ";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$personaTipos = array();

		while($fila = $resultado->fetch_array() )
		{
			$personaTipo = new PersonaTipo();

			$personaTipo->setId($fila['id']);
			$personaTipo->setTipoPersona($fila['tipoPersona']);
		
			$personaTipos[] = $personaTipo;
		}
		$this->conn->cerrarConexion();
		return $personaTipos;
	}

	public function existePersonaTipo($idPersona, $idPersonaTipo)
	{
		$sql ="SELECT id
				FROM relpersonatipo
				WHERE idPersona = $idPersona AND idTipoPersona = $idPersonaTipo AND habilitado = 1 ";

		$this->conn->abrirConexion($sql);

		$resultado = $this->conn->select($sql);

		$filas = mysqli_num_rows($resultado);

		if($filas > 0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function esCliente($idPersona)
	{
		$sql = "SELECT id 
				FROM relpersonatipo
				WHERE idPersona = $idPersona AND idTipoPersona = 1 AND habilitado = 1";
		$this->conn->abrirConexion($sql);

		$resultado = $this->conn->select($sql);

		$filas = mysqli_num_rows($resultado);

		if($filas > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		
}


?>