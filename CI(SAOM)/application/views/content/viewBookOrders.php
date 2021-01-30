<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <h2 class="text-center">List of Book Orders</h2>
    <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Book Orders ID</th>
                    <th scope="col">Book Orders Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Book ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Cover Image</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach ($books as $book): ?>
                <tr>
                    <th scope="row"><?php echo $book['id']?></th>
                    <td><?php echo $book['product_name']?></td>
                    <td><?php echo $book['product_desc']?></td>
                    <td><?php echo $book['quantity']?></td>
                    <td><?php echo $book['price']?></td>
                    <td><?php echo $book['booksID']?></td>
                    <td><?php echo $book['date_added']?></td>
                    <td style = "width: 5%"><img src = "<?php echo $img_url.$book['image_path']?>"></td>
                    <td><?php echo $book['total']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>