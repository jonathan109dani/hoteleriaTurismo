<?php

Class Factura_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Factura
    public function guardarFactura($datos) {

        //Sino Inserto datos de Pre-Matricula del Estudiante
        $this->db->insert('factura', array(
            'nombreCliente' => $datos['txt_nombreCliente'],
            'habitacion' => $datos['txt_tipo'],
            'numeroFactura' => $datos['txt_numeroFactura'],
            'ingreso' => $datos['txt_ingreso'],
            'estadia' => $datos['txt_estadia']));
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

    public function consultaNuHabitacion() {
        //ver Clientes
        $consultaNuHabitacion = $this->db->select("SELECT * FROM habitacion ");
        return $consultaNuHabitacion;
    }

    public function consultaTipoHabitacion() {
        //ver Clientes
        $consultaTipo = $this->db->select("SELECT * FROM tipohabitacion ");
        return $consultaTipo;
    }

    public function consultaProductos_habitacion() {
        //ver Clientes
        $consultaTipo = $this->db->select("SELECT * FROM productos_habitacion ");
        return $consultaTipo;
    }

    public function consultaProductos() {
        //ver Clientes
        $consultaTipo = $this->db->select("SELECT * FROM productos ");
        return $consultaTipo;
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
                'numeroFactura' => $datos['txt_numeroFactura'],
                'ingreso' => $datos['txt_ingreso'],
                'estadia' => $datos['txt_estadia']);

            $this->db->update('factura', $posData, "`numeroFactura` = '{$datos['txt_numeroFactura']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;
        }
    }

    public function actualizarHabitacion($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM habitacion "
                . "WHERE numero = '" . $datos['txt_numeroFactura'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $num = 1;
            $posData = array(
                'Estado' => $num);

            $this->db->update('habitacion', $posData, "`numero` = '{$datos['txt_numero']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe una habitacion con ese numero';
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
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM productos_habitacion "
                . "WHERE numeroHabitacion = '" . $numeroFactura . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('productos_habitacion', "`numeroHabitacion` = '{$numeroFactura}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un factura con ese ID';
            die;
        }
        
    }

    public function buscarHabitacionesLibres() {
        $resultado = $this->db->select("SELECT numero "
                . "FROM habitacion "
                . "WHERE numero NOT IN (SELECT numeroFactura FROM factura) ");
        return $resultado;
    }

}

?>
