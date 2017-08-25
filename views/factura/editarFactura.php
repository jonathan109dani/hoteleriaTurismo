<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Check out</h1>
    <form id="MyForm" action="<?php echo URL; ?>factura/actualizarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DE FACTURA</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_nombreCliente" class="col-xs-2 control-label">Cliente : </label>
                <div class="col-xs-2">
                    <select class="form-control input-sm" name="txt_nombreCliente" id="txt_nombreCliente">
                        <option value="">Seleccione...</option>
                        
                         <?php
                        foreach ($this->consultaCliente as $value) {
                            echo "<option value='" . $value['nombre'] . "' ";
                            if ($value['nombre'] == $this->datosFactura[0]['nombreCliente'])
                                echo "selected";
                            ?> > <?php
                            echo $value['nombre'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">

                    <label for="txt_habitacion" class="col-xs-2 control-label">Tipo Habitación:</label>
                    <div class="col-xs-2">
                        <select  class="form-control input-sm validate[required]" name="txt_habitacion" id="txt_habitacion"> 
                        <option value="">Seleccione...</option> 
                        
                        <?php
                        foreach ($this->consultaTipoHabitacion as $value) {
                            echo "<option value='" . $value['id'] . "' ";
                            if ($value['id'] == $this->datosFactura[0]['habitacion'])
                                echo "selected";
                            ?> > <?php
                            echo $value['descripcion'] . "</option>";
                        }
                        ?>
                    </select>
                    </div>
                    


                    <label for="txt_numeroFactura" class="col-xs-2 control-label">Numero Habitación:</label>
                    <div class="col-xs-1">
                        <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'disabled/>
                        <input type="hidden" id="txt_habitacion" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'/>
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