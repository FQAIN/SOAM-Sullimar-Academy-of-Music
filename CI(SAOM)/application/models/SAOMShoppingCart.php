<?php

class SAOMShoppingCart extends CI_Model {

    function AddToCart($data) {
        $stored_proc_call = "CALL AddtoCart(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->db->query($stored_proc_call, $data);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    function AddToCartNS($data) {
        $stored_proc_call = "CALL AddtoCartNS(?,?,?,?,?,?,?,?,?,?)";
        $result = $this->db->query($stored_proc_call, $data);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getCartItems($user_id) {
        //user_id can be the users session_id or their email address used to log in
        if (!strpos($this->session->userdata('email'), '@'))
        {
            $stored_proc_call = "CALL SelectCartPerPageNS(?)";
            $query = $this->db->query($stored_proc_call, $user_id);
        }                                
        elseif (strpos($this->session->userdata('email'), '@'))
        {
            $stored_proc_call = "CALL SelectCartPerPage(?)";
            $query = $this->db->query($stored_proc_call, $user_id);
        }

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    function deleteCartItem($delete) {
        $stored_proc_call = "CALL deleteItem(?,?)";
        $this->db->query($stored_proc_call, $delete);
    }
    
    function confirmPurchase($data) {
        $stored_proc_call = "CALL confirmPurchase(?,?,?,?,?,?)";
        $this->db->query($stored_proc_call, $data);
    }
    
    function confirmDeleteFromCart($cdfc) {
        $stored_proc_call = "CALL confirmDeleteFromCart(?,?)";
        $this->db->query($stored_proc_call, $cdfc);
    }
}
