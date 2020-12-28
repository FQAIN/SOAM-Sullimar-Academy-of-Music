<?php

class Timetables extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load model 
        $this->load->model('SAOMTimetables');

        //per page limit
        $this->perPage = 0;
    }

    function AddTimetable() {
        $timetable_validation_rules = array(
            array('field' => 'day',
                'label' => 'Day',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'dates',
                'label' => 'Date',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'timeslots',
                'label' => 'Timeslots',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'moduleName',
                'label' => 'Module Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'courseID',
                'label' => 'Course ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($timetable_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 
            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddTimetable', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMTimetables');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMTimetables->addEntryTimetable();

            redirect('Home/dashboard');
        }
    }
    
    function skeyword(){
        $datas = array();
        $key = $this->input->post('courseID');
        $data['results'] = $this->SAOMTimetables->search($key);
         $view_data = array(
                'content' => $this->load->view('content/skeyview', $data, true)
            );

        $this->load->view('adminLayout',$view_data);
    }

}

?>