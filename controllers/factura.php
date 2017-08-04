<?php
class Factura extends Controllers {
    function __construct(){
        parent::__construct();
    }
    function agregarfactura(){
        $this->view->title = 'Factura'; 
        $this->view->render('header');
        $this->view->consultaCliente=$this->model->consultaCliente();
        $this->view->render('factura/agregarfactura');
        $this->view->render('footer');
    }
    
    function verFacturas(){
        $this->view->title = 'Factura'; 
        $this->view->render('header');
        $this->view->listaFacturas = $this->model->listaFacturas();
        $this->view->render('factura/verFacturas');
        $this->view->render('footer');
    }
    
    function guardarFactura(){
        $datos = array();
        $datos ['txt_nombreCliente'] = $_POST['txt_nombreCliente'];
        $datos ['txt_habitacion'] = $_POST['txt_habitacion'];
        $datos ['txt_precio'] = $_POST['txt_precio'];
        $datos ['txt_numeroFactura'] = $_POST['txt_numeroFactura'];
        $this->model->guardarFactura($datos);
        header ("location: " . URL . "factura/verFacturas");
    }
    
    function editarFactura($id){
        $this->view->title = 'Factura'; 
        $this->view->render('header');
        $this->view->datosFactura = $this->model->datosFactura($id);
        $this->view->render('factura/editarFactura');
        $this->view->render('footer');
    }
    
    function actualizarFactura(){
        $datos = array();
        $datos ['txt_nombreCliente'] = $_POST['txt_nombreCliente'];
        $datos ['txt_habitacion'] = $_POST['txt_habitacion'];
        $datos ['txt_precio'] = $_POST['txt_precio'];
        $datos ['txt_numeroFactura'] = $_POST['txt_numeroFactura'];
        $this->model->actualizarFactura($datos);
        header ("location: " . URL . "factura/verFacturas");
    }
    
     function eliminarFactura($id){
        $this->view->title = 'Factura';
        $this->model->eliminarFactura($id);
        header ("location: " . URL . "factura/verFacturas");
    }
}
?>
