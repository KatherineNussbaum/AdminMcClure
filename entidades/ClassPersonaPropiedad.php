<?php
/**
* Clase PersonaPropiedad
*
*/

class PersonaPropiedad
{
	private $id;
	private $idPropiedad;
	private $idPersona;
	private $porcentaje;
	private $idEstado;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;
	

	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->idPersona = "";
		$this->porcentaje = "";
		$this->idEstado = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}


	public function getId()
	{
		return $this->id;
	}
	public function getIdPropiedad()
	{
		return $this->idPropiedad;
	}
	public function getIdPersona()
	{
		return $this->idPersona;
	}
	public function getPorcentaje()
	{
		return $this->porcentaje;
	}
	public function getIdEstado()
	{
		return $this->idEstado;
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
	public function setIdPropiedad($idPropiedad)
	{
		$this->idPropiedad = $idPropiedad;
	}
	public function setIdPersona($idPersona)
	{
		$this->idPersona = $idPersona;
	}
	public function setPorcentaje($porcentaje)
	{
		$this->porcentaje = $porcentaje;
	}
	public function setIdEstado($idEstado)
	{
		$this->idEstado = $idEstado;
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