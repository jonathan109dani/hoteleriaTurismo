<?php
Class Funcionario_Model extends Models{
    
    public function __construct() 
    {
        parent::__construct();
    }
    //Inserto Funcionario
    public function guardarFuncionario($datos){
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
}

?>
