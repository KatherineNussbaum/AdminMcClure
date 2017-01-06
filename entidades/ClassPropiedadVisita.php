<?php
/**
* Clase PropiedadVisita
*
*/


class PropiedadVisita
{
	private $id;
	private $idPropiedad;
	private $idVisita;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;



	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->idVisita = "";
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
	public function getIdVisita()
	{
		return $this->idVisita;
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
	public function setIdVisita($idVisita)
	{
		$this->idVisita = $idVisita;
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