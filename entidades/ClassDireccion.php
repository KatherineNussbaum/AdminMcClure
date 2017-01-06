<?php
/**
* Clase Direccion
*
*/

class Direccion
{
	private $id;
	private $calle;
	private $idComuna;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;


	function __construct()
	{
		$this->id = "";
		$this->calle = "";
		$this->idComuna = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getCalle()
	{
		return $this->calle;
	}
	public function getidComuna()
	{
		return $this->idComuna;
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
	public function setCalle($calle)
	{
		$this->calle = $calle;
	}
	public function setIdComuna($idComuna)
	{
		$this->idComuna = $idComuna;
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