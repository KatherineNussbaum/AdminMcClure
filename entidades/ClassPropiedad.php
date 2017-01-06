<?php
/**
* Clase Propiedad
*
*/

class Propiedad
{

	private $id;
	private $nombre;
	private $fechaIngreso;
	private $idDireccion;
	private $idTipoPropiedad;
	private $idEstado;
	private $idTipoOperacion;
	private $idFichaPortal;
	private $comentario;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	private $tipoPropiedad;
	private $estado;
	private $tipoOperacion;

	function __construct()
	{
		$this->id = "";
		$this->nombre = "";
		$this->fechaIngreso = "";
		$this->idDireccion = "";
		$this->idTipoPropiedad = "";
		$this->idEstado = "";
		$this->idTipoOperacion = "";	
		$this->idFichaPortal = "";
		$this->comentario = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";

		$this->tipoPropiedad = "";
		$this->tipoOperacion = "";
		$this->estado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getFechaIngreso()
	{
		return $this->fechaIngreso;
	}
	public function getIdDireccion()
	{
		return $this->idDireccion;
	}
	public function getIdTipoPropiedad()
	{
		return $this->idTipoPropiedad;
	}
	public function getIdEstado()
	{
		return $this->idEstado;
	}
	public function getIdTipoOperacion()
	{
		return $this->idTipoOperacion;
	}
	public function getIdFichaPortal()
	{
		return $this->idFichaPortal;
	}
	public function getComentario()
	{
		return $this->comentario;
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

	public function getTipoPropiedad()
	{
		return $this->tipoPropiedad;
	}
	public function getTipoOperacion()
	{
		return $this->tipoOperacion;
	}
	public function getEstado()
	{
		return $this->estado;
	}



	public function setId($id)
	{
		$this->id = $id;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function setFechaIngreso($fechaIngreso)
	{
		$this->fechaIngreso = $fechaIngreso;
	}
	public function setIdDireccion($idDireccion)
	{
		$this->idDireccion = $idDireccion;
	}
	public function setIdTipoPropiedad($idTipoPropiedad)
	{
		$this->idTipoPropiedad = $idTipoPropiedad;
	}
	public function setIdEstado($idEstado)
	{
		$this->idEstado = $idEstado;
	}
	public function setIdTipoOperacion($idTipoOperacion)
	{
		$this->idTipoOperacion = $idTipoOperacion;
	}
	public function setIdFichaPortal($idFichaPortal)
	{
		$this->idFichaPortal = $idFichaPortal;
	}
	public function setComentario($comentario)
	{
		$this->comentario = $comentario;
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

	public function setTipoPropiedad($tipoPropiedad)
	{
		$this->tipoPropiedad = $tipoPropiedad;
	}
	public function setTipoOperacion($tipoOperacion)
	{
		$this->tipoOperacion = $tipoOperacion;
	}
	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

}


?>