<?php
class Cliente extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarCliente(){
        $this->view->title = 'Cliente'; 
        $this->view->render('header');
        $this->view->render('cliente/agregarCliente');
        $this->view->render('footer');
    }
    
    function verCliente(){
        $this->view->title = 'Cliente'; 
        $this->view->render('header');
        $this->view->listaClientes = $this->model->listaClientes();
        $this->view->render('cliente/verCliente');
        $this->view->render('footer');
    }
    
    function guardarCliente(){
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_telefono'] = $_POST['txt_telefono'];
        $datos ['txt_ingreso'] = $_POST['txt_ingreso'];
        $datos ['txt_estadia'] = $_POST['txt_estadia'];
        $this->model->guardarCliente($datos);
        header ("location: " . URL . "cliente/guardarCliente");
    }
    
    function editarCliente($id){
        $this->view->title = 'Cliente'; 
        $this->view->render('header');
        $this->view->datosCliente = $this->model->datosCliente($id);
        $this->view->render('cliente/editarCliente');
        $this->view->render('footer');
    }
    
    function actualizarCliente(){
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_telefono'] = $_POST['txt_telefono'];
        $datos ['txt_ingreso'] = $_POST['txt_ingreso'];
        $datos ['txt_estadia'] = $_POST['txt_estadia'];
        $this->model->actualizarCliente($datos);
        header ("location: " . URL . "Cliente/actualizarCliente");
    }
    
     function eliminarCliente($id){
        $this->view->title = 'Cliente';
        $this->model->eliminarFuncionario($id);
        header ("location: " . URL . "cliente/eliminarCliente");
    }
}
?>
