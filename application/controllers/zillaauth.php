<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zillaauth extends CI_Controller {
    public function login(){
        $this->load->view('head');
        $this->zilla_auth->show_user_login();
        $this->load->view('footer');
    }
    
    public function user_login(){
        $this->zilla_auth->user_login();
    }
	
    public function admin_login(){
        $this->zilla_auth->user_login(TRUE);
    }
	public function registration(){
         $this->load->view('registration');
    }
    
    public function logout(){
        $this->zilla_auth->logout();
    }
    
    public function failregister(){
        if($this->input->get('err') == 'user'){
            $data['err'] = "A user with that username already exists. try another username";
        }else{
            $data['err'] = "An problem has occured. please try again in a few seconds";
        }
        $this->load->view('head');
        $this->load->view('failreg',$data);
        $this->load->view('footer');
    }
    
    public function registersuccess(){
        $this->load->view('head','',true);
        $this->load->view('registersuccess');
        $this->load->view('footer','',true);
        $email = $this->input->get('email');
        $this->zilla_auth->sendconfirmation($email);
    }

    
    public function registersuccessspecial(){
        $this->load->view('head','',true);
        $this->load->view('registersuccess2');
        $this->load->view('footer','',true);
        
    }
    
    public function emailconfirm(){
        $this->zilla_auth->recieveconfirmation();
    }
    
    public function confirmationsuccess(){
        $this->load->view('head');
        $this->load->view('menu-client');
        $this->load->view('confirmsuccess');
        $this->load->view('main-client');
        $this->load->view('footer');
    }
}