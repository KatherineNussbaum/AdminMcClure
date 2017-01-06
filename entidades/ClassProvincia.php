<?php
/**
* Clase Provincia
*
*/

class Provincia
{
	private $id;
	private $nombreProvincia;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->$nombreProvincia = "";
		$this->$habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getNombreProvincia()
	{
		return $this->nombreProvincia;
	}
	public function getHabilitado()
	{
		return $this->habilitado;
	}

	public function setId($id)
	{
		$this->id = $id;
	}
	public function setNombreProvincia($nombreProvincia)
	{
		$this->nombreProvincia = $nombreProvincia;
	}
	public function setHabilitado($habilitado)
	{
		$this->habilitado = $habilitado;
	}
}


?>