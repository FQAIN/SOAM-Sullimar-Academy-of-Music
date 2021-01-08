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

    function getCartItems($sessionID) {
        //Set the Start and Limit – only retrieves rows between these limits
//        $select_data['limit'] = $limit;
//        $select_data['start'] = $start;
        $select_data['sessionID'] = $sessionID;

        $stored_proc_call = "CALL SelectCartPerPage(?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

}
