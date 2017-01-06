<?php
    require_once('header.php');
    require_once('menu.php');
    require_once('../entidades/ClassPersona.php');
    require_once('../entidades/ClassTelefono.php');
    require_once('../entidades/ClassEmail.php');
    require_once('../entidades/ClassComuna.php');
    require_once('../entidades/ClassDireccion.php');
    require_once('../entidades/ClassTipoDireccion.php');
    require_once('../entidades/ClassPersonaDireccion.php');
    require_once('../entidades/ClassPersonaTipo.php');
    require_once('../entidades/ClassTipoPersona.php');
    require_once('../entidades/ClassInteres.php');

    require_once('../negocio/PersonaBO.php');
    require_once('../negocio/TelefonoBO.php');
    require_once('../negocio/EmailBO.php');
    require_once('../negocio/ComunaBO.php');
    require_once('../negocio/DireccionBO.php');
    require_once('../negocio/TipoDireccionBO.php');
    require_once('../negocio/PersonaDireccionBO.php');
    require_once('../negocio/PersonaTipoBO.php');
    require_once('../negocio/TipoPersonaBO.php');
    require_once('../negocio/InteresBO.php');

    // Funciones 
    require_once("detalle_persona_funciones.php");
?>


<div class="container-fluid">
    <div class="row" id="seccion_opciones">
        <div class="col-xs-12">
            <h2>Datos de Contacto</h2>
        </div>
    </div>
  <div class="row">
    <div class="col-xs-12 persona_mod">

        <form class="form" method="post" name="form_modificar_persona" onsubmit="val_form_modificar_persona()">
            <input type="hidden" name="operacion" value="modificarPersona">
            <input type="hidden" name="idPersonaModificar" value="<?php echo $id; ?>">
                <div class="row">
                    <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                        <label for="exampleInputName2">Rut</label>
                        <input type="text" class="form-control" name="rut" value="<?php echo $rut; ?>">
                    </div>
                    
                    <div class="col-xs-7 col-sm-6 col-md-4 col-lg-3">
                        <label for="exampleInputName2">*Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
                    </div>

                    <div class="col-xs-5 col-sm-3 col-md-2 col-lg-2">
                        <label for="exampleInputName2">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>">
                    </div>

                    <div class="col-xs-7 col-sm-6 col-md-3 col-lg-2">
                        <label for="exampleInputName2">Genero</label><br>
                        <div class="radio-inline">
                            <input type="radio" name="genero" id="mujer" value="M"
                            <?php
                                if($genero == "M" || $genero == "m")
                                {
                                    echo "checked";
                                }
                            ?>
                            > Mujer
                        </div>

                        <div class="radio-inline">
                            <input type="radio" name="genero" id="hombre" value="H"
                            <?php
                                if($genero == "H" || $genero == "h")
                                {
                                    echo "checked";
                                }
                            ?>
                            > Hombre
                        </div>
                    </div>

                    <div class="col-lg-1"><button type="submit" class="btn btn-default">Guardar</button></div>
                </div>
        </form>

    </div>

<div class="row">

    <div class="col-lg-2 seccion_datos_persona">
        <h4>Teléfonos</h4>
        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#nuevo_telefono">Agregar Teléfono </button>
        <table id="tblTelefono" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NUMERO</td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $telefonoBO = new TelefonoBO();
                $telefonoBO->listarTelefono($id);
            ?>
            </tbody>
        </table>
    </div>

    <div class="col-lg-3 seccion_datos_persona">
        <h4 >Emails</h4>
        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#nuevo_email">Agregar Email </button>
        <table id="tblEmail" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>EMAIL</td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $emailBO = new EmailBO();
                $emailBO->listarEmail($id);
            ?>
            </tbody>
        </table>
    </div>

    <div class="col-lg-5 seccion_datos_persona">
        <h4>Direcciones</h4>
        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#nueva_direccion">Agregar Dirección </button>
        <table id="tblDireccion" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>CALLE</td>
                    <td>COMUNA</td>
                    <td>TIPO DIRECCIÓN</td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $personaDireccionBO = new PersonaDireccionBO();
                $personaDireccionBO->listarPorPersona($id);
            ?>
            </tbody>
        </table>
    </div>

    </div>

    <div class="row">
        <div class="col-lg-3 seccion_datos_tipo_persona">
            <h4>Tipo de Persona</h4>
            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#nuevo_tipo">Agregar Tipo</button>
            <table id="tblTipoPersona" class="display" width="100%">
                <thead>
                        <tr>
                            <td>ID</td>
                            <td>TIPO DE PERSONA</td>
                            <td>ACCIONES</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $personaTipoBO = new PersonaTipoBO();
                        $personaTipoBO->listarPersona($id);
                    ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    /// Detalles según tipo de persona
    if(esCliente($_GET['id']))
    {
        require_once("detalle_cliente.php");
    }
?>

<?php
    // Cajas Modales
    require_once("detalle_persona_modal.php");
?>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery 3.1.1.js" type="text/javascript" ></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/datatable.js" type="text/javascript" ></script>

    <script type="text/javascript">
        function val_form_agregar_telefono() {
            var numero = document.forms["form_agregar_telefono"]["numero"].value.trim();

            if (numero == null || numero == ""){
                return false;
            }
            else{

                return true;
            }
        };

        function val_form_agregar_email() {
            var correo = document.forms["form_agregar_email"]["correo"].value.trim();

            if (correo == null || correo == ""){
                return false;
            }
            else{

                return true;
            }
        };

        function val_form_agregar_direccion() {
            var calle = document.forms["form_agregar_direccion"]["calle"].value.trim();

            if (calle == null || calle == ""){
                return false;
            }
            else
            {
                return true;
            }
        };

        function val_form_modificar_persona()
        {
            var nombre = document.forms["form_modificar_persona"]["nombre"].value.trim();

            if(nombre == null || nombre == "")
            {
                return false;
            }
            else
            {
                return true;
            }
        };

        function val_form_agregar_tipo()
        {
            var personaTipo = document.forms["form_agregar_tipo"]["idPersonaTipo"].value.trim();

            if(personaTipo == null || personaTipo == "")
            {
                return false;
            }
            else
            {
                return true;
            }
        };

        function val_form_agregar_interes()
        {
            var busca = document.forms["form_agregar_interes"]["busca"].value.trim();

            if(busca == null || busca == "")
            {
                return false;
            }
            else
            {
                return true;
            }
        };

        function eliminarTelefono(idTelefono, id) 
        {
            window.location.href = "datos_contacto_persona.php?operacion=eliminarTelefono&idTelefono="+idTelefono + "&id=" +id;
        };

        function eliminarEmail( idEmail, id ) 
        {

            window.location.href = "datos_contacto_persona.php?operacion=eliminarEmail&idEmail="+idEmail + "&id=" +id;
        };

        function eliminarDireccion( idDireccion, id) 
        {
            window.location.href = "datos_contacto_persona.php?operacion=eliminarDireccion&idDireccion="+idDireccion + "&id=" +id;
        };

        function eliminarTipo( idTipo, id) 
        {
            window.location.href = "datos_contacto_persona.php?operacion=eliminarTipo&idPersonaTipo="+idTipo + "&id=" +id;
        };

        function eliminarInteres( idInteres, id) 
        {
            window.location.href = "datos_contacto_persona.php?operacion=eliminarInteres&idInteres="+idInteres+"&id="+id;
        };
    </script>
</body>
</html>