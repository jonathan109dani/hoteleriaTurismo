<?php

class Precio extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad2();
        $this->view->js = array('habitacion/js/jsHabitacion.js');
    }

    function verPrecio() {
        $this->view->title = 'Habitacion';
        $this->view->render('header');
        $this->view->listaTipoHabitacion = $this->model->listaTipoHabitacion();
        $this->view->render('precio/verPrecio');
        $this->view->render('footer');
    }

    function editarPrecio($id) {
        $this->view->title = 'Precio';
        $this->view->render('header');
        $this->view->listaTipoHabitacion = $this->model->listaTipoHabitacion();
        $this->view->datosTipoHabitacion = $this->model->datosTipoHabitacion($id);
        $this->view->render('precio/editarPrecio');
        $this->view->render('footer');
    }

    function actualizarPrecio() {
        $datos = array();
        $datos ['txt_tipo'] = $_POST['txt_tipo'];
        $datos ['txt_precio'] = $_POST['txt_precio'];
        $datos ['txt_moneda'] = $_POST['txt_moneda'];
        $this->model->actualizarHabitacion($datos);
        header("location: " . URL . "precio/verPrecio");
    }

}

?>
