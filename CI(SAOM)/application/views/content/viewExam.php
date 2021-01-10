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
                    <span>All Events</span>
                    <h2>view all our latest events here</h2>
                </div>
            </div> 
        </div> 
        <div class="row"> <!--Row Start-->

            <?php foreach ($exams->result_array() as $exam): ?>
                <div class="col-md-4 col-sm-6 col-xs-12"> <!--Card Begin-->
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="<?php echo $img_url . $exam['image'] ?>" alt="" width="100%" height="250px"/>

                            <div class="date-content">
                                <h6><?php echo date("d", strtotime($exam['dateOfExam'])); ?></h6>
                                <span><?php echo date("F", strtotime($exam['dateOfExam'])); ?></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4><?php echo $exam['examName']; ?></h4>
                            <span><?php echo $exam['examCategory']; ?></span>
                            Description: <?php echo $exam['examDescription']; ?><br>
                            Price: <?php echo $exam['price']; ?><br>
                            Time: <?php echo $exam['examTime']; ?></p>
                            <div class="row">
                                <div class="col-md-10 first-button">
                                    <div class="text-button">
                                        <?php if (!strpos($this->session->userdata('email'), '@')) : ?>
                                        <form action="<?php echo site_url('ShoppingCart/AddExamToCartNS/' . $exam['examID']); ?>" method="POST">
                                        <?php elseif (strpos($this->session->userdata('email'), '@')) : ?>
                                            <form action="<?php echo site_url('ShoppingCart/AddExamToCart/' . $exam['examID']); ?>" method="POST">
                                        <?php endif; ?>
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