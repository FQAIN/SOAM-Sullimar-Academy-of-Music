<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMStaffs extends CI_Model {

    public function record_count() {
        return $this->db->count_all("staffs");
    }

    function addEntryStaff() {

        //Inserts address details from form into associative array with keys same name as database fields
        $staff_data['fName'] = $this->input->post('fName');

        $staff_data['lName'] = $this->input->post('lName');

        $staff_data['role'] = $this->input->post('role');

        $staff_data['dob'] = $this->input->post('dob');

        $staff_data['address'] = $this->input->post('address');

        $staff_data['email'] = $this->input->post('email');

        $staff_data['username'] = $this->input->post('username');

        $staff_data['password'] = $this->input->post('password');

        $staff_data['phone'] = $this->input->post('phone');

        $staff_data['image'] = $this->input->post('image');

        $staff_data['courseID'] = $this->input->post('courseID');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddStaff(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $staff_data);
    }

    public function selectStaffsPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectStaffsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getStaffForUpdate($staffID) {
        $stored_proc_call = "CALL selectStaffForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $staffID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedStaff($staffID) {
        $data = array(
            'staffID' => $staffID,
            'fName' => $this->input->post('fName'),
            'lName' => $this->input->post('lName'),
            'role' => $this->input->post('role'),
            'dob' => $this->input->post('dob'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone' => $this->input->post('phone'),
            'image' => $this->input->post('image'),
            'courseID' => $this->input->post('courseID')
        );

        $stored_proc_call = "CALL updateSelectedStaff(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($stored_proc_call, $data);
    }

}
