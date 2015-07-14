<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classified extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->zilla_auth->validate();
    }
	public function add()
	{
            
            $this->load->model('classifiedquery','cq');
            $data=array();
            $data['haircolor'] = $this->cq->load_haircolor();
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('add_classified',$data);
                $this->load->view('footer');
	}
        
        public function addgirl(){
            $this->load->model('classifiedquery','cq');
            $this->cq->add_new_girl();
        }
}