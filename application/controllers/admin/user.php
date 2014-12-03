<?php
class user extends CI_Controller{
    public $_url;
    public function __construct() {
        parent::__construct();
        $arrSession = $this->session->userdata;
        if(isset($arrSession['idAdmin']) && $arrSession['idAdmin']>0){
            $login = 1;
            $usuario_sesion = $arrSession['username'];
        }else{
            $usuario_sesion = "";
        }
        $this->smarty->assign('usuario',$usuario_sesion);
        $this->smarty->assign("login", $login);
        $this->_url = base_url()._PREFIJO;
        $this->smarty->assign("BASE_URL", base_url()._PREFIJO);
        $this->smarty->assign("PATH_URL", base_url());
        $this->smarty->assign("c_home", 'class="active"');
        $this->smarty->assign("c_about", '');
        $this->smarty->assign("c_contact", '');
        $this->smarty->assign("c_login", 'class="active"');
        $this->smarty->assign("c_login_o", '');
        $this->smarty->assign("active1","");
        $this->smarty->assign("active2","active");
        $this->smarty->assign("active3","");
        $this->smarty->include_template("head", "admin/inc/head");
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->include_template("footer", "admin/inc/footer");
        $this->smarty->include_template("sub_menu", "admin/inc/menu_login");
        $this->load->model('seguridad/usuario_model','usuario');
    }
    public function usuario(){
        $this->smarty->assign("c_home", '');
        $this->smarty->assign("c_login_o", 'class="active"');
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->assign('titulo','ALUMNOS');
        $this->smarty->display('admin/search_user.tpl');
    }
    public function newUser(){
        
    }
    public function listar(){
        $request = $this->input->post();
        $search = new stdClass();
        $search->nombre = $request['nombre'];
        $search->apellidos = $request['apellidos'];
        $search->nick = $request['nick'];
        $search->correo = $request['correo'];
        $search->telefono = $request['telefono'];
        $objUser = $this->usuario->getUsuario($search);
        $this->smarty->assign('objUser', $objUser);
        $this->smarty->display('admin/usuario.tpl');
    }
    public function delete($id){
        $this->usuario->delete($id);
        redirect($this->_url.'admin/user/usuario');
    }
    public function edit($id, $procesar=0){
        $objUser = $this->usuario->getUsuario($id);
        $this->smarty->assign('objUser', $objUser);
        $this->smarty->assign('procesar', $procesar);
        $this->smarty->display('admin/edit_user.tpl');
    }
    public function modificar($id){
        if($id>0){
            $request = $this->input->post();
            $update = new stdClass();
            $update->nombre = $request['nombre'];
            $update->apellidos = $request['apellidos'];
            $update->telefono = $request['telefono'];
            $update->correo = $request['correo'];
            $update->user = $request['usuario'];
            $this->usuario->editar($id, $update);
        }
        redirect($this->_url.'admin/user/usuario');
    }
}
