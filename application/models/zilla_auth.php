<?php

class Zilla_auth extends CI_Model{
    public function __construct(){
        parent::__construct();
        //$this->config->load('zilla_auth',FALSE,TRUE);
        $zillaconfig= $this->config->item('zilla_auth');
        $this->output->set_header("HTTP/1.0 200 OK");

        
    } 
    
    public function logout(){
        $this->session->sess_destroy();
       redirect('/zillaauth/login/','refresh');
       //header('Location: /zillaauth/login/');
    }
    public function user_exists($name){
        $this->db->where('username',$name);
        $query=$this->db->get($this->config->item('table_user'));
        if($query->result()){
            return true;
        }else{
            return false;
        }
    }
    public function email_exists($email){
        $this->db->where('email',$email);
        $query=$this->db->get($this->config->item('table_user'));
        if($query->result()){
            return true;
        }
        else{
            return false;
        }
    }
    public function show_user_login(){
        $this->load->view('zilla_auth_login');
    }
    public function user_login($admin=FALSE){
        $zillaconfig= $this->config->item('zilla_auth');
        if($this->input->post('username')){
            $this->db->where('username',$this->input->post('username'));
           
            $query=$this->db->get($this->config->item('table_user'),1,0);
            if($row=$query->result()){
               
               foreach($query->result() as $row){
                   $data['password']=$row->password;
                   $data['email']=$row->email;
                   $data['userlevel']=$row->userlevel;
                   $data['id']=$row->id;
                   $data['group']=$row->group;
               }
                if($data['password'] == md5($this->input->post('password'))){
                    //Login Success
                    $dataarray=array('logged_in'=>TRUE,'username'=>$this->input->post('username'),'email'=>$data['email'],'userlevel'=>$data['userlevel'],'id'=>$data['id'],'group'=>$data['group']);
                    $this->session->set_userdata($dataarray);
                    $mainpage=$this->config->item('main_page');
					if($data['group'] == 0){
						redirect('/main?err=unconfirmedemail','refresh');
                        //header('location:/zillaauth/login?err=unconfirmedemail');					
					}
                                        if($admin == TRUE){
                                            redirect('/admin/','refresh');
                                        }
                    redirect('/'.$mainpage.'/','refresh');
                    //header('location:/'.$mainpage.'/');
                    echo'success';
                    die();
                }else{
                    //Invalid Password
                    redirect('/main?err=invalidpass');
				//	header('location:'.$query->row());
					$actpass=md5($this->input->post('password'));
					$passinpt=$data['password'];
					echo "password input: $passinpt, actual password:$actpass ";
					die();
                }
            }else{
                //Invalid Username
                redirect('/main?err=invaliduser','refresh');
                header('location: /zillaauth/login?err=invaliduser');
                die();
            }
        }
    }
    
    public function register($user,$pass,$email=NULL,$defaultuser=0,$dataparam=NULL,$redir=NULL){
        $data=array('username'=>$user,'password'=>md5($pass),'email'=>$email,'group'=>$defaultuser,'created_on'=>date("Y.m.d",time()));
        $tblname=$this->config->item('table_user');
		$count=0;
		
        while($row=current($dataparam)){
            
            $col=key($dataparam);
            $data[$col]=$row;
            $query="IF NOT exists( select * from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME=$tblname and COLUMN_NAME=$col) ALTER TABLE $tblname add COLUMN $col";
            $query="SELECT $col FROM $tblname";
            $res=$this->db->query($query);
            if(!$res){
                $query="ALTER $tblname ADD $col TEXT NOT NULL";
                $this->db->query($query);
            }
			next($dataparam);
        }
        if($this->user_exists($data['username'])){
            redirect('/registr/register?err=user','refresh');
            die();
        }
        $this->db->insert($this->config->item('table_user'),$data);
        if($redir){
            redirect($redir,'refresh');
            die();
        }
        if($defaultuser==0){
            redirect('/registr/registersuccess?email='.$email,'refresh');
       // header('location: /zillaauth/registersuccess?email='.$email);
        }
        else{
            redirect('/registr/registersuccessspecial/','refresh');
        //header('location: /zillaauth/registersuccesspeical');
        }
    }
    
    public function logged_in(){
        if( $this->session->userdata('logged_in')){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function validate($level=1){
        if(!$this->logged_in()){
            redirect('/main?err=login','refresh');
            die();
            //header('Location: /zillaauth/login/');
        }
        
        if($this->get_user_group() > $level){
            $lvl=$this->get_user_group();
            redirect('/main/?'.$lvl);
        }
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
    }
    
    public function get_user_id(){
        return $this->session->userdata('id');
    }
    public function get_user_level(){
        return $this->session->userdata('userlevel');
    }
    public function get_user_group(){
        return $this->session->userdata('group');
    }
    
    public function in_group($i){
        if($i == $this->session->userdata('group')){
            return true;
        }
        else return false;
    }
    
    public function sendconfirmation($email){
        $msg=$this->config->item('confirmation_msg');
        $confirmationcode = rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand().rand();
        $sitename=$this->config->item('site_name');
        $msg.="http://$sitename/registr/emailconfirm?email=$email&code=$confirmationcode";
        $this->db->where('email',$email);
        $data=array('confirmation_code'=>$confirmationcode);
        $this->db->update($this->config->item('table_user'),$data);
        $adminemail=$this->config->item('admin_email');
        $header=$this->config->item('header_confirmation');
        $headers=$this->config->item('headers');
        mail($email,$header,$msg,$headers);
    }
    
    public function recieveconfirmation(){
        echo 'confirmation recieved.. ';
        $email=$this->input->get('email');
        $code=$this->input->get('code');
        $this->db->where('email',$email);
        $query=$this->db->get($this->config->item('table_user'));
        foreach($query->result() as $row){
            if($row->confirmation_code == $this->input->get('code')){
                $this->db->where('email',$email);
                $data=array('group'=>$this->config->item('default_group'));
                $this->db->update($this->config->item('table_user'),$data);
            }
        }
        redirect('/registr/confirmationsuccess/','refresh');
       // header('Location: /zillaauth/confirmationsuccess/');
    }
    
    
    // Manually Coded Functions
    //Menu
    public function loadmenu($datamain=NULL){
        $lvl=$this->get_user_group();
        echo $this->load->view('head','',true);
        switch($lvl){
            case 1: // User Level Administrator
                echo $this->load->view('menu','',true);
                break;
            case 2:
                echo $this->load->view('menu-analyst','',true);
                break;
            case 4:
                echo $this->load->view('menu-worker','',true);
                break;
            default:
                echo $this->load->view('menu-client','',true);
                break;
        }
        
    }
    
    
    
}