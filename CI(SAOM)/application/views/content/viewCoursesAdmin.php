<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <h2 class="text-center">List of Courses</h2>
    <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Level</th>
                    <th scope="col">Years</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <!-- Large modal -->
                    <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="close fa fa-close"></div>
                                    <div class="row">
                                        <div class="col-md-8"> 
                                            <div class="left-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="section-heading">
                                                            <span>Update Course Details</span>
                                                            <h2>Update Record for Violin</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Course Name</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="Violin" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Course Level</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="Level 7 " ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <label class="control-label">Course Description</label>
                                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Years</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="2 Years" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <button type="submit" id="form-submit" class="btn">Update</button>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="left-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="content">      
                                                            <label class="control-label">Image</label>
                                                            <img src="<?php echo $img_url . "leaving-cert-music3a-1.jpg" ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                    </td>    
                    <td><button class="blue-button btn">Delete</button></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                    </td>    
                    <td><button class="blue-button btn">Delete</button></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                    </td>    
                    <td><button class="blue-button btn">Delete</button></td>
                </tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
            </td>    
            <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="wrapper">
                <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">Add New Course</button>
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
                                                    <span>Add New Course Details</span>
                                                </div>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Course Name</label>
                                                <input class="form-control" type="text" name="firstName" placeholder="Violin" ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Course Level</label>
                                                <input class="form-control" type="text" name="firstName" placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <fieldset>
                                                    <label class="control-label">Course Description</label>
                                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Start Date</label>
                                                <input class="form-control" type="date" name="firstName" placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">End Date</label>
                                                <input class="form-control" type="date" name="firstName" placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Upload Picture</label>
                                                <input class="form-control" type="file" name="firstName" placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Years</label>
                                                <input class="form-control" type="text" name="firstName" placeholder="2 Years" ng-model="me.firstName">
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