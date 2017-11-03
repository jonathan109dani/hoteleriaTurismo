<?php

Class Registrarse_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Usuario
    public function guardarUsuario($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM usuario "
                . "WHERE nombreUsuario = '" . $datos['txt_nombreUsuario'] . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            echo 'Error...</br>Ya existe un usuario con ese ID';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('usuario', array(
                'password' => $datos['txt_contrasena'],
                'nombreUsuario' => $datos['txt_nombreUsuario'],
                'nombre' => $datos['txt_nombre'],
                'tipoUsuario' => $datos['txt_tipoUsuario']));
        }
    }

    public function listaUsuarios() {
        //ver Funcionarios
        $consultaUsuarios = $this->db->select("SELECT * FROM usuario ");
        return $consultaUsuarios;
    }

    public function datosUsuario($id) {
        $consultaExistenciaUsuario = $this->db->select("SELECT * FROM usuario "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaUsuario != null) {
            return $consultaExistenciaUsuario;
        } else {
            echo 'No se ha encontrado el Usuario';
            die;
        }
    }

    public function actualizarUsuario($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM usuario "
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

    public function eliminarFuncionario($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciaPreMatricula = $this->db->select("SELECT * FROM usuario "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciaPreMatricula != null) {
            $this->db->delete('usuario', "`id` = '{$id}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un usuario con ese ID';
            die;
        }
    }

    public function buscarEstuRatif($ced_estudiante) {
        $resultado = $this->db->select("SELECT * "
                . "FROM funcionario "
                . "WHERE id = '" . $ced_estudiante . "'");
        echo json_encode($resultado);
    }

}

?>
