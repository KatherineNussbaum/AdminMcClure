<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPropiedad.php');
    require_once('../negocio/PropiedadBO.php');

    if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminar')
    {
    	$id = $_GET['id'];
    	$propiedadBO = new PropiedadBO();
    	$propiedadBO->eliminarPropiedad($id);
    	?>
    	<script>
    		window.location.href = "propiedades.php";
    	</script>
    	<?php
    }

?>

<div class="container-fluid">
	<div class="row" id="seccion_opciones">
    	<div class="col-xs-12">
        	<h2>Propiedades</h2>
        </div>
	</div>
  	<div class="row" id="lista_persona">
	    <div class="col-xs-12">

	        <table id="tblPersonas" class="display" cellspacing="0" width="100%">
	        	<thead>
	        		<tr>
	        			<td width="20px"></td>
		        		<td>ID</td>
		        		<td>NOMBRE</td>
		        		<td>FECHA INGRESO</td>
		        		<td>ESTADO</td>
		        		<td>TIPO PROPIEDAD</td>
		        		<td>TIPO OPERACIÓN</td>
		        		<td>ACCIONES</td>
	        		</tr>
	        	</thead>

	        	<tbody>
	        		<?php
	        			$propiedadBO = new PropiedadBO();
	        			$propiedadBO->listarPropiedades();
	        		?>
	        	</tbody>
	    	</table>

	    </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery 3.1.1.js" type="text/javascript" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/datatable.js" type="text/javascript" ></script>

    <script type="text/javascript">
    	$('#tblPersonas').DataTable({
    		order: [[0, 'desc']]
    	});
    	function modificar( id ) {
			window.location.href = "datos_propiedad.php?operacion=modificar&id="+id;
		};

		function eliminar(id)
		{
			if(id != null || id != 0)
			{
				window.location.href = "propiedades.php?operacion=eliminar&id="+id;
			}
		}
    </script>
</body>
</html>