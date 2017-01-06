<?php
	require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPropiedad.php');
    require_once('../entidades/ClassTipoPropiedad.php');
    require_once('../entidades/ClassTipoOperacion.php');
    require_once('../entidades/ClassDireccion.php');
    require_once('../entidades/ClassComuna.php');

    require_once('../negocio/PropiedadBO.php');
    require_once('../negocio/TipoPropiedadBO.php');
    require_once('../negocio/TipoOperacionBO.php');
    require_once('../negocio/DireccionBO.php');
    require_once('../negocio/ComunaBO.php');

	// Modificar Propiedad
	if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'modificarPropiedad')
	{
		if( trim($_POST['nombre']) != null || trim($_POST['nombre']) != "" )
		{
			$propiedad = new Propiedad();

			$propiedad->setId($_POST['idPropiedad']);
			$propiedad->setNombre($_POST['nombre']);
			$propiedad->setFechaIngreso($_POST['fechaIngreso']);
			$propiedad->setIdTipoPropiedad($_POST['idTipoPropiedad']);
			$propiedad->setIdEstado($_POST['idEstado']);
			$propiedad->setIdTipoOperacion($_POST['idTipoOperacion']);
			$propiedad->setComentario($_POST['comentario']);

			$propiedadBO = new PropiedadBO();
			$propiedadBO->setPropiedad($propiedad);
			$propiedadBO->modificarPropiedad();

			$id = $_POST['idPropiedad'];
			
			?>
			<script type="text/javascript">
				alert("La propiedad fue modificada con exito.");
				 window.location.href = "datos_propiedad.php?operacion=modificar&id=" + <?php echo $id; ?>;
				 
			</script>
			<?php
		}
	}
    
    

	// Guardar Direccion 
	if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'modificarDireccion' && $_POST['idPropiedad'] != null && $_POST['idPropiedad'] != "" && $_POST['idPropiedad'] > 0)
	{
		if($_GET['id'] !=null && $_GET['id'] != "")
		{
			$direccion = new Direccion();
			$direccion->setCalle($_POST['calle']);
			$direccion->setIdComuna($_POST['comuna']);

			$direccionBO = new DireccionBO();

			if($_POST['idDireccion'] != null && $_POST['idDireccion'] != "" && $_POST['idDireccion'] > 0)
			{
				$direccion->setId($_POST['idDireccion']);
				$direccionBO->setDireccion($direccion);
				$return = $direccionBO->modificarDireccion();
			}
			else
			{
				$direccionBO->setDireccion($direccion);
				$return = $direccionBO->agregarDireccion();

				$direccionBO = new DireccionBO();
            	$direccionGurdada = $direccionBO->buscarUltimo();

            	if( !empty($direccionGurdada))
	            {
	                $idDireccion = $direccionGurdada->getId();

	                $propiedad = new Propiedad();
	                $propiedad->setIdDireccion($idDireccion);
	                $propiedad->setId($_POST['idPropiedad']);

	                $propiedadBO = new PropiedadBO();
	                $propiedadBO->setPropiedad($propiedad);
	                $result = $propiedadBO->agregarDireccionPropiedad();
		        }
			}

			if( $return )
			{
				?>
				<script type="text/javascript" >
		 			alert("Dirección fue guardada exitosamente!");
		 		</script>
				<?php
			}
		}
	}

	// Cargar datos Propiedad
	if(isset($_GET['id']))
	{
		$propiedadBO = new PropiedadBO();
		$result = $propiedadBO->buscarPropiedad($_GET['id']);
		if( !empty($result) )
		{
			$idPropiedad = $result->getId();
			$nombre = $result->getNombre();
			$fechaIngreso = $result->getFechaIngreso();
			$idDireccion = $result->getIdDireccion();
			$idTipoPropiedad = $result->getIdTipoPropiedad();
			$idTipoOperacion = $result->getIdTipoOperacion();
			$idEstado = $result->getIdEstado();
			$idFichaPortal = $result->getIdFichaPortal();
			$comentario = $result->getComentario();
		}
	}
	else
	{
		?>
			<script type="text/javascript">
				window.location.href = "propiedades.php";
			</script>
		<?php
	}

	// Cargar Domicilio
	if($idDireccion !=null || $idDireccion != "" || $idDireccion > 1)
	{

		$direccionBO = new DireccionBO();
		$result = $direccionBO->buscarDireccion($idDireccion);

		if( !empty($result) )
		{
			$id = $result->getId();
			$calle = $result->getCalle();
			$idComuna = $result->getIdComuna();
		}
	}
	else
	{
		$calle = "";
		$idComuna = "";
	}
	
?>
<div class="container-fluid">
    <div class="row" id="seccion_opciones">
        <div class="col-xs-12">
            <h2>Datos de Propiedad</h2>
        </div>
    </div>
  	<div class="row">
  		<form class="form" method="post" name="form_modificar_propiedad" onsubmit="val_form_modificar_propiedad()">
  			<input type="hidden" name="idPropiedad" value="<?php echo $idPropiedad; ?>">
  			<input type="hidden" name="operacion" value="modificarPropiedad">

  			<div class="form-group">
		    	<label>Nombre</label>
		    	<input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?> ">
		  	</div>

		  	<div class="form-group">
		    	<label>Fecha de Ingreso</label>
		    	<input type="date" class="form-control" name="fechaIngreso" value="<?php echo $fechaIngreso; ?>">
		  	</div>

		  	<div class="form-group">
		    	<label>Tipo de Propiedad</label>

		    	<select name="idTipoPropiedad">
		    		<?php
		    			$tipoPropiedadBO = new TipoPropiedadBO();
		    			$tipoPropiedadBO->listarTipoPropiedadesSeleccion($idTipoPropiedad);
		    		?>
		    	</select>
		  	</div>

		  	<div class="form-group">
		    	<label>Tipo de Operación</label>
		    	<select name="idTipoOperacion">
		    		<?php
		    			$tipoOperacionBO = new TipoOperacionBO();
		    			$tipoOperacionBO->listarTipoOperacionesSeleccion($idTipoOperacion);
		    		?>
		    	</select>
		  	</div>

		  	<div class="form-group">
		    	<label>Comentario</label>
		    	<textarea name="comentario"><?php echo $comentario; ?>
		    	</textarea>
		  	</div>

		  	<button type="submit" class="btn btn-default">Modificar</button>
  		</form>
  	</div>

  	<div class="row" >
  		<h4>Dirección</h4>
  		<form class="form" method="post" name="form_direccion_propiedad" onsubmit="val_form_direccion_propiedad()">

  			<input type="hidden" name="idPropiedad" value="<?php echo $id; ?>">
  			<input type="hidden" name="operacion" value="modificarDireccion">
  			<input type="hidden" name="idDireccion" value="<?php echo $idDireccion; ?>">
  			<div class="form-group">
		    	<label>Calle</label>
		    	<input type="text" class="form-control" name="calle" value="<?php echo $calle; ?>">
		  	</div>

		  	<div class="form-group">
		    	<label>Comuna</label>
		    	<select name="comuna">
		    		<?php
		    			$comunaBO = new ComunaBO();
		    			$comunaBO->listarComunaSeleccion($idComuna);
		    		?>
		    	</select>
		  	</div>
		  	<button type="submit" class="btn btn-default">Guardar</button>
  		</form>
  	</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery 3.1.1.js" type="text/javascript" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/datatable.js" type="text/javascript" ></script>
    

    <script type="text/javascript">
    	
	    function val_form_modificar_propiedad() 
	    {
	        var nombre = document.forms["form_modificar_propiedad"]["nombre"].value.trim();

	        if ( nombre == null || nombre == "")
	        {
	        	alert("Debe ingresar un nombre para la propiedad!");
			    return false;
	        }
	        else
	        {
	            return true;
	        }
	    };

	    function val_form_direccion_propiedad()
	    {
	    	var calle = document.forms["form_direccion_propiedad"]["calle"].value.trim();
	    	var id = document.forms["form_direccion_propiedad"]["idPropiedad"].value.trim();

	    	if(calle == null || calle == "")
	    	{
	    		alert("Debe ingresar una calle para la dirección!");
			    return false;
	    	}
	    	else
	    	{
	    		window.location.href = "datos_propiedad.php?operacion=modificarDireccion&id="+id;
	    		return true;
	    	}
	    };
	    
    </script>

</body>
</html>