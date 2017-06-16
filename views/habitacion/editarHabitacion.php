<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Habitacion</h1>
    <form id="MyForm" action="<?php echo URL; ?>habitacion/actualizarHabitacion" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DE LA HABITACIÓN</legend>
            
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                    <label for="txt_numero" class="col-xs-2 control-label">Numero de habitacion: </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_numero" name="txt_numero" value='<?php echo $this->datosHabitacion[0]['numero']; ?>'disabled/>
                    <input type="hidden" id="txt_numero" name="txt_numero" value='<?php echo $this->datosHabitacion[0]['numero']; ?>'/>
                </div>
                <label for="txt_piso" class="col-xs-2 control-label">Piso: </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm"  id="txt_piso" name="txt_piso" value='<?php echo $this->datosHabitacion[0]['piso']; ?>' disabled/>
                    <input type="hidden" id="txt_piso" name="txt_piso" value='<?php echo $this->datosHabitacion[0]['piso']; ?>'/>
                </div>
                <label for="txt_tipo" class="col-xs-2 control-label">Tipo: </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_tipo" name="txt_tipo" value='<?php echo $this->datosHabitacion[0]['tipo']; ?>'/>
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