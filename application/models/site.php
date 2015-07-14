<?php

class Site extends CI_Model{
    public function checkregistr(){
        if($this->input->get('err')){
            if($this->input->get('err') == 'nickname'){
            echo '<script type="text/javascript">alert("Nickname Already Exists");</script>';
            }
            if($this->input->get('err') == 'user'){
            echo '<script type="text/javascript">alert("Username Already Exists");</script>';
            }
        }
    }
    public function register(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $name=$this->input->post('name');
        $city=$this->input->post('city');
        $tel1=$this->input->post('tel1');
        $tel2=$this->input->post('tel2');
        $tel3=$this->input->post('tel3');
        $tell="+$tel1($tel2)$tel3";
        
        $this->db->where('name',$name);
        $query=$this->db->get('zilla_users');
        if($query->num_rows() > 0){
            redirect('/registr?err=nickname');
        }
        $this->zilla_auth->register($username,$password,$email,0,array('tel'=>$tell,'name'=>$name));
    }
    public function get_users(){
        $query=$this->db->get('zilla_users');
        $array=array();
        foreach($query->result() as $row){
            array_push($array, $row->username);
        }
        return $array;
    }
    
    public function get_userdata(){
        $this->db->where('id',  $this->zilla_auth->get_user_id());
        $query=$this->db->get('zilla_users',1,0);
        $data=array();
        foreach($query->result() as $row){
            $data['nick']=$row->name;
            if($data['nick'] == "") $data['nick'] = "No Nickname";
            $data['email']=$row->email;
            $data['password']=$row->password;
            
        }
        
        return $data;
    }
    
    public function saveprofedit(){
        print_r($_FILES);
        $email=$this->input->post('email');
        $pass=  $this->input->post('pass');
        $id=$this->zilla_auth->get_user_id();
        $directory = "/var/www/nightfly/data/www/night-fly.xxx/media/profiles/$id";
        $file_name="";
        if(!is_dir($directory)){
            mkdir($directory);
        }
        if($_FILES["profpic"]["error"] > 0){
            
        }else{
            
            $file_name= $directory.'/profpic.bmp';
            move_uploaded_file($_FILES['profpic']['tmp_name'], $file_name);
        }
        $data=array('email'=>$email,'password'=>$pass);
        $this->db->where('id',$this->zilla_auth->get_user_id());
        $this->db->update('zilla_users',$data);
        redirect('/cabinet/','refresh');
    }
    
    public function get_country_select(){
        
        $output="";
        if($this->input->post('country')){
            $this->db->where('CountryCode',$this->input->post('country'));
            $query=$this->db->get('country');
            foreach($query->result() as $row){
                $output="<option value=\"$row->CountryCode\">$row->CountryName</option>";
            }
        }
        $query=$this->db->get('country');
        foreach($query->result() as $row){
            $output.="<option value=\"$row->CountryCode\">$row->CountryName</option>";
        }
        echo $output;
        return $output;
    }
    
    public function return_profpic(){
        $id=$this->zilla_auth->get_user_id();
        $file="/var/www/nightfly/data/www/night-fly.xxx/media/profiles/$id/profpic.bmp";
        $retval = "";
        if(file_exists($file)){
            $retval = "/media/profiles/$id/profpic.bmp";
        }else{
            $retval = "/media/images/avatar.jpg";
        }
        return $retval;
    }
    
    public function organize(){
        $output="";
        $raw="";
        $letters=range('A','Z');
        $length=0;
        $rawlength=0;
        foreach($letters as $letter){
            if($length == 0){
                $length=1;
                $output.="<ul>";
            }
            $count=0;
            $where="CityName LIKE '$letter%'";
            $this->db->where($where);
            $query=$this->db->get('city');
            $raw= "<li class=\"li_letter\">$letter</li>";
            $rawlength=110;
            foreach($query->result() as $row){
                $citycode = $row->CityCode;
                $this->db->where('CityCode',$citycode);
                $query2=$this->db->get('girls');
                $countgirls=0;
                foreach($query2->result() as $row2){
                    $countgirls++;
                }
                $count++;
                $raw.= "<li><a href=\"/catalog?id=$row->CityCode\">$row->CityName</a><span>($countgirls)</span></li>";
                $rawlength+=35;
            }
            
            if($count > 0){
                $output.=$raw;
                $length+=$rawlength;
                if($length >= 500){
                    $length=0;
                    $output.="</ul>";
                }
            }
        }
        
        return $output;
    }
    
    public function organizesearch($country){
        echo $country;
        $output="";
        $raw="";
        $length=0;
        $rawlength=0;
        $this->db->where('CountryCode',$country);
        $init=$this->db->get('country');
        foreach($init->result() as $initrow){
        $letters=range('A','Z');
       
        foreach($letters as $letter){
            if($length == 0){
                $length=1;
                $output.="<ul>";
            }
            $count=0;
            $raw= "<li class=\"li_letter\">$letter</li>";
            $rawlength=110;
            $where="CityName LIKE '$letter%' AND CountryCode = '$initrow->CountryCode'";
            $this->db->where($where);
            
            $query=$this->db->get('city');
            foreach($query->result() as $row){
                 $raw.= "<li><a href=\"#\">$row->CityName</a><span>(1)</span></li>";
                 $rawlength+=35;
                 $count++;
            }
            if($count > 0 ){
                $output.=$raw;
                $length+=$rawlength;
                if($length >= 500){
                    $length=0;
                    $output.="</ul>";
                }
            }
            
        }
        }
        return $output;
    }
}
