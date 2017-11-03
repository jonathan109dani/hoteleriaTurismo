<?php
//print_r($this->especialidadEstudiante);
//die;
?>
<div class="row">
    <form id="MyForm" action="<?php echo URL; ?>registrarse/guardarUsuario" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
            <legend class="text-center">Registrate</legend>
                <!--L2 Nombre Estudiante (Formulario Hugo)-->
                <div class="form-group">
                    <label for="txt_nombre" class="col-xs-2 control-label">Nombre:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_nombre" name="txt_nombre"/>
                    </div>
                    <label for="txt_nombreUsuario" class="col-xs-2 control-label">Nombre Usuario:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_nombreUsuario" name="txt_nombreUsuario"/>
                    </div>
                    <label for="txt_contrasena" class="col-xs-2 control-label">Contraseña:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm"  id="txt_contrasena" name="txt_contrasena"/>
                    </div>
                    <label for="txt_tipoUsuario" class="col-xs-2 control-label">Tipo de Usuario:</label>
                    <div class="col-xs-2">
                        <input type="text" class="form-control input-sm validate[required]"  id="txt_tipoUsuario" name="txt_tipoUsuario"/>
                    </div> 
                </div> 
                </br>                </br>

                <!--L3 Fecha Nacimiento (Formulario Hugo)-->
            <!--L25 Imprimir y Guardar (Formulario Hugo)-->
            <div class="form-group"> 
                <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-primary" id="guardar" value="Registrarse" />
                </div>
            </div>
        </fieldset>
    </form>
</div>