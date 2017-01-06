<?php
	require_once('/../entidades/ClassTipoPropiedad.php');
	require_once('/../dao/TipoPropiedadDAO.php');
	require_once('/../dao/ClassConexion.php');

	class TipoPropiedadBO
	{
		private $conexion;
		private $daoTipoPropiedad;
		private $tipoPropiedad;

		function __construct()
		{
			$this->conexion = new Conexion();
			$this->daoTipoPropiedad = new TipoPropiedadDAO($this->conexion);
			$this->tipoPropiedad = new TipoPropiedad();
		}

		public function getConexion()
		{
			return $this->conexion;
		}
		public function getDaoTipoPropiedad()
		{
			return $this->daoTipoPropiedad;
		}
		public function getTipoPropiedad()
		{
			return $this->tipoPropiedad;
		}

		public function setConexion($conexion)
		{
			$this->conexion = $conexion;
		}
		public function setDaoTipoPropiedad($daoTipoPropiedad)
		{
			$this->daoTipoPropiedad = $daoTipoPropiedad;
		}
		public function setTipoPropiedad($tipoPropiedad)
		{
			$this->tipoPropiedad = $tipoPropiedad;
		}


		public function listarTipoPropiedades()
		{
			$tipoPropiedades = $this->daoTipoPropiedad->listar();

			foreach($tipoPropiedades as $tipoPropiedad)
			{
				echo '<option value="'.$tipoPropiedad->getId().'">'.$tipoPropiedad->getNombreTipoPropiedad().'</option>';
			}
		}

		public function listarTipoPropiedadesSeleccion($id)
		{
			$tipoPropiedades = $this->daoTipoPropiedad->listar();

			if($id == null || $id == "" || $id < 1)
			{
				echo '<option selected value="" ></option>';
			}
			foreach($tipoPropiedades as $tipoPropiedad)
			{
				echo '<option ';
				if($id == $tipoPropiedad->getId())
				{ 
					echo 'selected';
				}
				echo ' value="'.$tipoPropiedad->getId().'">'.$tipoPropiedad->getNombreTipoPropiedad().'</option>';
			}
		}
	}

?>