<?php
class admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->smarty->assign("BASE_URL", base_url());
        $this->smarty->assign("c_home", 'class="active"');
        $this->smarty->assign("c_about", '');
        $this->smarty->assign("c_contact", '');
        $this->smarty->assign("c_login", 'class="active"');
        $this->smarty->include_template("head", "admin/inc/head");
        $this->smarty->include_template("menu", "admin/inc/menu");
        $this->smarty->include_template("footer", "admin/inc/footer");
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
            redirect(base_url().'admin/admin');
        }
        $this->smarty->display('admin/login.tpl');
    }
    public function star(){
        $request = $this->input->post();
        if(isset($request['email']) && $request['email']!=""){
            if(isset($request['password']) && $request['password']!=""){
                echo "hola";
            }else{
                redirect(base_url()."admin/admin/login");
            }
        }else{
            redirect(base_url()."admin/admin/login");
        }
    }
}
