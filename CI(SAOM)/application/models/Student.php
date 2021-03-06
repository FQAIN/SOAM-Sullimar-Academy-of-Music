<?php

Class Student extends CI_Model {

    function validStudent() {
        $student_details['email'] = $this->input->post('email');
        $student_details['password'] = $this->input->post('password');

        $selectContact = "CALL ValidStudent(?,?)";
        $query = $this->db->query($selectContact, $student_details);
        
//        $query->free_result();

        if ($query->num_rows() > 0) {
            $loggedIn = array(
                'email' => $student_details['email'],
                'loggedIn' => true
            );
            return $loggedIn;
        } else {
            $loggedIn = array(
                'loggedIn' => false
            );
            return $loggedIn;
        }
    }
    
    public function getStudent($email)
    {
        $stored_proc_call = "CALL getStudent(?)";
        $query = $this->db->query($stored_proc_call, $email );
        
        return $query->result_array()[0];
    }

}
