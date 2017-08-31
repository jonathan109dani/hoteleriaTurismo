<?php

class Compra extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad2();
        $this->view->js = array('funcionario/js/jsFuncionario.js');
    }

    function agregarCompra() {
        $this->view->title = 'Compra';
        $this->view->render('header');
        $this->view->consultaHabitacionOcupada = $this->model->consultaHabitacionOcupada();
        $this->view->consultaProductos = $this->model->consultaProductos();
        $this->view->render('compras/agregarCompra');
        $this->view->render('footer');
    }

    function verFuncionarios() {
        $this->view->title = 'Funcionario';
        $this->view->render('header');
        $this->view->listaFuncionarios = $this->model->listaFuncionarios();
        $this->view->render('funcionario/verFuncionarios');
        $this->view->render('footer');
    }

    function guardarFuncionario() {
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_puesto'] = $_POST['txt_puesto'];
        $this->model->guardarFuncionario($datos);
        header("location: " . URL . "funcionario/verFuncionarios");
    }

    function editarFuncionario($id) {
        $this->view->title = 'Funcionario';
        $this->view->render('header');
        $this->view->datosFuncionario = $this->model->datosFuncionario($id);
        $this->view->render('funcionario/editarFuncionario');
        $this->view->render('footer');
    }

    function actualizarCompra() {
        $datos = array();
        $datos ['txt_numeroH'] = $_POST['txt_numeroH'];
        $datos ['txt_compra'] = $_POST['txt_compra'];
        $this->model->guardarProducto($datos);
        header("location: " . URL );
    }

    function eliminarFuncionario($id) {
        $this->view->title = 'Funcionario';
        $this->model->eliminarFuncionario($id);
        header("location: " . URL . "funcionario/verFuncionarios");
    }


}

?>
