<?php

class Funcionario extends Controllers {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Auth::nivelDeSeguridad();
        $this->view->js = array('funcionario/js/jsFuncionario.js');
    }

    function agregarfuncionario() {
        $this->view->title = 'Funcionario';
        $this->view->render('header');
        $this->view->render('funcionario/agregarfuncionario');
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

    function actualizarFuncionario() {
        $datos = array();
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_puesto'] = $_POST['txt_puesto'];
        $this->model->actualizarFuncionario($datos);
        header("location: " . URL . "funcionario/verFuncionarios");
    }

    function eliminarFuncionario($id) {
        $this->view->title = 'Funcionario';
        $this->model->eliminarFuncionario($id);
        header("location: " . URL . "funcionario/verFuncionarios");
    }

    function buscarEstuRatif($ced_estudiante) {
        $this->model->buscarEstuRatif($ced_estudiante);
    }

}

?>
