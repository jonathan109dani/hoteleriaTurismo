<?php
//print_r($this->estadoMatricula);
//die;
?>
<center>
    <table class="table table-condensed">
        <tr>
            <th colspan="6" class="nombreTabla text-center">Lista de Funcionarios</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th colspan="2" class="text-center">Acción</th>
        </tr>
        <?php
        $con = 1;
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
            echo '<a class="btn-sm btn-primary" href="editarFuncionario/' . $value['id'] . '">Editar</a>&nbsp &nbsp &nbsp';
            echo '<a class="btn-sm btn-warning" href="eliminarFuncionario/' . $value['id'] . '">Eliminar</a>';
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