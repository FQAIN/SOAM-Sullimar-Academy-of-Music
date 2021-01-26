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
        
       






        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddExam(?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?)";
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
             
            'Seasons' => $this->input->post('Seasons')
        
        );

        $stored_proc_call = "CALL updateExam(?,?,?,?,?,?,?,?,?,?,?,?)";

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
    
    
      public function getSelectedExam($examID)
    {
        $stored_proc_call = "CALL getSelectedExam(?)";
        
        $query = $this->db->query($stored_proc_call, $examID);
        
         $row = $query->row();
        $display_block = "";
        $display_block .= "<div class='col-md-6'>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<h3>Exam Info:</h3>";
        $display_block .= "<label class='col-md-3 control-label'>Exam Name:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='examName' class='form-control' type='text' value='" . $row->examName . "'readonly/>";
        $display_block .= "<input type='hidden' name='examID' value='" . $row->examID . "'>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Description:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='description' class='form-control input-sm' type='text' value='" . $row->examDescription . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Levels:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<select name='levels' id=''>";
        foreach($query->result_array() as $r)
        {
            $display_block .= "<option name='levels' value='" . $r['examCategory']. "'>" . $r['examCategory'] . "</option>";
        }
        $display_block .= "</select>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>date of Exam:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='dateOfExam' class='form-control input-sm' type='text' value='" . $row->dateOfExam . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Time:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='exaTime' class='form-control input-sm' type='text' value='" . $row->examTime . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Price:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='price' class='form-control input-sm' type='text' value='". $row->price . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
         $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Session:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='Session' class='form-control input-sm' type='text' value='". $row->Seasons . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        
        $display_block .= "</div>";
        
        return $display_block;
    }
    
    
        function commitExamApplication($application) {
        $stored_proc_call = "CALL commitExamApplication(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($stored_proc_call, $application);
    }
    

}
