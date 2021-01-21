<?php

class TeachersArea extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load model 
        $this->load->model('SAOMTeachersArea');

        //per page limit
        $this->perPage = 0;
    }

    function AddTeachersArea() {

        $teachersArea_validation_rules = array(
            array('field' => 'title',
                'label' => 'Title',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'category',
                'label' => 'Category',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($teachersArea_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 

            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddTeachersArea', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMTeachersArea');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMTeachersArea->addEntryTeachersArea();

            redirect('TeachersArea/index');
        }
    }

    public function deleteTeachersArea() {
        $teachersAreaID = $this->input->post('teachersAreaID');

        $stored_proc_call = "CALL deleteTeachersArea(?)";
        $this->db->query($stored_proc_call, $teachersAreaID);

        redirect('TeachersArea/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMTeachersArea->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/TeachersArea/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['teachersAreas'] = $this->SAOMTeachersArea->selectTeachersAreaPerPage($this->perPage, $offset);

        $view_data = array(
            'content' => $this->load->view('content/TeachersAreaAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updateTeachersArea() {
        $data = array();

        $this->load->model('SAOMTeachersArea'); //Load model

        $teachersAreaID = $this->input->post('teachersAreaID'); //Get ID of selected book

        $data['teachersArea'] = $this->SAOMTeachersArea->getTeachersAreaForUpdate($teachersAreaID);

        $view_data = array(
            'content' => $this->load->view('content/updateTeachersArea', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitTeachersAreaUpdate() {
        $teachersAreaID = $this->input->post('teachersAreaID'); //Get ID of selected book 

        $teachersArea_validation_rules = array(
            array('field' => 'title',
                'label' => 'Title',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'category',
                'label' => 'Category',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($teachersArea_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['teachersArea'] = $this->SAOMTeachersArea->getTeachersAreaForUpdate($teachersAreaID);

            //Load the Main Menu view 
            $this->load->view('content/updateTeachersArea', $data);
        } else {
            $this->load->model('SAOMTeachersArea');

            $this->SAOMTeachersArea->updateSelectedTeachersArea($teachersAreaID);

            redirect('TeachersArea/index');
        }
    }

}

?>