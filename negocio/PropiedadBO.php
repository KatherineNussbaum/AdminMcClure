<?php
	require_once('/../entidades/ClassPropiedad.php');
	require_once('/../dao/PropiedadDAO.php');
	require_once('/../dao/ClassConexion.php');

	class PropiedadBO
	{
		private $conexion;
		private $daoPropiedad;
		private $propiedad;

		function __construct()
		{
			$this->conexion = new Conexion();
			$this->daoPropiedad = new PropiedadDAO($this->conexion);
			$this->propiedad = new Propiedad();
		}

		public function getConexion()
		{
			return $this->conexion;
		}
		public function getDaoPropiedad()
		{
			return $this->daoPropiedad;
		}
		public function getPropiedad()
		{
			return $this->propiedad;
		}

		public function setConexion($conexion)
		{
			$this->conexion = $conexion;
		}
		public function setDaoPropiedad($daoPropiedad)
		{
			$this->daoPropiedad = $daoPropiedad;
		}
		public function setPropiedad($propiedad)
		{
			$this->propiedad = $propiedad;
		}

		public function agregarPropiedad()
		{
			$propiedad = $this->propiedad;
			$nombre = $propiedad->getNombre();

			if(empty($nombre) || is_null($nombre))
			{
				return false;
			}
			else
			{
				$resultado = $this->daoPropiedad->agregar($propiedad);
				unset($this->propiedad);
				return $resultado;
			}
		}

		public function listarPropiedades()
		{
			$propiedades = $this->daoPropiedad->listar();

			foreach ($propiedades as $propiedad) 
			{
				echo '<tr><td><button name="operacion" value="eliminar" onClick="eliminar('.$propiedad->getId().')"class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove"></span></button>  </td>';
				echo '<td>'.$propiedad->getId().'</td>';
				echo '<td>'.$propiedad->getNombre().'</td>';
				echo '<td>'.$propiedad->getFechaIngreso().'</td>';
				echo '<td>'.$propiedad->getEstado().'</td>';
				echo '<td>'.$propiedad->getTipoPropiedad().'</td>';
				echo '<td>'.$propiedad->getTipoOperacion().'</td>';
				echo '<td>';
				echo '<button
					name="operacion"
					value="modificar" 
					onClick="modificar('.$propiedad->getId().');"
					id="'.$propiedad->getId().'"
					class="btn btn-default btn-xs"
					>
					<span class="glyphicon glyphicon-pencil"></span> Modificar
				</button>';
				echo '</td></tr>';
			}
		}

		public function eliminarPropiedad($id)
		{
			$resultado = $this->daoPropiedad->eliminar($id);
			return $resultado;
		}

		public function buscarPropiedad($id)
		{
			$propiedades = $this->daoPropiedad->buscar($id);
			foreach($propiedades as $propiedad)
			{
				$propiedad->getId();
				$propiedad->getNombre();
				$propiedad->getFechaIngreso();
				$propiedad->getIdDireccion();
				$propiedad->getIdTipoPropiedad();
				$propiedad->getIdTipoOperacion();
				$propiedad->getIdEstado();
				$propiedad->getIdFichaPortal();
				$propiedad->getComentario();
				return $propiedad;
			}
		}

		public function modificarPropiedad()
		{
			$propiedad = $this->propiedad;
			$nombre = $propiedad->getNombre();
			if(empty($nombre) || is_null($nombre))
			{
				return false;
			}
			else
			{
				$resultado = $this->daoPropiedad->modificar($propiedad);
				unset($this->propiedad);
				return $resultado;
			}
		}

		public function agregarDireccionPropiedad()
		{
			$propiedad = $this->propiedad;
			$resultado = $this->daoPropiedad->agregarIdDireccion($propiedad);
			unset($this->propiedad);
			return $resultado;
		}
	}
?>