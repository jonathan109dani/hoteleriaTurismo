<?php

Class HabitacionCliente_Model extends Models {

    public function __construct() {
        parent::__construct();
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
}

?>
