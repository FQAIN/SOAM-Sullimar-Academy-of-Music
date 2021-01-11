<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Exams extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMExams');

        //per page limit
        $this->perPage = 0;
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMExams->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Exams/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['exams'] = $this->SAOMExams->selectExamsPerPage($this->perPage, $offset);



        $view_data = array(
            'content' => $this->load->view('content/ExamsAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function deleteExam() {
        $examID = $this->input->post('examID');

        $stored_proc_call = "CALL deleteExam(?)";
        $this->db->query($stored_proc_call, $examID);

        redirect('Exams/index');
    }

    function AddExam() {
        $exam_validation_rules = array(
            array('field' => 'examName',
                'label' => 'examName',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'examDescription',
                'label' => 'examDescription',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'examTime',
                'label' => 'examTime',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'coursesID',
                'label' => 'coursesID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'staffID',
                'label' => 'staffID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'dateOfExam',
                'label' => 'dateOfExam',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'examCategory',
                'label' => 'examCategory',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'image',
                'label' => 'image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'examCenterID',
                'label' => 'examCenterID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
              array('field' => 'Seasons',
                'label' => 'Seasons',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
             array('field' => 'studentID',
                'label' => 'studentID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($exam_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddExam', $data, true)
            );
            $this->load->view('adminLayout', $view_data);
        } else {

            $this->load->model('SAOMExams');


            $this->SAOMExams->addEntryExam();

            redirect('Exams/index');
        }
    }

    public function updateExam() {

        $data = array();

        $this->load->model('SAOMExams');

        $examID = $this->input->post('examID');

        $data['exams'] = $this->SAOMExams->getExamForUpdate($examID);

        $view_data = array(
            'content' => $this->load->view('content/updateExam', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitExamUpdate() {

        $examID = $this->input->post('examID');

        $exam_validation_rules = array(
            array('field' => 'examName',
                'label' => 'examName',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'dateOfExam',
                'label' => 'dateOfExam',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'price',
                'label' => 'price',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'image',
                'label' => 'image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'examCategory',
                'label' => 'examCategory',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'examTime',
                'label' => 'examTime',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'coursesID',
                'label' => 'coursesID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'examCenterID',
                'label' => 'examCenterID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'staffID',
                'label' => 'staffID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'examDescription',
                'label' => 'examDescription',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
               array('field' => 'Seasons',
                'label' => 'Seasons',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
             array('field' => 'studentID',
                'label' => 'studentID',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.'))
        );

        $this->form_validation->set_rules($exam_validation_rules);
        if ($this->form_validation->run() == FALSE) {

            $data['exams'] = $this->SAOMExams->getExamForUpdate($examID);

            $this->load->view('content/updateExam', $data);
        } else {

            $this->load->model('SAOMExams');

            $this->SAOMExams->updateSelectedExam($examID);

            redirect('Exams/index');
        }
    }

}
