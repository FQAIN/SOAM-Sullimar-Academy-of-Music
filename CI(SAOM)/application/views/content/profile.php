<?php $img_url = base_url() . "assets/img/"; ?>   
<section class="" id="">


<div class="container">

      <div class="panel-heading"> My Profile </div>

                <div class="col-md-6">
      <div class="panel-body">
        <div class="form-horizontal">
					          <form>
						            <div class="form-group">
							              <label class="col-sm-2 control-label">First Name</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="firstName"
                  									placeholder="Fyaz" ng-model="me.firstName">
              							</div>
            						</div>
						            <div class="form-group">
							              <label class="col-sm-2 control-label">Last Name</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="lastName"
                  									placeholder="Ikram" ng-model="me.lastName">
              							</div>
            						</div>
						            <div class="form-group">
              							<label class="col-sm-2 control-label">Email</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="email"
                  									placeholder="fyaz@gmail.com" ng-model="me.email">
              							</div>
            						</div>
            <div class="form-group">
              							<label class="col-sm-2 control-label">Role</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="department"
                  									placeholder="Student" ng-model="me.email">
              							</div>
            						</div>
            <div class="form-group">
              							<label class="col-sm-2 control-label">Course</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="title"
                  									placeholder="Pianao LHD737373U" ng-model="me.email">
              							</div>
            						</div>
            <div class="form-group">
              							<label class="col-sm-2 control-label">Year Joined</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="startDate"
                  									placeholder="Enrolled in 2019" ng-model="me.email">
              							</div>
            						</div>            
            <div class="form-group">
              							<label class="col-sm-2 control-label">County</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="location"
                  									placeholder="Limerick" ng-model="me.email">
              							</div>
            						</div>
            <div class="form-group">
              							<label class="col-sm-2 control-label">Phone</label>
              							<div class="col-sm-7">
                								<input class="form-control" type="text" name="phone"
                  									placeholder="0894569981" ng-model="me.email">
              							</div>
            						</div>         
           
						            <div class="form-group">
              							<div class="col-sm-offset-2 col-sm-10">
                								<button class="btn" ng-click="updateMe()">Update</button>
              							</div>
            						</div>
     
					          </form>
        				</div>  <!-- end form-horizontal -->
                    </div>
      </div>
    
      <div class="col-md-6">
                                                                          <div class="form-group">
                                                                               <label class="col-sm-2 control-label">Image</label>
              							<div class="col-sm-offset-2 col-sm-10">
                                                                    <img src="<?php echo $img_url."popular_item_2.jpg"?>" alt="">
                						</div>
            						</div>
    </div>

    </div> 


    </section>