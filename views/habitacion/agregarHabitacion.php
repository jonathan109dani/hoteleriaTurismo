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
                        <select  class="form-control input-sm" name="txt_piso" id="txt_piso"> 
                            <option value="0">Seleccione...</option> 
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <label for="txt_tipo" class="col-xs-2 control-label">Tipo:</label>
                    <div class="col-xs-2">
                        <select  class="form-control input-sm" name="txt_tipo" id="txt_tipo"> 
                            <option value="0">Seleccione...</option> 
                            <option value="Sencilla">Sencilla</option>
                            <option value="Doble">Doble</option>
                            <option value="Triple">Triple</option>
                            <option value="Quadruple">Quadruple</option>
                            <option value="Presi">Presi</option>
                            <option value="Jr Suit">Jr Suit</option>
                            <option value="Suit">Suit</option>
                        </select>
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