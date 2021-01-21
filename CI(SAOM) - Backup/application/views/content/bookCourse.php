<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="container-fluid">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class=""><strong>Book an Course</strong></h1>
    </div>
    <div class="panel-body">
        <?php foreach($courseDetails->result_array() as $cd) : ?>
        <!--<form name="template" class="form-horizontal" <?php echo site_url('Courses/applyForCourse/' . $cd['coursesID']); ?>" method="POST">-->
        <form name="template" class="form-horizontal" action="<?php echo site_url('Courses/applyForCourse'); ?>" method="POST">
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Course Info:</h3>
                    <label class="col-md-3 control-label">Course Name:</label>
                    <div class="col-md-9">
                        <input name="courseName" class="form-control" type="text" value="<?php echo $cd['courseName']; ?>" readonly/>
                        <input type="hidden" name="coursesID" value="<?php echo $cd['coursesID']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Description:</label>
                    <div class="col-md-9">
                        <input name="description" class="form-control input-sm" type="text" value="<?php echo $cd['description']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Levels:</label>
                    <div class="col-md-9">
                        <input name="levels" class="form-control input-sm" type="text" value="<?php echo $cd['levels']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Number Of Years:</label>
                    <div class="col-md-9">
                        <input name="numberOfYears" class="form-control input-sm" type="text" value="<?php echo $cd['numberOfYears']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Category:</label>
                    <div class="col-md-9">
                        <input name="category" class="form-control input-sm" type="text" value="<?php echo $cd['groupCategory']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Price:</label>
                    <div class="col-md-9">
                        <input name="price" class="form-control input-sm" type="text" value="<?php echo $cd['price']; ?>" readonly/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Applicant Info:</h3>
                    <label class="col-md-3 control-label">Full Name:</label>
                    <div class="col-md-9 has-feedback">
                        <input name="fullName" class="form-control" type="text"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email:</label>
                    <div class="col-md-9">
                        <input name="email" class="form-control" type="email"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Address:</label>
                    <div class="col-md-9">
                        <input name="address" class="form-control" type="text"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Phone:</label>
                    <div class="col-md-9">
                        <input name="phoneNumber" class="form-control" type="text" maxlength="10"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Date of Birth:</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input name="dateOfBirth" type="date" class="form-control">
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <span class="help-block">Select a valid date</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Additional Info:</label>
                    <div class="col-md-9">
                        <textarea name="additionalInfo" class="form-control input-lg" rows="3" maxlength="255"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" value="Apply">
                    </div>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</section>


