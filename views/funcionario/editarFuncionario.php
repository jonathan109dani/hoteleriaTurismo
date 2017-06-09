<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <h1>Editar Funcionario</h1>
    <form id="MyForm" action="<?php echo URL; ?>funcionario/actualizarFuncionario" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">DATOS DEL FUNCIONARIO</legend>
            
            <!--L2 Nombre Estudiante (Formulario Hugo)-->
            <div class="form-group">
                    <label for="txt_nombre" class="col-xs-2 control-label">Nombre Completo:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_nombre" name="txt_nombre" value='<?php echo $this->datosFuncionario[0]['nombre']; ?>'/>
                </div>
                <label for="txt_id" class="col-xs-2 control-label">ID:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm"  id="txt_id" name="txt_id" value='<?php echo $this->datosFuncionario[0]['id']; ?>'/>
                </div>
                <label for="txt_puesto" class="col-xs-2 control-label">Puesto:</label>
                <div class="col-xs-2">
                    <input type="text" class=" form-control input-sm validate[required]"  id="txt_puesto" name="txt_puesto" value='<?php echo $this->datosFuncionario[0]['puesto']; ?>'/>
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