<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Factura</h1>
    <form id="MyForm" action="<?php echo URL; ?>factura/actualizarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL FUNCIONARIO</legend>
            
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                    <label for="txt_nombreCliente" class="col-xs-2 control-label">nombre Cliente:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_nombreCliente" name="txt_nombreCliente" value='<?php echo $this->datosFactura[0]['nombreCliente']; ?>'/>
                </div>
                <label for="txt_habitacion" class="col-xs-2 control-label">habitacion:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm"  id="txt_habitacion" name="txt_habitacion" value='<?php echo $this->datosFactura[0]['habitacion']; ?>' disabled/>
                    <input type="hidden" id="txt_habitacion" name="txt_habitacion" value='<?php echo $this->datosFactura[0]['habitacion']; ?>'/>
                </div>
                <label for="txt_precio" class="col-xs-2 control-label">precio:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_precio" name="txt_precio" value='<?php echo $this->datosFactura[0]['precio']; ?>'/>
                </div> 
                <label for="txt_numeroFactura" class="col-xs-2 control-label">numero Factura:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'/>
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