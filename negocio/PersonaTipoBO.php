<?php
require_once('/../entidades/ClassPersonaTipo.php');
require_once('/../dao/PersonaTipoDAO.php');
require_once('/../dao/ClassConexion.php');

class PersonaTipoBO
{
	private $conexion;
	private $daoPersonaTipo;
	private $personaTipo;

	function __construct()
	{
		$this->conexion 		= new Conexion();
		$this->daoPersonaTipo 	= new PersonaTipoDAO($this->conexion);
		$this->personaTipo		= new PersonaTipo();
	}

	public function getConexion()		{ return $this->conexion;}
	public function getDaoPersonaTipo()	{ return $this->daoPersonaTipo;}
	public function getPersonaTipo()	{ return $this->personaTipo;}

	public function setConexion($conexion)				{ $this->conexion = $conexion; }
	public function setDaoPersonaTipo($daoPersonaTipo)	{ $this->daoPersonaTipo = $daoPersonaTipo; }
	public function setPersonaTipo($personaTipo)		{ $this->personaTipo = $personaTipo; }

	public function agregarPersonaTipo()
	{
		$personaTipo = $this->personaTipo;
		$idPersona = $personaTipo->getIdPersona();
		$idTipoPersona = $personaTipo->getIdTipoPersona();

		if( empty($idPersona) || is_null($idPersona) || empty($idTipoPersona) || is_null($idTipoPersona) )
		{
			return false;
		}
		else
		{
			$resultado = $this->daoPersonaTipo->agregar($personaTipo);
			unset($this->personaTipo);
			return $resultado;
		}
	}


	public function listarPersona($idPersona)
	{
		$personaTipos = $this->daoPersonaTipo->listarPersona($idPersona);

		foreach ($personaTipos as $personaTipo)
		{
			echo '<tr><td>'.$personaTipo->getId().'</td>';
			echo '<td>'.$personaTipo->getTipoPersona().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="eliminarTipo" 
				onClick="eliminarTipo('.$personaTipo->getId().', '.$idPersona.');"
				idPersonaTipo="'.$personaTipo->getId().'"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-remove"></span> Eliminar
			</button>';
			echo '</td></tr>';
		}
	}

	public function existePersonaTipo($idPersona, $idPersonaTipo)
	{
		$resultado = $this->daoPersonaTipo->existePersonaTipo($idPersona, $idPersonaTipo);
		return $resultado;
	}

	public function eliminarPersonaTipo($id)
	{
		$resultado = $this->daoPersonaTipo->eliminar($id);
		return $resultado;
	}

	public function esCliente($id)
	{
		$resultado = $this->daoPersonaTipo->esCliente($id);
		return $resultado;
	}

}



?>