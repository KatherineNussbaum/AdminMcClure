<?php
require_once('/../entidades/ClassTelefono.php');
require_once('/../dao/TelefonoDAO.php');
require_once('/../dao/ClassConexion.php');

class TelefonoBO
{
	private $conexion;
	private $daoTelefono;
	private $telefono;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoTelefono 	= new TelefonoDAO($this->conexion);
		$this->telefono 	= new Telefono();
	}

	public function getConexion()	{		return $this->conexion 		;	}
	public function getDaoPersona()	{		return $this->daoTelefono 	;	}
	public function getTelefono()	{		return $this->telefono 		;	}


	public function setConexion($conexion)		{		$this->conexion 	= $conexion;	}
	public function setDaoTelefono($daoTelefono){		$this->daoTelefono 	= $daoTelefono;	}
	public function setTelefono($telefono)		{		$this->telefono 	= $telefono;	}


	public function agregarTelefono()
	{
		$telefono 			= $this->telefono;
		$numero 			= $telefono->getNumero();
		$idPersona 			= $telefono->getIdPersona();

		if(empty($numero) || is_null($numero) || strlen($numero) < 3 || empty($idPersona) || is_null($idPersona) )
		{
			return false;
		}
		else
		{
			$resultado = $this->daoTelefono->agreagr($telefono);
			unset($this->telefono);
			return $resultado;
		}
	}

	public function listarTelefono($idPersona)
	{
		$telefonos = $this->daoTelefono->listar($idPersona);

		foreach ($telefonos as $telefono) {
			echo '<tr><td>'.$telefono->getId().'</td>';
			echo '<td>'.$telefono->getNumero().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="eliminarTelefono" 
				onClick="eliminarTelefono('.$telefono->getId().', '.$idPersona.');"
				id="'.$telefono->getId().'"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-remove"></span> Eliminar
			</button>';
			echo '</td></tr>';
		}
	}

	public function eliminarTelefono($id)
	{
		$resultado = $this->daoTelefono->eliminar($id);
		return $resultado;
	}
}