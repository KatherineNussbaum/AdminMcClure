<?php
/**
*	Clase Tipo Direccion
*	
*/

class TipoDireccion
{
	private $id;
	private $tipoDireccion;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->tipoDireccion = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getTipoDireccion()
	{
		return $this->tipoDireccion;
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
	public function setTipoDireccion($tipoDireccion)
	{
		$this->tipoDireccion = $tipoDireccion;
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

?>