<?php

class Factura extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad2();
        $this->view->js = array('factura/js/jsFactura.js', 'factura/js/jsFactura.js');
    }

    function agregarfactura() {
        $this->view->title = 'Factura';
        $this->view->render('header');
        $this->view->consultaCliente = $this->model->consultaCliente();
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->consultaNuHabitacion = $this->model->consultaNuHabitacion();
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->buscarHabitacionesLibres = $this->model->buscarHabitacionesLibres();
        $this->view->render('factura/agregarfactura');
        $this->view->render('footer');
    }

    function verFacturas() {
        $this->view->title = 'Factura';
        $this->view->render('header');
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->render('factura/verFacturas');
        $this->view->render('footer');
    }

    function guardarFactura() {
        $datos = array();
        $datos ['txt_nombreCliente'] = $_POST['txt_nombreCliente'];
        $datos ['txt_tipo'] = $_POST['txt_tipo'];
        $datos ['txt_numeroFactura'] = $_POST['txt_numeroFactura'];
        $datos ['txt_ingreso'] = $_POST['txt_ingreso'];
        $datos ['txt_estadia'] = $_POST['txt_estadia'];

        $fechaIngreso = new DateTime($datos['txt_ingreso']);
        $fechaSalida = new DateTime($datos['txt_estadia']);

        $dias = $fechaIngreso->diff($fechaSalida);

        $diferenciaDias = (int) $dias->format('%R%a');
        if ($diferenciaDias >= 1) {
            $this->model->guardarFactura($datos);
            header("location: " . URL . "factura/verFacturas");
        } else {
            $this->view->title = 'Factura';
            $this->view->render('header');
            $this->view->render('error/errorFechas');
            $this->view->render('footer');
        }
    }

    function editarFactura($id) {
        $this->view->title = 'Factura';
        $this->view->render('header');
        $this->view->datosFactura = $this->model->datosFactura($id);
        $this->view->consultaCliente = $this->model->consultaCliente($id);
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->render('factura/editarFactura');
        $this->view->render('footer');
    }

    function cancelarFactura($id) {
        $this->view->title = 'Factura';
        $this->view->render('header');
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->datosFactura = $this->model->datosFactura($id);
        $this->view->consultaCliente = $this->model->consultaCliente($id);
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->consultaProductos_habitacion = $this->model->consultaProductos_habitacion();
        $this->view->consultaProductos = $this->model->consultaProductos();
        $this->view->render('factura/cancelarFactura');
        $this->view->render('footer');
    }

    function actualizarFactura() {
        $datos = array();
        $datos ['txt_nombreCliente'] = $_POST['txt_nombreCliente'];
        $datos ['txt_habitacion'] = $_POST['txt_habitacion'];
        $datos ['txt_precio'] = $_POST['txt_precio'];
        $datos ['txt_numeroFactura'] = $_POST['txt_numeroFactura'];
        $datos ['txt_ingreso'] = $_POST['txt_ingreso'];
        $datos ['txt_estadia'] = $_POST['txt_estadia'];
        $this->model->actualizarFactura($datos);
        header("location: " . URL . "factura/verFacturas");
    }

    function eliminarFactura($id) {
        $this->view->title = 'Factura';
        $this->model->eliminarFactura($id);
        header("location: " . URL . "factura/verFacturas");
    }

}

?>
