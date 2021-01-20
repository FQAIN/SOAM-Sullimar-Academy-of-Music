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
                        <i class="fa fa-newspaper-o"></i> My Dashboard</div>
                    <hr class="mt-2">
                
                        <div class="card-columns">
                            <div class="card mb-3">
                                    <?php foreach ($teachersAreas->result_array() as $teachersArea): ?>
                                <a href="#">
                                    <img src="<?php echo $img_url . $teachersArea['image'] ?>" alt="" class="card-img-top img-fluid w-100" width="100%" height="250px"/>
                                </a>
                                <div class="card-body">                                

                                    <p><strong><?php echo $teachersArea['title']; ?></strong><br>
                                        </p>
                                    <h5 class="card-title mb-1"><?php echo $teachersArea['description']; ?></h5>
                                    <p><?php echo $teachersArea['category']; ?></p>
                                    <form action="<?php echo site_url('TeachersArea/updateTeachersArea'); ?>" method='POST'>
                                        <input type='hidden' name='teachersAreaID' value="<?php echo $teachersArea['teachersAreaID'] ?>"/>
                                        <input type='submit' class='btn btn-light' value='Update Item'>
                                    </form>

                                    <form action="<?php echo site_url('TeachersArea/deleteTeachersArea'); ?>" method='POST'>
                                        <input type='hidden' name='teachersAreaID' value="<?php echo $teachersArea['teachersAreaID'] ?> "/>
                                        <input class='btn btn-light' type='submit' value='Delete Item'>
                                    </form>
                                </div>
                                <hr class="my-0">
                                                <?php endforeach; ?>
                            </div>
                       </div>
                        <br>
    
                    <br>
                    <button type="button" class="btn btn-light"><a href="<?php echo site_url('TeachersArea/addTeachersArea'); ?>">Add Item to Teachers Area</a></button><br>

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

</section>