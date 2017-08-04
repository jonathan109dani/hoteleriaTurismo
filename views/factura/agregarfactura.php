<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>factura/guardarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Agregar Factura</legend>
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_nombreCliente" class="col-xs-2 control-label">Cliente : </label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="txt_nombreCliente" id="txt_nombreCliente">
                        <option value="0">Seleccione Cliente</option>
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

            </div> 
            </br>                </br>

            <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Agregar factura" />
                </div>
            </div>
        </fieldset>
    </form>
</div>