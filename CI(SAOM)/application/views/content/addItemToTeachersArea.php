<?php $img_url = base_url() . "assets/img/";?>
<section class="" id="">
            <div class="container-fluid">

                <h1 class=""><strong>Add Item To Teachers Area</strong></h1>
            </div>
            <div class="panel-body">


                <form name="template" class="form-horizontal">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Teachers Name</label>
                            <div class="col-md-9 has-feedback">
                                <input name="element2" class="form-control" type="text" />

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date</label>
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
                            <label class="col-md-3 control-label">Image</label>
                            <div class="col-md-9 has-feedback">
                                <input name="element2" class="form-control" type="text" />

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Category</label>
                            <div class="col-md-9">
                                <input name="element3" class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Location/Lecture Room</label>
                            <div class="col-md-9">
                                <input name="element3" class="form-control" type="text" />
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Time</label>
                            <div class="col-md-9">
                                <input name="element5" class="form-control input-lg" type="text" />
                            </div>
                        </div>

                   

                        <div class="form-group">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-9">
                                <textarea name="element7" class="form-control input-lg" rows="3"></textarea>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">

                                <button class="btn" id="btnCancel">
                                    Cancel <span class="glyphicon glyphicon-remove"></span>
                                </button>


                                <button class="btn" id="btnReset">
                                    Reset Form <span class="glyphicon glyphicon-refresh"></span>
                                </button>


                                <button class="btn" id="btnSave">
                                    Add <span class="glyphicon glyphicon-cloud-upload"></span>
                                </button>

                            </div>
                        </div>


                    </div>

                </form>
            </div>
        </section>