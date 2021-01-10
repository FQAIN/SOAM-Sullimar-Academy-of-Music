<?php

class ShoppingCart extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SAOMBooks');
        $this->load->model('SAOMExams');
        $this->load->model('SAOMEvents');
        $this->load->model('SAOMShoppingCart');
    }

    //Non LoggedIn Users
    function addBookToCartNS($booksID) {
        $book = $this->SAOMBooks->getSpecificBook($booksID);

        //User their session ID as email field - keeps the entry unique
        $data['email'] = $_SESSION;
        $data['examID'] = null;
        $data['eventID'] = null;
        $data['booksID'] = $booksID;
        $data['product_name'] = $book->bookName;
        $data['product_desc'] = $book->description;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $book->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $book->image;

        if (!$this->SAOMShoppingCart->AddToCartNS($data)) {
            echo 'Error';
        } else {
            $data = array();

            //Use non registered users unique session ID to view their items added to cart
            $session_id = $_SESSION;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($session_id);

            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );

            //Adds the partial view from the studentLayout view
            $this->load->view('layout', $view_data);
        }
    }

    function AddExamToCartNS($examID) {
        $exam = $this->SAOMExams->getSpecificExam($examID);
        
        $data['email'] = $_SESSION;
        $data['examID'] = $examID;
        $data['eventID'] = null;
        $data['booksID'] = null;
        $data['product_name'] = $exam->examName;
        $data['product_desc'] = $exam->examDescription;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $exam->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $exam->image;

        if (!$this->SAOMShoppingCart->AddToCartNS($data)) {
            echo 'Error';
        } else {
            $sessionID = $_SESSION;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($sessionID);

            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );
            //Adds the partial view from the layout view
            $this->load->view('layout', $view_data);
        }
    }

    function AddEventToCartNS($eventID) {
        $event = $this->SAOMEvents->getSpecificEvent($eventID);

        $data['session_id'] = $_SESSION;
        $data['examID'] = null;
        $data['eventID'] = $eventID;
        $data['booksID'] = null;
        $data['product_name'] = $event->name;
        $data['product_desc'] = $event->description;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $event->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $event->image;

        if (!$this->SAOMShoppingCart->AddToCartNS($data)) {
            echo 'Error';
        } else {
            $sessionID = $_SESSION;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($sessionID);

            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );
            //Adds the partial view from the layout view
            $this->load->view('layout', $view_data);
        }
    }
    
    public function deleteItem() {
        if($this->input->post('booksID'))
        {
            $delete['booksID'] = $this->input->post('booksID');
        }
        else if($this->input->post('examID'))
        {
            $delete['examID'] = $this->input->post('examID');
        }
        else if($this->input->post('eventID'))
        {
            $delete['eventID'] = $this->input->post('eventID');
        }
        
        $delete['userID'] = $this->input->post('userID');

        $this->SAOMShoppingCart->deleteCartItem($delete);
        
        $data['items'] = $this->SAOMShoppingCart->getCartItems($delete['userID']);
        
        $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );
        
        //Adds the partial view from the studentLayout view
        $this->load->view('layout', $view_data);
    }
}
