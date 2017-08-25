<?php
class HabitacionCliente extends Controllers {
    function __construct(){
        parent::__construct();
    }
    
    function verHabitacionCliente(){
        $this->view->title = 'Habitacion'; 
        $this->view->render('header');
        $this->view->listaHabitacion = $this->model->listaFuncionarios();
        $this->view->render('habitacion/verHabitacionCliente');
        $this->view->render('footer');
    }
    
}
?>
