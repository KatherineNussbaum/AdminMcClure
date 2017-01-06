<?php
/**
* Clase Estacionamientos
*
*/

class Estacionamientos
{
	private $id;
	private $idPropiedad;
	private $numSubterraneo;
	private $numSuperior;
	private $numVisita;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;


	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->numSubterraneo = "";
		$this->numSuperior = "";
		$this->numVisita = "";
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
	public function getNumSubterraneo()
	{
		return $this->numSubterraneo;
	}
	public function getNumSuperior()
	{
		return $this->numSuperior;
	}
	public function getNumVisita()
	{
		return $this->numVisita;
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
	public function setNumSubterraneo($numSubterraneo)
	{
		$this->numSubterraneo = $numSubterraneo;
	}
	public function setNumSuperior($numSuperior)
	{
		$this->numSuperior = $numSuperior;
	}
	public function setNumVisita($numVisita)
	{
		$this->numVisita = $numVisita;
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