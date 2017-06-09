<?php
class Funcionario extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarfuncionario(){
        $this->view->title = 'Funcionario'; 
        $this->view->render('header');
        $this->view->render('funcionario/agregarfuncionario');
        $this->view->render('footer');
    }
    
    function guardarFuncionario(){
        $datos = array();
        $datos ['txt_nombre'] = $_POST['txt_nombre'];
        $datos ['txt_id'] = $_POST['txt_id'];
        $datos ['txt_puesto'] = $_POST['txt_puesto'];
        $this->model->guardarFuncionario($datos);
    }
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
