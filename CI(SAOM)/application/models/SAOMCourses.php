<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMCourses extends CI_Model {

    public function record_count() {
        return $this->db->count_all("courses");
    }

    public function getCourses() {
        $stored_proc_call = "CALL viewCourseDetails()";
        $query = $this->db->query($stored_proc_call);
        return $query;
    }
    
    public function getSelectedCourse($courseID)
    {
        $stored_proc_call = "CALL getSelectedCourse(?)";
        
        $data = $this->db->query($stored_proc_call, $courseID);
        
        $row = $data->row();
        $display_block = "";
        $display_block .= "<div class='col-md-6'>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<h3>Course Info:</h3>";
        $display_block .= "<label class='col-md-3 control-label'>Course Name:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='courseName' class='form-control' type='text' value='" . $row->courseName . "'readonly/>";
        $display_block .= "<input type='hidden' name='coursesID' value='" . $row->coursesID . "'>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Description:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='description' class='form-control input-sm' type='text' value='" . $row->description . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Levels:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<select name='levels' id=''>";
        foreach($data->result_array() as $r)
        {
            $display_block .= "<option name='levels' value='" . $r['groupCategory']. "'>" . $r['groupCategory'] . "</option>";
        }
        $display_block .= "</select>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Number Of Years:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='numberOfYears' class='form-control input-sm' type='text' value='" . $row->numberOfYears . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Category:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='category' class='form-control input-sm' type='text' value='" . $row->levels . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "<div class='form-group'>";
        $display_block .= "<label class='col-md-3 control-label'>Price:</label>";
        $display_block .= "<div class='col-md-9'>";
        $display_block .= "<input name='price' class='form-control input-sm' type='text' value='". $row->price . "' readonly/>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        $display_block .= "</div>";
        
        return $display_block;
    }

    function addEntryCourse() {


        //Inserts address details from form into associative array with keys same name as database fields
        $course_data['courseName'] = $this->input->post('courseName');

        $course_data['description'] = $this->input->post('description');

        $course_data['levels'] = $this->input->post('levels');

        $course_data['numberOfYears'] = $this->input->post('numberOfYears');

        $course_data['groupCategory'] = $this->input->post('groupCategory');

        $course_data['image'] = $this->input->post('image');

        $course_data['staffID '] = $this->input->post('staffID');

        $course_data['price'] = $this->input->post('price');

        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL addCourse(?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $course_data);
    }

    public function selectCoursesPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectCoursesPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }

    public function getCourseForUpdate($coursesID) {
        $stored_proc_call = "CALL selectCourseForUpdate(?)"; //setup procedure

        $query = $this->db->query($stored_proc_call, $coursesID); //run procedure - store in array

        return $query; //return result to Books/updateBook
    }

    public function updateSelectedCourse($coursesID) {
        $data = array(
            'coursesID' => $coursesID,
            'courseName' => $this->input->post('courseName'),
            'description' => $this->input->post('description'),
            'levels' => $this->input->post('levels'),
            'numberOfYears' => $this->input->post('numberOfYears'),
            'groupCategory' => $this->input->post('groupCategory'),
            'image' => $this->input->post('image'),
            'staffID ' => $this->input->post('staffID'),
            'price' => $this->input->post('price')
        );

        $stored_proc_call = "CALL updateSelectedCourse(?,?,?,?,?,?,?,?,?)";

        $this->db->query($stored_proc_call, $data);
    }

    function commitCourseApplication($application) {
        $stored_proc_call = "CALL commitCourseApplication(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($stored_proc_call, $application);
    }
}
