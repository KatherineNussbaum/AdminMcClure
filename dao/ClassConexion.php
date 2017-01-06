<?php
/**
*	Clase Conexion
*
*/

class Conexion{
	private $host		= "localhost";
	private $user		= "mcclure";
	private $pass		= "R8jCZdszP3yMEHFy";
	private $database	= "adminmcclure";
	private $conn 		= "";

	function __construct(){
		$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
		$this->conn->set_charset("utf8");
	}	

	public function getConexion(){
		return $this->conn;
	}

	public function abrirConexion(){
		if($this->conn->connect_errno){
			die("Error al conectarse a la base de datos. ERROR: ". $this->conn->connect_errno);
		}
	}

	public function cerrarConexion(){
		$this->conn->close();
	}

	public function querys($query){
		$comprobador = false;
		if( $this->conn->query($query) ){		
			if( $this->conn->affected_rows > 0 ){
				$comprobador = true;
			}
		}
		return $comprobador;
	}

	public function select($query){			
		$resultado = $this->conn->query($query);
		return $resultado;
	}

	public function selectLogin($query) {
		$resultado = $this->conn->query($query);
		$fila = mysqli_fetch_array($resultado);
		$cantidad = mysqli_num_rows($resultado);
		if($cantidad == 1) {
			return true;
		}
		else {
			return false;
		}
	}
	
}

?>