<?php

class GenerateReports extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load model 
        $this->load->model('SAOMGenerateReports');
    }

    function skeyword() {
        $key = $this->input->post('year_added');
        $data['results'] = $this->SAOMGenerateReports->search($key);
        $view_data = array(
            'content' => $this->load->view('content/gkeyview', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    function sskeyword() {
        $key = $this->input->post('year_added');
        $data['results'] = $this->SAOMGenerateReports->ssearch($key);
        $view_data = array(
            'content' => $this->load->view('content/ggkeyview', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    function ssskeyword() {
        $key = $this->input->post('year_added');
        $data['results'] = $this->SAOMGenerateReports->sssearch($key);
        $view_data = array(
            'content' => $this->load->view('content/gggkeyview', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }
    
        function sssskeyword() {
        $key = $this->input->post('maintenanceID');
        $data['results'] = $this->SAOMGenerateReports->ssssearch($key);
        $view_data = array(
            'content' => $this->load->view('content/ggggkeyview', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }
    
            function ssssskeyword() {
        $key = $this->input->post('privatetuitionID');
        $data['results'] = $this->SAOMGenerateReports->sssssearch($key);
        $view_data = array(
            'content' => $this->load->view('content/gggggkeyview', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

}

?>