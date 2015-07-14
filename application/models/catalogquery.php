<?php

class Catalogquery extends CI_Model{
    
    //Paginator Script
    
    //End of Paginator Script
    public function clearallcrumbs(){
        $this->session->unset_userdata('crumbs');
    }
    
    //Bread Crumbs Script
    public function checkcrumbs(){
        if($this->input->get('clear') == 'clear'){
            $this->clearallcrumbs();
        }
        if($this->session->userdata('crumbs') == false){
            $data=array('crumbs'=>array());
            $this->session->set_userdata($data);
        }
        if($this->input->get('count')){
            $crumbs=$this->session->userdata('crumbs');
            $ncount=0;
            $count = $this->input->get('count');
            $newcrumbs=array();
            foreach($crumbs as $key=>$value){
                if($ncount < $count){
                    $newcrumbs[$key]=$value;
                }
                $ncount++;
            }
            $data=array('crumbs'=>$newcrumbs);
            $this->session->set_userdata($data);
        }
    }
    
    public function breadcrumbs(){
        $this->checkcrumbs();
        $crumbs="";
        $crumb="";
        $crumbs=$this->session->userdata('crumbs');
        $count=  count($crumbs);
        $count--;
        $rot=0;
        foreach($crumbs as $key=>$value){
           
            $crumb.="<li><a href=\"$value\">$key</a></li>";
            
            //updated
        }
        
        return $crumb;
    }
    
    
    
    public function addcrumbs($key,$value){
        $this->checkcrumbs();
        $checkerr = $this->checkcrumbskey($key);
        $crumbs=$this->session->userdata('crumbs');
        $count=count($crumbs);
        $count++;
        
        if($checkerr != true){
            if($count > 2){
            $value=$value.'&count='.$count;
            }
        $crumbs[$key]=$value;
        }
        $this->session->set_userdata('crumbs',$crumbs);
    }
    
    
    public function load_images($id){
        $query=$this->db->get_where('girls',array('id'=>$id));
        $slider="";
        foreach($query->result() as $row){
            $id_final=$row->id;
           
            $images=array();
            $dir = "/var/www/nightfly/data/www/night-fly.xxx/media/profiles/$id_final/*.{png,bmp,gif}";
            
            $images2=array();
            $images = glob($dir,GLOB_BRACE);
            
          
           
            for($i=1;$i<=count($images);$i++){
                $a=$i-1;
                $image = basename($images[$a]);
                
                $slider.="<div class=\"showcase-slide\"> <div class=\"showcase-content\"> <img src=\"/media/profiles/$id_final/$image\" width=\"259\" height=\"398\" alt=\"\" /> </div> <div class=\"showcase-thumbnail\"> <img src=\"/media/profiles/$id_final/$image\" alt=\"thumbnail\" width=\"111\" height=\"162\" /></div> </div>";
            }
            
            //test
        }
        return $slider;
    }
    public function checkcrumbskey($keyinit){
        $retval = false;
        $crumbs=$this->session->userdata('crumbs');
        foreach($crumbs as $key=>$value){
            if($keyinit == $key){
                 $retval=true;
            }
        }
        return $retval;
    }
    //End of Bread Crumbs Script
    
    public function returncrumbs(){
        $crumbs=$this->session->userdata('crumbs');
        $count=count($crumbs);
        $count++;
        return $count;
    }
    
    public function load_countrycatalog($id=-21212){
        $query=""; // Query Initialization
        $cityquery="";
        $countryname="";
        
        if($id != -21212){
        $query=$this->db->get_where('girls',array('CountryCode'=>$id));
        $cityquery=$this->db->get_where('country',array('CountryCode'=>$id));
        foreach($cityquery->result() as $rowcity){
            $countryname=$rowcity->CountryName;
        }
        $count=$this->returncrumbs();
        $this->addcrumbs($countryname,'/catalog?cid='.$id.'&count='.$count);
        }
        else{
            $this->addcrumbs('Catalog','/catalog?count=1');
            $query=$this->db->get('girls');
        }
        $totalout=array();
        $iquery=$this->db->get_where('city',array('CountryCode'=>$id));
        foreach($iquery->result() as $initrow){
            $query=$this->db->get_where('girls',array('CityCode'=>$initrow->CityCode));
        foreach($query->result() as $row){
            $output="";
            $gid=$row->id;
            $name=$row->name;
            $age=$row->age;
            $height=$row->height;
            $weight=$row->weight;
            $bust=$row->bust;
            $hour1 = $row->hour1;
            $hour2 = $row->hour2;
            $overnight=$row->overnight;
            $vip = $row->VIP;
            if($vip == 1){
                $output.="<li class=\"li_vip\">";
            }else{
                $output.="<li>";
            }
            $output.="<h4><a href=\"/catalog/ad?id=$gid\">$name</a><span><img src=\"images/video.png\" alt=\"\" /></span><span><img src=\"images/pic.png\" alt=\"\" /></span></h4>";
            $output.="<a href=\"#\"><img src=\"images/cat_1.jpg\" alt=\"\" /></a>";
            $output.="<p>Возраст: $age год.<br />";
            $output.="Рост: $height см.<br />";
            $output.="Вес: $weight кг.<br />";
            $output.="Грудь: $bust</p>";
            $output.="<p>Выезд<br />";
            $output.="1 час: $hour1 руб<br />";
            $output.="2 час: $hour2 руб<br />";
            $output.="Ночь: $overnight рубt</p><br />";
            if($vip == 1){
                $output.="<span class=\"vip\">&nbsp;</span> ";
            }
            $output.="</li>";
            array_push($totalout, $output);
        }
        }
        $js_array=  json_encode($totalout);
        return $js_array;
    }
    
    public function load_citycatalog($id=-21212){
        $query=""; // Query Initialization
        $cityquery="";
        $cityname="";
        if($id != -21212){
        $query=$this->db->get_where('girls',array('CityCode'=>$id));
        $cityquery=$this->db->get_where('city',array('CityCode'=>$id));
        foreach($cityquery->result() as $rowcity){
            $cityname=$rowcity->CityName;
        }
        $count=$this->returncrumbs();
        $this->addcrumbs($cityname,'/catalog?id='.$id.'&count='.$count);
        }
        else{
            $this->addcrumbs('Catalog','/catalog?count=1');
            $query=$this->db->get('girls');
        }
        $totalout=array();
        
        foreach($query->result() as $row){
            $output="";
            $gid=$row->id;
            $name=$row->name;
            $age=$row->age;
            $height=$row->height;
            $weight=$row->weight;
            $bust=$row->bust;
            $hour1 = $row->hour1;
            $hour2 = $row->hour2;
            $overnight=$row->overnight;
            $vip = $row->VIP;
            if($vip == 1){
                $output.="<li class=\"li_vip\">";
            }else{
                $output.="<li>";
            }
            $output.="<h4><a href=\"/catalog/ad?id=$gid\">$name</a><span><img src=\"images/video.png\" alt=\"\" /></span><span><img src=\"images/pic.png\" alt=\"\" /></span></h4>";
            $output.="<a href=\"#\"><img src=\"images/cat_1.jpg\" alt=\"\" /></a>";
            $output.="<p>Возраст: $age год.<br />";
            $output.="Рост: $height см.<br />";
            $output.="Вес: $weight кг.<br />";
            $output.="Грудь: $bust</p>";
            $output.="<p>Выезд<br />";
            $output.="1 час: $hour1 руб<br />";
            $output.="2 час: $hour2 руб<br />";
            $output.="Ночь: $overnight рубt</p><br />";
            if($vip == 1){
                $output.="<span class=\"vip\">&nbsp;</span> ";
            }
            $output.="</li>";
            array_push($totalout, $output);
        }
        
        $js_array=  json_encode($totalout);
        return $js_array;
    }
    
    
    public function load_pref($pref){
        $query=""; // Query Initialization
        $cityquery="";
        $cityname="";
        $search=0;
        if($pref==1){
            $this->clearallcrumbs();
            $this->addcrumbs('Catalog', '/catalog?count=1');
            $this->addcrumbs('For Ladies','/catalog/pref?type=0&count=2');
            $search=0;
        }else if($pref==0){
            $this->clearallcrumbs();
            $this->addcrumbs('Catalog','/catalog?count=1');
            $this->addcrumbs('For Men','/catalog/pref?type=1&count=2');
            $search=1;
        }else{
            $this->clearallcrumbs();
            $this->addcrumbs('Catalog','/catalog?count=1');
            $this->addcrumbs('For Bisexual','/catalog/pref?type=2&count=2');
            $search=2;
        }
        $query=$this->db->get_where('girls',array('type'=>$search));
        if($search == 2){
            $query=$this->db->get('girls');
        }
        $totalout=array();
        
        foreach($query->result() as $row){
            $output="";
            $gid=$row->id;
            $name=$row->name;
            $age=$row->age;
            $height=$row->height;
            $weight=$row->weight;
            $bust=$row->bust;
            $hour1 = $row->hour1;
            $hour2 = $row->hour2;
            $overnight=$row->overnight;
            $vip = $row->VIP;
            if($vip == 1){
                $output.="<li class=\"li_vip\">";
            }else{
                $output.="<li>";
            }
            $output.="<h4><a href=\"/catalog/ad?id=$gid\">$name</a><span><img src=\"images/video.png\" alt=\"\" /></span><span><img src=\"images/pic.png\" alt=\"\" /></span></h4>";
            $output.="<a href=\"#\"><img src=\"images/cat_1.jpg\" alt=\"\" /></a>";
            $output.="<p>Возраст: $age год.<br />";
            $output.="Рост: $height см.<br />";
            $output.="Вес: $weight кг.<br />";
            $output.="Грудь: $bust</p>";
            $output.="<p>Выезд<br />";
            $output.="1 час: $hour1 руб<br />";
            $output.="2 час: $hour2 руб<br />";
            $output.="Ночь: $overnight рубt</p><br />";
            if($vip == 1){
                $output.="<span class=\"vip\">&nbsp;</span> ";
            }
            $output.="</li>";
            array_push($totalout, $output);
        }
        
        $js_array=  json_encode($totalout);
        return $js_array;
    }
    
    public function load_ad($id=1){
         $this->db->where('id',$id);
        $query=$this->db->get('girls');
        $cityname="";
        $countryname="";
        $countrycode=0;
        $citycode=0;
        foreach($query->result() as $row){
            $citycode = $row->CityCode;
            $countrycode = $row->CountryCode;
            $this->db->where('CountryCode',$countrycode);
            $query2=$this->db->get('country');
            foreach($query2->result() as $row){
                $countryname=$row->CountryName;
            }
            $this->db->where('CityCode',$citycode);
            $query2=$this->db->get('city');
            foreach($query2->result() as $row){
                $cityname=$row->CityName;
            }
        }
        $this->db->where('id',$id);
        $query=$this->db->get('girls');
        $citycode=0;
        $data=array();
        if($this->checkcrumbskey('Catalog') !== true){
            $this->addcrumbs('Catalog', '/catalog?count=1');
        }
        $count=$this->returncrumbs();
        $this->addcrumbs($countryname,"/catalog?cid=$countrycode&count=$count");
        $count++;
        $this->addcrumbs($cityname,"/catalog?id=$citycode&count=$count");
        $count++;
        foreach($query->result() as $row){
            $this->addcrumbs($row->name, '/catalog/ad?id='.$id.'&count='.$count);
            $data['name'] = $row->name;
            $data['age'] = $row->age;
            $data['bust'] = $row->bust;
            $data['weight'] = $row->weight;
            $data['height'] = $row->height;
            $data['cloth_size'] = $row->cloth_size;
            $data['hair_color'] = $row->hair_color;
            $data['id'] = $row->id;
            $data['registered'] = $row->registered;
            $data['hour1'] = $row->hour1;
            $data['hour2'] = $row->hour2;
            $data['overnight'] = $row->overnight;
            $data['hour1_exit'] = $row->hour1_exit;
            $data['hour2_exit'] = $row->hour2_exit;
            $data['overnight_exit'] = $row->overnight_exit;
            $data['phone'] = $row->phone;
            $data['terms'] = $row->privacy;
            $data['city'] = $row->CityCode;
            $data['country'] = $row->CountryCode;
            $data['vid'] = $row->vid;
            $citycode=$row->CityCode;
           
        }
        
        $this->db->where('CityCode',$citycode);
        $query=$this->db->get('city');
        $countrycode=0;
        foreach($query->result() as $row){
            $data['city'] = $row->CityName;
            $countrycode=$row->CountryCode;
        }
        $this->db->where('CountryCode',$countrycode);
        $query=$this->db->get('country');
        foreach($query->result() as $row){
            $data['country'] = $row->CountryName;
           
        }
        $images = $this->load_images($data['id']);
        $data['images'] = $images;
        return $data;
    }
    
    public function load_cb1($id=0){
        $this->db->where('id',$id);
        $query=$this->db->get('girls');
        
        $output = "";
        
         $analsex = lang('anal_sex');
            $groupsex = lang('group_sex');
            $sextoy = lang('sex_toys');
            $classicsex = lang('classic_sex');
            $cunnilingus = lang('cunnilingus');
            $lesbiansex = lang('lesbian_sex');
            $oralsexwithoutacondom = lang('oral_sex_without_a_condom');
            $blowjobinthecar = lang('blowjob_in_the_car');
            $blowjobinacondom = lang('blowjob_in_a_condom');
            $deepblowjob = lang('deep_blowjob');
            $cuminmouth = lang('cum_in_mouth');
            $cumonface = lang('cum_on_face');
            $cumonbreasts = lang('cum_on_breasts');
            $familypairs = lang('family_pairs');
        foreach($query->result() as $row){
            
           
            
            if($row->sv_sexanal == 1){
                $output.="<li class=\"usl_yes\">$analsex</li>";
            }else{
                $output.="<li>$analsex</li>";
            }
            
            if($row->sv_sexgroup == 1){
                $output.="<li class=\"usl_yes\">$groupsex</li>";
            }else{
                $output.="<li>$groupsex</li>";
            }
            
            if($row->sv_sextoys == 1){
                $output.="<li class=\"usl_yes\">$sextoy</li>";
            }else{
                $output.="<li>$sextoy</li>";
            }
            
            if($row->sv_sexclassic == 1){
                $output.="<li class=\"usl_yes\">$classicsex</li>";
            }else{
                $output.="<li>$classicsex</li>";
            }
            
            if($row->sv_sexclassic == 1){
                $output.="<li class=\"usl_yes\">$classicsex</li>";
            }else{
                $output.="<li>$classicsex</li>";
            }
            
            if($row->sv_cunnilingus == 1){
                $output.="<li class=\"usl_yes\">$cunnilingus</li>";
            }else{
                $output.="<li>$cunnilingus</li>";
            }
            
            if($row->sv_lesbiansex == 1){
                $output.="<li class=\"usl_yes\">$lesbiansex</li>";
            }else{
                $output.="<li>$lesbiansex</li>";
            }
            
            if($row->sv_oralwoutcondom == 1){
                $output.="<li class=\"usl_yes\">$oralsexwithoutacondom</li>";
            }else{
                $output.="<li>$oralsexwithoutacondom</li>";
            }
            
            if($row->sv_blowjobincar == 1){
                $output.="<li class=\"usl_yes\">$blowjobinthecar</li>";
            }else{
                $output.="<li>$blowjobinthecar</li>";
            }
            
            if($row->sv_blowjobinacondom == 1){
                $output.="<li class=\"usl_yes\">$blowjobinacondom</li>";
            }else{
                $output.="<li>$blowjobinacondom</li>";
            }
            
            if($row->sv_deepblowjob == 1){
                $output.="<li class=\"usl_yes\">$deepblowjob</li>";
            }else{
                $output.="<li>$deepblowjob</li>";
            }
            
            if($row->sv_cuminmouth == 1){
                $output.="<li class=\"usl_yes\">$cuminmouth</li>";
            }else{
                $output.="<li>$cuminmouth</li>";
            }
            
            if($row->sv_cuminface == 1){
                $output.="<li class=\"usl_yes\">$cumonface</li>";
            }else{
                $output.="<li>$cumonface</li>";
            }
            
            if($row->sv_cumonbreasts == 1){
                $output.="<li class=\"usl_yes\">$cumonbreasts</li>";
            }else{
                $output.="<li>$cumonbreasts</li>";
            }
            
            if($row->sv_familypairs == 1){
                $output.="<li class=\"usl_yes\">$familypairs</li>";
            }else{
                $output.="<li>$familypairs</li>";
            }
        }
        
        return $output;
    }
    
    public function load_cb2($id = 1){
       
        
        $anilingus = lang('anilingus');
        $bondage = lang('bondage');
        $goldenrainissue = lang('golden_rain_issue');
        $goldenrainreception = lang('golden_rain_reception');
        $femaleslave = lang('female_slave');
        $strap = lang('strap');
        $trampling = lang('trampling');
        $domination = lang('domination');
        $fetish = lang('fetish');
        $anal_fisting = lang('anal_fisting');
        $fisting_classics = lang('fisting_classics');
        $flagellation = lang('flagellation');
        $foot_fetish = lang('foot_fetish');
        
        
        $output = "";
        $this->db->where('id',$id);
        $query=$this->db->get('girls');
        foreach($query->result() as $row){
             if($row->sv_anilingus == 1){
                $output.="<li class=\"usl_yes\">$anilingus</li>";
            }else{
                $output.="<li>$anilingus</li>";
            }
            
             if($row->sv_bondage == 1){
                $output.="<li class=\"usl_yes\">$bondage</li>";
            }else{
                $output.="<li>$bondage</li>";
            }
            
             if($row->sv_goldenrainissue == 1){
                $output.="<li class=\"usl_yes\">$goldenrainissue</li>";
            }else{
                $output.="<li>$goldenrainissue</li>";
            }
            
             if($row->sv_goldenrainreception == 1){
                $output.="<li class=\"usl_yes\">$goldenrainreception</li>";
            }else{
                $output.="<li>$goldenrainreception</li>";
            }
            
             if($row->sv_femaleslave == 1){
                $output.="<li class=\"usl_yes\">$femaleslave</li>";
            }else{
                $output.="<li>$femaleslave</li>";
            }
            
             if($row->sv_analfisting == 1){
                $output.="<li class=\"usl_yes\">$anal_fisting</li>";
            }else{
                $output.="<li>$anal_fisting</li>";
            }
            
             if($row->sv_fistingclassics == 1){
                $output.="<li class=\"usl_yes\">$fisting_classics</li>";
            }else{
                $output.="<li>$fisting_classics</li>";
            }
            
             if($row->sv_flagellation == 1){
                $output.="<li class=\"usl_yes\">$flagellation</li>";
            }else{
                $output.="<li>$flagellation</li>";
            }
            
             if($row->sv_footfetish == 1){
                $output.="<li class=\"usl_yes\">$foot_fetish</li>";
            }else{
                $output.="<li>$foot_fetish</li>";
            }
        }
        
        return $output;
    }
    
    public function load_cb3($id = 1){
        $sakura=lang('sakura');
        $massage_amateur = lang('massage_amateur');
        $professional_massage = lang('professional_massage');
        $relaxing_massage = lang('relaxing_massage');
        $thai_massage = lang('thai_massage');
        $massage_tochecheny = lang('massage_tochecheny');
        $urological_massage = lang('urological_massage');
        $erotic_massage = lang('erotic_massage');
        $output="";
        $this->db->where('id',$id);
        $query=$this->db->get('girls');
        foreach($query->result() as $row){
        if($row->sv_sakura == 1){
                $output.="<li class=\"usl_yes\">$sakura</li>";
            }else{
                $output.="<li>$sakura</li>";
            }
            
        if($row->sv_massageamateur == 1){
                $output.="<li class=\"usl_yes\">$massage_amateur</li>";
            }else{
                $output.="<li>$massage_amateur</li>";
            }
       if($row->sv_professionalmassage == 1){
                $output.="<li class=\"usl_yes\">$professional_massage</li>";
            }else{
                $output.="<li>$professional_massage</li>";
            }
        if($row->sv_relaxingmassage == 1){
                $output.="<li class=\"usl_yes\">$relaxing_massage</li>";
            }else{
                $output.="<li>$relaxing_massage</li>";
            }
        
       if($row->sv_thaimassage == 1){
                $output.="<li class=\"usl_yes\">$thai_massage</li>";
            }else{
                $output.="<li>$thai_massage</li>";
            }
       if($row->sv_massagetochecheny == 1){
                $output.="<li class=\"usl_yes\">$massage_tochecheny</li>";
            }else{
                $output.="<li>$massage_tochecheny</li>";
            }     
       if($row->sv_urologicalmassage == 1){
                $output.="<li class=\"usl_yes\">$urological_massage</li>";
            }else{
                $output.="<li>$urological_massage</li>";
            } 
            
       if($row->sv_eroticmassage == 1){
                $output.="<li class=\"usl_yes\">$erotic_massage</li>";
            }else{
                $output.="<li>$erotic_massage</li>";
            }   
        }
            return $output;
    }
    
    
    public function load_cb4($id){
        $peep_show = lang('peep_show');
        $striptease_not_pro = lang('striptease_not_pro');
        $striptease_pro = lang('striptease_pro');
        $belly_dance = lang('belly_dance');
        $this->db->where('id',$id);
        $query=$this->db->get('girls');
        $output="";
        foreach($query->result() as $row){
            if($row->sv_peepshow == 1){
                $output.="<li class=\"usl_yes\">$peep_show</li>";
            }else{
                $output.="<li>$peep_show</li>";
            }   
        
            if($row->sv_stripteasenotpro == 1){
                $output.="<li class=\"usl_yes\">$striptease_not_pro</li>";
            }else{
                $output.="<li>$striptease_not_pro</li>";
            }   
            if($row->sv_stripteasepro == 1){
                $output.="<li class=\"usl_yes\">$striptease_pro</li>";
            }else{
                $output.="<li>$striptease_pro</li>";
            }   
            if($row->sv_bellydance == 1){
                $output.="<li class=\"usl_yes\">$belly_dance</li>";
            }else{
                $output.="<li>$belly_dance</li>";
            }   
        }
            return $output;
    }
    
    
    
    public function load_citynames(){
        $query=$this->db->get('city');
        $cityarray=array();
        foreach($query->result() as $row){
            array_push($cityarray,$row->CityName);
        }
        
        return json_encode($cityarray);
    }
    
}