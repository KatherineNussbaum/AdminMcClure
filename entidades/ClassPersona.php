<?php
/**
* Clase Persona
*
*/

class Persona
{
	private $id;
	private $rut;
	private $nombre;
	private $fechaNacimiento;
	private $genero;
	private $fechaCreacion;
	private $fechaModificacion;
	private $habilitado;

	function __construct()
	{
		$this->id = "";
		$this->rut = "";
		$this->nombre = "";
		$this->fechaNacimiento = "";
		$this->genero = "";
		$this->fechaCreacion = "";
		$this->fechaModificacion = "";
		$this->habilitado = "";
	}

	public function getId()
	{
		return $this->id;
	}
	public function getRut()
	{
		return $this->rut;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}
	public function getGenero()
	{
		return $this->genero;
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
	public function setRut($rut)
	{
		$this->rut = $rut;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;
	}
	public function setGenero($genero)
	{
		$this->genero = $genero;
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