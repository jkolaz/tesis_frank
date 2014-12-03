<?php
class Index extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
    }
    public function index(){
        $this->smarty->assign("BASE_URL", base_url());
        $this->smarty->assign("URL", base_url()._PREFIJO);
        $this->smarty->view('index.tpl');
    }
}

