<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); //Load required models etc into constructor
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
            $this->load->model('SAOMBook');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    
          
                $this->SAOMBook->addEntryEvent();
        $view_data = array(
            'content' => $this->load->view('content/home', null, TRUE),
        );

        $this->load->view('Layout', $view_data);
            
        }
    }

    public function index() {
        //Load Main Page
        //$view_data - dynamic data to be passed into view for displaying
        $view_data = array(
            'content' => $this->load->view('content/home', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewBooks() {
        $view_data = array(
            'content' => $this->load->view('content/viewBooks', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewExam() {
        $view_data = array(
            'content' => $this->load->view('content/viewExam', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function bookExams() {
        $view_data = array(
            'content' => $this->load->view('content/bookExams', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewEvents() {
        $view_data = array(
            'content' => $this->load->view('content/viewEvents', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function BookEvents() {
        $view_data = array(
            'content' => $this->load->view('content/BookEvents', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewCourses() {
        $view_data = array(
            'content' => $this->load->view('content/viewCourses', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function bookLesson() {
        $view_data = array(
            'content' => $this->load->view('content/bookLesson', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function bookCourse() {
        $view_data = array(
            'content' => $this->load->view('content/bookCourse', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function login() {
        $view_data = array(
            'content' => $this->load->view('content/login', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function profile() {
        $view_data = array(
            'content' => $this->load->view('content/profile', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function shoppingCart() {
        $view_data = array(
            'content' => $this->load->view('content/shoppingCart', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function register() {
        $view_data = array(
            'content' => $this->load->view('content/register', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function dashboard() {
        $view_data = array(
            'content' => $this->load->view('content/dashboard', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewStudents() {
        $view_data = array(
            'content' => $this->load->view('content/viewStudents', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewStaffs() {
        $view_data = array(
            'content' => $this->load->view('content/viewStaffs', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewExamsAdmin() {
        $view_data = array(
            'content' => $this->load->view('content/viewExamsAdmin', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function processExternalExams() {
        $view_data = array(
            'content' => $this->load->view('content/processExternalExams', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewCoursesAdmin() {
        $view_data = array(
            'content' => $this->load->view('content/viewCoursesAdmin', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function applyForCourses() {
        $view_data = array(
            'content' => $this->load->view('content/applyForCourses', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function allocatePrivateTuition() {
        $view_data = array(
            'content' => $this->load->view('content/allocatePrivateTuition', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewBooksAdmin() {
        $view_data = array(
            'content' => $this->load->view('content/viewBooksAdmin', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewBookOrders() {
        $view_data = array(
            'content' => $this->load->view('content/viewBookOrders', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewEventsAdmin() {
        $view_data = array(
            'content' => $this->load->view('content/ContactsPerPageView', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function processStudentTimetables() {
        $view_data = array(
            'content' => $this->load->view('content/processStudentTimetables', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function processTeachersTimetables() {
        $view_data = array(
            'content' => $this->load->view('content/processTeachersTimetables', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewStudentTimetables() {
        $view_data = array(
            'content' => $this->load->view('content/viewStudentTimetables', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function viewTeachersTimetables() {
        $view_data = array(
            'content' => $this->load->view('content/viewTeachersTimetables', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function generateReports() {
        $view_data = array(
            'content' => $this->load->view('content/generateReports', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }

    public function generateResultSheet() {
        $view_data = array(
            'content' => $this->load->view('content/generateResultSheet', null, true)
        );
        $this->load->view('adminLayout', $view_data);
    }
    
    
    function Logout() {

        unset($_SESSION['loggedIn']);
        $this->session->sess_destroy();
        redirect('Login/index');
 
    }

}
