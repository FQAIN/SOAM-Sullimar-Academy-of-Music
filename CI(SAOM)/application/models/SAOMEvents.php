<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMEvents extends CI_Model {

    public function record_count() {
        return $this->db->count_all("saomevents");
    }

    function addEntryEvent() {


        //Inserts address details from form into associative array with keys same name as database fields
        $event_data['name'] = $this->input->post('name');
        $event_data['description'] = $this->input->post('description');
        $event_data['dateOfEvent'] = $this->input->post('dateOfEvent');
        $event_data['price'] = $this->input->post('price');
        $event_data['location'] = $this->input->post('location');
        $event_data['Image'] = $this->input->post('Image');
        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddEvent(?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $event_data);
    }

    public function selectEventsPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectContactsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }
}
