<?php

class Books extends CI_Controller {

    function __construct() {
        parent::__construct();



        //load model 
        $this->load->model('SAOMBooks');

        //per page limit
        $this->perPage = 0;
    }

    function AddBook() {
        $book_validation_rules = array(
            array('field' => 'bookName',
                'label' => 'Book Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'author',
                'label' => 'Author',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'yearPublished',
                'label' => 'Year Published',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'category',
                'label' => 'Category',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'ISBN',
                'label' => 'ISBN',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'inStock',
                'label' => 'In Stock',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'qty',
                'label' => 'qty',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'image',
                'label' => 'image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
        );

        $this->form_validation->set_rules($book_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Main Menu view 
            $this->load->view('content/AddBook');
        } else {
            //Loads the Model of AddressBook from the models folder  
            $this->load->model('SAOMBooks');
            //Add all the details to master table in the database and if all the values are entered in properly it adds it to the other tables 
            //Calls the addEntry function in the Model AddressBook    

            $this->SAOMBooks->addEntryBook();

            redirect('Books/index');
        }
    }

    public function deleteBook() {
        $booksID = $this->input->post('booksID');

        $stored_proc_call = "CALL deleteBook(?)";
        $this->db->query($stored_proc_call, $booksID);

        redirect('Books/index');
    }

    public function index() {

        $data = array();

        // Count all record of table "contact_info" in database.
        $totalRec = $this->SAOMBooks->record_count();

        //Pagination Configuration
        $config['base_url'] = base_url() . "index.php/Books/index";
        $config['url_segment'] = 0;
        $config['total_rows'] = $totalRec;
        $config['per_page'] = $this->perPage;

        //Initialise the Pagination ibrary
        $this->pagination->initialize($config);

        //Define Offset
        $page = $this->uri->segment(0);
        $offset = !$page ?100 : $page;


        $data['books'] = $this->SAOMBooks->selectBooksPerPage($this->perPage, $offset);

        $this->load->view('content/BooksAdminPerPageView', $data);
    }

    public function updateBook() {
        $data = array();

        $this->load->model('SAOMBooks'); //Load model

        $bookID = $this->input->post('booksID'); //Get ID of selected book

        $data['book'] = $this->SAOMBooks->getBookForUpdate($bookID);

        $this->load->view('content/updateBook', $data); //Load updateBook view + add in data
    }

    public function commitBookUpdate() {
        $bookID = $this->input->post('booksID'); //Get ID of selected book 

        $book_validation_rules = array(
            array('field' => 'bookName',
                'label' => 'Book Name',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'author',
                'label' => 'Author',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'yearPublished',
                'label' => 'Year Published',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'price',
                'label' => 'Price',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'category',
                'label' => 'Category',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'ISBN',
                'label' => 'ISBN',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'inStock',
                'label' => 'In Stock',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'qty',
                'label' => 'qty',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'image',
                'label' => 'image',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
        );

        $this->form_validation->set_rules($book_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            $data['book'] = $this->SAOMBooks->getBookForUpdate($bookID);

            //Load the Main Menu view 
            $this->load->view('content/updateBook', $data);
        } else {
            $this->load->model('SAOMBooks');

            $this->SAOMBooks->updateSelectedBook($bookID);

            redirect('Books/index');
        }
    }

}

?>