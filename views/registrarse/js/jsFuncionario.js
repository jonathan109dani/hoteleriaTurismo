$(function ()
{   
    $mensaje = "'¿Desea eliminar este funcionario?'";
    $("#buscarEstudianteRatificar").click(function (event) {
        var idD = $("#tf_cedulaEstudiante").val();
        $.getJSON('buscarEstuRatif/' + idD, function (resulBusqueda) {
            if (jQuery.isEmptyObject(resulBusqueda)) {
                alert("Funcionario no encontrado, verifique el formato y número de identificación.\nEj: 204560789, 111220567.");
            } else {
                $("#tablaRatificar").empty();
                $('#tablaRatificar').append('<tr><td colspan="6" class="nombreTabla">Datos Funcionario</td></tr><tr><th>N°</th><th>Id</th><th>Nombre</th><th>Puesto</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAcción</th></tr>' +
                        '<tr><td>1</td>' +
                        '<td>' + resulBusqueda[0].id + '</td>' +
                        '<td>' + resulBusqueda[0].nombre + '</td>' +
                        '<td>' + resulBusqueda[0].puesto + '</td>' +
                        '<td><a class="btn-sm btn-primary" href="editarFuncionario/' + idD + '">Editar</a>&nbsp &nbsp <a class="btn-sm btn-warning" href="eliminarFuncionario/' + idD + '" onclick ="return confirm(' + $mensaje + ')">Eliminar</a></td>'+
                        '</tr>');
            }
        });
    });
});

