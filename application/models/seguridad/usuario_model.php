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
    public function getUsuario($insert){
        if(is_object($insert)){
            if($insert->nombre!=""){
                $this->db->like('nombre', $insert->nombre); 
            }
            if($insert->apellidos!=""){
                $this->db->like('apellidos', $insert->apellidos); 
            }
            if($insert->nick!=""){
                $this->db->like('user', $insert->nick); 
            }
            if($insert->correo!=""){
                $this->db->like('correo', $insert->correo); 
            }
            if($insert->telefono!=""){
                $this->db->like('telefono', $insert->telefono); 
            }
        }elseif(is_numeric($insert)){
            $this->db->where('id', $insert);
        }
        $this->db->where('estado', 1);
        $this->db->order_by('apellidos');
        $query = $this->db->get(self::$tabla);
        if($query->num_rows>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function delete($id){
        $data = array("estado"=>0);
        $this->db->update(self::$tabla, $data, array('id' => $id));
    }
    public function editar($id, $update){
        $data = array();
        if(isset($update->nombre) && $update->nombre!=""){
            $data['nombre'] = $update->nombre;
        }
        if(isset($update->apellidos) && $update->apellidos!=""){
            $data['apellidos'] = $update->apellidos;
        }
        if(isset($update->correo) && $update->correo!=""){
            $data['correo'] = $update->correo;
        }
        if(isset($update->user) && $update->user!=""){
            $data['user'] = $update->user;
        }
        if(isset($update->telefono) && $update->telefono!=""){
            $data['telefono'] = $update->telefono;
        }
        $this->db->update(self::$tabla, $data, array('id' => $id));
    }
}
