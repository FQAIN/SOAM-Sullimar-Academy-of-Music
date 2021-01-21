<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();

        if($this->session->userdata('loggedIn')) {
            redirect('Home/dashboard');
        }
    }

    public function index() {
         $view_data = array(
            'content' => $this->load->view('content/login', null, TRUE),
        );
         $this->load->view('Layout', $view_data);
        $this->load->model('User');

        if($this->input->post('submit')) {

            if($this->User->validUser()) {
                $this->session->set_userdata('loggedIn', true);
                redirect('TeachersArea/index');
            }
        }
    }
}