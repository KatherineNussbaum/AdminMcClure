<?php
	require_once('ClassConexion.php');
	require_once('/../entidades/ClassTipoOperacion.php');
	
	class TipoOperacionDAO
	{
		private $conn;

		function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function listar()
		{
			$sql = "SELECT id, tipoOperacion 
					FROM tipooperacion 
					WHERE habilitado = 1";
			$this->conn->abrirConexion();
			$resultado = $this->conn->select($sql);
			$tipoOperaciones = array();
			while($fila = $resultado->fetch_array() )
			{
				$tipoOperacion = new TipoOperacion();
				$tipoOperacion->setId($fila['id']);
				$tipoOperacion->setTipoOperacion($fila['tipoOperacion']);		
				$tipoOperaciones[] = $tipoOperacion;
			}
			$this->conn->cerrarConexion();
			return $tipoOperaciones;
		}
	}
?>