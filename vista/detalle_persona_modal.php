<div class="modal fade" id="nuevo_telefono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form class="form" method="post" name="form_agregar_telefono" onsubmit="val_form_agregar_telefono()">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Teléfono</h4>
          </div>
          <div class="modal-body">
                    <input type="hidden" name="operacion" value="agregarTelefono">
                    <input type="hidden" name="idPersonaTelefono" value="<?php echo $id; ?>">
                    <label>Teléfono:</label>
                    <input type="phone" name="numero">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
  </form>
</div>


<div class="modal fade" id="nuevo_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form class="form" method="post" name="form_agregar_email" onsubmit="val_form_agregar_email()">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Email</h4>
          </div>
          <div class="modal-body">
                    <input type="hidden" name="operacion" value="agregarEmail">
                    <input type="hidden" name="idPersonaEmail" value="<?php echo $id; ?>">
                    <label>Email:</label>
                    <input type="email" name="correo">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
  </form>
</div>


<div class="modal fade" id="nueva_direccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form class="form" method="post" name="form_agregar_direccion" onsubmit="val_form_agregar_direccion()">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Direccion</h4>
          </div>
          <div class="modal-body">
                    <input type="hidden" name="operacion" value="agregarDireccion">
                    <input type="hidden" name="idPersonaDireccion" value="<?php echo $id; ?>">
                    <label>Calle:</label>
                    <input type="text" name="calle"><br/>
                    <label>Comuna:</label>
                    <select name="idComuna">
                        <?php
                            $comunaBO = new ComunaBO();
                            $comunaBO->listarComuna($id);
                        ?>
                    </select><br />
                    <label>Tipo de Dirección:</label>
                    <select name="idTipoDireccion">
                            <?php
                                $tipoDireccionBO = new TipoDireccionBO();
                                $tipoDireccionBO->listarTipoDireccion();
                            ?>
                    </select>
                    

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
  </form>
</div>

<div class="modal fade" id="nuevo_tipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form class="form" method="post" name="form_agregar_tipo" onsubmit="val_form_agregar_tipo()">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Tipo de Persona</h4>
          </div>
          <div class="modal-body">
                    <input type="hidden" name="operacion" value="agregarTipoPersona">
                    <input type="hidden" name="idPersona" value="<?php echo $id; ?>">

                    <label>Tipo de Persona:</label>
                    <select name="idPersonaTipo">
                        <?php
                            $tipoPersonaBO = new TipoPersonaBO();
                            $tipoPersonaBO->listarTipoPersona();
                        ?>
                    </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
  </form>
</div>

<div class="modal fade" id="nuevo_interes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form class="form" method="post" name="form_agregar_interes" onsubmit="val_form_agregar_interes()">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Interes</h4>
          </div>
          <div class="modal-body">
                    <input type="hidden" name="operacion" value="agregarInteres">
                    <input type="hidden" name="idPersonaInteres" value="<?php echo $id; ?>">

                    <label>Fecha Ingreso:</label>
                    <input type="date" name="fechaIngreso"><br>

                    <label>Busca:</label>
                    <textarea id="busca" name="busca"></textarea><br>

                    <label>Referencia:</label>
                    <textarea id="referencia" name="referencia"></textarea><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
  </form>
</div>