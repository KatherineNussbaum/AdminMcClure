<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassDireccion.php');

class DireccionDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agregar($direccion)
	{
		$calle 		= $direccion->getCalle();
		$idComuna 	= $direccion->getIdComuna();
		
		$sql = "INSERT INTO direccion (calle, idComuna, fechaCreacion, fechaModificacion, habilitado) VALUES ('".$calle."', ".$idComuna.", CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

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

	public function buscar($id)
	{
		$sql = "SELECT id, calle, idComuna 
				FROM direccion 
				WHERE id = $id AND habilitado = 1";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$direcciones = array();

		while( $fila = $resultado->fetch_array() ) {
			$direccion = new Direccion();
			$direccion->setId($fila['id']);
			$direccion->setCalle($fila['calle']);
			$direccion->setIdComuna($fila['idComuna']);
			$direcciones[] = $direccion;
		}
		
		return $direcciones;
		$this->conn->cerrarConexion();
	}

	public function buscarUltimo()
	{
		$sql = "SELECT id FROM direccion ORDER BY id DESC Limit 1";
		
		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$direcciones = array();

		while( $fila = $resultado->fetch_array() ) {
			$direccion = new Direccion();
			$direccion->setId($fila['id']);
			$direcciones[] = $direccion;
		}
		
		return $direcciones;
		$this->conn->cerrarConexion();
	}

	public function eliminar($id)
	{
		$sql = "UPDATE direccion SET habilitado = 0 WHERE id = '$id'";

		$this->conn->abrirConexion();
		if($this->conn->querys($sql)) 	{	return true; 	}
		else 							{	return false;	}
		$this->conn->cerrarConexion();
	}

	public function modificar($direccion)
	{
		$id = $direccion->getId();
		$calle = $direccion->getCalle();
		$idComuna = $direccion->getIdComuna();

		$sql = "UPDATE direccion SET calle = '$calle', idComuna = $idComuna, fechaModificacion = CURRENT_TIMESTAMP WHERE id = $id ";

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

	public function listar()
	{
		$sql = "SELECT calle, idComuna FROM direccion WHERE habilitado = 1";
		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$direccion = array();

		while($fila = $resultado->fetch_array() )
		{
			$direccion = new Direccion();
			$direccion->setCalle($fila['calle']);
			$direccion->setIdComuna($fila['idComuna']);
			$direcciones[] = $direccion;
		}

		return $direcciones;
		$this->conn->cerrarConexion();
	}
}

?>