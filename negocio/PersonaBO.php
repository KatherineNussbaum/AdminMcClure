<?php
require_once('/../entidades/ClassPersona.php');
require_once('/../dao/PersonaDAO.php');
require_once('/../dao/ClassConexion.php');

class PersonaBO
{
	private $conexion;
	private $daoPersona;
	private $persona;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoPersona 	= new PersonaDAO($this->conexion);
		$this->persona 		= new Persona();
	}

	public function getConexion()	{		return $this->conexion 		;	}
	public function getDaoPersona()	{		return $this->daoPersona 	;	}
	public function getPersona()	{		return $this->persona 		;	}


	public function setConexion($conexion)		{		$this->conexion 	= $conexion;	}
	public function setDaoPersona($daoPersona)	{		$this->daoPersona 	= $daoPersona;	}
	public function setPersona($persona)		{		$this->persona 		= $persona;	}


	public function agregarPersona()
	{
		$persona 			= $this->persona;
		$rut 				= $persona->getRut();
		$nombre 			= $persona->getNombre();
		$fechaNacimiento 	= $persona->getFechaNacimiento();
		$genero 			= $persona->getGenero();


		if(empty($nombre) || is_null($nombre) || strlen($nombre) < 3)
		{
			return false;
		}
		else
		{
			$resultado = $this->daoPersona->agreagr($persona);
			unset($this->persona);
			return $resultado;
		}
	}

	public function listarPersonas()
	{
		$personas = $this->daoPersona->listar();

		foreach ($personas as $persona) {
			echo '<tr><td><button name="operacion" value="eliminar" onClick="eliminar('.$persona->getId().')"class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove"></span></button>  </td>';
			echo '<td>'.$persona->getId().'</td>';
			echo '<td>'.$persona->getRut().'</td>';
			echo '<td>'.$persona->getNombre().'</td>';
			echo '<td>'.$persona->getGenero().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="modificar" 
				onClick="modificar('.$persona->getId().');"
				id="'.$persona->getId().'"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-pencil"></span> Datos Contacto
			</button>';
			echo '</td></tr>';
		}
	}

	public function buscarPersona($id)
	{
		$personas = $this->daoPersona->buscar($id);

		foreach ($personas as $persona)
		{
			$persona->getId();
			$persona->getRut();
			$persona->getNombre();
			$persona->getFechaNacimiento();
			$persona->getGenero();
			return $persona;
		}
	}


	public function modificarPersona()
	{
		$persona = $this->persona;
		$id = $persona->getId();
		$nombre = $persona->getNombre();
			
		$resultado = $this->daoPersona->modificar($persona);
		unset($this->persona);
		return $resultado;
	}

	public function eliminarPersona($id)
	{
		$resultado = $this->daoPersona->eliminar($id);
		return $resultado;
	}

}