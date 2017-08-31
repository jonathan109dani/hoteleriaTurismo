<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br>
    <div class="col-xs-3">
        Búsqueda por identificación:
    </div>
    <div class="col-xs-1">
        <input type="text" class="input-sm validate[required]" name="tf_cedulaEstudiante" id="tf_cedulaEstudiante" />
    </div>
    <div class="col-xs-2">
        <input type="button" class="btn-sm btn-success" id="buscarEstudianteRatificar" value="Buscar" />
    </div>
    <br><br>
    <br>
    <table class="table table-condensed" id="tablaRatificar">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Funcionarios</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Puesto</th><?php if (Session::get('tipoUsuario') <= 1) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar esta compra?'";
        foreach ($this->listaFuncionarios as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['nombre'];
            echo '</td>';
            echo '<td>';
            echo $value['puesto'];
            echo '</td>';
            echo '<td class=text-center>';
            ?>
            <?php if (Session::get('tipoUsuario') <= 1) { ?>
                <?php
                echo '<a class="btn-sm btn-primary" href="editarCompra/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
                echo '<a class="btn-sm btn-warning" href="eliminarFuncionario/' . $value['id'] . '" onclick ="return confirm(' . $mensaje . ')">Eliminar</a>';
                ?>
            <?php } ?>
            <?php
            echo '</td>';
            echo '</tr>';
            $con++;
        }
        ?>
        <tr>
            <td colspan='6' class="lineaFin"></td>
        </tr>
        <tr>
            <td colspan='6'>Última línea</td>
        </tr>
    </table>
</center>