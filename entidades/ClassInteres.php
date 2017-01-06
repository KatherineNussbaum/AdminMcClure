<?php 
/**
*	Clase Interes
*	
*/

class Interes
{
	
	private $id;
	private $fechaIngreso;
	private $busca;
	private $referencia;
	private $idPersona;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->fechaIngreso = "";
		$this->busca = "";
		$this->referencia = "";
		$this->idPersona = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getFechaIngreso()
	{
		return $this->fechaIngreso;
	}
	public function getBusca()
	{
		return $this->busca;
	}
	public function getReferencia()
	{
		return $this->referencia;
	}
	public function getIdPersona()
	{
		return $this->idPersona;
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
	public function setFechaIngreso($fechaIngreso)
	{
		$this->fechaIngreso = $fechaIngreso;
	}
	public function setBusca($busca)
	{
		$this->busca = $busca;
	}
	public function setReferencia($referencia)
	{
		$this->referencia = $referencia;
	}
	public function setIdPersona($idPersona)
	{
		$this->idPersona = $idPersona;
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