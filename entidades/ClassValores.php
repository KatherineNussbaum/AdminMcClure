<?php
/**
* Clase Valores
*
*/

class Valores
{
	private $id;
	private $idPropiedad;
	private $tasacion:
	private $uf;
	private $pesos;
	private $constribuciones;
	private $gastosComunes;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;


	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->tasacion = "";
		$this->uf = "";
		$this->pesos = "";
		$this->contribuciones = "";
		$this->gastosComunes = "";
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
	public function getTasacion()
	{
		return $this->tasacion;
	}
	public function getUf()
	{
		return $this->uf;
	}
	public function getPesos()
	{
		return $this->pesos;
	}
	public function getContribuciones()
	{
		return $this->contribuciones;
	}
	public function getGastosComunes()
	{
		return $this->gastosComunes;
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
	public function setTasacion($tasacion)
	{
		$this->tasacion = $tasacion;
	}
	public function setUf($uf)
	{
		$this->uf = $uf;
	}
	public function setPesos($pesos)
	{
		$this->pesos = $pesos;
	}
	public function setContribuciones($contribuciones)
	{
		$this->contribuciones = $contribuciones;
	}
	public function setGastosComunes($gastosComunes)
	{
		$this->gastosComunes = $gastosComunes;
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