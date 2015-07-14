<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function index()
	{
            $this->load->model('catalogquery','cq');
            $id=-21212;
            $cid=-21212;
            if($this->input->get('id')){
                $id=$this->input->get('id');
            }
            $data['catalog'] = $this->cq->load_citycatalog($id);
            
            if($this->input->get('cid')){
                $cid=$this->input->get('cid');
                $data['catalog'] = $this->cq->load_countrycatalog($cid);
            }
            $data['crumbs'] = $this->cq->breadcrumbs();
            $data['citynames'] = $this->cq->load_citynames();
            
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('catalog',$data);
                $this->load->view('footer');
	}
        
        public function pref(){
            
            $pref = $this->input->get('pref');
            $this->load->model('catalogquery','cq');
            
            $data['catalog']=$this->cq->load_pref($pref);
            
            $data['crumbs'] = $this->cq->breadcrumbs();
            $data['citynames'] = $this->cq->load_citynames();
            
                $this->load->view('head');
                $this->load->view('slider');
                $this->load->view('header');
		$this->load->view('catalog',$data);
                $this->load->view('footer');
        }
	
	public function ad()
	{
            $this->load->model('catalogquery','cq');
            $id=1;
            if($this->input->get('id')){
                $id=  $this->input->get('id');
            }
            $data=$this->cq->load_ad($id);
            $data['cb_row1'] = $this->cq->load_cb1($id);
            $data['cb_row2'] = $this->cq->load_cb2($id);
            $data['cb_row3'] = $this->cq->load_cb3($id);
            $data['cb_row4'] = $this->cq->load_cb4($id);
            $data['crumbs'] = $this->cq->breadcrumbs();
            $this->load->view('head');
            $this->load->view('slider');
            $this->load->view('header');
            $this->load->view('obyav',$data);
            $this->load->view('min-footer');
	}
        
        public function city(){
            $this->load->model('catalogquery','cq');
            $id=1;
            if($this->input->get('id')){
                $id=  $this->input->get('id');
            }
            $data=$this->cq->load_city($id);
        }
}