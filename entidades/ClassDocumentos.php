<?php
/**
* Clase Documentos
*
*/

class Documentos
{
	private $id;
	private $idPropiedad;
	private $planos;
	private $recepcionFinal;
	private $avaluo;
	private $titulos;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->planos = "";
		$this->recepcionFinal = "";
		$this->avaluo = "";
		$this->titulos = "";
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
	public function getPlanos()
	{
		return $this->planos;
	}
	public function getRecepcionFinal()
	{
		return $this->recepcionFinal;
	}
	public function getAvaluo()
	{
		return $this->avaluo;
	}
	public function getTitulos()
	{
		return $this->titulos;
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
	public function setPlanos($planos)
	{
		$this->planos = $planos;
	}
	public function setRecepcionFinal($recepcionFinal)
	{
		$this->recepcionFinal = $recepcionFinal;
	}
	public function setAvaluo($avaluo)
	{
		$this->avaluo = $avaluo;
	}
	public function setTitulos($titulos)
	{
		$this->titulos = $titulos;
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