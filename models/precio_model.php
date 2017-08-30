<?php

Class Precio_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Funcionario




    public function datosHabitacion($numero) {
        $consultaExistenciaHabitacion = $this->db->select("SELECT * FROM habitacion "
                . "WHERE numero = " . $numero . " ");

        if ($consultaExistenciaHabitacion != null) {
            return $consultaExistenciaHabitacion;
        } else {
            echo 'No se ha encontrado la habitación';
            die;
        }
    }

    public function actualizarHabitacion($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM tipohabitacion "
                . "WHERE descripcion = '" . $datos['txt_tipo'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {

            $posData = array(
                'precio' => $datos['txt_precio'],
                'moneda' => $datos['txt_moneda']);

            $this->db->update('tipohabitacion', $posData, "`descripcion` = '{$datos['txt_tipo']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe una habitacion con ese numero';
            die;
        }
    }

    public function listaTipoHabitacion() {
        //ver Facturas
        $consultaFacturas = $this->db->select("SELECT * FROM tipohabitacion ");
        return $consultaFacturas;
    }
    
    public function datosTipoHabitacion($numeroFactura) {
        $consultaExistenciaFactura = $this->db->select("SELECT * FROM tipohabitacion "
                . "WHERE id = " . $numeroFactura . " ");

        if ($consultaExistenciaFactura != null) {
            return $consultaExistenciaFactura;
        } else {
            echo 'No se ha encontrado la factura';
            die;
        }
    }

}

?>
