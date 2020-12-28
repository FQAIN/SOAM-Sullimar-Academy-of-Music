<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
            <section class="" id="">
                <h2 class="text-center">All Book Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
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
                        </thead>
                        <tbody>
                            <?php foreach ($books->result_array() as $book): ?>
                                <tr>
                                    <td><?php echo $book['bookName']; ?></td>
                                    <td><?php echo $book['description']; ?></td>
                                    <td><?php echo $book['author']; ?></td>
                                    <td><?php echo $book['yearPublished']; ?></td>
                                    <td><?php echo $book['price']; ?></td>
                                    <td><?php echo $book['category']; ?></td>
                                    <td><?php echo $book['ISBN']; ?></td>
                                    <td><?php echo $book['inStock']; ?></td>
                                    <td><?php echo $book['qty']; ?></td>
                                    <td><?php echo $book['image']; ?></td>

                                    <td>
                                        <form action="<?php echo site_url('Books/updateBook'); ?>" method="POST">
                                            <input type="hidden" name="booksID" value="<?php echo $book['booksID'] ?>">
                                            <input type="submit" class="btn btn-light" value="Update">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Books/deleteBook'); ?>" method="POST">
                                            <input type="hidden" name="booksID" value="<?php echo $book['booksID'] ?>">
                                            <input type="submit" class="btn btn-light" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!--Render pagination links--> 
                <?php echo "</br>" . $this->pagination->create_links(); ?>
                <div class="container">
                    <div class="vertical-center">
                        <button type="button" class="btn btn-light"><a href="<?php echo site_url('Books/AddBook'); ?>">Add A Book</a></button><br>
                    </div>
                </div>        
    </body>
</html>