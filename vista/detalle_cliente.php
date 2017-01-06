<div class="row">
    <div class="col-lg-6 seccion_detalle_cliente">
       	<h4>Interes</h4>
       	<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#nuevo_interes">Agregar Interes </button>
       	<table id="tblInteres" class="display" width="100%">
                <thead>
                        <tr>
                            <td>ID</td>
                            <td>FECHA INGRESO</td>
                            <td>BUSCA</td>
                            <td>REFERENCIA</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $interesBO = new InteresBO();
                        $interesBO->listarInteres($id);
                    ?>
                    </tbody>
            </table>
    </div>
</div>