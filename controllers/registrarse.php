<?php

class Registrarse extends Controllers {

    function __construct() {
        parent::__construct();
        
        $this->view->js = array('funcionario/js/jsFuncionario.js');
    }

    function agregarUsuario() {
        $this->view->title = 'usuario';
        $this->view->render('header');
        $this->view->render('registrarse/agregarUsuario');
        $this->view->render('footer');
    }

    function verUsuario() {
        $this->view->title = 'Funcionario';
        $this->view->render('header');
        $this->view->listaFuncionarios = $this->model->listaUsuario();
        $this->view->render('funcionario/verFuncionarios');
        $this->view->render('footer');
    }

    function guardarUsuario() {
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_tipoUsuario'] = $_POST['txt_tipoUsuario'];
        $datos ['txt_contrasena'] = $_POST['txt_contrasena'];
        $datos ['txt_nombreUsuario'] = $_POST['txt_nombreUsuario'];
        $this->model->guardarUsuario($datos);
        header("location: " . URL . "login");
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
