<?php
require_once('/../entidades/ClassEmail.php');
require_once('/../dao/EmailDAO.php');
require_once('/../dao/ClassConexion.php');

class EmailBO
{
	private $conexion;
	private $daoEmail;
	private $email;

	function __construct()
	{
		$this->conexion 	= new Conexion();
		$this->daoEmail 	= new EmailDAO($this->conexion);
		$this->email 	 	= new Email();
	}

	public function getConexion()	{		return $this->conexion 		;	}
	public function getDaoPersona()	{		return $this->daoEmail 		;	}
	public function getEmail()		{		return $this->email 		;	}


	public function setConexion($conexion)		{		$this->conexion 	= $conexion;	}
	public function setDaoEamil($daoEmail)		{		$this->daoEmail 	= $daoEmail;	}
	public function setEmail($email)			{		$this->email 		= $email;	}


	public function agregarEmail()
	{
		$email 				= $this->email;
		$correo 			= $email->getCorreo();
		$idPersona			= $email->getIdPersona();

		if(empty($correo) || is_null($correo) || strlen($correo) < 3 || empty($idPersona) || is_null($idPersona) )
		{
			return false;
		}
		else
		{
			$resultado = $this->daoEmail->agreagr($email);
			unset($this->email);
			return $resultado;
		}
	}

	public function listarEmail($idPersona)
	{
		$emails = $this->daoEmail->listar($idPersona);

		foreach ($emails as $email) {
			echo '<tr><td>'.$email->getId().'</td>';
			echo '<td>'.$email->getCorreo().'</td>';
			echo '<td>';
			echo '<button
				name="operacion"
				value="eliminarEmail" 
				onClick="eliminarEmail('.$email->getId().', '.$idPersona.');"
				id="'.$email->getId().'"
				class="btn btn-default btn-xs"
				>
				<span class="glyphicon glyphicon-remove"></span> Eliminar
			</button>';
			echo '</td></tr>';
		}
	}

	public function eliminarEmail($id)
	{
		$resultado = $this->daoEmail->eliminar($id);
		return $resultado;
	}
}