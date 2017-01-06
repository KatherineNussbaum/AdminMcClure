<?php
	require_once('ClassConexion.php');
	require_once('/../entidades/ClassTipoPropiedad.php');
	
	class TipoPropiedadDAO
	{
		private $conn;

		function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function listar()
		{
			$sql = "SELECT id, tipoPropiedad 
					FROM tipopropiedad 
					WHERE habilitado = 1";
			$this->conn->abrirConexion();
			$resultado = $this->conn->select($sql);
			$tipoPropiedades = array();
			while($fila = $resultado->fetch_array() )
			{
				$tipoPropiedad = new TipoPropiedad();
				$tipoPropiedad->setId($fila['id']);
				$tipoPropiedad->setNombreTipoPropiedad($fila['tipoPropiedad']);		
				$tipoPropiedades[] = $tipoPropiedad;
			}
			$this->conn->cerrarConexion();
			return $tipoPropiedades;
		}
	}
?>