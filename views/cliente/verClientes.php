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
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Tarjeta de Credito</th>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <th colspan="2" class="text-center">Acción</th>
            <?php } ?>
        </tr>
        <?php
        $con = 1;
        $mensaje = "'¿Desea eliminar este Cliente?'";
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
            echo $value['tarjeta'];
            echo '</td>';
            echo '<td class=text-center>';
            ?>
            <?php if (Session::get('tipoUsuario') <= 2) { ?>
                <?php
                echo '<a class="btn-sm btn-primary" href="editarCliente/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
                echo '<a class="btn-sm btn-warning" href="eliminarCliente/' . $value['id'] . '" onclick ="return confirm(' . $mensaje . ')">Eliminar</a>';
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