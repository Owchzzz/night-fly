<?php

class Mainquery extends CI_Model{
    public function checkerr(){
        $err = $this->input->get('err');
        if($err != ""){
            $err = $this->input->get('err');
            if($err == "invaliduser"){
                return "Invalid Username";
            }else{
                return "Server Error";
            }
        }else{
            return "";
        }
    }
    
    public function load_top10(){
        $query=$this->db->get('city');
        $data=array();
        $count=0;
        foreach($query->result() as $row){
            $data[$count]['CityCode'] = $row->CityCode;
            $data[$count]['CityName'] = $row->CityName;
            $data[$count]['ads'] = 0;
            
            $this->db->where('CityCode',$row->CityCode);
            $query2=$this->db->get('girls');
            foreach($query2->result() as $row2){
                $data[$count]['ads']++;
            }
            $count++;
        }
        
        $newdat = $this->sort($data,$count);
        $output="";
        for($i=0;$i<$count;$i++){
            $citycode=$newdat[$i]['CityCode'];
            $cityname=$newdat[$i]['CityName'];
            if($i<10){
            $output.="<li><a href=\"/catalog?id=$citycode\">$cityname</a></li>";
            }
        }
        
        return $output;
    }
    
    
    
    private function sort($data,$count){
        for($i=0;$i<$count;$i++){
            for($a=$i;$a<$count;$a++){
                if($data[$i]['ads'] < $data[$a]['ads']){
                    $tempname = $data[$i]['CityName'];
                    $tempcode = $data[$i]['CityCode'];
                    $tempads = $data[$i]['ads'];
                    
                    $data[$i]['CityName'] = $data[$a]['CityName'];
                    $data[$i]['CityCode'] = $data[$a]['CityCode'];
                    $data[$i]['CityName'] = $data[$a]['CityName'];
                    
                    $data[$a]['CityName'] = $tempname;
                    $data[$a]['CityCode'] = $tempcode;
                    $data[$a]['CityName'] = $tempads;
                }
            }
        }
        
        return $data;
    }
}