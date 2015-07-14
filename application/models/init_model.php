<?php

class Init_model extends CI_Model{
     private $CI;
    public function __construct() {
       $this->CI =& get_instance();

       $this->CI->load->helper('url');
       $this->CI->load->library('session');
    
    }
    
    public function load_site(){
        if($this->session->userdata('lang') == 'en'){
            $this->session->set_userdata(array('lang'=>'en'));
            $this->lang->load('general','english');
            $this->config->set_item('language', 'english');
        }
        //$this->load->helper('lang_translate');
        else if($this->session->userdata('lang') == 'rus'){
            $this->lang->load('general','russian');
            $this->config->set_item('language', 'russian');
            //echo 'russian';
            
        }
        else if($this->session->userdata('lang') == ''){
            $this->session->set_userdata(array('lang'=>'rus'));
            $this->lang->load('general','russian');
            $this->config->set_item('language', 'russian');
            
        }
    }
}