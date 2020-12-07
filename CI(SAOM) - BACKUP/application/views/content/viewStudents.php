<?php $img_url = base_url() . "assets/img/"; ?>

<section class="" id="">
    <h2 class="text-center">List of Students</h2>
    <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Student Course</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Age</th>
                    <th scope="col">Date of Enrollment</th>
                    <th scope="col">Address</th>
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
                    <td>Mark</td>
                    <td>Mark</td>
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
                                                            <span>Update Student Details</span>
                                                            <h2>Update Record for John Doe</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Student Name</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder=" John Doe" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Student Course</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="Pianno" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <label class="control-label">Student Description</label>
                                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">DOB</label>
                                                        <input class="form-control" type="date" name="firstName" placeholder="2.50" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Age</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="28" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Date of Enrollment</label>
                                                        <input class="form-control" type="date" name="firstName" placeholder="Vocals" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Address</label>
                                                        <input class="form-control" type="text" name="firstName" placeholder="Dublin" ng-model="me.firstName">
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
                                                            <img src="<?php echo $img_url . "popular_item_2.jpg" ?>" alt="">
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
                    <td>Mark</td>
                    <td>Mark</td>
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
                    <td>Mark</td>
                    <td>Mark</td>
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
            <td>Mark</td>
            <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
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
                <td>Mark</td>
                <td>Mark</td>
                <td>Mark</td>
                <td><button type="button" class="blue-button btn" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>         
                </td>    
                <td><button class="blue-button btn">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</section>