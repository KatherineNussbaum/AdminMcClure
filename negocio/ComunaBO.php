<?php
require_once('/../entidades/ClassComuna.php');
require_once('/../dao/ComunaDAO.php');
require_once('/../dao/ClassConexion.php');

class ComunaBO
{
	private $conexion;
	private $daoComuna;
	private $comuna;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoComuna = new ComunaDAO($this->conexion);
		$this->comuna 		= new Comuna();
	}

	public function getConexion()
	{
		return $this->conexion;
	}
	public function getDaoComuna()
	{
		return $this->daoComuna;
	}
	public function getComuna()
	{
		return $this->comuna;
	}


	public function setConexion($conexion) 	
	{
		$this->conexion = $conexion;
	}
	public function setDaoComuna($daoComuna)
	{
		$this->daoComuna = $daoComuna;
	}
	public function setComuna($comuna)
	{	
		$this->comuna = $comuna; 		
	}

	public function listarComuna()
	{
		$comunas = $this->daoComuna->listarComuna();

		foreach ($comunas as $comuna) 
		{
			echo '<option value="'.$comuna->getId().'">'.$comuna->getNombreComuna().'</option>';
		}
	}

	public function listarComunaSeleccion($id)
	{
		$comunas = $this->daoComuna->listarComuna();

		if($id == null || $id == "" || $id < 1)
		{
			echo '<option selected value="" ></option>';
		}
		foreach ($comunas as $comuna) 
		{
			echo '<option ';
			if($id == $comuna->getId())
			{
				echo 'selected';
			}
			echo ' value="'.$comuna->getId().'">'.$comuna->getNombreComuna().'</option>';
		}
	}
}

?>