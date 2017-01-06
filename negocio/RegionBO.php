<?php
require_once('/../entidades/ClassRegion.php');
require_once('/../dao/RegionDAO.php');
require_once('/../dao/ClassConexion.php');

class RegionBO
{
	private $conexion;
	private $daoRegion;
	private $region;

	function __construct()
	{
		$this->conexion = new Conexion();
		$this->daoRegion = new RegionDAO($this->conexion);
		$this->region = new Region();
	}

	public function getConexion()
	{
		return $this->conexion;
	}
	public function getDaoRegion()
	{
		return $this->daoRegion;
	}
	public function getRegion()
	{
		return $this->region;
	}


	public function setConexion($conexion) 	
	{
		$this->conexion = $conexion;
	}
	public function setDaoRegion($daoRegion)
	{
		$this->daoRegion = $daoRegion;
	}
	public function setRegion($region)
	{	
		$this->region = $region; 		
	}

	public function listarRegion()
	{
		$regiones = $this->daoRegion->listar();

		foreach ($regiones as $region) 
		{
			echo '<option value="'.$region->getId().'">'.$region->getNombreRegion().'</option>';
		}
	}
}

?>