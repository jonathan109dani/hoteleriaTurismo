<?php

class RackHabitacion_Model extends Models {

    //El constructor invoca al padre que esta en "libs/Model", este posee una variable llamada "db" con el acceso a la BD
    //db es un objeto "Database" y posee las siguientes funciones: select, insert, update y delete
    public function __construct() {
        parent::__construct();
    }

    public function listaFacturas() {
        //ver Facturas
        $consultaFacturas = $this->db->select("SELECT * FROM factura ");
        return $consultaFacturas;
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

    public function buscarHabitacionesLibres() {
        $resultado = $this->db->select("SELECT numero "
                . "FROM habitacion "
                . "WHERE numero NOT IN (SELECT numeroFactura FROM factura) ");
        return $resultado;
    }
}
