<?php
require_once('/../entidades/ClassPersonaDireccion.php');
require_once('/../dao/PersonaDireccionDAO.php');
require_once('/../dao/ClassConexion.php');

class PersonaDireccionBO
{
	private $conexion;
	private $daoPersonaDireccion;
	private $personaDireccion;

	function __construct()
	{
		$this->conexion 			= new Conexion();
		$this->daoPersonaDireccion 	= new PersonaDireccionDAO($this->conexion);
		$this->personaDireccion		= new PersonaDireccion();
	}

	public function getConexion()			{		return $this->conexion 				;	}
	public function getDaoPersonaDireccion(){		return $this->daoPersonaDireccion 	;	}
	public function getPersonaDireccion()	{		return $this->personaDireccion 		;	}


	public function setConexion($conexion)						{ $this->conexion = $conexion;							}
	public function setDaoPersonaDireccion($daoPersonaDireccion){ $this->daoPersonaDireccion = $daoPersonaDireccion;	}
	public function setPersonaDireccion($personaDireccion)		{ $this->personaDireccion = $personaDireccion;			}


	public function agregarPersonaDireccion()
	{
		$personaDireccion 	= $this->personaDireccion;
		$idPersona			= $personaDireccion->getIdPersona();
		$idDireccion 		= $personaDireccion->getIdDireccion();
		$idTipoDireccion 	= $personaDireccion->getIdTipoDireccion();

			$resultado = $this->daoPersonaDireccion->agregar($personaDireccion);
			unset($this->personaDireccion);
			return $resultado;
	}

	public function listarPorPersona($idPersona)
	{
		$personaDirecciones = $this->daoPersonaDireccion->listarPorPersona($idPersona);

		foreach ($personaDirecciones as $personaDireccion)
		{

			echo '<tr><td>'.$personaDireccion->getId().'</td>';
			echo '<td>'.$personaDireccion->getCalle().'</td>';
			echo '<td>'.$personaDireccion->getComuna().'</td>';
			echo '<td>'.$personaDireccion->getTipoDireccion().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="modificar" 
				onClick="eliminarDireccion('.$personaDireccion->getId().', '.$idPersona.');"
				id="'.$personaDireccion->getId().'"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-remove"></span> Eliminar
			</button>';
			echo '</td></tr>';
		}	
	}

	public function eliminarDireccion($id)
	{
		$resultado = $this->daoPersonaDireccion->eliminar($id);
		return $resultado;
	}


}