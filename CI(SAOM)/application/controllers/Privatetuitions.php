<?php

class Privatetuitions extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMPrivatetuitions');

        //per page limit
        $this->perPage = 0;
    }

    function AddPrivatetuition() {

        $privatetuition_validation_rules = array(
            array('field' => 'room',
                'label' => 'Room',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'studentID',
                'label' => 'Student ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'note',
                'label' => 'Note',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
          
            array('field' => 'courseID',
                'label' => 'Course ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
                 array('field' => 'date',
                'label' => 'date',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
               array('field' => 'time',
                'label' => 'time',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
        );

        $this->form_validation->set_rules($privatetuition_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 

            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddPrivatetuition', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMPrivatetuitions');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMPrivatetuitions->addEntryPrivatetuition();

            redirect('Privatetuitions/index');
        }
    }

    public function deletePrivatetuition() {
        $privatetuitionID = $this->input->post('privatetuitionID');

        $stored_proc_call = "CALL deletePrivatetuition(?)";
        $this->db->query($stored_proc_call, $privatetuitionID);

        redirect('Privatetuitions/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMPrivatetuitions->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Privatetuitions/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['privatetuitions'] = $this->SAOMPrivatetuitions->selectPrivatetuitionsPerPage($this->perPage, $offset);

        $view_data = array(
            'content' => $this->load->view('content/PrivatetuitionsAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updatePrivatetuition() {
        $data = array();

        $this->load->model('SAOMPrivatetuitions'); //Load model

        $privatetuitionID = $this->input->post('privatetuitionID'); //Get ID of selected book

        $data['privatetuition'] = $this->SAOMPrivatetuitions->getPrivatetuitionForUpdate($privatetuitionID);

        $view_data = array(
            'content' => $this->load->view('content/updatePrivatetuition', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitPrivatetuitionUpdate() {
        $privatetuitionID = $this->input->post('privatetuitionID'); //Get ID of selected book 

        $privatetuition_validation_rules = array(
            array('field' => 'room',
                'label' => 'Room',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'studentID',
                'label' => 'Student ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'note',
                'label' => 'Note',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
                array('field' => 'date',
          
            array('field' => 'courseID',
                'label' => 'Course ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
                   'label' => 'date',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
               array('field' => 'time',
                'label' => 'time',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($privatetuition_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['privatetuition'] = $this->SAOMPrivatetuitions->getPrivatetuitionForUpdate($privatetuitionID);

            //Load the Main Menu view 
            $this->load->view('content/updatePrivatetuition', $data);
        } else {
            $this->load->model('SAOMPrivatetuitions');

            $this->SAOMPrivatetuitions->updateSelectedPrivatetuition($privatetuitionID);

            redirect('Privatetuitions/index');
        }
    }

}

?>