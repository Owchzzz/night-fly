<?php

class Administration extends CI_Model{
    public function load_all_country() {
        $query=$this->db->get('country');
        $output="";
        foreach($query->result() as $row){
            $output.="<tr><td>$row->CountryCode</td><td>$row->CountryName</td><td><button onClick=\"loadData($row->CountryCode,'$row->CountryName');\" class=\"btn btn-warning btn-mini\">Edit</button> <a href=\"/admin/country/delete?id=$row->CountryCode\" class=\"btn btn-danger btn-mini\">Delete</a></td>";
        }
        
        return $output;
    }
    
    public function load_all_country_select(){
        $query=$this->db->get('country');
        $output="";
        foreach($query->result() as $row){
            $output.="<option value=\"$row->CountryCode\">$row->CountryName</option>";
        }
        return $output;
    }
    public function load_country($i){
        $this->db->where('CountryCode',$i);
        $query=$this->db->get('country',1,0);
        foreach($query->result() as $row){
            $data=$row;
        }
        return $data;
    }
    
    public function add_country(){
        $data=array('CountryName'=>$this->input->post('name'));
        $this->db->insert('country',$data);
        redirect('/admin/country/','refresh');
    }
    
    public function edit_country(){
        $this->db->where('CountryCode',  $this->input->post('form-id'));
        $data=array('CountryName'=>$this->input->post('countryname'));
        $this->db->update('country',$data);
        redirect('/admin/country/','refresh');
    }
    
    
    
    public function load_all_city() {
        $country = $this->input->get('country');
        if($country != ""){
            $this->db->where('CountryCode',$this->input->get('country'));
        }
        $query=$this->db->get('city');
        
        $output="";
        $countryname="";
        foreach($query->result() as $row){
            $countryname="";
            $this->db->where('CountryCode',$row->CountryCode);
            $query2=$this->db->get('country',1,0);
            foreach($query2->result() as $row2){
                $countryname=$row2->CountryName;
            }
            $output.="<tr><td>$row->CityCode</td><td>$row->CityName</td><td>$countryname</td><td><button onClick=\"loadData($row->CityCode,'$row->CityName','$countryname',$row->CountryCode);\" class=\"btn btn-warning btn-mini\">Edit</button> <a href=\"/admin/citydelete?id=$row->CountryCode\" class=\"btn btn-danger btn-mini\">Delete</a></td>";
        }
        
        return $output;
    }
    
    public function add_city(){
        $data=array('CityName'=>$this->input->post('name'), 'CountryCode'=>$this->input->post('country'));
        $this->db->insert('city',$data);
        redirect('/admin/city/','refresh');
    }
    
    public function edit_city(){
        $this->db->where('CityCode',  $this->input->post('form-id'));
        $data=array('CityName'=>$this->input->post('cityname'),'CountryCode'=>$this->input->post('country'));
        $this->db->update('country',$data);
        redirect('/admin/city/','refresh');
    }
}
