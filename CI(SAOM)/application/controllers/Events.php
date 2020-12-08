<?php

class Events extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMEvents');

        //per page limit
        $this->perPage = 0;
    }

    function AddEvent() {
        $event_validation_rules = array(
            array('field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'dateOfEvent',
                'label' => 'Date Of Event',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'location',
                'label' => 'Location',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'Image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($event_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 
            $this->load->view('content/AddEvent');
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMEvents');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMEvents->addEntryEvent();

            redirect('Events/index');
        }
    }

    public function deleteEvent() {
        $eventID = $this->input->post('eventID');

        $stored_proc_call = "CALL deleteEvent(?)";
        $this->db->query($stored_proc_call, $eventID);

        redirect('Events/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMEvents->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Events/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['events'] = $this->SAOMEvents->selectEventsPerPage($this->perPage, $offset);

        $this->load->view('content/EventsAdminPerPageView', $data);
    }

}

?>