<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Factura</h1>
    <form id="MyForm" action="<?php echo URL; ?>factura/actualizarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DE FACTURA</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_nombreCliente" class="col-xs-2 control-label">Cliente : </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_nombreCliente" name="txt_nombreCliente" value='<?php echo $this->datosFactura[0]['nombreCliente']; ?>'disabled/>
                    <input type="hidden" id="txt_habitacion" name="txt_nombreCliente" value='<?php echo $this->datosFactura[0]['nombreCliente']; ?>'/>   
                </div>
                <div class="form-group">

                    <label for="txt_habitacion" class="col-xs-2 control-label">Tipo Habitación:</label>
                    <div class="col-xs-2">
                        <input type="hidden" id="txt_habitacion" name="txt_habitacion" value='<?php echo $this->datosFactura[0]['habitacion']; ?>'/>   


                        <?php
                        foreach ($this->consultaTipoHabitacion as $value) {

                            if ($value['id'] == $this->datosFactura[0]['habitacion']) {
                                ?>
                                <input type="text" class=" form-control input-sm validate[required]"  id="txt_habitacion" name="txt_habitacion" value='<?php echo $value['descripcion']; ?>'disabled/>
                                <?php
                            }
                        }
                        ?>
                    </div>



                    <label for="txt_numeroFactura" class="col-xs-2 control-label">Numero Factura:</label>
                    <div class="col-xs-1">
                        <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'disabled/>
                        <input type="hidden" id="txt_habitacion" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'/>
                    </div> 
                </div> 
                <div class="form-group">
                    <label for="txt_numeroFactura" class="col-xs-2 control-label">Monto total:</label>
                    <div class="col-xs-2">
                        <?php
                        $fechaIngreso = (date(substr($this->consultaCliente[0]['ingreso'], 8, 2)));
                        $fechaSalida = (date(substr($this->consultaCliente[0]['estadia'], 8, 2)));
                        $dias = $fechaIngreso - $fechaSalida;
                        foreach ($this->consultaTipoHabitacion as $value) {

                            if ($value['id'] == $this->datosFactura[0]['habitacion']) {

                                $precio = $value['precio'];
                            }
                        }
                        $total = $dias * $precio;
                        ?>
                        <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo "$total" ?>'disabled/>
                    </div> 
                </div>    
                <br><br>
                <!--L25 Imprimir y Guardar (Formulario Hugo)-->
                <div class="form-group"> 
                    <div class="col-xs-12 text-center">
                        <input type="submit" class="btn btn-success" id="guardar" value="Cancelar" />
                    </div>
                </div>
        </fieldset>
    </form>
</div>