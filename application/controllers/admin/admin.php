<?php
class admin extends CI_Controller{
    public $_url;
    public function __construct() {
        parent::__construct();
        $arrSession = $this->session->userdata;
        if(isset($arrSession['idAdmin']) && $arrSession['idAdmin']>0){
            $login = 1;
        }else{
            $login = 0;
        }
        $this->smarty->assign("login", $login);
        $this->_url = base_url()._PREFIJO;
        $this->smarty->assign("BASE_URL", base_url()._PREFIJO);
        $this->smarty->assign("PATH_URL", base_url());
        $this->smarty->assign("c_home", 'class="active"');
        $this->smarty->assign("c_about", '');
        $this->smarty->assign("c_contact", '');
        $this->smarty->assign("c_login", 'class="active"');
        $this->smarty->assign("c_login_o", '');
        $this->smarty->include_template("head", "admin/inc/head");
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->include_template("footer", "admin/inc/footer");
        $this->load->model('admin/admin_model');
    }
    public function index(){
        $this->smarty->display('admin/index.tpl');
    }
    public function login(){
        $this->smarty->assign("c_home", '');
        $this->smarty->assign("c_login", 'class="active"');
        $this->smarty->include_template("menu", "admin/inc/menu");
        $arrSession = $this->session->userdata;
        if(isset($arrSession['idAdmin'])){
            redirect($this->_url.'admin/admin/panel');
        }
        $this->smarty->display('admin/login.tpl');
    }
    public function start(){
        $request = $this->input->post();
        if(isset($request['email']) && $request['email']!=""){
            if(isset($request['password']) && $request['password']!=""){
                $admin = new stdClass();
                $admin->correo = $request['email'];
                $admin->clave    = $request['password'];
                $objAdmin = $this->admin_model->login($admin);
                if(isset($objAdmin)){
                    $newdata = array(
                        'username'  => $objAdmin[0]->nombre.' '.$objAdmin[0]->apellido,
                        'email'     => $objAdmin[0]->correo,
                        'idAdmin'   => $objAdmin[0]->id,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($newdata);
                    redirect($this->_url."admin/admin/panel");
                }else{
                    redirect($this->_url."admin/admin/login");
                }
            }else{
                redirect($this->_url."admin/admin/login");
            }
        }else{
            redirect($this->_url."admin/admin/login");
        }
    }
    public function panel(){
        $this->smarty->assign("active1","active");
        $this->smarty->assign("active2","");
        $this->smarty->assign("active3","");
        $arrSession = $this->session->userdata;
        $objAdmin = $this->admin_model->getAdmin();
        $this->smarty->assign('objAdmin', $objAdmin);
        $this->smarty->assign("c_home", '');
        $this->smarty->assign("c_login_o", 'class="active"');
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->assign('usuario',$arrSession['username']);
        $this->smarty->assign('titulo','ADMINISTRADORES');
        $this->smarty->include_template("sub_menu", "admin/inc/menu_login");
        $this->smarty->display('admin/panel.tpl');
    }
    public function usuario(){
        $this->smarty->assign("active1","");
        $this->smarty->assign("active2","active");
        $this->smarty->assign("active3","");
        $arrSession = $this->session->userdata;
        $objAdmin = $this->admin_model->getAdmin();
        $this->smarty->assign('objAdmin', $objAdmin);
        $this->smarty->assign("c_home", '');
        $this->smarty->assign("c_login_o", 'class="active"');
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->assign('usuario',$arrSession['username']);
        $this->smarty->assign('titulo','ADMINISTRADORES');
        $this->smarty->include_template("sub_menu", "admin/inc/menu_login");
        $this->smarty->display('admin/panel.tpl');
    }
}
