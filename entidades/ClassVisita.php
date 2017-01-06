<?php 
/**
*	Clase Visita
*	
*/

class Visita
{
	private $id;
	private $fechaVisita;
	private $horaVisita;
	private $idEstado;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->fechaVisita = "";
		$this->horaVisita = "";
		$this->idEstado = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getFechaVisita()
	{
		return $this->fechaVisita;
	}
	public function getHoraVisita()
	{
		return $this->horaVisita;
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
	public function setFechaVisita($fechaVisita)
	{
		$this->fechaVisita = $fechaVisita;
	}
	public function setHoraVisita($horaVisita)
	{
		$this->horaVisita = $horaVisita;
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