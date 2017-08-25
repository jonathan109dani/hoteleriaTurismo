<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>factura/guardarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Check In</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_nombreCliente" class="col-xs-2 control-label">Cliente : </label>
                <div class="col-xs-2">
                    <select class="form-control input-sm validate[required]" name="txt_nombreCliente" id="txt_nombreCliente">
                        <option value="">Seleccione Cliente</option>
                        <?php
                        foreach ($this->consultaCliente as $value) {
                            echo "<option value='" . $value['nombre'] . "'>";
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <label for="txt_tipo" class="col-xs-2 control-label">Tipo:</label>
                <div class="col-xs-2">
                    <select  class="form-control input-sm validate[required]" name="txt_tipo" id="txt_tipo"> 
                        <option value="">Seleccione...</option> 
                        <?php
                        foreach ($this->consultaTipoHabitacion as $value) {
                            echo "<option value='" . $value['id'] . "'>";
                            echo $value['descripcion'] . "</option>";
                        }
                        ?>
                    </select>
                </div> 

                <label for="txt_numeroFactura" class="col-xs-2 control-label">Numero Habitación:</label>
                <div class="col-xs-2">
                    <select  class="form-control input-sm validate[required]" name="txt_numeroFactura" id="txt_numeroFactura"> 
                        <option value="">Seleccione...</option> 
                        <?php
                        foreach ($this->consultaNuHabitacion as $value) {
                            
                                    echo "<option value='" . $value['numero'] . "'>";
                                    echo $value['numero'] . "</option>";   
                            
                        }
                        ?>
                    </select>
                </div> 
            </div>

            </div> 
            </br>                </br>

            <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Check In" />
                </div>
            </div>
        </fieldset>
    </form>
</div>