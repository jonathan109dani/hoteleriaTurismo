<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Check out</h1>
    <form id="MyForm" action="<?php echo URL; ?>factura/actualizarFactura" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS</legend>

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



                    <label for="txt_numeroFactura" class="col-xs-2 control-label">Numero Habitación:</label>
                    <div class="col-xs-1">
                        <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'disabled/>
                        <input type="hidden" id="txt_habitacion" name="txt_numeroFactura" value='<?php echo $this->datosFactura[0]['numeroFactura']; ?>'/>
                    </div> 
                </div> 
                <div class="form-group">
                    <label for="txt_numeroFactura" class="col-xs-2 control-label">Monto total:</label>
                    <div class="col-xs-2">
                        <?php
                        $fechaIngreso = new DateTime($this->consultaCliente[0]['ingreso']);
                        $fechaSalida = new DateTime($this->consultaCliente[0]['estadia']);
                        $dias = $fechaIngreso->diff($fechaSalida);
                        $diferenciaDias = (int)$dias->format('%R%a');
                        foreach ($this->consultaTipoHabitacion as $value) {

                            if ($value['id'] == $this->datosFactura[0]['habitacion']) {

                                $precio = $value['precio'];
                            }
                        }
                        $total = $diferenciaDias * $precio;
                        $total=$total+($total*0.13);
                        $total=$total+($total*0.16);
                        ?>
                        <input type="text" class=" form-control input-sm validate[required]"  id="txt_numeroFactura" name="txt_numeroFactura" value='<?php echo "$total" ?>'disabled/>
                        
                    </div> 
                    <label for="txt_tarjeta" class="col-xs-2 control-label">Número de tarjeta : </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_tarjeta" name="txt_tarjeta" value='<?php echo $this->consultaCliente[0]['tarjeta']; ?>'disabled/>
                    <input type="hidden" id="txt_habitacion" name="txt_tarjeta" value='<?php echo $this->consultaCliente[0]['tarjeta']; ?>'/> 
                </div>    
                <br><br>
                <!--L25 Imprimir y Guardar (Formulario Hugo)-->
                <div class="form-group"> 
                    <div class="col-xs-12 text-center">
                        <!--<input type="submit" class="btn btn-success" id="guardar" value="Check out" />-->
                        <?php
                        $mensaje = "'¿Desea realizar pago?'";
                        foreach ($this->listaFacturas as $lista => $value) {
                            if($value['numeroFactura']==$this->datosFactura[0]['numeroFactura']){
                            echo '<a class="btn-sm btn-success" href="' .  URL .'factura/eliminarFactura/' . $value['numeroFactura'] . '" onclick ="return confirm(' . $mensaje . ')">Check out</a>&nbsp &nbsp &nbsp';
                            
                            }
                            
                            }
                        ?>
                    </div>
                </div>
        </fieldset>
    </form>
</div>