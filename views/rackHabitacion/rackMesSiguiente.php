<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <br>

    <table class="table table-condensed" id="tablaRatificar">
        <tr>
            <th colspan="30" class="nombreTabla text-center">Lista de Habitaciones</th>
        </tr>
        <tr>
            <th colspan="30"> <?php echo $this->mesActual->format('F'); ?></th>
        </tr>
        <tr>
            <th>#</th>
            <?php
            for ($i = 1; $i <= $this->mesActual->format('t'); $i++) {
                ?>
                <th><?php echo $i; ?></th>
                <?php
            }
            ?>
        </tr>
        <?php
        foreach ($this->consultaNuHabitacion as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['numero'];
            echo '</td>';
            for ($i = 1; $i <= $this->mesActual->format('t'); $i++) {
                echo '<td>';
                foreach ($this->listaFacturas as $factura) {
                    if ($factura['numeroFactura'] == $value['numero']) {
                        $fechaIngreso = new DateTime($factura['ingreso']);
                        $fechaSalida = new DateTime($factura['estadia']);
//                        echo $fechaIngreso->format('n');
//                        echo $this->mesActual->format('n');
//                        die;
                        if($fechaIngreso->format('n')==$this->mesActual->format('n')){
                        if ($i >= (int)$fechaIngreso->format('d') && ($i < (int)$fechaSalida->format('d')|| $fechaSalida->format('n')>$this->mesActual->format('n') )) {
                            $diasEstancia = $fechaIngreso->diff($fechaSalida);
                            $diferenciaDiasEstancia = (int) $diasEstancia->format('%R%a');

                            $diasFechaActual = $this->mesActual->diff($fechaIngreso);
                            $diferenciaDiasActual = (int) $diasFechaActual->format('%R%a');
                            //echo $diferenciaDiasEstancia;
                            if ($i >= 0 && $diferenciaDiasActual < $i) {
                                echo 'X';
                            }
                        }
                        }
                    }
                }
                echo '</td>';
            }
            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan="30" class="lineaFin"></td>
        </tr>
        <tr>
            <td colspan="30">Última línea</td>
        </tr>
    </table>
               
    <a class="btn-sm btn-primary" href="<?php echo URL; ?>rackHabitacion/rackMensual">Anterior</a>
  
</center>