<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMStudents extends CI_Model {

    public function record_count() {
        return $this->db->count_all("student");
    }

    public function selectStudentsPerPage($limit, $start) {

        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectStudentsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getStudentForUpdate($studentID) {
        $stored_proc_call = "CALL selectStudentForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $studentID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }
    
    public function getStudentForPurchase($email) {
        $stored_proc_call = "CALL selectStudentForPurchase(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $email); //run procedure - store in array
        
        if( $query->num_rows() == 1 )
        {
            return $query->row_array();
        }
        else
        {
            return FALSE; //return result to Books/updateBook
        }
    }

    function addEntryStudent() {


        $student_data['username'] = $this->input->post('username');

        $student_data['password'] = $this->input->post('password');

        $student_data['email'] = $this->input->post('email');

        $student_data['dob'] = $this->input->post('dob');

        $student_data['phone'] = $this->input->post('phone');

        $student_data['dateEnrollment'] = $this->input->post('dateEnrollment');

        $student_data['fName'] = $this->input->post('fName');

        $student_data['lName'] = $this->input->post('lName');

        $student_data['address'] = $this->input->post('address');

        $student_data['image'] = $this->input->post('image');

        $student_data['result'] = $this->input->post('result');

        $student_data['result'] = $this->input->post('result');

        $student_data['courseID'] = $this->input->post('courseID');


        $stored_proc_call = "CALL addStudent(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
        $this->db->query($stored_proc_call, $student_data);
    }

    public function updateSelectedStudent($studentID) {
        $data = array(
            'studentID' => $studentID,
            'fName' => $this->input->post('fName'),
            'lName' => $this->input->post('lName'),
            'dateEnrollment' => $this->input->post('dateEnrollment'),
            'dob' => $this->input->post('dob'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone' => $this->input->post('phone'),
            'image' => $this->input->post('image'),
            'result' => $this->input->post('result'),
            'courseID' => $this->input->post('courseID'),
        );

        $stored_proc_call = "CALL updateStudent(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

        $this->db->query($stored_proc_call, $data);
    }

}
