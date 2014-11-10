<?php
class usuario_model extends CI_Model{
    private static $tabla = 'tb_user';
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function login(stdClass $user){
        $where = array("correo"=>$user->correo,
                        "pass"=>$user->clave);
        $this->db->where($where);
        $query = $this->db->get(self::$tabla,1);
        if($query->num_rows>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function insert(stdClass $insertar){
        $insert = array("correo" => $insertar->email,
                        "pass"=>$insertar->pass,
                        "colegio"=>$insertar->colegio,
                        "telefono"=>$insertar->telefono,
                        "user"=>$insertar->user,
                        "nombre"=>$insertar->nombre,
                        "apellidos"=>$insertar->apellido);
        $query = $this->db->insert(self::$tabla, $insert);
        if($query){
            $id = $this->db->insert_id();
        }else{
            $id = 0;
        }
        return $id;
    }
}
