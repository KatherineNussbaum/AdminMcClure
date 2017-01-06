
<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPropiedad.php');
    require_once('../entidades/ClassTipoPropiedad.php');
    require_once('../entidades/ClassTipoOperacion.php');

    require_once('../negocio/PropiedadBO.php');
    require_once('../negocio/TipoPropiedadBO.php');
    require_once('../negocio/TipoOperacionBO.php');


    // Agregar Nueva Propiedad

    if(isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'agregar' )
    {
        if(trim($_POST['nombre']) != null || trim($_POST['nombre']) != "" )
        {
            $propiedad = new Propiedad();
            $propiedad->setNombre($_POST['nombre']);
            $propiedad->setFechaIngreso($_POST['fechaIngreso']);
            $propiedad->setComentario($_POST['comentario']);
            $propiedad->setIdTipoPropiedad($_POST['tipoPropiedad']);
            $propiedad->setIdTipoOperacion($_POST['tipoOperacion']);

            $propiedadBO = new PropiedadBO();
            $propiedadBO->setPropiedad($propiedad);
            $result = $propiedadBO->agregarPropiedad();

            if($result)
            {
                
                ?>
                    <script type="text/javascript" >
                        alert("La propiedad fue agregada exitosamente!");
                        window.location.href = "propiedades.php";
                    </script>
                <?php
            }
            else 
            {
                ?>
                    <script type="text/javascript" >
                        alert("Ocurrió un error. La propiedad no fue agregada!.");
                    </script>
                <?php 
            }
        }
    }
?>


<div class="container-fluid">
    <div class="row" id="seccion_opciones">
        <div class="col-xs-12">
            <h2>Propiedad</h2>
        </div>
    </div>
  <div class="row">
    <div class="col-xs-12">

        <form class="form" method="post" name="form_agregar_propiedad" onsubmit="val_form_agregar_propiedad()">
            <div class="form-group" >
                <input type="hidden" name="operacion" value="agregar">
                    <div class="col-lg-3">
                        <label>Nombre*</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de propiedad">
                    </div>
                    
                    <div class="col-lg-2">
                        <label>Fecha Ingreso</label>
                        <input type="date" class="form-control" name="fechaIngreso">
                    </div>

                    <div class="col-lg-3">
                        <label>Tipo de Propiedad</label>
                        <select name="tipoPropiedad">
                            <?php
                                $tipoPropiedadBO = new TipoPropiedadBO();
                                $tipoPropiedadBO->listarTipoPropiedades();
                            ?>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label>Tipo de Operacion</label>
                        <select name="tipoOperacion">
                            <?php
                                $tipoOperacionBO = new TipoOperacionBO();
                                $tipoOperacionBO->listarTipoOperaciones();
                            ?>
                        </select>
                    </div>
            </div>
            <div class="form-group" >
                    <div class="col-lg-5">
                        <label>Comentario</label>
                        <textarea name="comentario" cols="50" rows="5"></textarea>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-default">Agregar</button>
                    </div>

            </div>
        </form>

    </div>
  </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery 3.1.1.js" type="text/javascript" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/datatable.js" type="text/javascript" ></script>

    <script type="text/javascript">
        // Validar formulario Login
        function val_form_agregar_propiedad() {
            var nombre = document.forms["form_agregar_propiedad"]["nombre"].value.trim();

            if (nombre == null || nombre == ""){
                alert("Debe ingresar un nombre!");
                event.preventDefault();
                return false;
            }
            else{
                return true;
            }
        };

    </script>
</body>
</html>