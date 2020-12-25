<?php

class Pexams extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMPexams');

        //per page limit
        $this->perPage = 0;
    }

    function AddPexam() {

      $pexam_validation_rules = array(
            array('field' => 'examID',
                'label' => 'Exam ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($pexam_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 

            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddPexam', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMPexams');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMPexams->addEntryPexam();

            redirect('Pexams/index');
        }
    }

    public function deletePexam() {
        $pexamID = $this->input->post('pexamID');

        $stored_proc_call = "CALL deletePexam(?)";
        $this->db->query($stored_proc_call, $pexamID);

        redirect('Pexams/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMPexams->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Pexams/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['pexams'] = $this->SAOMPexams->selectPexamsPerPage($this->perPage, $offset);

        $view_data = array(
            'content' => $this->load->view('content/PexamsAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updatePexam() {
        $data = array();

        $this->load->model('SAOMPexams'); //Load model

        $pexamID = $this->input->post('pexamID'); //Get ID of selected book

        $data['pexam'] = $this->SAOMPexams->getPexamForUpdate($pexamID);

        $view_data = array(
            'content' => $this->load->view('content/updatePexam', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitPexamUpdate() {
        $pexamID = $this->input->post('pexamID'); //Get ID of selected book 

        $pexam_validation_rules = array(
            array('field' => 'examID',
                'label' => 'Exam ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($pexam_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['pexam'] = $this->SAOMPexams->getPexamForUpdate($pexamID);

            //Load the Main Menu view 
            $this->load->view('content/updatePexam', $data);
        } else {
            $this->load->model('SAOMPexams');

            $this->SAOMPexams->updateSelectedPexam($pexamID);

            redirect('Pexams/index');
        }
    }

}

?>