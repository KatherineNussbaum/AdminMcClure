<?php
/**
* Clase Pisos
*
*/

class Pisos
{
	private $id;
	private $idPropiedad;
	private $propiedad;
	private $dormitorio;
	private $banio;
	private $losaEntrepiso;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->propiedad = "";
		$this->dormitorio = "";
		$this->banio = "";
		$this->losaEntrepiso = "";
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
	public function getPropiedad()
	{
		return $this->propiedad;
	}
	public function getDormitorio()
	{
		return $this->dormitorio;
	}
	public function getBanio()
	{
		return $this->banio;
	}
	public function getlosaEntrepiso()
	{
		return $this->losaEntrepiso;
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
	public function setPropiedad($propiedad)
	{
		$this->propiedad = $propiedad;
	}
	public function setDormitorio($dormitorio)
	{
		$this->dormitorio = $dormitorio;
	}
	public function setBanio($banio)
	{
		$this->banio = $banio;
	}
	public function setLosaEntrepiso($losaEntrepiso)
	{
		$this->losaEntrepiso = $losaEntrepiso;
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