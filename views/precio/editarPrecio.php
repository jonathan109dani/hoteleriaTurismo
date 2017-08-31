<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Precio</h1>
    <form id="MyForm" action="<?php echo URL; ?>precio/actualizarPrecio" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DE LA HABITACIÓN</legend>

            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                <label for="txt_tipo" class="col-xs-2 control-label">Tipo: </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_tipo" name="txt_tipo" value='<?php echo $this->datosTipoHabitacion[0]['descripcion']; ?>'disabled/>
                    <input type="hidden" id="txt_tipo" name="txt_tipo" value='<?php echo $this->datosTipoHabitacion[0]['descripcion']; ?>'/>

                </div>
                <label for="txt_precio" class="col-xs-2 control-label">Precio: </label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm"  id="txt_precio" name="txt_precio" value='<?php echo $this->datosTipoHabitacion[0]['precio']; ?>'/>
                </div>
                <label for="txt_moneda" class="col-xs-2 control-label">Moneda: </label>
                <div class="col-xs-2">

                    <select  class="form-control input-sm" name="txt_moneda" id="txt_piso"> 


                        <?php
                        foreach ($this->datosTipoHabitacion as $value) {

                            if ($value['moneda'] == $this->datosTipoHabitacion[0]['moneda'])
                                echo "selected";
                            ?> > <?php
                            echo $value['moneda'] . "</option>";
                            ?>
                            <option value="&#36;">Dolar</option>
                            <option value="&#8364;">Euro</option>
                            <option value="&#162;">Colón</option>
                            <option value="&#165;">Yen</option>
                            <option value="&#163;">Libra</option>
                            <?php
                        }
                        ?>
                    </select></div> 
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