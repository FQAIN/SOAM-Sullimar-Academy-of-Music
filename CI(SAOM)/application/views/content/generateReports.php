<?php $img_url = base_url() . "assets/img/"; ?>
 <section class="" id="">
        <div class="container-fluid">
            <h1 class=""><strong>Generate a Monthly Sales Report</strong></h1>
        </div>
        <div class="panel-body">


            <form name="template" class="form-horizontal">

                <div class="col-md-6">

                      <div class="form-group">
                        <label class="col-md-3 control-label">Type of Sales Report</label>
                        <div class="col-md-9">
                            <select name="element1" id="element1" class="form-control" type="text">
                                <option value="item1">Box Office Sales</option>
                                <option value="item2">Full-Time Courses</option>
                                <option value="item3">Private Tuiton</option>
                            </select>
                            <span class="help-block">Select an option</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Select Month and Year</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input name="date" type="date" class="form-control">
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </div>
                            <span class="help-block">Select a valid date</span>
                        </div>

                    </div>

                     <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">

                                    <button class="btn" id="btnCancel">
                                        Cancel <span class="fa fa-remove"></span>
                                    </button>


                                    <button class="btn" id="btnReset">
                                        Reset Form <span class="fa fa-refresh"></span>
                                    </button>


                                    <button class="btn" id="btnSave">
                                        Generate <span class="fa fa-cloud-upload"></span>
                                    </button>

                        </div>
                    </div>

                </div>


            </form>
        </div>
    </section>