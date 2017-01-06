<?php
require_once('../entidades/ClassDireccion.php');
require_once('../negocio/DireccionBO.php');


// Agregar Direccion
if( isset( $_REQUEST['operacion']) && $_REQUEST['operacion']=='agregar' )
{
	if( isset($_REQUEST['calle']) )
	{
		$direccion = new Direccion();

		$direccion->setCalle($_POST['calle']);
		$direccion->setIdComuna($_POST['idComuna']);

		$direccionBo = new DireccionBO();
		$direccionBo->setDireccion($direccion);
		$return = $direccionBo->agregarDireccion();
	}

	if( $return )
	{
		?>
		<script type="text/javascript" >
 			alert("Dirección fue agregado exitosamente!");
 		</script>
		<?php
	}
}		

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<input type="hidden" name="operacion" value="agregar">
	<label>Calle</label>
	<input type="text" name="calle">
	<label>Comuna</label>
	<select>
		<option value="1">Comuna 1</option>
		<option value="2">Comuna 2</option>
		<option value="3">Comuna 3</option>
	</select>
	<input type="submit" name="" value="Guardar">
</form>
</body>
</html>


