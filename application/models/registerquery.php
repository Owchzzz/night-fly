<?php

class Registerquery extends CI_Model{
    public function checkstat(){
        if($this->input->get('err') == 'user'){
            return "Error, user exists in database. please try again later";
        }else{
            return "System Error. please try again later.";
        }
    }
}