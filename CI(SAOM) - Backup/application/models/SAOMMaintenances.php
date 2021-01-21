<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMMaintenances extends CI_Model {

    public function record_count() {
        return $this->db->count_all("instrumentsmaintenance");
    }

    function addEntryMaintenance() {

        //Inserts address details from form into associative array with keys same name as database fields
        $maintenance_data['instrumentID'] = $this->input->post('instrumentID');

        $maintenance_data['note'] = $this->input->post('note');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddMaintenance(?, ?)";
        $this->db->query($stored_proc_call, $maintenance_data);
    }

    public function selectMaintenancesPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectMaintenancesPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getMaintenanceForUpdate($maintenanceID) {
        $stored_proc_call = "CALL selectMaintenanceForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $maintenanceID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedMaintenance($maintenanceID) {
        $data = array(
            'maintenanceID' => $maintenanceID,
            'instrumentID' => $this->input->post('instrumentID'),
            'note' => $this->input->post('note')
        );

        $stored_proc_call = "CALL updateSelectedMaintenance(?, ?, ?)";

        $this->db->query($stored_proc_call, $data);
    }

}
