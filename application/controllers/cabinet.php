<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinet extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('zilla_auth');
        $this->zilla_auth->validate();
    }

	public function index()
	{
            $this->load->model('site');
            $data=$this->site->get_userdata();
            $data['profpic'] = $this->site->return_profpic();
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('cabinet',$data);
                $this->load->view('footer');
                
	}
        
        public function saveedit(){
            $this->load->model('site');
            $this->site->saveprofedit();
            
        }
	
	public function payment()
	{
             $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('payment');
                $this->load->view('footer');     
	}
}