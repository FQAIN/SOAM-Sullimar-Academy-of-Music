<?php $img_url = base_url() . "assets/img/"; ?>
<section class="featured-places" id="blog" style="background-color: white">
    <div class="container"> <!--Card Container Start-->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>All Events</span>
                    <h2>view all our latest events here</h2>
                </div>
            </div> 
        </div> 
        <div class="row"> <!--Row Start-->

            <?php foreach ($books->result_array() as $book): ?>
                <div class="col-md-4 col-sm-6 col-xs-12"> <!--Card Begin-->
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="<?php echo $img_url . "9781628920437.jpg" ?>" alt="" width="20px;" height="350px">
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
                            </div>
                        </div>
                        <div class="down-content">
                            <h4><?php echo $book['bookName']; ?></h4>
                            <span><?php echo $book['category']; ?></span>
                            <p>Description: <?php echo $book['description']; ?><br>
                                Author: <?php echo $book['author']; ?><br>
                                Price: <?php echo $book['price']; ?><br>
                                ISBN: <?php echo $book['ISBN']; ?><br>
                                In Stock: <?php echo $book['inStock']; ?><br>   
                            </p>
                            <div class="row">
                                <div class="col-md-6 first-button">
                                    <div class="text-button">
                                        <a href="#">Add to favorites</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--Card End-->
            <?php endforeach; ?>

        </div> <!--Row End-->
    </div> <!--Card Container End-->
</section>