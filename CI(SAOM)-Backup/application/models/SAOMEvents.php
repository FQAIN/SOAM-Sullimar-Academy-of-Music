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
    
    public function getEvents()
    {
        $stored_proc_call = "CALL viewEventDetails()";
        $query = $this->db->query($stored_proc_call);
        return $query;
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
    
      public function getEventForUpdate($eventID) {
        $stored_proc_call = "CALL selectEventForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $eventID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedEvent($eventID)
    {
        $data = array(
            'eventID' => $eventID,
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'dateOfEvent' => $this->input->post('dateOfEvent'),
            'price' => $this->input->post('price'),
            'location' => $this->input->post('location'),
            'image' => $this->input->post('image')
        );
        
        $stored_proc_call = "CALL updateSelectedEvent(?,?,?,?,?,?,?)";
        
        $this->db->query($stored_proc_call, $data);
    }
}
