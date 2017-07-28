<?php

Class Factura_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Factura
    public function guardarFactura($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE id = '" . $datos['txt_numeroFactura'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('factura', array(
                'nombreCliente' => $datos['txt_nombreCliente'],
                'habitacion' => $datos['txt_habitacion'],
                'precio' => $datos['txt_precio'],
                'numeroFactura' => $datos['txt_numeroFactura']));
            
        }
    }

    public function listaFacturas() {
        //ver Facturas
        $consultaFacturas = $this->db->select("SELECT * FROM factura ");
        return $consultaFacturas;
    }

    public function datosFactura($id) {
        $consultaExistenciaFactura = $this->db->select("SELECT * FROM factura "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaFactura != null) {
            return $consultaExistenciaFactura;
        } else {
           echo 'No se ha encontrado el factura';
            die; 
        }
    }

    public function actualizarFactura($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE id = '" . $datos['txt_numeroFactura'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
                
                $posData = array(
                'nombreCliente' => $datos['txt_nombreCliente'],
                'habitacion' => $datos['txt_habitacion'],
                'precio' => $datos['txt_precio'],
                'numeroFactura' => $datos['txt_numeroFactura']);

            $this->db->update('factura', $posData, "`id` = '{$datos['txt_numeroFactura']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;   
        }
    }
    
    public function eliminarFactura($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('factura', "`id` = '{$id}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;   
        }
    }
}

?>
