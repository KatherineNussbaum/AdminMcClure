<?php
/**
* Clase Habitaciones
*
*/

class Habitaciones
{
	private $id;
	private $idPropiedad;
	private $hallDistribucion;
	private $salaEstar;
	private $livinComedor;
	private $comedorDiario;
	private $dormitorioSuite;
	private $numDormitorio;
	private $numBanio;
	private $banioVisita;
	private $cocina;
	private $despensa;
	private $loggia;
	private $dormitorioServicio;
	private $banioServicio;
	private $jardin;
	private $terraza;
	private $bodega;
	private $piscina
	private $patioServicio;
	private $lavanderoInterior;
	private $lavanderoExterior;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->idPropiedad = "";
		$this->hallDistribucion = "";
		$this->salaEstar = "";
		$this->livinComedor = "";
		$this->comedorDiario = "";
		$this->dormitorioSuite = "";
		$this->numDormitorio = "";
		$this->numBanio = "";
		$this->banioVisita = "";
		$this->cocina = "";
		$this->despensa = "";
		$this->loggia = "";
		$this->dormitorioServicio = "";
		$this->banioServicio = "";
		$this->jardin = "";
		$this->terraza = "";
		$this->bodega = "";
		$this->piscina = "";
		$this->patioServicio = "";
		$this->lavanderoInterior = "";
		$this->lavanderoExterior = "";
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
	public function getHallDistribucion()
	{
		return $this->hallDistribucion;
	}
	public function getSalaEstar()
	{
		return $this->salaEstar;
	}
	public function getLivinComedor()
	{
		return $this->livinComedor;
	}
	public function getComedorDiario()
	{
		return $this->comedorDiario;
	}
	public function getDormitorioSuite()
	{
		return $this->dormitorioSuite;
	}
	public function getNumDormitorio()
	{
		return $this->numDormitorio;
	}
	public function getNumBanio()
	{
		return $this->numBanio;
	}
	public function getBanioVisita()
	{
		return $this->banioVisita;
	}
	public function getCocina()
	{
		return $this->cocina;
	}
	public function getDespensa()
	{
		return $this->despensa;
	}
	public function getLoggia()
	{
		return $this->loggia;
	}
	public function getDormitorioServicio()
	{
		return $this->dormitorioServicio;
	}
	public function getJardin()
	{
		return $this->jardin;
	}
	public function getTerraza()
	{
		return $this->terraza;
	}
	public function getBodega()
	{
		return $this->bodega;
	}
	public function getPiscina()
	{
		return $this->piscina;
	}
	public function getPatioServicio()
	{
		return $this->patioServicio;
	}
	public function getLavanderoInterior()
	{
		return $this->lavanderoInterior;
	}
	public function getLavanderoExterior()
	{
		return $this->lavanderoExterior;
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
	public function setHallDistribuicion($hallDistribucion)
	{
		$this->hallDistribucion = $hallDistribucion;
	}
	public function setSalaEstar($salaEstar)
	{
		$this->salaEstar = $salaEstar;
	}
	public function setLivinComedor($livinComedor)
	{
		$this->livinComedor = $livinComedor;
	}
	public function setComedorDiario($comedorDiario)
	{
		$this->comedorDiario = $comedorDiario;
	}
	public function setDormitorioSuite($dormitorioSuite)
	{
		$this->dormitorioSuite = $dormitorioSuite;
	}
	public function setNumDormitorio($numDormitorio)
	{
		$this->numDormitorio = $numDormitorio;
	}
	public function setNumBanio($numBanio)
	{
		$this->numBanio = $numBanio;
	}
	public function setBanioVisita($banioVisita)
	{
		$this->banioVisita = $banioVisita;
	}
	public function setCocina($cocina)
	{
		$this->cocina = $cocina;
	}
	public function setDespensa($despensa)
	{
		$this->despensa = $despensa;
	}
	public function setLoggia($loggia)
	{
		$this->loggia = $loggia;
	}
	public function setDormitorioServicio($dormitorioServicio)
	{
		$this->dormitorioServicio = $dormitorioServicio;
	}
	public function setBanioServicio($banioServicio)
	{
		$this->banioServicio = $banioServicio;
	}
	public function setJardin($jardin)
	{
		$this->jardin = $jardin;
	}
	public function setTerraza($terraza)
	{
		$this->terraza = $terraza;
	}
	public function setBodega($bodega)
	{
		$this->bodega = $bodega;
	}
	public function setPisicina($piscina)
	{
		$this->piscina = $piscina;
	}
	public function setPatioServicio($patioServicio)
	{
		$this->patioServicio = $patioServicio;
	}
	public function setLavanderoInterior($lavanderoInterior)
	{
		$this->lavanderoInterior = $lavanderoInterior;
	}
	public function setLavanderoExterior($lavanderoExterior)
	{
		$this->lavanderoExterior = $lavanderoExterior;
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