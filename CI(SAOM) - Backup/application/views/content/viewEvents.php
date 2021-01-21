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

            <?php foreach ($events->result_array() as $event): ?>
                <div class="col-md-4 col-sm-6 col-xs-12"> <!--Card Begin-->
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="<?php echo $img_url . $event['image'] ?>" alt="" width="100%" height="250px"/>
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
                                <h6><?php echo date("d", strtotime($event['dateOfEvent'])); ?></h6>
                                <span><?php echo date("F", strtotime($event['dateOfEvent'])); ?></span>
                            </div>
                        </div>
                        <div class="down-content">
                            <h4><?php echo $event['name']; ?></h4>
                            <span>Category One</span>
                            Description: <?php echo $event['description']; ?><br>
                            Price: <?php echo $event['price']; ?><br>
                            Location: <?php echo $event['location']; ?></p>
                            <div class="row">
                                <div class="col-md-10 first-button">
                                    <div class="text-button">
                                        <?php if (!strpos($this->session->userdata('email'), '@')) : ?>
                                        <form action="<?php echo site_url('ShoppingCart/AddEventToCartNS/' . $event['eventID']); ?>" method="POST">
                                        <?php elseif (strpos($this->session->userdata('email'), '@')) : ?>
                                            <form action="<?php echo site_url('ShoppingCart/AddEventToCart/' . $event['eventID']); ?>" method="POST">
                                        <?php endif; ?>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="quantity" aria-describedby="emailHelp" placeholder="Enter Qty">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-light"><input type="submit" value="Add to Cart" style="border: none;"></button>
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