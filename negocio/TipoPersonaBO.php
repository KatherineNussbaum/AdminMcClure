<?php
require_once('/../entidades/ClassTipoPersona.php');
require_once('/../dao/TipoPersonaDAO.php');
require_once('/../dao/ClassConexion.php');

class TipoPersonaBO
{
	private $conexion;
	private $daoTipoPersona;
	private $tipoPersona;

	function __construct()
	{
		$this->conexion 		= new Conexion();
		$this->daoTipoPersona 	= new TipoPersonaDAO($this->conexion);
		$this->tipoPersona 		= new TipoPersona();
	}

	public function getConexion()		{	return $this->conexion 		;	}
	public function getDaoTipoPersona()	{	return $this->daoTelefono 	;	}
	public function getTelefono()		{	return $this->telefono 		;	}


	public function setConexion($conexion)				{	$this->conexion 		= $conexion;		}
	public function setDaoTipoPersona($daoTipoPersona)	{	$this->daoTipoPersona 	= $daoTipoPersona;	}
	public function setTipoPersona($tipoPersona)		{	$this->tipoPersona 		= $tipoPersona;		}

	public function listarTipoPersona()
	{
		$tipoPersonas = $this->daoTipoPersona->listar();

		foreach ($tipoPersonas as $tipoPersona) {
			echo '<option value="'.$tipoPersona->getId().'">'.$tipoPersona->getTipoPersona().'</option>';
		}
	}
}