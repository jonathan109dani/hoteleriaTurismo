<?php

Class Factura_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Factura
    public function guardarFactura($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE numeroFactura = '" . $datos['txt_numeroFactura'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('factura', array(
                'nombreCliente' => $datos['txt_nombreCliente'],
                'habitacion' => $datos['txt_tipo']));
            
        }
    }

    public function listaFacturas() {
        //ver Facturas
        $consultaFacturas = $this->db->select("SELECT * FROM factura ");
        return $consultaFacturas;
    }
    public function consultaCliente() {
        //ver Clientes
        $consultaCliente = $this->db->select("SELECT * FROM cliente ");
        return $consultaCliente;
    }


    public function datosFactura($numeroFactura) {
        $consultaExistenciaFactura = $this->db->select("SELECT * FROM factura "
                . "WHERE numeroFactura = " . $numeroFactura . " ");

        if ($consultaExistenciaFactura != null) {
            return $consultaExistenciaFactura;
        } else {
           echo 'No se ha encontrado la factura';
            die; 
        }
    }

    public function actualizarFactura($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE numeroFactura = '" . $datos['txt_numeroFactura'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
                
                $posData = array(
                'nombreCliente' => $datos['txt_nombreCliente'],
                'habitacion' => $datos['txt_habitacion'],
                'precio' => $datos['txt_precio'],
                'numeroFactura' => $datos['txt_numeroFactura']);

            $this->db->update('factura', $posData, "`numeroFactura` = '{$datos['txt_numeroFactura']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;   
        }
    }
    
    public function eliminarFactura($numeroFactura) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE numeroFactura = '" . $numeroFactura . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('factura', "`numeroFactura` = '{$numeroFactura}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;   
        }
    }
}

?>
