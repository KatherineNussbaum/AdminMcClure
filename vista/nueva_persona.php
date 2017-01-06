
<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPersona.php');
    require_once('../negocio/PersonaBO.php');


    // Agregar Nueva Persona
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'agregar' )
    {

        if( trim($_POST['nombre']) != null || trim($_POST['nombre']) != "")
        {
            $persona = new Persona();
            $persona->setRut($_POST['rut']);
            $persona->setNombre($_POST['nombre']);
            $persona->setFechaNacimiento($_POST['fechaNacimiento']);
            $persona->setGenero($_POST['genero']);

            $personaBO = new PersonaBO();
            $personaBO->setPersona($persona);
            $result = $personaBO->agregarPersona();

            if($result)
            {
                ?>
                    <script type="text/javascript" >
                        alert("La persona fue agregada exitosamente!");
                        window.location.href = "personas.php";
                    </script>
                <?php
            }
            else 
            {
                ?>
                    <script type="text/javascript" >
                        alert("Ocurrió un error. La persona no fue agregada!.");
                    </script>
                <?php 
            }
        }
        
    }
?>


<div class="container-fluid">
    <div class="row" id="seccion_opciones">
        <div class="col-xs-12">
            <h2>Personas</h2>
        </div>
    </div>
  <div class="row">
    <div class="col-xs-12">

        <form class="form" method="post" name="form_agregar_persona" onsubmit="val_form_agregar_persona()">
            <div class="form-group" >
                <input type="hidden" name="operacion" value="agregar">
                <div class="row">
                    <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                        <label for="exampleInputName2">Rut</label>
                        <input type="text" class="form-control" name="rut" placeholder="15555555-5">
                    </div>
                    
                    <div class="col-xs-7 col-sm-6 col-md-4 col-lg-3">
                        <label for="exampleInputName2">*Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="nombre cliente">
                    </div>

                    <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                        <label for="exampleInputName2">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacimiento" placeholder="01-01-1970">
                    </div>

                    <div class="col-xs-7 col-sm-6 col-md-3 col-lg-2">
                        <label for="exampleInputName2">Genero</label><br>
                        <div class="radio-inline">
                            <input type="radio" name="genero" id="mujer" value="M" > Mujer
                        </div>

                        <div class="radio-inline">
                            <input type="radio" name="genero" id="hombre" value="H" > Hombre
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-default">Agregar</button>
                    </div>

                </div>
            </div>
        </form>

        <form class="form" method="post" id="form_agregar_detalle_persona">

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
        function val_form_agregar_persona() {
            var nombre = document.forms["form_agregar_persona"]["nombre"].value.trim();

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