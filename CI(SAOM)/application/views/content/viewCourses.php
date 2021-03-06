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
                            <img src="<?php echo $img_url . $course['image'] ?>" alt="" width="100%" height="250px"/>
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

                                
                                <div class="col-md-12">
                                    <div class="text-button">
                                        <form action="<?php echo site_url('Home/bookCourse/'  . $course['courseName']); ?>" method="POST">
                                            <button type="button" class="btn btn-light"><input type="submit" value="Apply For Course" style="border: none;"></button><br>
                                        </form>
                                    </div>
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