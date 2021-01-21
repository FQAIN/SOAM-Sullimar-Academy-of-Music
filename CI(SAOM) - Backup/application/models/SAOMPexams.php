<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMPexams extends CI_Model {

    public function record_count() {
        return $this->db->count_all("processexams");
    }

    function addEntryPexam() {

        //Inserts address details from form into associative array with keys same name as database fields
        $pexam_data['examID'] = $this->input->post('examID');

        $pexam_data['staffID'] = $this->input->post('staffID');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddPexam(?, ?)";
        $this->db->query($stored_proc_call, $pexam_data);
    }

    public function selectPexamsPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectPexamsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getPexamForUpdate($pexamID) {
        $stored_proc_call = "CALL selectPexamForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $pexamID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedPexam($pexamID) {
        $data = array(
            'pexamID' => $pexamID,
            'examID' => $this->input->post('examID'),
            'staffID' => $this->input->post('staffID')
        );

        $stored_proc_call = "CALL updateSelectedPexam(?, ?, ?)";

        $this->db->query($stored_proc_call, $data);
    }

}
