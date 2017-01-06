<?php
require_once('ClassConexion.php');
require_once('/../entidades/ClassPersona.php');

class PersonaDAO
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function agreagr($persona)
	{
		$rut 				= $persona->getRut();
		$nombre 			= $persona->getNombre();
		$fechaNacimiento 	= $persona->getFechaNacimiento();
		$genero 			= $persona->getGenero();

		$sql = "INSERT INTO persona
				(rut, nombre, fechaNacimiento, genero, fechaCreacion, fechaModificacion, habilitado) VALUES 
				('".$rut."', '".$nombre."', '".$fechaNacimiento."', '".$genero."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1)";

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
		$sql = "UPDATE persona 
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

	public function modificar($persona)
	{
		$id = $persona->getId();
		$rut = $persona->getRut();
		$nombre = $persona->getNombre();
		$fechaNacimiento = $persona->getFechaNacimiento();
		$genero = $persona->getGenero();


		$sql = "UPDATE persona SET rut = '$rut', nombre = '$nombre', fechaNacimiento = '$fechaNacimiento', genero = '$genero', fechaModificacion = CURRENT_TIMESTAMP WHERE id = '$id'";

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
		$sql = "SELECT id, rut, nombre, fechaNacimiento, genero
				FROM persona
				WHERE habilitado = 1";

		$this->conn->abrirConexion();

		$resultado = $this->conn->select($sql);
		$personas = array();

		while($fila = $resultado->fetch_array() )
		{
			$persona = new Persona();

			$persona->setId($fila['id']);
			$persona->setRut($fila['rut']);
			$persona->setNombre($fila['nombre']);
			$persona->setFechaNacimiento($fila['fechaNacimiento']);
			$persona->setGenero($fila['genero']);
			
			$personas[] = $persona;
		}
		$this->conn->cerrarConexion();
		return $personas;	
	}

	public function buscar($id)
	{
		$sql = "SELECT id, rut, nombre, fechaNacimiento, genero 
				FROM persona 
				WHERE id = '".$id."' AND habilitado = 1 ";

		$this->conn->abrirConexion();
		$resultado = $this->conn->select($sql);
		$personas = array();

		while($fila = $resultado->fetch_array())
		{
			$persona = new Persona();
			$persona->setId($fila['id']);
			$persona->setRut($fila['rut']);
			$persona->setNombre($fila['nombre']);
			$persona->setFechaNacimiento($fila['fechaNacimiento']);
			$persona->setGenero($fila['genero']);
			$personas[] = $persona;
		}
		$this->conn->cerrarConexion();
		return $personas;
	}
}


?>