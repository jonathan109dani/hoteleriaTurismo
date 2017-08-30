<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br>

    <br>
    <table class="table table-condensed" id="tablaRatificar">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Habitaciones</th>
        </tr>
        <tr>
            <th>Descripcion</th>
            <th>Moneda</th>
            <th>Precio</th>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar esta habitacion?'";
        foreach ($this->listaTipoHabitacion as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['descripcion'];
            echo '</td>';
            echo '<td>';
            echo $value['moneda'];
            echo '</td>';
            echo '<td>';
            echo $value['precio'];
            echo '</td>';
            echo '<td class=text-center>';
            ?>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <?php
                echo'<a class = "btn-sm btn-primary" href = "editarPrecio/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
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