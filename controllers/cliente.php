<?php

class Cliente extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad2();
        $this->view->js = array('cliente/js/jsCliente.js', 'cliente/js/jsCliente.js');
    }

    function agregarCliente() {
        $this->view->title = 'Cliente';
        $this->view->render('header');
        $this->view->render('cliente/agregarCliente');
        $this->view->render('footer');
    }

    function verClientes() {
        $this->view->title = 'Cliente';
        $this->view->render('header');
        $this->view->listaClientes = $this->model->listaClientes();
        $this->view->render('cliente/verClientes');
        $this->view->render('footer');
    }

    function guardarCliente() {

        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_telefono'] = $_POST['txt_telefono'];
        $datos ['txt_tarjeta'] = $_POST['txt_tarjeta'];
        $this->model->guardarCliente($datos);
        header("location: " . URL . "cliente/verClientes");
    }

    function editarCliente($id) {
        $this->view->title = 'Cliente';
        $this->view->render('header');
        $this->view->datosCliente = $this->model->datosCliente($id);
        $this->view->render('cliente/editarCliente');
        $this->view->render('footer');
    }

    function actualizarCliente() {
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_telefono'] = $_POST['txt_telefono'];
        $datos ['txt_tarjeta'] = $_POST['txt_tarjeta'];
        $this->model->actualizarCliente($datos);
        header("location: " . URL . "cliente/verClientes");
    }

    function eliminarCliente($id) {
        $this->view->title = 'Cliente';
        $this->model->eliminarCliente($id);
        header("location: " . URL . "cliente/verClientes");
    }

}

?>
