<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br>

    <table class="table table-condensed" id="tablaRatificar">
        <tr>
            <th colspan="3" class="nombreTabla text-center">Lista de Habitaciones</th>
        </tr>
        <tr>
            <th></th>
            <th colspan="3"> <?php echo $this->mesActual['month']; ?></th>
        </tr>
        <tr>
            <th>#</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
        <?php
        foreach ($this->consultaNuHabitacion as $lista => $value) {
            echo '<tr>';

            echo '<td>';
            echo $value['numero'];
            echo '</td>';

            echo '<td>';
            foreach ($this->listaFacturas as $factura) {
                if ($factura['numeroFactura'] == $value['numero']) {
                    $fechaIngreso = strtotime($factura['ingreso']);
                    $mes = date("m", $fechaIngreso);
                    if ($mes == $this->mesActual['mon']) {
                        $dia = date("d", $fechaIngreso);
                        if($dia == 1){
                        echo 'Ocu';
                        }
                    }
                }
            }
            echo '</td>';

            echo '<td>';    
            echo '</td>';

            echo '<td>';
            echo '</td>';

            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan='3' class="lineaFin"></td>
        </tr>
        <tr>
            <td colspan='3'>Última línea</td>
        </tr>
    </table>
</center>