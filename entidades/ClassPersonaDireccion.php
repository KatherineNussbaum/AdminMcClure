<?php
/**
* Clase PersonaDireccion
*
*/

class PersonaDireccion
{
	private $id;
	private $idPersona;
	private $idDireccion;
	private $calle;
	private $comuna;
	private $idTipoDireccion;
	private $tipoDireccion;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;


	function __construct()
	{
		$this->id 					= "";
		$this->idPersona 			= "";
		$this->idDireccion 			= "";
		$this->calle 				= "";
		$this->comuna 				= "";
		$this->idTipoDireccion 		= "";
		$this->tipoDireccion 		= "";
		$this->fechaCreacion 		= "";
		$this->fechaModificacion 	= "";
		$this->habilitado 			= "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getIdPersona()
	{
		return $this->idPersona;
	}
	public function getIdDireccion()
	{
		return $this->idDireccion;
	}
	public function getCalle()
	{
		return $this->calle;
	}
	public function getComuna()
	{
		return $this->comuna;
	}
	public function getIdTipoDireccion()
	{
		return $this->idTipoDireccion;
	}
	public function getTipoDireccion()
	{
		return $this->tipoDireccion;
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
	public function setIdDireccion($idDireccion)
	{
		$this->idDireccion = $idDireccion;
	}
	public function setCalle($calle)
	{
		$this->calle = $calle;
	}
	public function setComuna($comuna)
	{
		$this->comuna = $comuna;
	}
	public function setIdTipoDireccion($idTipoDireccion)
	{
		$this->idTipoDireccion = $idTipoDireccion;
	}
	public function setTipoDireccion($tipoDireccion)
	{
		$this->tipoDireccion = $tipoDireccion;
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