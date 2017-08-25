<?php

Class Cliente_Model extends Models {

    public function __construct() {
        parent::__construct();
    }

    //Inserto Cliente
    public function guardarCliente($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciacliente = $this->db->select("SELECT * FROM cliente "
                . "WHERE id = '" . $datos['txt_id'] . "' ");

        if ($consultaExistenciacliente != null) {
            echo 'Error...</br>Ya existe un cliente con ese ID';
            die;
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante

            $this->db->insert('cliente', array(
                'id' => $datos['txt_id'],
                'nombre' => $datos['txt_nombre'],
                'telefono' => $datos['txt_telefono'],
                'ingreso' => $datos['txt_ingreso'],
                'estadia' => $datos['txt_estadia'],
                'tarjeta' => $datos['txt_tarjeta']));
        }
    }

    public function listaClientes() {
        //ver Clientes
        $consultaClientes = $this->db->select("SELECT * FROM cliente ");
        return $consultaClientes;
    }

    public function datosCliente($id) {
        $consultaExistenciaCliente = $this->db->select("SELECT * FROM cliente "
                . "WHERE id = " . $id . " ");

        if ($consultaExistenciaCliente != null) {
            return $consultaExistenciaCliente;
        } else {
            echo 'No se ha encontrado el cliente';
            die;
        }
    }

    public function actualizarCliente($datos) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciacliente = $this->db->select("SELECT * FROM cliente "
                . "WHERE id = '" . $datos['txt_id'] . "' ");

        if ($consultaExistenciacliente != null) {

            $posData = array(
                'id' => $datos['txt_id'],
                'nombre' => $datos['txt_nombre'],
                'telefono' => $datos['txt_telefono'],
                'ingreso' => $datos['txt_ingreso'],
                'estadia' => $datos['txt_estadia'],
                'tarjeta' => $datos['txt_tarjeta']);

            $this->db->update('cliente', $posData, "`id` = '{$datos['txt_id']}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un cliente con ese ID';
            die;
        }
        
    }

    public function eliminarCliente($id) {
        //Guardo los datos en Pre-Matricula, luego hay que ratificar para que consolide la matricula
        $consultaExistenciacliente = $this->db->select("SELECT * FROM cliente "
                . "WHERE id = '" . $id . "' ");

        if ($consultaExistenciacliente != null) {
            $this->db->delete('cliente', "`id` = '{$id}'");
        } else {
            //Sino Inserto datos de Pre-Matricula del Estudiante
            echo 'Error...</br>Ya existe un cliente con ese ID';
            die;
        }
    }

}

?>
