<?php

Class User extends CI_Model {

    function validUser(){
        $user_details['email'] = $this->input->post('email');
        $user_details['password'] = $this->input->post('password');
        
        $selectContact = "CALL ValidUser(?,?)";
        $query = $this->db->query($selectContact, $user_details);
        
        if($query->num_rows()>0){
            return (true);
    }else {
    return (false);
    }
    
}

    }