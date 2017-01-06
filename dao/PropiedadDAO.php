<?php
	require_once('ClassConexion.php');
	require_once('/../entidades/ClassPropiedad.php');

	class PropiedadDAO
	{
		private $conn;

		function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function agregar($propiedad)
		{
			$nombre = $propiedad->getNombre();
			$fechaIngreso = $propiedad->getFechaIngreso();
			$comentario = $propiedad->getComentario();
			$idTipoPropiedad = $propiedad->getIdTipoPropiedad();
			$idTipoOperacion = $propiedad->getIdTipoOperacion();


			$sql = "INSERT INTO propiedad 
					(nombre, fechaIngreso, idTipoPropiedad, idEstado, idTipoOperacion, comentario, fechaCreacion, fechaModificacion, habilitado) VALUES 
					('".$nombre."', '".$fechaIngreso."', '".$idTipoPropiedad."', 1, '".$idTipoOperacion."', '".$comentario."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1 )";
			$this->conn->abrirConexion();

			if( $this->conn->querys( $sql ) )
			{
				return true;
			}
			else
			{
				return false;
			}

			$this->conn->cerrarConexion();
		}

		public function listar()
		{
			$sql = "SELECT p.id, p.nombre, p.fechaIngreso, ep.estadoPropiedad, tp.tipoPropiedad, top.tipoOperacion
					FROM propiedad as p 
					left JOIN estadopropiedad as ep
					ON p.idEstado = ep.id
					left JOIN  tipopropiedad as tp
					ON tp.id = p.idTipoPropiedad
					left JOIN tipooperacion as top 
					ON top.id = p.idTipoOperacion
					WHERE p.habilitado = 1 
					ORDER BY id DESC";
			$this->conn->abrirConexion();

			$resultado = $this->conn->select($sql);
			$propiedades = array();

			while ($fila = $resultado->fetch_array()) 
			{
				$propiedad = new Propiedad();

				$propiedad->setId($fila['id']);
				$propiedad->setNombre($fila['nombre']);
				$propiedad->setFechaIngreso($fila['fechaIngreso']);
				$propiedad->setEstado($fila['estadoPropiedad']);
				$propiedad->setTipoPropiedad($fila['tipoPropiedad']);
				$propiedad->setTipoOperacion($fila['tipoOperacion']);

				$propiedades[] = $propiedad;
			}
			$this->conn->cerrarConexion();
			return $propiedades;
		}

		public function eliminar($id)
		{
			$sql = "UPDATE propiedad 
					SET habilitado = 0, fechaModificacion = CURRENT_TIMESTAMP 
					WHERE id = $id";
			$this->conn->abrirConexion();
		
			if($this->conn->querys($sql))
			{
				return true; 	
			}
			else
			{
				return false;
			}
			
			$this->conn->cerrarConexion();
		}

		public function buscar($id)
		{
			$sql = "SELECT id, nombre, fechaIngreso, idDireccion, idTipoPropiedad, idEstado, idTipoOperacion,idFichaPortal, comentario
					FROM propiedad 
					WHERE habilitado = 1 
					AND id = $id";
			$this->conn->abrirConexion();
			$resultado = $this->conn->select($sql);
			$propiedades = array();

			while($fila = $resultado->fetch_array())
			{
				$propiedad = new Propiedad();
				$propiedad->setId($fila['id']);
				$propiedad->setNombre($fila['nombre']);
				$propiedad->setFechaIngreso($fila['fechaIngreso']);
				$propiedad->setIdDireccion($fila['idDireccion']);
				$propiedad->setIdTipoPropiedad($fila['idTipoPropiedad']);
				$propiedad->setIdEstado($fila['idEstado']);
				$propiedad->setIdTipoOperacion($fila['idTipoOperacion']);
				$propiedad->setIdFichaPortal($fila['idFichaPortal']);
				$propiedad->setComentario($fila['comentario']);

				$propiedades[] = $propiedad;
			}

			$this->conn->cerrarConexion();
			return $propiedades;
		}

		public function modificar($propiedad)
		{
			$id = $propiedad->getId();
			$nombre = $propiedad->getNombre();
			$fechaIngreso = $propiedad->getFechaIngreso();
			$idTipoPropiedad = $propiedad->getIdTipoPropiedad();
			$idTipoOperacion = $propiedad->getIdTipoOperacion();
			$comentario = $propiedad->getComentario();

			$sql = "UPDATE propiedad 
					SET 
					nombre = '$nombre', 
					fechaIngreso = '$fechaIngreso',
					idTipoPropiedad = $idTipoPropiedad, 
					idTipoOperacion = $idTipoOperacion, 
					comentario = '$comentario',
					fechaModificacion = CURRENT_TIMESTAMP
					WHERE id = $id ";
			$this->conn->abrirConexion();
		
			if($this->conn->querys($sql))
			{
				return true; 	
			}
			else
			{
				return false;
			}
			
			$this->conn->cerrarConexion();	
		}

		public function agregarIdDireccion($propiedad)
		{
			$id = $propiedad->getId();
			$idDireccion = $propiedad->getIdDireccion();

			$sql = "UPDATE propiedad 
					SET 
					idDireccion = '$idDireccion', 
					fechaModificacion = CURRENT_TIMESTAMP
					WHERE id = $id ";
			$this->conn->abrirConexion();
		
			if($this->conn->querys($sql))
			{
				return true; 	
			}
			else
			{
				return false;
			}
			
			$this->conn->cerrarConexion();	
		}
	}
?>