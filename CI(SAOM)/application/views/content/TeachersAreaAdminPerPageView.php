<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted"><?php echo "Updated: " . date("l jS \of F Y h:i:s A"); ?></div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-0 mt-4">
                        <i class="fa fa-newspaper-o"></i> My Courses</div>
                    <hr class="mt-2">
                    <div class="card-columns">
                        <div class="card mb-3">
                            <a href="#">
                                <img src="<?php echo $img_url . "audience-868074_1920.jpg" ?>" class="card-img-top img-fluid w-100" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"> <strong>Course 1</strong></h6>
                                <p class="card-text small">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>
                                <button class="btn" ng-click="updateMe()">Remove Item</button>
                                <button class="btn" ng-click="updateMe()">Update Item</button>
                            </div>
                            <hr class="my-0">
                        </div>
                        <div class="card mb-3">
                            <a href="#">
                                <img src="<?php echo $img_url . "audience-868074_1920.jpg" ?>" class="card-img-top img-fluid w-100" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"> <strong>Course 2</strong></h6>
                                <p class="card-text small">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                </p>
                                <button class="btn" ng-click="updateMe()">Remove Item</button>
                                <button class="btn" ng-click="updateMe()">Update Item</button>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bell-o"></i>Messages</div>
                        <div class="list-group list-group-flush small">
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Fyaz Ikram</strong>posted a new subject regarding pianno to
                                        <strong>SAOM</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                        <button class="btn" ng-click="updateMe()">Remove Item</button>
                                        <button class="btn" ng-click="updateMe()">Update Item</button>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Fyaz Ikram</strong>posted a new subject regarding pianno to
                                        <strong>SAOM</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                        <button class="btn" ng-click="updateMe()">Remove Item</button>
                                        <button class="btn" ng-click="updateMe()">Update Item</button>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Fyaz Ikram</strong>posted a new subject regarding pianno to
                                        <strong>SAOM</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                        <button class="btn" ng-click="updateMe()">Remove Item</button>
                                        <button class="btn" ng-click="updateMe()">Update Item</button>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Fyaz Ikram</strong>posted a new subject regarding pianno to
                                        <strong>SAOM</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                        <button class="btn" ng-click="updateMe()">Remove Item</button>
                                        <button class="btn" ng-click="updateMe()">Update Item</button>
                                    </div>
                                </div>
                            </a>
                            <!--<a class="list-group-item list-group-item-action" href="#">View all activity...</a>-->
                        </div>
                        <div class="card-footer small text-muted"><?php echo "Updated: " . date("l jS \of F Y h:i:s A"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card " style="padding: 20px;">  
        <button type="button" class="btn btn-light"><a href="<?php echo site_url('TeachersArea/AddTeachersArea'); ?>">Add Item to Teachers Area</a></button><br>
        <br><br>
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body" >
            <h5 class="card-title">About Me</h5>
            <p class="card-text">It is a long established fact that a reader will be distracted by the readable cont</p>
        </div>
    </div>
</section>