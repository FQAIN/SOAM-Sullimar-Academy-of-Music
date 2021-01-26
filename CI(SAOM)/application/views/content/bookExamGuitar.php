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
        <h1 class=""><strong>Book an Exam</strong></h1>
    </div>
       
    
          
    
          
         
    
            
            
    
    <div class="panel-body">
        
            <?php foreach($ExamDetails->result_array() as $cid) : ?>
      
        <!--<form name="template" class="form-horizontal" <?php echo site_url('Exams/applyForExam/' . $cid['examID']); ?>" method="POST">-->
        <form name="template" class="form-horizontal" action="<?php echo site_url('Exams/applyForExam'); ?>" method="POST">
             
            
           
             <div class="col-md-6">
                <div class="form-group">
                    <h3>Exam Info:</h3>
                    <label class="col-md-3 control-label">Exam Name:</label>
                    <div class="col-md-9">
                        <input name="examName" class="form-control" type="text" value="<?php echo $cid['examName']; ?>" readonly/>
                        <input type="hidden" name="examID" value="<?php echo $cid['examID']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Description:</label>
                    <div class="col-md-9">
                        <input name="examDescription" class="form-control input-sm" type="text" value="<?php echo $cid['examDescription']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Date of Exam:</label>
                    <div class="col-md-9">
                        <input name="dateOfExam" class="form-control input-sm" type="date" value="<?php echo $cid['dateOfExam']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Exam Category:</label>
                    <div class="col-md-9">
                        <input name="examCategory" class="form-control input-sm" type="text" value="<?php echo $cid['examCategory']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Time:</label>
                    <div class="col-md-9">
                        <input name="examTime" class="form-control input-sm" type="time" value="<?php echo $cid['examTime']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Price:</label>
                    <div class="col-md-9">
                        <input name="price" class="form-control input-sm" type="text" value="<?php echo $cid['price']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Seasons:</label>
                    <div class="col-md-9">
                        <input name="Seasons" class="form-control input-sm" type="text" value="<?php echo $cid['Seasons']; ?>" readonly/>
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


