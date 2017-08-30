$(function ()
{
    $mensaje = "'¿Desea eliminar esta habitacion?'";
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Habitacion no encontrada.");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><td colspan="6" class="nombreTabla">Datos Habitación</td></tr><tr><th>N°</th><th>Numero</th><th>Piso</th><th>Tipo</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAcción</th></tr>');
                for (var i = 0; i < resulBusqueda.length; i++) {
                    $('#tablaRatificar').append('<tr><td>'+(i+1)+'</td>' +
                            '<td>' + resulBusqueda[i].numero + '</td>' +
                            '<td>' + resulBusqueda[i].piso + '</td>' +
                            '<td>' + resulBusqueda[i].tipo + '</td>' +
                            '<td><a class="btn-sm btn-primary" href="editarHabitacion/' + resulBusqueda[i].numero + '">Editar</a>&nbsp &nbsp<a class="btn-sm btn-warning" href="eliminarHabitacion/' + resulBusqueda[i].numero + '" onclick ="return confirm(' + $mensaje + ')">Eliminar</a></td>' +
                            '</tr>');
                }
            }
        });
    });
});

