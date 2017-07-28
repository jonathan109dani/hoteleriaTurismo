<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>Cliente/guardarCliente" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Agregar Cliente</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <div class="form-group">
                    <label for="txt_nombre" class="col-xs-2 control-label">Nombre completo:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_nombre" name="txt_nombre"/>
                    </div>
                    <label for="txt_id" class="col-xs-2 control-label">ID:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm"  id="txt_id" name="txt_id"/>
                    </div>
                    <label for="txt_telefono" class="col-xs-2 control-label">Teléfono:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_telefono" name="txt_telefono"/>
                    </div>
                    <br><br><br>
                    <label for="txt_ingreso" class="col-xs-2 control-label">Ingreso:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_ingreso" name="txt_ingreso"/>
                    </div>
                    <label for="txt_estadia" class="col-xs-2 control-label">Estadia:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_estadia" name="txt_estadia"/>
                    </div>                    
                </div> 
                </br>                </br>

                <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Agregar Cliente" />
                </div>
            </div>
        </fieldset>
    </form>
</div>