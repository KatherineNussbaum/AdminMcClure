<?php
	require_once('/../entidades/ClassTipoOperacion.php');
	require_once('/../dao/TipoOperacionDAO.php');
	require_once('/../dao/ClassConexion.php');

	class TipoOperacionBO
	{
		private $conexion;
		private $daoTipoOperacion;
		private $tipoOperacion;

		function __construct()
		{
			$this->conexion = new Conexion();
			$this->daoTipoOperacion = new TipoOperacionDAO($this->conexion);
			$this->tipoOperacion = new TipoOperacion();
		}

		public function getConexion()
		{
			return $this->conexion;
		}
		public function getDaoTipoOperacion()
		{
			return $this->daoTipoOperacion;
		}
		public function getTipoOperacion()
		{
			return $this->tipoOperacion;
		}

		public function setConexion($conexion)
		{
			$this->conexion = $conexion;
		}
		public function setDaoTipoOperacion($daoTipoOperacion)
		{
			$this->daoTipoOperacion = $daoTipoOperacion;
		}
		public function setTipoOperacion($tipoOperacion)
		{
			$this->tipoOperacion = $tipoOperacion;
		}


		public function listarTipoOperaciones()
		{
			$tipoOperaciones = $this->daoTipoOperacion->listar();

			foreach($tipoOperaciones as $tipoOperacion)
			{
				echo '<option value="'.$tipoOperacion->getId().'">'.$tipoOperacion->getTipoOperacion().'</option>';
			}
		}
	}

?>