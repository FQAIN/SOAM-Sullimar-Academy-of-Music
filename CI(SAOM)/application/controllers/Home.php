<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct(); //Load required models etc into constructor
        $this->load->model('SAOMShoppingCart');
    }

    public function index() {
        //Load Main Page
        if ($this->session->userdata('loggedIn')) {
            $view_data = array(
                'content' => $this->load->view('content/home', null, true)
            );
            $this->load->view('adminLayout', $view_data);
        } else {
            $view_data = array(
                'content' => $this->load->view('content/home', null, true)
            );
            $this->load->view('layout', $view_data);
        }
    }

    public function viewBooks() {
        $this->load->model('SAOMBooks');

        $data = array();

        $data['books'] = $this->SAOMBooks->getBooks();

        $view_data = array(
            'content' => $this->load->view('content/viewBooks', $data, true)
        );

        $this->load->view('layout', $view_data);
    }

    public function viewBooksS() {
        $this->load->model('SAOMBooks');

        $data = array();

        $data['books'] = $this->SAOMBooks->getBooks();

        $view_data = array(
            'content' => $this->load->view('content/viewBooksS', $data, true)
        );

        $this->load->view('studentLayout', $view_data);
    }

    public function viewExam() {

        $this->load->model('SAOMExams');

        $data = array();

        $data['exams'] = $this->SAOMExams->getExams();

        $view_data = array(
            'content' => $this->load->view('content/viewExam', $data, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewExamS() {

        $this->load->model('SAOMExams');

        $data = array();

        $data['exams'] = $this->SAOMExams->getExams();

        $view_data = array(
            'content' => $this->load->view('content/viewExamS', $data, true)
        );
        $this->load->view('studentLayout', $view_data);
    }

    public function bookExam($examID) {
        $this->load->model('SAOMExams');
        
        $data = array();
        
        echo $examID;
        
        $data['ExamDetails'] = $this->SAOMExams->getSelectedExam($examID);
        
        $view_data = array(
            'content' => $this->load->view('content/bookExam', $data, true)
        );
        
        if (!strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('layout', $view_data);
        }
        else if(strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('studentLayout', $view_data);
        }
    }

    public function viewEvents() {

        $this->load->model('SAOMEvents');

        $data = array();

        $data['events'] = $this->SAOMEvents->getEvents();

        $view_data = array(
            'content' => $this->load->view('content/viewEvents', $data, true)
        );

        $this->load->view('layout', $view_data);
    }

    public function viewEventsS() {

        $this->load->model('SAOMEvents');

        $data = array();

        $data['events'] = $this->SAOMEvents->getEvents();

        $view_data = array(
            'content' => $this->load->view('content/viewEventsS', $data, true)
        );

        $this->load->view('studentLayout', $view_data);
    }

    public function BookEvents() {
        $view_data = array(
            'content' => $this->load->view('content/BookEvents', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function liveTV() {
        $view_data = array(
            'content' => $this->load->view('content/liveTV', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewCourses() {
        $this->load->model('SAOMCourses');

        $data = array();

        $data['courses'] = $this->SAOMCourses->getCourses();

        $view_data = array(
            'content' => $this->load->view('content/viewCourses', $data, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function viewCoursesS() {
        $this->load->model('SAOMCourses');

        $data = array();

        $data['courses'] = $this->SAOMCourses->getCourses();

        $view_data = array(
            'content' => $this->load->view('content/viewCourses', $data, true)
        );
        $this->load->view('studentLayout', $view_data);
    }

    public function bookLesson() {
        $view_data = array(
            'content' => $this->load->view('content/bookLesson', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function bookCourse($coursesID) {
        $this->load->model('SAOMCourses');
        
        $data = array();
        
        echo $coursesID;
        
        $data['courseDetails'] = $this->SAOMCourses->getSelectedCourse($coursesID);
        
        $view_data = array(
            'content' => $this->load->view('content/bookCourse', $data, true)
        );
        
        if (!strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('layout', $view_data);
        }
        else if(strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('studentLayout', $view_data);
        }
    }

    public function login() {
        $view_data = array(
            'content' => $this->load->view('content/login', null, true)
        );
        $this->load->view('layout', $view_data);
    }

    public function loginStudent() {
        $view_data = array(
            'content' => $this->load->view('content/loginStudent', null, true)
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

        //Non registered users use their unique session ID to view their added items in the cart DB
        $data = array();
        $session_id = $_SESSION;
        $data['items'] = $this->SAOMShoppingCart->getCartItems($session_id);

        $view_data = array(
            'content' => $this->load->view('content/view_cart', $data, true)
        );
        $this->load->view('layout', $view_data);
    }
    
    public function shoppingCartS() {

        $data = array();
        $email = $this->session->userdata('email');
        $data['items'] = $this->SAOMShoppingCart->getCartItems($email);

        $view_data = array(
            'content' => $this->load->view('content/view_cart', $data, true)
        );
        $this->load->view('studentLayout', $view_data);
    }
    
    public function purchases() {
        $this->load->model('SAOMStudents');
        $this->load->model('SAOMShoppingCart');
        
        $data = array();
        
        $email = $this->input->post('userID');
        
        $data['items'] = $this->SAOMShoppingCart->getCartItems($email);
        
        $data['user'] = $this->SAOMStudents->getStudentForPurchase($email);
        
        $view_data = array(
            'content' => $this->load->view('content/purchases', $data, true)
        );
        
        if (!strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('layout', $view_data);
        }
        else if(strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('studentLayout', $view_data);
        }
    }
    
    function confirmation()
    {
        $view_data = array(
            'content' => $this->load->view('content/confirmation', null, true)
        );
        
        if (!strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('layout', $view_data);
        }
        else if(strpos($this->session->userdata('email'), '@'))
        {
            $this->load->view('studentLayout', $view_data);
        }
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

    public function dashboardStudent() {
        $view_data = array(
            'content' => $this->load->view('content/dashboardStudent', null, true)
        );
        $this->load->view('studentLayout', $view_data);
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
            'content' => $this->load->view('content/BooksAdminPerPageView', null, true)
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
            'content' => $this->load->view('content/EventsAdminPerPageView', null, true)
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

    public function viewStudentTimetablesS() {
        $view_data = array(
            'content' => $this->load->view('content/viewStudentTimetablesS', null, true)
        );
        $this->load->view('studentLayout', $view_data);
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

    function logoutStudent() {

        unset($_SESSION['loggedIn']);
        $this->session->sess_destroy();
        redirect('LoginStudent/index');
    }

}
