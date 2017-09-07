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

    

    function actualizarCompra() {
        $datos = array();
        $datos ['txt_numeroH'] = $_POST['txt_numeroH'];
        $datos ['txt_compra'] = $_POST['txt_compra'];
        $this->model->guardarProducto($datos);
        header("location: " . URL );
    }




}

?>
