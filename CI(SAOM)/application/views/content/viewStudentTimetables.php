<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
            <div class="container-fluid">
                <h1 class=""><strong>Student Web Timetables</strong></h1>
            </div>
            <div class="panel-body">


                <form name="template" class="form-horizontal">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-9">
                                <select name="element1" id="element1" class="form-control" type="text">
                                    <option value="item1">Musical Instruments</option>
                                    <option value="item2">Vocals</option>
                                    <option value="item3">ASET</option>
                                </select>
                                <span class="help-block">Select an option</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Course Name</label>
                            <div class="col-md-9">
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>Piano</option>
                                    <option>Violin</option>
                                    <option>Guitar</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-md-3 control-label">Group Number</label>
                            <div class="col-md-9">
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
 <div class="form-group">
                            <label class="col-md-3 control-label">Timetable layout</label>
                            <div class="col-md-9">
                                <select name="element1" id="element1" class="form-control" type="text">
                                    <option value="item2">Grid Format</option>
                                    <option value="item3">List Format</option>
                                </select>
                                <span class="help-block">Select an option</span>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="col-md-3 control-label">Week(s) to View</label>
                            <div class="col-md-9">
                                <select name="element1" id="element1" class="form-control" type="text">
                                    <option value="item2">This Week</option>
                                    <option value="item3">Next Week</option>
                                </select>
                                <span class="help-block">Select an option</span>
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
                                    View <span class="fa fa-cloud-upload"></span>
                                </button>

                            </div>
                        </div>

                    </div>


                </form>
            </div>
        </section>


