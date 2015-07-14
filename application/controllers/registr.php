<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registr extends CI_Controller {
    
    public function index(){
        $this->load->model('site');
        $array=$this->site->get_users();
        $this->site->checkregistr();
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('registration',$array);
        $this->load->view('footer');
    }
    
    public function send(){
        $this->load->model('site');
        $this->site->register();
    }
    
    public function failregister(){
        $this->load->view('head');
        $this->load->view('header');
        $this->load->view('failregister');
        $this->load->view('footer');
    }
    
    public function registersuccess(){
        $email=$this->input->get('email');
        $this->zilla_auth->sendconfirmation($email);
        $this->load->view('head');
      
        $this->load->view('header');
        $this->load->view('registersuccess');
        $this->load->view('footer');
    }
    
    public function emailconfirm(){
        $this->zilla_auth->recieveconfirmation();
    }
    
    
    public function register(){
        
        
        $this->load->model('registerquery');
        $data['response'] = $this->registerquery->checkstat();
        $this->load->view('head');
      
        $this->load->view('header');
        $this->load->view('registerfail');
        $this->load->view('footer');
    }
    
    public function confirmationsuccess(){
        $this->load->view('head');
        $this->load->view('slider');
        $this->load->view('header');
        $this->load->view('confirmsuccess');
        $this->load->view('footer');
    }
}