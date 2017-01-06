<?php
/**
* Clase TipoPersona
*
*/

class TipoPersona
{
	private $id;
	private $tipoPersona;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->tipoPersona = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getTipoPersona()
	{
		return $this->tipoPersona;
	}
	public function getFechaCreacion()
	{
		return $this->fechaCreacion;
	}
	public function getFechaModificacion()
	{
		return $this->fechaModificacion;
	}
	public function getHabilitado()
	{
		return $this->habilitado;
	}


	public function setId($id)
	{
		$this->id = $id;
	}
	public function setTipoPersona($tipoPersona)
	{
		$this->tipoPersona = $tipoPersona;
	}
	public function setFechaCreacion($fechaCreacion)
	{
		$this->fechaCreacion = $fechaCreacion;
	}
	public function setFechaModificacion($fechaModificacion)
	{
		$this->fechaModificacion = $fechaModificacion;
	}
	public function setHabilitado($habilitado)
	{
		$this->habilitado = $habilitado;
	}
}