<?php
require_once('/../entidades/ClassTipoDireccion.php');
require_once('/../dao/TipoDireccionDAO.php');
require_once('/../dao/ClassConexion.php');

class TipoDireccionBO
{
	private $conexion;
	private $daoTipoDireccion;
	private $tipoDireccion;

	function __construct()
	{
		$this->conexion 			= new Conexion();
		$this->daoTipoDireccion 	= new TipoDireccionDAO($this->conexion);
		$this->tipoDireccion 		= new TipoDireccion();
	}

	public function getConexion()			{	return $this->conexion 			;	}
	public function getDaoTipoDireccion()	{	return $this->daoTipoDireccion 	;	}
	public function getTipoDireccion()		{	return $this->tipoDireccion 	;	}


	public function setConexion($conexion)					{	$this->conexion 		= $conexion;		}
	public function setDaoTipoDireccion($daoTipoDireccion)	{	$this->daoTipoDireccion = $daoTipoDireccion;}
	public function setTipoDireccion($tipoDireccion)		{	$this->tipoDireccion 	= $tipoDireccion;	}


	public function listarTipoDireccion()
	{
		$tipoDirecciones = $this->daoTipoDireccion->listar();

		foreach ($tipoDirecciones as $tipoDireccion) {
			echo '<option value="'.$tipoDireccion->getId().'">'.$tipoDireccion->getTipoDireccion().'</option>';
		}
	}
}