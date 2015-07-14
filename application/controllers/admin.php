<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
   function __construct() {
       parent::__construct();
       $this->zilla_auth->validate(1);
   }
    
    public function index(){
        $this->load->view('head');
        $this->load->view('admin');
        //$this->load->view('footer');
    }
    
    
    public function logout(){
        $this->zilla_auth->logout();
    }
    
    public function country(){
        $this->load->model('administration');
        $res=$this->administration->load_all_country();
        $data['output'] = $res;
        $this->load->view('adminhead');
        $this->load->view('admin-country',$data);
       // $this->load->view('footer');
        
    }
    
    public function countrysavenew(){
        $this->load->model('administration');
        $this->administration->add_country();
    }
    
     public function countrysaveedit(){
        $this->load->model('administration');
        $this->administration->edit_country();
    }
    
    public function city(){
        $this->load->model('administration');
        $res=$this->administration->load_all_country_select();
        $data['select'] = $res;
        $res2=$this->administration->load_all_city();
        $data['output'] = $res2;
        $this->load->view('adminhead');
        $this->load->view('admin-city',$data);
    }
    
    public function citysearch(){
        $this->load->model('administration');
        $res=$this->administration->load_all_country_select();
        $data['select'] = $res;
        $res2=$this->administration->load_all_city();
        $data['output'] = $res2;
        
        $this->load->view('adminhead');
        $this->load->view('admin-city',$data);
    }
   
     public function citysavenew(){
        $this->load->model('administration');
        $this->administration->add_city();
    }
    
     public function citysaveedit(){
        $this->load->model('administration');
        $this->administration->edit_city();
    }
    
}