<?php

class Classifiedquery extends CI_Model{
    public function add_new_girl(){
        //Basic Info
        $name = $this->input->post('name');
        $age=  $this->input->post('age');
        $bust_size=  $this->input->post('bust_size');
        $weight=  $this->input->post('weight');
        $growth=  $this->input->post('growth');
        $clothing_size=  $this->input->post('clothing_size');
        $hair_color=  $this->input->post('hair_color');
        $type = $this->input->post('girltype');
        
        
        
        //Rates
        $hour1=  $this->input->post('hour1');
        $hour2=  $this->input->post('hour2');
        $overnight=  $this->input->post('overnight');
        
        $hour1exit=  $this->input->post('hour1exit');
        $hour2exit=  $this->input->post('hour2exit');
        $overnightexit=  $this->input->post('overnightexit');
        
        //contact
        $city=  $this->input->post('city');
        $phone1=  $this->input->post('phone1');
        $phone2=  $this->input->post('phone2');
        $phone3=  $this->input->post('phone3');
        
        //Types of Exit
        $in_the_office=  $this->input->post('in_the_office');
        $in_the_bath_and_sauna=  $this->input->post('in_the_bath_and_sauna');
        $in_a_hotel=  $this->input->post('in_a_hotel');
        $the_flat=  $this->input->post('the_flat');
        $in_a_country_home=  $this->input->post('in_a_country_home');
        $in_any_place=  $this->input->post('in_any_place');
        
        //Services
        $anal_sex=  $this->input->post('anal_sex');
        $group_sex=  $this->input->post('group_sex');
        $sex_toys=  $this->input->post('sex_toys');
        $classic_sex=  $this->input->post('classic_sex');
        $cunnilingus=  $this->input->post('cunnlingus');
        $lesbian_sex=  $this->input->post('lesbian_sex');
        $oral_sex_without_a_condom=  $this->input->post('oral_sex_without_a_condom');
        $blowjob_in_the_car=  $this->input->post('blowjob_in_the_car');
        $blowjob_in_a_condom=  $this->input->post('blowjob_in_a_condom');
        $deep_blowjob=  $this->input->post('deep_blowjob');
        $cum_in_mouth=  $this->input->post('cum_in_mouth');
        $cum_on_face=  $this->input->post('cum_on_face');
        $cum_on_breasts=  $this->input->post('cum_on_breasts');
        $family_pairs=  $this->input->post('family_pairs');
        
        //BDSM
        $anilingus=  $this->input->post('anilingus');
        $bondage=  $this->input->post('bondage');
        $golden_rain_issue=  $this->input->post('golden_rain_issue');
        $golden_rain_reception=  $this->input->post('golden_rain_reception');
        $female_slave=  $this->input->post('female_slave');
        $strap=  $this->input->post('strap');
        $trampling=  $this->input->post('trampling');
        $domination=  $this->input->post('domination');
        $fetish=  $this->input->post('fetish');
        $anal_fisting=  $this->input->post('anal_fisting');
        $fisting_classics=  $this->input->post('fisting_classics');
        $flagellation=  $this->input->post('flagellation');
        $foot_fetish=  $this->input->post('foot_fetish');
        
        $privacy = $this->input->post('privacy');
        $data=array();
        
        $data['privacy'] = $privacy;
        $data['name'] = $name;
        $data['age'] = $age;
        $data['bust'] = $bust_size;
        $data['weight'] = $weight;
        $data['growth'] = $growth;
        $data['cloth_size'] = $clothing_size;
        $data['hair_color'] = $hair_color;
        $data['hour1'] = $hour1;
        $data['hour2'] = $hour2;
        $data['overnight'] = $overnight;
        $data['hour1_exit'] = $hour1exit;
        $data['hour2_exit'] = $hour2exit;
        $data['overnight_exit'] = $overnightexit;
        $data['CityCode'] = $city;
        $data['phone'] = $phone1.' '.$phone2.' '.$phone3;
        $data['type'] = $type;
        
        $val = $this->checkBox($in_the_office);
        $data['ex_intheoffice'] = $val;
        
        $val = $this->checkBox($in_a_hotel);
        $data['ex_inahotel'] = $val;
        
        $val = $this->checkBox($in_the_bath_and_sauna);
        $data['ex_inthebathandsauna'] = $val;
        
        $val = $this->checkBox($in_a_country_home);
        $data['ex_inacountryhome'] = $val;
        
        $val = $this->checkBox($in_any_place);
        $data['ex_inanyplace'] = $val;
        
        $val = $this->checkBox($anal_sex);
        $data['sv_sexanal'] = $val;
        
        $val = $this->checkBox($group_sex);
        $data['sv_sexgroup'] = $val;
        
        $val = $this->checkBox($sex_toys);
        $data['sv_sextoys'] = $val;
        
        $val = $this->checkBox($classic_sex);
        $data['sv_sexclassic'] = $val;
        
        $val = $this->checkBox($in_any_place);
        $data['ex_inanyplace'] = $val;
        
        $val = $this->checkBox($cunnilingus);
        $data['sv_cunnilingus'] = $val;
        
        $val = $this->checkBox($lesbian_sex);
        $data['sv_lesbiansex'] = $val;
        
        $val = $this->checkBox($oral_sex_without_a_condom);
        $data['sv_oralwoutcondom'] = $val;
        
        $val = $this->checkBox($blowjob_in_the_car);
        $data['sv_blowjobincar'] = $val;
        
        $val = $this->checkBox($blowjob_in_a_condom);
        $data['sv_blowjobinacondom'] = $val;
        
        $val = $this->checkBox($deep_blowjob);
        $data['sv_deepblowjob'] = $val;
        
        $val = $this->checkBox($cum_in_mouth);
        $data['sv_cuminmouth'] = $val;
        
        $val = $this->checkBox($cum_on_face);
        $data['sv_cuminface'] = $val;
        
        $val = $this->checkBox($cum_on_breasts);
        $data['sv_cumonbreasts'] = $val;
        
        $val = $this->checkBox($family_pairs);
        $data['sv_familypairs'];
        
        $val = $this->checkBox($anilingus);
        $data['sv_anilingus'];
        
        $val = $this->checkBox($bondage);
        $data['sv_bondage'];
        
        $val = $this->checkBox($golden_rain_issue);
        $data['sv_goldenrainissue'];
        
        $val = $this->checkBox($golden_rain_reception);
        $data['sv_goldenrainreception'];
        
        $val = $this->checkBox($female_slave);
        $data['sv_femaleslave'];
        
        $val = $this->checkBox($strap);
        $data['sv_strap'];
        
        $val = $this->checkBox($trampling);
        $data['sv_trampling'];
        
        $val = $this->checkBox($domination);
        $data['sv_domination'];
        
        $val = $this->checkBox($fetish);
        $data['sv_fetish'];
        
        $val = $this->checkBox($anal_fisting);
        $data['sv_analfisting'];
        
        $val = $this->checkBox($fisting_classics);
        $data['sv_fistingclassics'];
        
        $val = $this->checkBox($flagellation);
        $data['sv_flagellation'];
        
        $val = $this->checkBox($foot_fetish);
        $data['sv_footfetish'];
        
        
        $val=$this->input->post('vid');
        try{
$videoEmbed = $val;
$doc = new DOMDocument();
$doc->loadHTML($videoEmbed);
$src="";
if (@$xdoc->load($doc) === false){
    // ...handle it
    $src="";
}else{
$src = $doc->getElementsByTagName('iframe')->item(0)->getAttribute('src');
}
$data['vid']=$src;
        }catch(Exception $err){
            echo $err;
        }
        $this->db->insert('girls',$data);
        $insertId = $this->db->insert_id();
        
        mkdir('/var/www/nightfly/data/www/night-fly.xxx/media/profiles/'.$insertId);
        
        $i=1;
        while($i < 7){
            $fname = "file$i";
            $destination = "/var/www/nightfly/data/www/night-fly.xxx/media/profiles/$insertId/";
            if(isset($_FILES[$fname])){
                $allowedExts = array("gif", "jpeg", "jpg", "png");
                $temp = explode(".", $_FILES[$fname]["name"]);
                $extension = end($temp);
                if ((($_FILES[$fname]["type"] == "image/gif") || ($_FILES[$fname]["type"] == "image/jpeg") || ($_FILES[$fname]["type"] == "image/jpg") || ($_FILES[$fname]["type"] == "image/pjpeg") || ($_FILES[$fname]["type"] == "image/x-png") || ($_FILES[$fname]["type"] == "image/png")) && ($_FILES[$fname]["size"] < 20000)&& in_array($extension, $allowedExts)){
                    if($_FILES[$fname]["error"] != 0){
                        move_uploaded_file($fname, $destination);
                    }
                }
            }
            $i++;
        }
        
        
        redirect("/catalog/ad?id=$insertId&",'refresh');
    }
    
    private function checkBox($var){
        if($var == 1){
            return 1;
        }else{
            return 0;
        }
    }
    
    public function load_haircolor(){
        $retval = "";
        $query=$this->db->get('HairColor');
        foreach($query->result() as $row){
            $hairname="";
            if($this->session->userdata('lang') == 'en'){
                $hairname=$row->english;
            }else{
                $hairname=$row->russian;
            }
            $retval.="<option value=\"$row->id\">$hairname</option>";
        }
        return $retval;
    }
}