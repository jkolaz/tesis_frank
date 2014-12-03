<?php
class principal extends CI_Controller{
    public $_url;
    public function __construct() {
        parent::__construct();
        $this->smarty->assign("BASE_URL", base_url());
        $this->security();
        $this->_url = base_url()._PREFIJO;
    }
    public function panel(){
        
        $this->smarty->view('principal_panel.tpl');
    }
    public function security(){
        $arrSession = $this->session->userdata;
        if($arrSession['idUsuario']>0 && isset($arrSession['idUsuario'])){
            $this->smarty->assign("USER",$arrSession['nick']);
        }else{
            redirect(base_url());
        }
    }
}
