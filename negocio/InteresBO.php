<?php
require_once('/../entidades/ClassInteres.php');
require_once('/../dao/InteresDAO.php');
require_once('/../dao/ClassConexion.php');

class InteresBO
{
	private $conexion;
	private $daoInteres;
	private $interes;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoInteres 	= new InteresDAO($this->conexion);
		$this->interes 		= new Interes();
	}

	public function getConexion()	{		return $this->conexion 		;	}
	public function getDaoInteres()	{		return $this->daoInteres 	;	}
	public function getInteres()	{		return $this->interes 		;	}


	public function setConexion($conexion)		{		$this->conexion 	= $conexion;	}
	public function setDaoInteres($daoInteres)	{		$this->daoInteres 	= $daoInteres;	}
	public function setInteres($interes)		{		$this->interes 		= $interes;	}


	public function agregarInteres()
	{
		$interes 			= $this->interes;
		$fechaIngreso		= $interes->getFechaIngreso();
		$busca 				= $interes->getBusca();
		$referencia			= $interes->getReferencia();
		$idPersona 			= $interes->getIdPersona();

		if(empty($busca) || is_null($busca) || empty($idPersona) || is_null($idPersona) || $idPersona == 0)
		{
			return false;
		}
		else
		{
			$resultado = $this->daoInteres->agregar($interes);
			unset($this->interes);
			return $resultado;
		}
	}

	public function listarInteres($idPersona)
	{
		$intereses = $this->daoInteres->listar($idPersona);
		if(!empty($intereses))
		{
			foreach ($intereses as $interes) {
			echo '<tr><td>'.$interes->getId().'</td>';
			if($interes->getFechaIngreso() == 0 || $interes->getFechaIngreso() == null)
			{
				echo '<td> </td>';
			}
			else
			{
				echo '<td>'.date("d-m-Y",strtotime($interes->getFechaIngreso())).'</td>';
			}
			echo '<td>'.$interes->getBusca().'</td>';
			echo '<td>'.$interes->getReferencia().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="eliminarInteres" 
				onClick="eliminarInteres('.$interes->getId().', '.$interes->getIdPersona().');"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-remove"> Eliminar</span> 
			</button>';
			echo '</td></tr>';
			}
		}
		
	}

	public function eliminarInteres($idInteres)
	{
		$resultado = $this->daoInteres->eliminar($idInteres);
		return $resultado;
	}
}