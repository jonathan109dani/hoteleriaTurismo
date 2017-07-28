<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Cliente</h1>
    <form id="MyForm" action="<?php echo URL; ?>Cliente/actualizarCliente" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL CLIENTE</legend>
            
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                    <label for="txt_nombre" class="col-xs-2 control-label">Nombre Completo:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_nombre" name="txt_nombre" value='<?php echo $this->datosCliente[0]['nombre']; ?>'/>
                </div>
                <label for="txt_id" class="col-xs-2 control-label">ID:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm"  id="txt_id" name="txt_id" value='<?php echo $this->datosCliente[0]['id']; ?>' disabled/>
                    <input type="hidden" id="txt_id" name="txt_id" value='<?php echo $this->datosCliente[0]['id']; ?>'/>
                </div>
                <label for="txt_telefono" class="col-xs-2 control-label">Teléfono:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_telefono" name="txt_telefono" value='<?php echo $this->datosCliente[0]['telefono']; ?>'/>
                </div>
                <br><br><br>
                <label for="txt_ingreso" class="col-xs-2 control-label">Ingreso:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_ingreso" name="txt_ingreso" value='<?php echo $this->datosCliente[0]['ingreso']; ?>'/>
                </div>
                <label for="txt_estadia" class="col-xs-2 control-label">Estadia:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_estadia" name="txt_estadia" value='<?php echo $this->datosCliente[0]['estadia']; ?>'/>
                </div>
            </div> 
            <br><br>
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                </div>
            </div>
        </fieldset>
    </form>
</div>