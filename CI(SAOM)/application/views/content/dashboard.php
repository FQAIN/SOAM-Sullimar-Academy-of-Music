<?php $img_url = base_url() . "assets/img/"; ?>
  <section class="" id="">
      
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-black o-hidden h-100">
                                <div class="card-body">
                                    <div class="mr-5">26 New Messages!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-black o-hidden h-100">
                                <div class="card-body">
                                    <div class="mr-5">11 New Tasks!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-black o-hidden h-100">
                                <div class="card-body">
                                    <div class="mr-5">123 New Orders!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-black o-hidden h-100">
                                <div class="card-body">
                                    <div class="mr-5">13 New Tickets!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <canvas id="myAreaChart" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-0 mt-4">
                                <i class="fa fa-newspaper-o"></i> My Courses</div>
                            <hr class="mt-2">
                            <div class="card-columns">
                                <div class="card mb-3">
                                    <a href="#">
                                         <img src="<?php echo $img_url."audience-868074_1920.jpg"?>" class="card-img-top img-fluid w-100" alt="">
                                    </a>
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"> <strong>Course 1</strong></h6>
                                        <p class="card-text small">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                                        </p>
                                        <button class="btn" ng-click="updateMe()">Remove Item</button>
                                        <button class="btn" ng-click="updateMe()">Update Item</button>

                                    </div>
                                    <hr class="my-0">
                                    <div class="card" >
                                        <div class="card-header">
                                            Functions
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Book Exam</li>
                                            <li class="list-group-item">Book Event</li>
                                            <li class="list-group-item">Apply to Teach Course</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <a href="#">
                                      <img src="<?php echo $img_url."audience-868074_1920.jpg"?>" class="card-img-top img-fluid w-100" alt="">
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
                                <div class="card" >
                                    <div class="card-header">
                                        Functions
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Update Account</li>
                                        <li class="list-group-item">Deactivate Account</li>
                                        <li class="list-group-item">View Timetable</li>
                                    </ul>
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
                                    <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card " style="padding: 20px;">  
                <div class="card-header">
                    My Profile
                </div>
                <div class="card-body" >
                    <h5 class="card-title">About Me</h5>
                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable cont</p>
                    <button class="btn" ng-click="updateMe()">Remove Item</button>
                    <button class="btn" ng-click="updateMe()">Update Item</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" >
                        <div class="card-body" style="padding: 20px;">
                            <h5 class="card-title">Private Tution</h5>
                            <p class="card-text">Pierce Griffin - Violin - 8:00 - 9:00 am</p><p class="card-text">Pierce Griffin - Violin - 8:00 - 9:00 am</p><p class="card-text">Pierce Griffin - Violin - 8:00 - 9:00 am</p><p class="card-text">Pierce Griffin - Violin - 8:00 - 9:00 am</p><p class="card-text">Pierce Griffin - Violin - 8:00 - 9:00 am</p>
                            <button class="btn" ng-click="updateMe()">Remove Item</button>
                            <button class="btn" ng-click="updateMe()">Update Item</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="padding: 20px;">
                            <h5 class="card-title">Other Links</h5>
                            <p class="card-text">Events</p>
                            <p class="card-text">Logout</p>
                            <p class="card-text">Books</p>
                            <p class="card-text">Exams</p>
                            <button class="btn" ng-click="updateMe()">Remove Item</button>
                            <button class="btn" ng-click="updateMe()">Update Item</button>
                        </div>
                    </div>
                </div>
            </div>
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="wrapper">
                <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">Add New Item Details</button>
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" >
                            <div class="close fa fa-close"></div>
                            <div class="row">
                                <div class="col-md-20" style="padding: 10px;"> 
                                    <div class="left-content">
                                        <div class="row">
                                            <div class="col-md-20">
                                                <div class="section-heading">
                                                    <span>Add New Item Details Details</span>
                                                </div>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Item Details Name</label>

                                                <input class="form-control" type="text" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                          <div class="col-md-20">
                                                <fieldset>
                                                    <label class="control-label">Item Details Description</label>
                                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Time</label>

                                                <input class="form-control" type="time" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>

                                            <div class="col-md-20">
                                                <label class="control-label">Date</label>

                                                <input class="form-control" type="date" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                             <div class="col-md-20">
                                                <label class="control-label">Location/Lecture Room</label>

                                                <input class="form-control" type="text" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Upload Picture</label>

                                                <input class="form-control" type="file" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Category</label>

                                                <input class="form-control" type="text" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="btn">Add</button>
                                                    <button type="submit" id="form-submit" class="btn">Cancel</button>
                                                </fieldset>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>

            </div>  
            <div id="modal" class="modal">
                <div class="modal-content">
                    <div class="close fa fa-close"></div>
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <span>Talk To Us</span>
                                            <h2>Let's have a discussion</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">                                          
                                            <div class="section-heading">
                                                <span>More About Us</span>
                                                <h2>Venue Company</h2>
                                            </div>
                                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus eu bibendum.</p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                                                <li><span>Email:</span><a href="#">hi@company.co</a></li>
                                                <li><span>Address:</span><a href="#">company.co</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>


        </section>