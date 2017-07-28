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
            <th>ID</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        $mensaje="'¿Desea eliminar este factura?'";
        foreach ($this->listaFacturas as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['nombreCliente'];
            echo '</td>';
            echo '<td>';
            echo $value['habitacion'];
            echo '</td>';
            echo '<td>';
            echo $value['precio'];
            echo '</td>';
            echo '<td>';
            echo $value['numeroFactura'];
            echo '</td>';
            echo '<td class=text-center>';
            echo '<a class="btn-sm btn-primary" href="editarFactura/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarFactura/' . $value['id'] . '" onclick ="return confirm ('. $mensaje .')">Eliminar</a>';
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