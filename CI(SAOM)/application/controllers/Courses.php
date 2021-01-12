<?php

class Courses extends CI_Controller {

    function __construct() {
        parent::__construct();
        //load model 
        $this->load->model('SAOMCourses');

        //per page limit
        $this->perPage = 0;
    }

    function AddCourse() {
        $course_validation_rules = array(
            array(
                'field' => 'courseName',
                'label' => 'Course Name',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'levels',
                'label' => 'Level',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'numberOfYears',
                'label' => 'Number of Years',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'groupCategory',
                'label' => 'Group Category',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            )
        );

        $this->form_validation->set_rules($course_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 
            $data = array();

            $view_data = array(
                'content' => $this->load->view('content/AddCourse', $data, true)
            );

            $this->load->view('adminLayout', $view_data);
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMCourses');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMCourses->addEntryCourse();

            redirect('Courses/index');
        }
    }

    public function deleteCourse() {
        $coursesID = $this->input->post('coursesID');

        $stored_proc_call = "CALL deleteCourse(?)";
        $this->db->query($stored_proc_call, $coursesID);

        redirect('Courses/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMCourses->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Courses/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ? 100 : $page;


        $data['courses'] = $this->SAOMCourses->selectCoursesPerPage($this->perPage, $offset);


        $view_data = array(
            'content' => $this->load->view('content/CoursesAdminPerPageView', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function updateCourse() {
        $data = array();

        $this->load->model('SAOMCourses'); //Load model

        $coursesID = $this->input->post('coursesID'); //Get ID of selected book

        $data['course'] = $this->SAOMCourses->getCourseForUpdate($coursesID);

        $view_data = array(
            'content' => $this->load->view('content/updateCourse', $data, true)
        );

        $this->load->view('adminLayout', $view_data);
    }

    public function commitCourseUpdate() {
        $coursesID = $this->input->post('coursesID'); //Get ID of selected book 

        $course_validation_rules = array(
            array(
                'field' => 'courseName',
                'label' => 'Name',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.'
                )
            ),
            array(
                'field' => 'levels',
                'label' => 'Level',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'numberOfYears',
                'label' => 'Number of Years',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'groupCategory',
                'label' => 'Group Category',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'image',
                'label' => 'Image',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'staffID',
                'label' => 'Staff ID',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            ),
            array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide an %s.'
                )
            )
        );


        $this->form_validation->set_rules($course_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['course'] = $this->SAOMCourses->getCourseForUpdate($coursesID);

            //Load the Main Menu view 
            $this->load->view('content/updateCourse', $data);
        } else {
            $this->load->model('SAOMCourses');

            $this->SAOMCourses->updateSelectedCourse($coursesID);

            redirect('Courses/index');
        }
    }
    
    function applyForCourse()
    {
        $this->load->model('SAOMCourses'); //Load model
        
        $application = array();
        
        $application['courseName'] = $this->input->post('courseName');
        $application['coursesID'] = $this->input->post('coursesID');
        $application['description'] = $this->input->post('description');
        $application['levels'] = $this->input->post('levels');
        $application['numberOfYears'] = $this->input->post('numberOfYears');
        $application['category'] = $this->input->post('category');
        $application['price'] = $this->input->post('price');
        $application['fullName'] = $this->input->post('fullName');
        $application['email'] = $this->input->post('email');
        $application['address'] = $this->input->post('address');
        $application['phoneNumber'] = $this->input->post('phoneNumber');
        $application['dateOfBirth'] = $this->input->post('dateOfBirth');
        $application['additionalInfo'] = $this->input->post('additionalInfo');

        $this->SAOMCourses->commitCourseApplication($application);

        $view_data = array(
            'content' => $this->load->view('content/applicationSent', $application, true)
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
}
?>