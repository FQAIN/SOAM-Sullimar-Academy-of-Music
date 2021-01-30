<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMPrivatetuitions extends CI_Model {

    public function record_count() {
        return $this->db->count_all("privatetuition");
    }

    function addEntryPrivatetuition() {

        //Inserts address details from form into associative array with keys same name as database fields
        $privatetuition_data['room'] = $this->input->post('room');

        $privatetuition_data['studentID'] = $this->input->post('studentID');

        $privatetuition_data['staffID'] = $this->input->post('staffID');

        $privatetuition_data['note'] = $this->input->post('note');
        


        $privatetuition_data['courseID'] = $this->input->post('courseID');
        
          $privatetuition_data['date'] = $this->input->post('date');
        
        $privatetuition_data['time'] = $this->input->post('time');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddPrivatetuition(?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $privatetuition_data);
    }

    public function selectPrivatetuitionsPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectPrivatetuitionsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getPrivatetuitionForUpdate($privatetuitionID) {
        $stored_proc_call = "CALL selectPrivatetuitionForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $privatetuitionID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedPrivatetuition($privatetuitionID) {
        $data = array(
            'privatetuitionID' => $privatetuitionID,
            'room' => $this->input->post('room'),
            'studentID' => $this->input->post('studentID'),
            'staffID' => $this->input->post('staffID'),
            'note' => $this->input->post('note'),
    
            'courseID' => $this->input->post('courseID'),
                     'date' => $this->input->post('date'),
             'time' => $this->input->post('time')
        );

        $stored_proc_call = "CALL updateSelectedPrivatetuition(?, ?, ?, ?, ?, ?,?,?)";

        $this->db->query($stored_proc_call, $data);
    }

}
