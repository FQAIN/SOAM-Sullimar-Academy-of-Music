<?php

class ShoppingCartStudent extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('SAOMBooks');
        $this->load->model('SAOMExams');
        $this->load->model('SAOMEvents');
        $this->load->model('SAOMShoppingCart');
    }

    function addBookToCart($booksID) {
        $book = $this->SAOMBooks->getSpecificBook($booksID);

        $data['session_id'] = $this->session->session_id;
        $data['examID'] = null;
        $data['eventID'] = null;
        $data['booksID'] = $booksID;
        $data['product_name'] = $book->bookName;
        $data['product_desc'] = $book->description;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $book->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $book->image;

        if (!$this->SAOMShoppingCart->AddToCart($data)) {
            echo 'Error';
        } else {
            $data = array();

            $sessionID = $this->session->session_id;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($sessionID);

            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );

            //Adds the partial view from the studentLayout view
            $this->load->view('studentLayout', $view_data);
        }
    }

    function AddExamToCart($examID) {
        $exam = $this->SAOMExams->getSpecificExam($examID);

        $data['session_id'] = $this->session->session_id;
        $data['examID'] = $examID;
        $data['eventID'] = null;
        $data['booksID'] = null;
        $data['product_name'] = $exam->examName;
        $data['product_desc'] = $exam->examDescription;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $exam->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $exam->image;

        if (!$this->SAOMShoppingCart->AddToCart($data)) {
            echo 'Error';
        } else {
            $sessionID = $this->session->session_id;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($sessionID);

            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );
            //Adds the partial view from the studentLayout view
            $this->load->view('studentLayout', $view_data);
        }
    }

    function AddEventToCart($eventID) {
        $event = $this->SAOMEvents->getSpecificEvent($eventID);

        $data['session_id'] = $this->session->session_id;
        $data['examID'] = null;
        $data['eventID'] = $eventID;
        $data['booksID'] = null;
        $data['product_name'] = $event->name;
        $data['product_desc'] = $event->description;
        $data['quantity'] = $this->input->post('quantity');
        $data['price'] = $event->price;
        $data['date_added'] = date('Y-m-d H:i:s');
        $data['image_path'] = $event->image;

        if (!$this->SAOMShoppingCart->AddToCart($data)) {
            echo 'Error';
        } else {
            $sessionID = $this->session->session_id;
            $data['items'] = $this->SAOMShoppingCart->getCartItems($sessionID);
            $view_data = array(
                'content' => $this->load->view('content/view_cart', $data, TRUE)
            );
            //Adds the partial view from the studentLayout view
            $this->load->view('studentLayout', $view_data);
        }
    }

}
