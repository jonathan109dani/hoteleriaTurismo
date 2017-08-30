<?php

Class Habitacion_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Funcionario
    public function guardarHabitacion($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM habitacion "
                . "WHERE numero = '" . $datos['txt_numero'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            echo 'Error...</br>Ya existe una habitación con este numero';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('habitacion', array(
                'numero' => $datos['txt_numero'],
                'piso' => $datos['txt_piso'],
                'tipo' => $datos['txt_tipo']));
        }
    }

    public function listaFuncionarios() {
        //ver Funcionarios
        $consultaFuncionarios = $this->db->select("SELECT * FROM habitacion ");
        return $consultaFuncionarios;
    }

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
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM habitacion "
                . "WHERE numero = '" . $datos['txt_numero'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
                
                $posData = array(
                'numero' => $datos['txt_numero'],
                'piso' => $datos['txt_piso'],
                'tipo' => $datos['txt_tipo']);

            $this->db->update('habitacion', $posData, "`numero` = '{$datos['txt_numero']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe una habitacion con ese numero';
            die;   
        }
    }
    
    public function eliminarHabitacion($numero) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM habitacion "
                . "WHERE numero = '" . $numero . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('habitacion', "`numero` = '{$numero}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>No se elimino la habitacion';
            die;   
        }
    }
    
    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM habitacion "
                . "WHERE tipo LIKE '%". $ced_estudiante . "%'");
        echo json_encode($resultado);
    }

}

?>
