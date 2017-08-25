<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Habitaciones</th>
        </tr>
        <tr>
            <th>Numero</th>
            <th>Piso</th>
            <th>Tipo</th>

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
            echo $value['tipo'];
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