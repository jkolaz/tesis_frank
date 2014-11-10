<?php
class usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('seguridad/usuario_model');
    }
    public function insertar(){
        $request = $this->input->post();
        if(isset($request['mail_add']) && $request['mail_add']!=""){
            if(isset($request['pass_add']) && $request['pass_add']!=""){
                if(isset($request['pass_add2']) && $request['pass_add2']!=""){
                    if($request['pass_add']==$request['pass_add2']){
                        if(isset($request['colegio_add']) && $request['colegio_add']!=""){
                            if(isset($request['phone_add']) && $request['phone_add']!=""){
                                if(isset($request['user_add']) && $request['user_add']!=""){
                                    if(isset($request['nombre_add']) && $request['nombre_add']!=""){
                                        if(isset($request['apellido_add']) && $request['apellido_add']!=""){
                                            $insertar = new stdClass();
                                            $insertar->email = $request['mail_add'];
                                            $insertar->pass = md5($request['pass_add']);
                                            $insertar->colegio = $request['colegio_add'];
                                            $insertar->telefono = $request['phone_add'];
                                            $insertar->user = $request['user_add'];
                                            $insertar->nombre = $request['nombre_add'];
                                            $insertar->apellido = $request['apellido_add'];
                                            $this->usuario_model->insert($insertar);
                                            redirect('index');
                                        }else{
                                            redirect('index');
                                        }
                                    }else{
                                        redirect('index');
                                    }
                                }else{
                                    redirect('index');
                                }
                            }else{
                                redirect('index');
                            }
                        }else{
                            redirect('index');
                        }
                    }else{
                        redirect('index');
                    }
                }else{
                    redirect('index');
                }
            }else{
                redirect('index');
            }
        }else{
            redirect('index');
        }
    }
}
