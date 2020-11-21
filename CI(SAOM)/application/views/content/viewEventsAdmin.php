<?php $img_url = base_url() . "assets/img/"; ?>

<section class="" id="">
    <h2 class="text-center">List of Events</h2>
    <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Event ID</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Location</th>
                    <th scope="col">Time</th>
                    <th scope="col">Speaker</th>
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
                                                            <span>Update Event Details</span>
                                                            <h2>Update Record for Music Night+</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Event Name</label>

                                                        <input class="form-control" type="text" name="firstName"
                                                               placeholder="Music Night+" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Category</label>

                                                        <input class="form-control" type="text" name="firstName"
                                                               placeholder="music " ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <label class="control-label">Event Description</label>
                                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="best event" required=""></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Location</label>

                                                        <input class="form-control" type="text" name="firstName"
                                                               placeholder="Limerick" ng-model="me.firstName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Time</label>

                                                        <input class="form-control" type="time" name="firstName"
                                                               placeholder="Timing" ng-model="me.firstName">
                                                    </div>
             
                                                <div class="col-md-6">
                                                        <label class="control-label">Host/Speaker</label>

                                                        <input class="form-control" type="text" name="firstName"
                                                               placeholder="Joe Moloney" ng-model="me.firstName">
                                                    </div>
                                                <div class="col-md-6">
                                                        <label class="control-label">Date</label>

                                                        <input class="form-control" type="date" name="firstName"
                                                               placeholder="" ng-model="me.firstName">
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
                <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">Add New Event</button>
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
                                                    <span>Add New Event Details</span>
                                                </div>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Event Name</label>

                                                <input class="form-control" type="text" name="firstName"
                                                       placeholder="" ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Location</label>

                                                <input class="form-control" type="text" name="firstName"
                                                       placeholder=" " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <fieldset>
                                                    <label class="control-label">Event Description</label>
                                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Time</label>

                                                <input class="form-control" type="time" name="firstName"
                                                       placeholder=" " ng-model="me.firstName">
                                            </div>

                                            <div class="col-md-20">
                                                <label class="control-label">Date</label>

                                                <input class="form-control" type="date" name="firstName"
                                                       placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Upload Picture</label>

                                                <input class="form-control" type="file" name="firstName"
                                                       placeholder="Level 7 " ng-model="me.firstName">
                                            </div>
                                            <div class="col-md-20">
                                                <label class="control-label">Host/Speaker</label>

                                                <input class="form-control" type="text" name="firstName"
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

        </div>
    </div>

</section>