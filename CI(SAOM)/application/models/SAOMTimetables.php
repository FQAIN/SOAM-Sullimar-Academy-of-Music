<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMTimetables extends CI_Model {

    public function record_count() {
        return $this->db->count_all("coursetimetable");
    }

    function addEntryTimetable() {


        //Inserts address details from form into associative array with keys same name as database fields
        $timetable_data['day'] = $this->input->post('day');

        $timetable_data['dates'] = $this->input->post('dates');

        $timetable_data['timeslots'] = $this->input->post('timeslots');

        $timetable_data['moduleName'] = $this->input->post('moduleName');

        $timetable_data['courseID '] = $this->input->post('courseID');

        $timetable_data['staffID '] = $this->input->post('staffID');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL addTimetable(?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $timetable_data);
    }

}
