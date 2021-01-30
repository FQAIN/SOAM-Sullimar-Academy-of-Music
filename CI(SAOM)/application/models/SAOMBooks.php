<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class SAOMBooks extends CI_Model {

    public function record_count() {
        return $this->db->count_all("books");
    }
    
     public function getBooks()
    {
        $stored_proc_call = "CALL viewBookDetails()";
        $query = $this->db->query($stored_proc_call);
        return $query;
    }

    function addEntryBook() {

        //Inserts address details from form into associative array with keys same name as database fields
        $book_data['bookName'] = $this->input->post('bookName');
        
        $book_data['description'] = $this->input->post('description');
        
        $book_data['author'] = $this->input->post('author');
        
        $book_data['yearPublished'] = $this->input->post('yearPublished');
        
        $book_data['price'] = $this->input->post('price');
        
        $book_data['category'] = $this->input->post('category');
        
        $book_data['ISBN'] = $this->input->post('ISBN');
        
        $book_data['inStock'] = $this->input->post('inStock');
        
        $book_data['qty'] = $this->input->post('qty');
        
        $book_data['image'] = $this->input->post('image');
        
        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "CALL AddBook(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($stored_proc_call, $book_data);
    }

    public function selectBooksPerPage($limit, $start) {
        //Set the Start and Limit – only retrieves rows between these limits
        $select_data['limit'] = $limit;
        $select_data['start'] = $start;


        $stored_proc_call = "CALL SelectBooksPerPage(?,?)";
        $query = $this->db->query($stored_proc_call, $select_data);

        mysqli_next_result($this->db->conn_id);
        return $query;
    }
    
    public function getBookForUpdate($bookID)
    {
        $stored_proc_call = "CALL selectBookForUpdate(?)"; //setup procedure
        
        $query = $this->db->query($stored_proc_call, $bookID); //run procedure - store in array
        
        return $query; //return result to Books/updateBook
    }
    
    public function updateSelectedBook($booksID)
    {
        $data = array(
            'booksID' => $booksID,
            'bookName' => $this->input->post('bookName'),
            'description' => $this->input->post('description'),
            'author' => $this->input->post('author'),
            'yearPublished' => $this->input->post('yearPublished'),
            'price' => $this->input->post('price'),
            'category' => $this->input->post('category'),
            'ISBN' => $this->input->post('ISBN'),
            'inStock' => $this->input->post('inStock'),
            'qty' => $this->input->post('qty'),
            'image' => $this->input->post('image')
        );
        
        $stored_proc_call = "CALL updateSelectedBook(?,?,?,?,?,?,?,?,?,?,?)";
        
        $this->db->query($stored_proc_call, $data);
    }
    
    function getSpecificBook($booksID) {
        $stored_proc_call = "CALL getSpecificBook(?)";
        $query = $this->db->query($stored_proc_call, $booksID);
        $rows = $query->row();

        //Prepares next result set from a previous call to mysqli_multi_query() 
        mysqli_next_result($this->db->conn_id);
        //Returns the stored procedure query as a row
        return $rows;
    }
    
    function getBookOrders(){
        $stored_proc_call = "CALL getBookOrders()";
        $query = $this->db->query($stored_proc_call);  
        
         return $query->result_array();
    }
}
