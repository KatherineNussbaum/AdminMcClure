<?php
 // Agregar Teléfono

    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'agregarTelefono' )
    {
        if( trim($_POST['numero']) != null || trim($_POST['numero']) != "")
        {
            ?>
            <script type="text/javascript">
                window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
            </script>
            
            <?php
            $telefono = new Telefono();
            $telefono->setNumero($_POST['numero']);
            $telefono->setIdPersona($_POST['idPersonaTelefono']);

            $telefonoBO = new TelefonoBO();
            $telefonoBO->setTelefono($telefono);
            $result = $telefonoBO->agregarTelefono();
        }
    }

     // Agregar Email
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'agregarEmail' )
    {
        if( trim($_POST['correo']) != null || trim($_POST['correo']) != "")
        {
            $email = new Email();
            $email->setCorreo($_POST['correo']);
            $email->setIdPersona($_POST['idPersonaEmail']);

            $emailBO = new EmailBO();
            $emailBO->setEmail($email);
            $result = $emailBO->agregarEmail();
        }
    }
        

    // Agregar Direccion
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'agregarDireccion' )
    {
        if( trim($_POST['calle']) != null || trim($_POST['calle']) != "")
        {
            $direccion = new Direccion();
            $direccion->setCalle($_POST['calle']);
            $direccion->setIdComuna($_POST['idComuna']);
            
            $direccionBO = new DireccionBO();
            $direccionBO->setDireccion($direccion);
            $result = $direccionBO->agregarDireccion();

            $direccionBO = new DireccionBO();
            $direccionGurdada = $direccionBO->buscarUltimo();

            if( !empty($direccionGurdada))
            {
                $idDireccion = $direccionGurdada->getId();

                $personaDireccion = new PersonaDireccion();
                $personaDireccion->setIdPersona($_POST['idPersonaDireccion']);
                $personaDireccion->setIdDireccion($idDireccion);
                $personaDireccion->setIdTipoDireccion( $_POST['idTipoDireccion']);

                $personaDireccionBO = new PersonaDireccionBO();

                $personaDireccionBO->setPersonaDireccion($personaDireccion);
                $personaDireccionBO->agregarPersonaDireccion();

                ?>
            <script type="text/javascript">
                window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
            </script>
            
            <?php
            }
        }
    }

    // Agregar Tipo de Persona
    if( isset($_REQUEST['operacion'])  && $_REQUEST['operacion'] == 'agregarTipoPersona' )
    {
        if( isset($_POST['idPersona']) != null || trim($_POST['idPersona']) || isset($_POST['idPersonaTipo']) != null || trim($_POST['idPersonaTipo']) )
        {
            $personaTipo = new PersonaTipo();
            $personaTipo->setIdPersona($_POST['idPersona']);
            $personaTipo->setIdTipoPersona($_POST['idPersonaTipo']);

            $resultado = existePersonaTipo(trim($_POST['idPersona']), trim($_POST['idPersonaTipo']));
            if($resultado)
            {
                ?>
                <script type="text/javascript">
                    alert("El tipo de persona ya se encuentra asignada a esta persona!");
                </script>
            <?php
            }
            else
            {
                $personaTipoBO = new PersonaTipoBO();
                $personaTipoBO->setPersonaTipo($personaTipo);
                $result = $personaTipoBO->agregarPersonaTipo();
            }
        }
    }

    // Agregar Interes Cliente
    if(isset($_REQUEST['operacion'])  && $_REQUEST['operacion'] == 'agregarInteres' )
    {
    	if(isset($_POST['busca']) != null && isset($_POST['idPersonaInteres']) )
    	{
    		$interes = new Interes();
    		$interes->setFechaIngreso($_POST['fechaIngreso']);
    		$interes->setBusca($_POST['busca']);
    		$interes->setReferencia($_POST['referencia']);
    		$interes->setIdPersona($_POST['idPersonaInteres']);

    		$interesBO = new InteresBO();
    		$interesBO->setInteres($interes);
    		$result = $interesBO->agregarInteres();
    	}


    }

    // Eliminar Teléfono  
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminarTelefono' )
    {
        $id             = $_GET['id'];
        $idTelefono     = $_GET['idTelefono'];
        $telefonoBO     = new TelefonoBO();
        $return         = $telefonoBO->eliminarTelefono($idTelefono);
            ?>
                <script type="text/javascript">
                    window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
                </script>
            <?php
    }


    // Eliminar Email
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminarEmail' )
    {
        $id          = $_GET['id'];
        $idEmail     = $_GET['idEmail'];
        $emailBO     = new EmailBO();
        $return      = $emailBO->eliminarEmail($idEmail);
            ?>
                <script type="text/javascript">
                    window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
                </script>
            <?php
    }


    // Eliminar Direccion
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminarDireccion' )
    {
        $id                 = $_GET['id'];
        $idDireccion        = $_GET['idDireccion'];
        $personaDireccionBO = new PersonaDireccionBO();
        $return             = $personaDireccionBO->eliminarDireccion($idDireccion);

        ?>
            <script type="text/javascript">
                window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
            </script>
            
            <?php
    }

    // Eliminar Interes
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminarInteres')
    {
        $id = $_GET['id'];
        $idInteres = $_GET['idInteres'];
        $interesBO =  new InteresBO();
        $return = $interesBO->eliminarInteres($idInteres);
        ?>
            <script type="text/javascript">
                window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
            </script>
        <?php
    } 

    // Eliminar PersonaTipo
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'eliminarTipo')
    {
        $id = $_GET['id'];
        $idPersonaTipo = $_GET['idPersonaTipo'];
        $personaTipoBO =  new PersonaTipoBO();
        $return = $personaTipoBO->eliminarPersonaTipo($idPersonaTipo);
        ?>
            <script type="text/javascript">
                window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
            </script>
        <?php
    } 


    // Modificar Persona
    if( isset($_REQUEST['operacion']) && $_REQUEST['operacion'] == 'modificarPersona' )
    {
        $id = $_POST['idPersonaModificar'];

        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $genero = $_POST['genero'];

        $persona = new Persona();
        $persona->setId($id);
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setFechaNacimiento($fechaNacimiento);
        $persona->setGenero($genero);

        $personaBO = new PersonaBO();
        $personaBO->setPersona($persona);
        $result = $personaBO->modificarPersona();

        if($result)
            {
                ?>
                    <script type="text/javascript" >
                        alert("La persona fue modificado exitosamente!");
                        //window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
                    </script>
                <?php
            }
            else 
            {
                ?>
                    <script type="text/javascript" >
                        alert("Ocurrió un error. La persona no fue modificado!.");
                        //window.location.href = "datos_contacto_persona.php?operacion=modificar&id="+id;
                    </script>
                <?php 
            }
    }

    

	// Existe Combinacion Persona - Tipo
    function existePersonaTipo($idPersona, $idTipoPersona)
    {
            $personaTipoBO = new PersonaTipoBO();
            $result = $personaTipoBO->existePersonaTipo($idPersona, $idTipoPersona);
            return $result;
    }

    // Es cliente
    function esCliente($idPersona)
    {
        $personaTipoBO = new PersonaTipoBO();
        $result = $personaTipoBO->esCliente($idPersona);
        return $result;
    }

    




    if( isset($_GET['id']) )
    {
        $personaBO = new PersonaBO();
        $result = $personaBO->buscarPersona( $_GET['id'] );

        if( !empty($result))
        {
            $id = $result->getId();
            $rut = $result->getRut();
            $nombre = $result->getNombre();
            $fechaNacimiento = $result->getFechaNacimiento();
            $genero = $result->getGenero();
        }
    }
?>