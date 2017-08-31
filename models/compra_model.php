<?php

Class Compra_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Funcionario
    public function guardarFuncionario($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM funcionario "
                . "WHERE id = '" . $datos['txt_id'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            echo 'Error...</br>Ya existe un funcionario con ese ID';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('funcionario', array(
                'id' => $datos['txt_id'],
                'nombre' => $datos['txt_nombre'],
                'puesto' => $datos['txt_puesto']));
        }
    }

    public function listaFuncionarios() {
        //ver Funcionarios
        $consultaFuncionarios = $this->db->select("SELECT * FROM funcionario ");
        return $consultaFuncionarios;
    }

    public function datosFuncionario($id) {
        $consultaExistenciaFuncionario = $this->db->select("SELECT * FROM funcionario "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaFuncionario != null) {
            return $consultaExistenciaFuncionario;
        } else {
            echo 'No se ha encontrado el funcionario';
            die;
        }
    }
        public function consultaHabitacionOcupada() {
        //ver Clientes
        $consultaTipo = $this->db->select("SELECT * FROM factura ");
        return $consultaTipo;
    }

    public function actualizarFuncionario($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM funcionario "
                . "WHERE id = '" . $datos['txt_id'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {

            $posData = array(
                'id' => $datos['txt_id'],
                'nombre' => $datos['txt_nombre'],
                'puesto' => $datos['txt_puesto']);

            $this->db->update('funcionario', $posData, "`id` = '{$datos['txt_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un funcionario con ese ID';
            die;
        }
    }
    
    public function guardarProducto($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
       
            $this->db->insert('productos_habitacion', array(
                'numeroHabitacion' => $datos['txt_numeroH'],
                'idProducto' => $datos['txt_compra']));
        
    }

    public function eliminarFuncionario($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM funcionario "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('funcionario', "`id` = '{$id}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un funcionario con ese ID';
            die;
        }
    }

     public function actualizarCompra($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM factura "
                . "WHERE numeroFactura = '" . $datos['txt_numeroH'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {

            $posData = array(
                'otros' => $datos['txt_compra']);

            $this->db->update('factura', $posData, "`numeroFactura` = '{$datos['txt_numeroH']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe una habitacion con ese numero';
            die;
        }
    }
    public function consultaProductos() {
        //ver Clientes
        $consultaTipo = $this->db->select("SELECT * FROM productos ");
        return $consultaTipo;
    }

}

?>
