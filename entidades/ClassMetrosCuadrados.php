<?php
/**
* Clase MetrosCuadrados
*
*/

class MetrosCuadrados
{
	private $id;
	private $idPropiedad;
	private $util;
	private $terreno;
	private $total;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "":
		$this->idPropiedad = "";
		$this->util = "";
		$this->terreno = "";
		$this->total = "";
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
	public function getUtil()
	{
		return $this->util;
	}
	public function getTerreno()
	{
		return $this->terreno;
	}
	public function getTotal()
	{
		return $this->total;
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
	public function setUtilo($util)
	{
		$this->util = $util;
	}
	public function setTerreno($terreno)
	{
		$this->terreno = $terreno;
	}
	public function setTotal($total)
	{
		$this->total = $total;
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