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

    function getCartItems($user_id) {
        //user_id can be the users session_id or their email address used to log in
        $stored_proc_call = "CALL SelectCartPerPage(?)";
        $query = $this->db->query($stored_proc_call, $user_id);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    function deleteCartItem($delete) {
        $stored_proc_call = "CALL deleteItem(?,?)";
        $this->db->query($stored_proc_call, $delete);
    }
}
