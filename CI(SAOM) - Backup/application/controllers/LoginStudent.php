<?php

class LoginStudent extends CI_Controller {

    function __construct(){
        parent::__construct();

        if($this->session->userdata('loggedIn')) {
            redirect('Home/dashboardStudent');
        }
    }

    public function index() {
         $view_data = array(
            'content' => $this->load->view('content/loginStudent', null, TRUE),
        );
         $this->load->view('Layout', $view_data);
        $this->load->model('Student');

        if($this->input->post('submit')) {

            if($this->Student->validStudent()) {
                $this->session->set_userdata('loggedIn', true);
                redirect('Home/dashboardStudent');
            }
        }
    }
}