<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>compra/actualizarCompra" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Agregar Compra</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <div class="form-group">
                <label for="txt_numeroH" class="col-xs-2 control-label">Numero Habitación:</label>
                <div class="col-xs-2">
                    <select  class="form-control input-sm validate[required]" name="txt_numeroH" id="txt_numeroH"> 
                        <option value="">Seleccione...</option> 
                        <?php
                        foreach ($this->consultaHabitacionOcupada as $value) {
                            
                                    echo "<option value='" . $value['numeroFactura'] . "'>";
                                    echo $value['numeroFactura'] . "</option>";   
                            
                        }
                        ?>
                    </select>
                </div> 
                    <label for="txt_compra" class="col-xs-2 control-label">Lista de Compras:</label>
                    <div class="col-xs-2">
                        <select  class="form-control input-sm" name="txt_compra" id="txt_compra"> 
                            <option value="">Seleccione...</option> 
                            <?php
                        foreach ($this->consultaProductos as $value) {
                            
                                    echo "<option value='" . $value['id'] . "'>";
                                    echo $value['descripcion'] . "</option>";   
                            
                        }
                        ?>
                        </select>
                    </div>
                </div> 
                </br>                </br>

                <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Agregar compra" />
                </div>
            </div>
        </fieldset>
    </form>
</div>