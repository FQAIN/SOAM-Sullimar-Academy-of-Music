<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); //Load required models etc into constructor
    }
    
    public function index()
    {
        //Load Main Page
        //$view_data - dynamic data to be passed into view for displaying
        $view_data = array(
            'content' => $this->load->view('content/home', null, true)
        );
        $this->load->view('layout', $view_data);
    }
    
    public function addItemToTeachersArea()
    {
        $view_data = array(
            'content' => $this->load->view('content/addItemToTeachersArea', null, true)
        );
        $this->load->view('layout', $view_data);
    }
}
