<?php

class Maintenances extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMMaintenances');

        //per page limit
        $this->perPage = 0;
    }

    function AddMaintenance() {

        $maintenance_validation_rules = array(
            array('field' => 'instrumentID',
                'label' => 'Instrument ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'note',
                'label' => 'Note',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($maintenance_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 

            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddMaintenance', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMMaintenances');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMMaintenances->addEntryMaintenance();

            redirect('Maintenances/index');
        }
    }

    public function deleteMaintenance() {
        $maintenanceID = $this->input->post('maintenanceID');

        $stored_proc_call = "CALL deleteMaintenance(?)";
        $this->db->query($stored_proc_call, $maintenanceID);

        redirect('Maintenances/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMMaintenances->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Maintenances/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['maintenances'] = $this->SAOMMaintenances->selectMaintenancesPerPage($this->perPage, $offset);

        $view_data = array(
            'content' => $this->load->view('content/MaintenancesAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updateMaintenance() {
        $data = array();

        $this->load->model('SAOMMaintenances'); //Load model

        $maintenanceID = $this->input->post('maintenanceID'); //Get ID of selected book

        $data['maintenance'] = $this->SAOMMaintenances->getMaintenanceForUpdate($maintenanceID);

        $view_data = array(
            'content' => $this->load->view('content/updateMaintenance', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitMaintenanceUpdate() {
        $maintenanceID = $this->input->post('maintenanceID'); //Get ID of selected book 

        $maintenance_validation_rules = array(
            array('field' => 'instrumentID',
                'label' => 'Instrument ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'note',
                'label' => 'Note',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($maintenance_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['maintenance'] = $this->SAOMMaintenances->getMaintenanceForUpdate($maintenanceID);

            //Load the Main Menu view 
            $this->load->view('content/updateMaintenance', $data);
        } else {
            $this->load->model('SAOMMaintenances');

            $this->SAOMMaintenances->updateSelectedMaintenance($maintenanceID);

            redirect('Maintenances/index');
        }
    }

}

?>