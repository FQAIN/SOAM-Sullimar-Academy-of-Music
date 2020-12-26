<?php $img_url = base_url() . "assets/img/"; ?>
<section class="featured-places" id="blog" style="background-color: white">
    <div class="container"> <!--Card Container Start-->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>All Courses</span>
                    <h2>view all our latest courses here</h2>
                </div>
            </div> 
        </div> 
        <div class="row"> <!--Row Start-->

            <?php foreach ($courses->result_array() as $course): ?>
                <div class="col-md-4 col-sm-6 col-xs-12"> <!--Card Begin-->
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="<?php echo $img_url . "leaving-cert-music3a-1.jpg" ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $course['courseName']; ?></h4>
                            <span><?php echo $course['groupCategory']; ?></span>
                            Description: <?php echo $course['description']; ?><br>
                            Price: <?php echo $course['price']; ?><br>
                            Level: <?php echo $course['levels']; ?><br>
                            Number Of Years: <?php echo $course['numberOfYears']; ?><br>
                            
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