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
}

?>