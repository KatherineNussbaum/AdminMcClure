<?php
/**
* Clase FichaPortal
*
*/

class FichaPortal
{
	private $id;
	private $codigoPortal;
	private $url;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;


	function __construct()
	{
		$this->id = "";
		$this->codigoPortal = "";
		$this->url = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}



	public function getId()
	{
		return $this->id;
	}
	public function getCodigoPortal()
	{
		return $this->codigoPortal;
	}
	public function getUrl()
	{
		return $this->url;
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
	public function setCodigoPortal($codigoPortal)
	{
		$this->codigoPortal = $codigoPortal;
	}
	public function setUrl($url)
	{
		$this->url = $url;
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

	