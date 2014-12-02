<?php
class admin_model extends CI_Model{
    private static $_tabla = "tb_admin";
    public function __construct() {
        parent::__construct();
    }
    public function login(stdClass $admin){
        $where = array("correo"=>$admin->correo,
                        "clave"=>  md5($admin->clave),
                        "status"=>1,
                        "tta_id"=>1);
        $this->db->where($where);
        $query = $this->db->get(self::$_tabla,1);
        if($query->num_rows>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function getAdmin(){
        $where = array(self::$_tabla.".tta_id"=>1,
                        "tb_tipo_admin.estado"=>1);
        $this->db->where($where);
        $this->db->join('tb_tipo_admin','tb_tipo_admin.id='.self::$_tabla.'.tta_id');
        $this->db->order_by('apellido');
        $query = $this->db->get(self::$_tabla);
        if($query->num_rows>0){
            return $query->result();
        }else{
            return null;
        }
    }
}
