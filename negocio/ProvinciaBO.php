<?php
require_once('/../entidades/ClassProvincia.php');
require_once('/../dao/ProvinciaDAO.php');
require_once('/../dao/ClassConexion.php');

class ProvinciaBO
{
	private $conexion;
	private $daoProvincia;
	private $provincia;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoProvincia = new ProvinciaDAO($this->conexion);
		$this->provincia 		= new Provincia();
	}

	public function getConexion()
	{
		return $this->conexion;
	}
	public function getDaoProvincia()
	{
		return $this->daoProvincia;
	}
	public function getProvincia()
	{
		return $this->provincia;
	}


	public function setConexion($conexion) 	
	{
		$this->conexion = $conexion;
	}
	public function setDaoProvincia($daoProvincia)
	{
		$this->daoProvincia = $daoProvincia;
	}
	public function setProvincia($provincia)
	{	
		$this->provincia = $provincia; 		
	}

	public function listarProvincia($idRegion)
	{
		$provincias = $this->daoProvincia->listarRegion($idRegion);

		foreach ($provincias as $provincias) 
		{
			echo '<option value="'.$provincia->getId().'">'.$provincia->getProvincia().'</option>';
		}
	}
}

?>