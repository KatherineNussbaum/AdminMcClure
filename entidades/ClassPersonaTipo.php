<?php
/**
* Clase PersonaTipo
*
*/

class PersonaTipo
{
	private $id;
	private $idPersona;
	private $idTipoPersona;
	private $tipoPersona;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->idPersona = "";
		$this->idTipoPersona = "";
		$this->tipoPersona = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getIdPersona()
	{
		return $this->idPersona;
	}
	public function getIdTipoPersona()
	{
		return $this->idTipoPersona;
	}
	public function getTipoPersona()
	{
		return $this->tipoPersona;
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
	public function setIdPersona($idPersona)
	{
		$this->idPersona = $idPersona;
	}
	public function setIdTipoPersona($idTipoPersona)
	{
		$this->idTipoPersona = $idTipoPersona;
	}
	public function setTipoPersona($tipoPersona)
	{
		$this->tipoPersona = $tipoPersona;
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