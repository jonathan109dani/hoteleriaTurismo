<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br>
    <div class="col-xs-3">
        Búsqueda por tipo de habitación:
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
            <th colspan="6" class="nombreTabla text-center">Lista de Habitaciones</th>
        </tr>
        <tr>
            <th>Numero</th>
            <th>Piso</th>
            <th>Tipo</th>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar esta habitacion?'";
        foreach ($this->listaHabitacion as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['numero'];
            echo '</td>';
            echo '<td>';
            echo $value['piso'];
            echo '</td>';
            echo '<td>';
            if ($value['tipo'] == 1) {
                echo 'Sencilla';
            } elseif ($value['tipo'] == 2) {
                echo 'Doble';
            } elseif ($value['tipo'] == 3) {
                echo 'Triple';
            } elseif ($value['tipo'] == 4) {
                echo 'Quadruple';
            } elseif ($value['tipo'] == 5) {
                echo 'Presi';
            } elseif ($value['tipo'] == 6) {
                echo 'Jr Suit';
            } elseif ($value['tipo'] == 7) {
                echo 'Suit';
            }
            echo '</td>';
            echo '<td class=text-center>';
            ?>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <?php
                echo'<a class = "btn-sm btn-primary" href = "editarHabitacion/' . $value['numero'] . '">Editar</a>&nbsp &nbsp &nbsp';
                echo'<a class = "btn-sm btn-warning" href = "eliminarHabitacion/' . $value['numero'] . '" onclick = "return confirm('. $mensaje .')">Eliminar</a>';
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