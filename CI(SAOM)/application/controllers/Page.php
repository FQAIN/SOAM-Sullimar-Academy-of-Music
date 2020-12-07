<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();

         

        //load model 
        $this->load->model('SAOMBook');

        //per page limit
        $this->perPage = 0;
    }

    public function index() {

        $data = array();
        
        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMBook->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url()."index.php/Page/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;
        
        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);
        
        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page?100:$page;
        
        
        $data['events'] = $this->SAOMBook->selectContactsPerPage($this->perPage, $offset);
           
        $this->load->view('content/ContactsPerPageView', $data);
    }
}
?>