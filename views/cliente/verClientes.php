<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Clientes</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>ID</th>
            <th>Telefono</th>
            <th>Ingreso</th>
            <th>Estadia</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
        $mensaje="'¿Desea eliminar este Cliente?'";
        foreach ($this->listaClientes as $lista => $value) {
            echo '<tr>';
            echo '<td>';
            echo $value['id'];
            echo '</td>';
            echo '<td>';
            echo $value['nombre'];
            echo '</td>';
            echo '<td>';
            echo $value['telefono'];
            echo '</td>';
            echo '<td>';
            echo $value['ingreso'];
            echo '</td>';
            echo '<td>';
            echo $value['estadia'];
            echo '</td>';
            echo '<td class=text-center>';
            echo '<a class="btn-sm btn-primary" href="editarCliente/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarCliente/' . $value['id'] . '" onclick ="return confirm ('. $mensaje .')">Eliminar</a>';
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