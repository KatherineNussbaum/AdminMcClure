<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPersona.php');
    require_once('../negocio/PersonaBO.php');


    if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminar')
    {
    	$id = $_GET['id'];
    	$personaBO = new PersonaBO();
    	$personaBO->eliminarPersona($id);
    	?>
    	<script>
    		window.location.href = "personas.php";
    	</script>
    	<?php
    }

?>



<div class="container-fluid">
	<div class="row" id="seccion_opciones">
    	<div class="col-xs-12">
        	<h2>Personas</h2>
        </div>
	</div>
  	<div class="row" id="lista_persona">
	    <div class="col-xs-12">

	        <table id="tblPersonas" class="display" cellspacing="0" width="100%">
	        	<thead>
	        		<tr>
	        			<td width="20px"></td>
		        		<td>ID</td>
		        		<td>RUT</td>
		        		<td>NOMBRE</td>
		        		<td>GENERO</td>
		        		<td>ACCIONES</td>
	        		</tr>
	        	</thead>

	        	<tbody>
	        		<?php
	        			$personaBO = new PersonaBO();
	        			$personaBO->listarPersonas();
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
			window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
		};
		function eliminar(id)
		{
			if(id != null || id != 0)
			{
				window.location.href = "personas.php?operacion=eliminar&id="+id;
			}
		}
    </script>
</body>
</html>