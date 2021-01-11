<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMExams extends CI_Model {

    public function record_count() {
        return $this->db->count_all("exams");
    }

    public function getExams() {
        $stored_proc_call = "CALL viewExamDetails()";
        $query = $this->db->query($stored_proc_call);
        return $query;
    }

    public function selectExamsPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL selectExamsPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    function addEntryExam() {



        $exam_data['examName'] = $this->input->post('examName');


        $exam_data['dateOfExam'] = $this->input->post('dateOfExam');

        $exam_data['price'] = $this->input->post('price');

        $exam_data['image'] = $this->input->post('image');

        $exam_data['examTime'] = $this->input->post('examTime');

        $exam_data['coursesID'] = $this->input->post('coursesID');

        $exam_data['examCenterID'] = $this->input->post('examCenterID');

        $exam_data['staffID'] = $this->input->post('staffID');

        $exam_data['examCategory'] = $this->input->post('examCategory');

        $exam_data['examDescription'] = $this->input->post('examDescription');
        
        $exam_data['Seasons'] = $this->input->post('Seasons');
        
        $exam_data['studentID'] = $this->input->post('studentID');






        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddExam(?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?,?)";
        $this->db->query($stored_proc_call, $exam_data);
    }

    public function getExamForUpdate($examID) {
        $stored_proc_call = "CALL selectExamForUpdate(?)";

        $query = $this->db->query($stored_proc_call, $examID);

        return $query;
    }

    public function updateSelectedExam($examID) {
        $data = array(
            'examID' => $examID,
            'examName' => $this->input->post('examName'),
            'dateOfExam' => $this->input->post('dateOfExam'),
            'price' => $this->input->post('price'),
            'image' => $this->input->post('image'),
            'examCategory' => $this->input->post('examCategory'),
            'examTime' => $this->input->post('examTime'),
            'coursesID' => $this->input->post('coursesID'),
            'examCenterID' => $this->input->post('examCenterID'),
            'staffID' => $this->input->post('staffID'),
            'examDescription' => $this->input->post('examDescription'),
             
            'Seasons' => $this->input->post('Seasons'),
            'studentID' => $this->input->post('studentID')
        );

        $stored_proc_call = "CALL updateExam(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($stored_proc_call, $data);
    }

    function getSpecificExam($examID) {
        $stored_proc_call = "CALL getSpecificExam(?)";
        $query = $this->db->query($stored_proc_call, $examID);
        $rows = $query->row();

        //Prepares next result set from a previous call to mysqli_multi_query() 
        mysqli_next_result($this->db->conn_id);
        //Returns the stored procedure query as a row
        return $rows;
    }

}
