<?php

class validar extends CI_Controller{

    public function __construct() {

        parent::__construct();

        $this->load->model('seguridad/usuario_model');

    }

    public function login(){

        $request = $this->input->post();

        if($request['mail']!="" && isset($request['mail'])){

            if($request['pass']!="" && isset($request['pass'])){

                $usuario = new stdClass();

                $usuario->correo = $request['mail'];

                $usuario->clave = md5($request['pass']);

                $user = $this->usuario_model->login($usuario);

                if(isset($user)){

                    $data = array(

                        'idUsuario' => $user[0]->id,

                        'nick' => $user[0]->user,

                        'nombre' => $user[0]->nombre,

                        'correo' => $user[0]->correo);

                    $this->session->set_userdata($data);

                    redirect('principal/principal/panel');

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

    public function logout(){

        $arrSession = $this->session->userdata;

        if($arrSession['idUsuario']>0 && isset($arrSession['idUsuario'])){

            $data = array('idUsuario' => '',

                            'nick' => '',

                            'nombre' => '',

                            'correo' => '');

            $this->session->unset_userdata($data);

        }

        redirect('index');

    }

}

