<?php
class principal extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->smarty->assign("BASE_URL", base_url());
        $this->security();
    }
    public function panel(){
        
        $this->smarty->view('principal_panel.tpl');
    }
    public function security(){
        $arrSession = $this->session->userdata;
        if($arrSession['idUsuario']>0 && isset($arrSession['idUsuario'])){
            $this->smarty->assign("USER",$arrSession['nick']);
        }else{
            redirect('index');
        }
    }
}
