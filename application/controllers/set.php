<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set extends CI_Controller {
    public function index(){
       // echo $this->input->get('lang');
            if($this->input->get('lang') == 'rus'){
                //echo 'change to russian '.  $this->session->userdata('lang');
                $this->session->set_userdata(array('lang'=>'rus'));
                $this->config->set_item('language', 'russian');
                $this->lang->load('general', 'russian');
            }else if($this->input->get('lang') == 'en'){
                //echo 'change to english '.  $this->session->userdata('lang');
                $this->session->set_userdata(array('lang'=>'en'));
                $this->config->set_item('language', 'english');
                $this->lang->load('general', 'english');
            }
        
        
        redirect($_SERVER['HTTP_REFERER'],'refresh');
        
    }
}