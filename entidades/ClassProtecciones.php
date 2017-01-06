<?php
/**
* Clase Protecciones
*
*/

	private $id;
	private $idPropiedad;
	private $reja;
	private $malla;
	private $alarma;
	private $camara;
	private $vigilancia;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->reja = "";
		$this->malla = "";
		$this->alarma = "";
		$this->camara = "";
		$this->vigilancia = "";
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
	public function getReja()
	{
		return $this->reja;
	}
	public function getMalla()
	{
		return $this->malla;
	}
	public function getAlarma()
	{
		return $this->alarma;
	}
	public function getCamara()
	{
		return $this->camara;
	}
	public function getVigilancia()
	{
		return $this->vigilancia;
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
	public function setReja($reja)
	{
		$this->reja = $reja;
	}
	public function setMalla($malla)
	{
		$this->malla = $malla;
	}
	public function setAlarma($alarma)
	{
		$this->alarma = $alarmaa;
	}
	public function setCamara($camara)
	{
		$this->camara = $camara;
	}
	public function setVigilancia($vigilancia)
	{
		$this->vigilancia = $vigilancia;
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
?>