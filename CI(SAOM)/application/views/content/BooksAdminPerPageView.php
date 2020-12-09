<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
        <style>
body {
  background: white;
  color: black;
  font-family: sans-serif;
}

/*Responsive table*/
table { 
  width: 100%; 
  border-collapse: collapse; 
  background: #222; 
  color: #f3f3f3;
}

td, th { 
  padding: 8px; 
  text-align: left; 
}

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #2c343b; 
}

th { 
  background: #000; 
  font-weight: bold; 
}

h1 a {
  text-decoration: none;
  color: #fff;
}   

p a:link, p a:visited{
    text-decoration: none;
     color: black;
}

button a:link, button a:visited{
    text-decoration: none;
     color: white;
}


p{
    color: black;
}

.round {
  background: #0069eb;
  border-radius: 30px;
  border: none;
  color: #fff;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none; }
        </style>
    </head>
    <body>
          <form>  
        <div ><h1>All Book Details</h1></div>
        <div>
                <p><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
            
            <table>  <tr>
                                <td><strong>Book Name:</strong></td>
                                <td><strong>Description:</strong></td>
                                <td><strong>Author:</strong></td>
                                <td><strong>Year Published:</strong></td>
                                <td><strong>Price:</strong></td>
                                <td><strong>Category:</strong></td>
                                <td><strong>ISBN:</strong></td>
                                <td><strong>In Stock:</strong></td>
                                <td><strong>Qty:</strong></td>
                                <td><strong>Image:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                            <?php
                                if ($books->num_rows() > 0) 
                                {
                                    foreach ($books->result_array() as $book)
                                    {
                                        echo 
                                        "<tr>
                                            <td>".$book['bookName']."</td>
                                            <td>".$book['description']."</td>
                                            <td>".$book['author']."</td>
                                            <td>".$book['yearPublished']."</td>
                                            <td>".$book['price']."</td>
                                            <td>".$book['category']."</td>
                                            <td>".$book['ISBN']."</td>
                                            <td>".$book['inStock']."</td>
                                            <td>".$book['qty']."</td>
                                            <td>".$book['image']."</td>
                                            <td>
                                                <form action='" . site_url('Books/updateBook') . "' method='POST'>
                                                    <input type='hidden' name='booksID' value=" . $book['booksID'] . "/>
                                                    <input type='submit' class='round' value='Update'>
                                                </form>
                                            </td>
                                            <td>
                                                <form action=" . site_url('Books/deleteBook') . " method='POST'>
                                                    <input type='hidden' name='booksID' value=" . $book['booksID'] . "/>
                                                    <input class='round' type='submit' value='Delete'>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                }
                            ?>
                        </table>  
        </div>
         <!--Render pagination links--> 
<?php echo "</br>" . $this->pagination->create_links(); ?>

          </form>
        <button class="round"><a href="<?php echo site_url('Books/AddBook'); ?>">Add A Book</a></button><br>
        
    </body>
</html>