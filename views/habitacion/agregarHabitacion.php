<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>habitacion/guardarHabitacion" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Agregar Habitación</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <div class="form-group">
                    <label for="txt_numero" class="col-xs-2 control-label">Numero:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_numero" name="txt_numero"/>
                    </div>
                    <label for="txt_piso" class="col-xs-2 control-label">Piso:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm"  id="txt_piso" name="txt_piso"/>
                    </div>
                    <label for="txt_tipo" class="col-xs-2 control-label">Tipo:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_tipo" name="txt_tipo"/>
                    </div> 
                </div> 
                </br>                </br>

                <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Agregar Habitación" />
                </div>
            </div>
        </fieldset>
    </form>
</div>