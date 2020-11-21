<?php $img_url = base_url() . "assets/img/"; ?>
 <section class="" id="">
        <div class="container-fluid">

            <h1 class=""><strong>Process Teachers Timetable</strong></h1>
        </div>
        <div class="panel-body">


            <form name="template" class="form-horizontal">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="col-md-3 control-label">Days</label>
                        <div class="col-md-9">
                            <select name="element1" id="element1" class="form-control" type="text">
                                <option value="item1">Monday</option>
                                <option value="item2">Item 2</option>
                                <option value="item3">Item 3</option>
                            </select>
                            <span class="help-block">Select an option</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Dates</label>
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
                        <label class="col-md-3 control-label">Timeslots</label>
                        <div class="col-md-9">
                            <select name="element1" id="element1" class="form-control" type="text">
                                <option value="item1">10:00 - 11:00 am</option>
                                <option value="item2">Item 2</option>
                                <option value="item3">Item 3</option>
                            </select>
                            <span class="help-block">Select an option</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Module Name</label>
                        <div class="col-md-9">
                            <input name="element3" class="form-control" type="text" />
                        </div>
                    </div>
 <div class="form-group">
                        <label class="col-md-3 control-label">Course</label>
                        <div class="col-md-9">
                            <select name="element1" id="element1" class="form-control" type="text">
                                <option value="item1">Pianno 101GHHF6</option>
                                <option value="item2">Item 2</option>
                                <option value="item3">Item 3</option>
                            </select>
                            <span class="help-block">Select an option</span>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                   <div class="form-group">
                        <label class="col-md-3 control-label">Department</label>
                        <div class="col-md-9">
                            <select name="element1" id="element1" class="form-control" type="text">
                                <option value="item1">Music Instruments</option>
                                <option value="item2">Item 2</option>
                                <option value="item3">Item 3</option>
                            </select>
                            <span class="help-block">Select an option</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Class</label>
                        <div class="col-md-9">
                            <input name="element6" class="form-control input-sm" type="text" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Note/Information</label>
                        <div class="col-md-9">
                            <textarea name="element7" class="form-control input-lg" rows="3"></textarea>
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
                                        Process <span class="fa fa-cloud-upload"></span>
                                    </button>

                        </div>
                    </div>
              
                </div>

            </form>
        </div>

    </section>

