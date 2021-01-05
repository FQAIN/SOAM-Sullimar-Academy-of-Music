<?php

class SAOMShoppingCart extends CI_Model {
    
    function AddToCart($data){
        $stored_proc_call = "CALL AddtoCart(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->db->query($stored_proc_call,$data);
        
        if($result){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}