<?php
defined('BASEPATH') OR exit ('no direct script accsess allowed');

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model','model_model');
    }
    public function index(){
        if($this->session->userdata('email')){
            redirect('user');
        }
        $this->load->view('login/index');
    }

    public function cekLogin(){
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->model_model->getUsername($username);
        $getPass = $this->model_model->getPassword($password);

        if(!$getUser){
            $this->session->set_flashdata('message', '<p>User tidak terdaftar</p>');
            redirect('login');
        }
        if ($getUser == $getPass){
            $data=[
                'username' => $username,
                'loggedin_time'=>time()
            ];
            $this->session->set_userdata($data);
            redirect('user');
        }
        if ($getUser != $getPass){
            $this->session->set_flashdata('message', '<p>Password Salah</p>');
            redirect('login');
        }
    }
}
