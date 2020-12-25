<?php

class Students extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMStudents');

        //per page limit
        $this->perPage = 0;
    }

    public function deleteStudent() {
        $studentID = $this->input->post('studentID');

        $stored_proc_call = "CALL deleteStudent(?)";
        $this->db->query($stored_proc_call, $studentID);

        redirect('Students/index');
    }

    function AddStudent() {
        $student_validation_rules = array(
            array('field' => 'fName',
                'label' => 'First Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'lName',
                'label' => 'Last Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'dateEnrollment',
                'label' => 'Date of Enrollment',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'dob',
                'label' => 'Date of Birth',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'address',
                'label' => 'Address',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'result',
                'label' => 'Result',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($student_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 
            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddStudent', $data, true)
            );

            $this->load->view('layout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMStudents');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMStudents->addEntryStudent();

            redirect('Home/index');
        }
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMStudents->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Students/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['students'] = $this->SAOMStudents->selectStudentsPerPage($this->perPage, $offset);

        $view_data = array(
            'content' => $this->load->view('content/StudentsAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updateStudent() {
        $data = array();

        $this->load->model('SAOMStudents'); //Load model

        $studentID = $this->input->post('studentID'); //Get ID of selected book

        $data['students'] = $this->SAOMStudents->getStudentForUpdate($studentID);

        $view_data = array(
            'content' => $this->load->view('content/updateStudent', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitStudentUpdate() {
        $studentID = $this->input->post('studentID'); //Get ID of selected book 

        $student_validation_rules = array(
            array('field' => 'fName',
                'label' => 'First Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'lName',
                'label' => 'Last Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'dateEnrollment',
                'label' => 'Date of Enrollment',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'dob',
                'label' => 'Date of Birth',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'address',
                'label' => 'Address',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'result',
                'label' => 'Result',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.'))
        );

        $this->form_validation->set_rules($student_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['students'] = $this->SAOMStudents->getStudentForUpdate($studentID);

            //Load the Main Menu view 
            $this->load->view('content/updateStudent', $data);
        } else {
            $this->load->model('SAOMStudents');

            $this->SAOMStudents->updateSelectedStudent($studentID);

            redirect('Students/index');
        }
    }

}

?>