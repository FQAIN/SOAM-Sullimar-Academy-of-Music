<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMGenerateReports extends CI_Model {

    public function record_count() {
        return $this->db->count_all("courseapplications");
    }

    function search($key) {
        $this->db->like('year_added', $key);
        $this->db->order_by('courseName', 'ASC');
        $query = $this->db->get('courseapplications');
        return $query->result();
    }

}
