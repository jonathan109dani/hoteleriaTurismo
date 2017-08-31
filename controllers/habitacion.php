<?php

class Habitacion extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad2();
        $this->view->js = array('habitacion/js/jsHabitacion.js');
    }

    function agregarHabitacion() {
        $this->view->title = 'Habitacion';
        $this->view->render('header');
        $this->view->render('habitacion/agregarHabitacion');
        $this->view->render('footer');
    }

    function verHabitacion() {
        $this->view->title = 'Habitacion';
        $this->view->render('header');
        $this->view->listaHabitacion = $this->model->listaFuncionarios();
        $this->view->render('habitacion/verHabitacion');
        $this->view->render('footer');
    }

    function guardarHabitacion() {
        $datos = array();
        $datos ['txt_numero'] = $_POST['txt_numero'];
        $datos ['txt_piso'] = $_POST['txt_piso'];
        $datos ['txt_tipo'] = $_POST['txt_tipo'];
        $this->model->guardarHabitacion($datos);
        header("location: " . URL . "habitacion/verHabitacion");
    }

    function editarHabitacion($numero) {
        $this->view->title = 'Habitacion';
        $this->view->render('header');
        $this->view->datosHabitacion = $this->model->datosHabitacion($numero);
        $this->view->listaHabitaciones = $this->model->listaHabitaciones();
        $this->view->render('habitacion/editarHabitacion');
        $this->view->render('footer');
    }

    function actualizarHabitacion() {
        $datos = array();
        $datos ['txt_numero'] = $_POST['txt_numero'];
        $datos ['txt_piso'] = $_POST['txt_piso'];
        $datos ['txt_tipo'] = $_POST['txt_tipo'];
        $this->model->actualizarHabitacion($datos);
        header("location: " . URL . "habitacion/verHabitacion");
    }

    function eliminarHabitacion($numero) {
        $this->view->title = 'Habitacion';
        $this->model->eliminarHabitacion($numero);
        header("location: " . URL . "habitacion/verHabitacion");
    }

    function buscarEstuRatif($ced_estudiante) {
        $this->model->buscarEstuRatif($ced_estudiante);
    }
}

?>
