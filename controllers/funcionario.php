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
        echo'Guardando funcionario...</br>';
        echo 'Nombre del funcionario: '.$_POST['txt_nombre'];
    }
    function run(){
        //llama a la funcion run() de login_model
        $this->model->run();
    }
}
?>
