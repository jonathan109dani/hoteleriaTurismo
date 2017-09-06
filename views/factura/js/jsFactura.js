/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '<Ant',
    nextText: 'Sig>',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['es']);

$(function ()
{
    //Fecha Nacimiento//
    $("#txt_ingreso").datepicker({dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
    //Fecha Vence Poliza//
    $("#txt_estadia").datepicker({dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });


    $("#txt_tipo").change(function () {
        $("#txt_numeroFactura").empty();
        var nivelSeleccionado = $("#txt_tipo").val();
        $.getJSON('../factura/cargaHabitaciones/' + nivelSeleccionado, function (Gru) {
            $('#txt_numeroFactura').append('<option value="">Seleccione</option>');
            for (var iP = 0; iP < Gru.length; iP++) {
                $("#txt_numeroFactura").append('<option value="' + Gru[iP].numero + '">' + Gru[iP].numero + '</option>');
            }
        });
    });
});


