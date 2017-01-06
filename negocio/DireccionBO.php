<?php
require_once('/../entidades/ClassDireccion.php');
require_once('/../dao/DireccionDAO.php');
require_once('/../dao/ClassConexion.php');

class DireccionBO
{
	private $conexion;
	private $daoDireccion;
	private $direccion;

	function __construct()
	{
		$this->conexion = new Conexion();
		$this->daoDireccion = new DireccionDAO($this->conexion);
		$this->direccion = new Direccion();
	}

	public function getConexion()		{		return $this->conexion;	}
	public function getDaoDireccion()	{		return $this->daoDireccion;	}
	public function getDireccion()		{		return $this->direccion;	}


	public function setConexion($conexion) 			{		$this->conexion = $conexion;	}
	public function setDaoDireccion($daoDireccion)	{		$this->daoDireccion = $daoDireccion;	}
	public function setDireccion($direccion)		{		$this->direccion = $direccion; 		}


	public function agregarDireccion()
	{
		$direccion 	= $this->direccion;
		$calle 		= $direccion->getCalle();
		$idComuna 	= $direccion->getIdComuna();

		if(empty($calle) || is_null($calle))
		{
			return false;
		}
		else
		{
			$resultado = $this->daoDireccion->agregar($direccion);
			unset($this->direccion);
			return $resultado;
		}
	}

	public function modificarDireccion()
	{
		$direccion = $this->direccion;
		$calle = $direccion->getCalle();

		if(empty($calle) || is_null($calle))
		{
			return false;
		}
		else
		{
			$resultado = $this->daoDireccion->modificar($direccion);
			unset($this->direccion);
			return $resultado;
		}

	}

	public function buscarUltimo()
	{
		$direcciones = $this->daoDireccion->buscarUltimo();
		foreach ($direcciones as $direccion ) {
			$direccion->getId();
			return $direccion;
		}
	}

	public function buscarDireccion($id)
	{
		$direcciones = $this->daoDireccion->buscar($id);
		foreach ($direcciones as $direccion)
		{
			$direccion->getId();
			$direccion->getCalle();
			$direccion->getIdComuna();

			return $direccion;
		}
	}


}


?>