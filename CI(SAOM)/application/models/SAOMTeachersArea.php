<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMTeachersArea extends CI_Model {

    public function record_count() {
        return $this->db->count_all("teachersArea");
    }

    function addEntryTeachersArea() {
              
        $teachersArea_data['title'] = $this->input->post('title');

        $teachersArea_data['description'] = $this->input->post('description');

        $teachersArea_data['image'] = $this->input->post('image');
        
        $teachersArea_data['category'] = $this->input->post('category');
     

        $stored_proc_call = "CALL addTeachersArea(?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $teachersArea_data);
        
        
    }

    public function selectTeachersAreaPerPage($limit, $start) {
        
          //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectTeachersAreaPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
        
    }

    public function getTeachersAreaForUpdate($teachersAreaID) {
            
          $stored_proc_call = "CALL selectTeachersAreaForUpdate(?)"; 

        $query = $this->db->query($stored_proc_call, $teachersAreaID); 

        return $query; 
        
    }

    public function updateSelectedTeachersArea($teachersAreaID) {
        
         $data = array(
            'teachersAreaID' => $teachersAreaID,
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $this->input->post('image'),
            'category' => $this->input->post('category')
        
        );

        $stored_proc_call = "CALL updateSelectedTeachersArea(?, ?, ?, ?,?)";

        $this->db->query($stored_proc_call, $data);
        
    }

}
