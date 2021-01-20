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
        
    }

    public function selectTeachersAreaPerPage($limit, $start) {
        
    }

    public function getTeachersAreaForUpdate($teachersAreaID) {
        
    }

    public function updateSelectedTeachersArea($teachersAreaID) {
        
    }

}
