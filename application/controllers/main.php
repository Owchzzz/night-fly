<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
            $this->load->model('mainquery');
            $this->load->model('site');
            $data['select2']=$this->site->get_country_select();
            $data['output'] = $this->site->organize();
            $data['errout'] = $this->mainquery->checkerr();
            $data['top10'] = $this->mainquery->load_top10();
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
                $this->load->view('errhandler',$data);
		$this->load->view('main',$data);
                $this->load->view('footer');
	}
        
        public function organizesearch(){
            $this->load->model('site');
            $this->load->model('mainquery');
            $data['select2']=$this->site->get_country_select();
            $data['output'] = $this->site->organizesearch($this->input->post('country'));
            $data['top10'] = $this->mainquery->load_top10();
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('main',$data);
                $this->load->view('footer');
        }
}