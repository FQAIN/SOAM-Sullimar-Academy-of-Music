<?php $img_url = base_url() . "assets/img/"; ?>
<?php
$this->load->helper('url');
$base_url = base_url();
?>
<section class="featured-places" id="blog" style="background-color: white">
    <div class="container"> <!--Card Container Start-->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>All Books</span>
                    <h2>view all our books here</h2>
                </div>
            </div> 
        </div> 
        <div class="row"> <!--Row Start-->

            <?php foreach ($books->result_array() as $book): ?>
                <div class="col-md-4 col-sm-6 col-xs-12"> <!--Card Begin-->
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="<?php echo $img_url . $book['image'] ?>" alt="" width="100%" height="450px"/>
                            <div class="overlay-content">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="date-content">
                                <h6><?php echo date("o", strtotime($book['yearPublished'])); ?></h6>
                                <span><?php echo date("F", strtotime($book['yearPublished'])); ?></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4><?php echo $book['bookName']; ?></h4>
                            <span><?php echo $book['category']; ?></span>
                            Description: <?php echo $book['description']; ?><br>
                            Price: <?php echo $book['price']; ?><br>
                            ISBN: <?php echo $book['ISBN']; ?><br>
                            In Stock: <?php echo $book['inStock']; ?><br>
                            Author: <?php echo $book['author']; ?></p>
                            <div class="row">
                                <div class="col-md-10 first-button">
                                    <div class="text-button">
                                        <form action="<?php echo site_url('ShoppingCartStudent/AddBookToCart/' . $book['booksID']); ?>" method="POST">
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="quantity" aria-describedby="emailHelp" placeholder="Enter Qty">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" value="Add to Cart">
                                                <br><br><br>
                                                </form>

                                            </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br>
                        </div> <!--Card End-->
                    <?php endforeach; ?>

                </div> <!--Row End-->
            </div> <!--Card Container End-->
            </section>