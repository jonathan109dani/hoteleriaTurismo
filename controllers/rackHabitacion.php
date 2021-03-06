<?php

class RackHabitacion extends Controllers {

    //Cuando se crea el constructor se verifica si inicio sesion y si tiene permiso
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->title = 'Estadisticas de los Estudiantes';

        //Se manda a ejecutar el header, contenido principal (views/horario/index) y el footer
        $this->view->render('header');
        $this->view->render('estadistica/index');
        $this->view->render('footer');
    }

    public function rackMensual() {
        $this->view->title = 'Rack Mensual';
        //Se manda a ejecutar el header, contenido principal (views/horario/index) y el footer
        $this->view->render('header');
        $fechaActual = new DateTime();
//        print_r($fechaActual->format('n'));
//        die;
        $this->view->mesActual = $fechaActual;
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->consultaNuHabitacion = $this->model->consultaNuHabitacion();
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->buscarHabitacionesLibres = $this->model->buscarHabitacionesLibres();
        $this->view->render('rackHabitacion/rackMensual');
        $this->view->render('footer');
    }
    
    public function rackMesAnterior() {
        $this->view->title = 'Rack Mensual';
        //Se manda a ejecutar el header, contenido principal (views/horario/index) y el footer
        $this->view->render('header');
        $fechaActual = new DateTime();
//        print_r($fechaActual->format('n'));
//        die;
        $fechaActual->modify('-1 month');
        $this->view->mesActual = $fechaActual;
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->consultaNuHabitacion = $this->model->consultaNuHabitacion();
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->buscarHabitacionesLibres = $this->model->buscarHabitacionesLibres();
        $this->view->render('rackHabitacion/rackMesAnterior');
        $this->view->render('footer');
    }
    
    public function rackMesSiguiente() {
        $this->view->title = 'Rack Mensual';
        //Se manda a ejecutar el header, contenido principal (views/horario/index) y el footer
        $this->view->render('header');
        $fechaActual = new DateTime();
//        print_r($fechaActual->format('n'));
//        die;
        $fechaActual->modify('+1 month');
        $this->view->mesActual = $fechaActual;
        $this->view->consultaTipoHabitacion = $this->model->consultaTipoHabitacion();
        $this->view->consultaNuHabitacion = $this->model->consultaNuHabitacion();
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->buscarHabitacionesLibres = $this->model->buscarHabitacionesLibres();
        $this->view->render('rackHabitacion/rackMesSiguiente');
        $this->view->render('footer');
    }

}
