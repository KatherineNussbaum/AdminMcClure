<?php
/**
* Clase Varios
*
*/


class Varios
{
	private $id;
	private $idPropiedad;
	private $rol;
	private $exclusivo;
	private $orientacion;
	private $anioConstruccion;
	private $numPisos;
	private $numDeptPiso;
	private $numAscensor;
	private $calefaccion;
	private $vencimientoOrden;
	private $nombreContactoVisita;
	private $ubicacionLlaves;
	private $horarioVisita;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{

		$this->id = "";
		$this->idPropiedad = "";
		$this->rol = "";
		$this->exclusivo = "";
		$this->orientacion = "";
		$this->anioConstruccion = "";
		$this->numPisos = "";
		$this->numDeptPiso = "";
		$this->numAscensor = "";
		$this->calefaccion = "";
		$this->vencimientoOrden = "";
		$this->nombreContactoVisita = "";
		$this->ubicacionLlaves = "";
		$this->horarioVisita = "";
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
	public function getRol()
	{
		return $this->rol;
	}
	public function getExclusivo()
	{
		return $this->exclusivo;
	}
	public function getOrientacion()
	{
		return $this->orientacion;
	}
	public function getAnioConstruccion()
	{
		return $this->anioConstruccion;
	}
	public function getNumPisos()
	{
		return $this->numPisos;
	}
	public function getNumDeptPiso()
	{
		return $this->numPisos;
	}
	public function getNumAscensor()
	{
		return $this->numAscensor;
	}
	public function getCalefaccion()
	{
		return $this->calefaccion;
	}
	public function getVencimientoOrden()
	{
		return $this->vencimientoOrden;
	}
	public function getNombreContactoVisita()
	{
		return $this->nombreContactoVisita;
	}
	public function getUbicacionLlaves()
	{
		return $this->ubicacionLlaves;
	}
	public function getHorarioVisita()
	{
		return $this->horarioVisita;
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


	public function setId($id){ this->id = $id;}
	public function setIdPropiedad($idPropiedad){ this->idPropiedad = $idPropiedad;}
	public function setRol($rol){ this->rol = $rol;}
	public function setExclusivo($exclusivo){ this->exclusivo = $exclusivo;}
	public function setOrientacion($orientacion){ this->orientacion = $orientacion;}
	public function setAnioConstruccion($anioConstruccion){ this->anioConstruccion = $anioConstruccion;}
	public function setNumPisos($numPisos){ this->numPisos = $numPisos;}
	public function setNumDeptPiso($numDeptPiso){ this->numDeptPiso = $numDeptPiso;}
	public function setNumAscensore($numAscensore){ this->numAscensore = $numAscensore;}
	public function setCalefaccion($calefaccion){ this->calefaccion = $calefaccion;}
	public function setVencimientoOrden($vencimientoOrden){ this->vencimientoOrden = $vencimientoOrden;}
	public function setNombreContactoVisita($nombreContactoVisita){ this->nombreContactoVisita = $nombreContactoVisita;}
	public function setUbicacionLlaves($ubicacionLlaves){ this->ubicacionLlaves = $ubicacionLlaves;}
	public function setHorarioVisita($horarioVisita){ this->horarioVisita = $horarioVisita;}




}

?>