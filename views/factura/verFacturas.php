<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Facturas</th>
        </tr>
        <tr>
            <th>Nombre Cliente</th>
            <th>Tipo de Habitación</th>
            <th>Precio</th>
            <th>Número de Habiración</th>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>

        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar esta factura?'";
        foreach ($this->listaFacturas as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['nombreCliente'];
            echo '</td>';
            echo '<td>';
            if ($value['habitacion'] == 1) {
                echo 'Sencilla';
            } elseif ($value['habitacion'] == 2) {
                echo 'Doble';
            } elseif ($value['habitacion'] == 3) {
                echo 'Triple';
            } elseif ($value['habitacion'] == 4) {
                echo 'Quadruple';
            } elseif ($value['habitacion'] == 5) {
                echo 'Presi';
            } elseif ($value['habitacion'] == 6) {
                echo 'Jr Suit';
            } elseif ($value['habitacion'] == 7) {
                echo 'Suit';
            }
            echo '</td>';
            echo '<td>';
            if ($value['habitacion'] == 1) {
                echo $this->consultaTipoHabitacion[0]['precio'];
            } elseif ($value['habitacion'] == 2) {
                echo $this->consultaTipoHabitacion[1]['precio'];
            } elseif ($value['habitacion'] == 3) {
                echo $this->consultaTipoHabitacion[2]['precio'];
            } elseif ($value['habitacion'] == 4) {
                echo $this->consultaTipoHabitacion[3]['precio'];
            } elseif ($value['habitacion'] == 5) {
                echo $this->consultaTipoHabitacion[4]['precio'];
            } elseif ($value['habitacion'] == 6) {
                echo $this->consultaTipoHabitacion[5]['precio'];
            } elseif ($value['habitacion'] == 7) {
                echo $this->consultaTipoHabitacion[6]['precio'];
            }
//            echo $value['precio'];
            echo '</td>';
            echo '<td>';
            echo $value['numeroFactura'];
            echo '</td>';
            echo '<td class=text-center>';
            ?>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <?php
                echo '<a class="btn-sm btn-primary" href="editarFactura/' . $value['numeroFactura'] . '">Editar</a>&nbsp &nbsp &nbsp';
                echo '<a class="btn-sm btn-warning" href="eliminarFactura/' . $value['numeroFactura'] . '" onclick ="return confirm(' . $mensaje . ')">Eliminar</a>&nbsp &nbsp &nbsp';
                echo '<a class="btn-sm btn-success" href="cancelarFactura/' . $value['numeroFactura'] . '">Check out</a>&nbsp &nbsp &nbsp';
                
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