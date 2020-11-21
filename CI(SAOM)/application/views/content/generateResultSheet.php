<?php $img_url = base_url() . "assets/img/"; ?>
 <section class="" id="">
        <div class="container-fluid">
            <h1 class=""><strong>Generate Result Sheet</strong></h1>
        </div>
        <div class="panel-body">


            <form name="template" class="form-horizontal">

                <div class="col-md-6">

                       <div class="form-group">
                        <label class="col-md-3 control-label">Student ID</label>
                        <div class="col-md-9">
                            <input name="element6" class="form-control input-sm" type="text" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Result</label>
                        <div class="col-md-9">
                            <input name="element6" class="form-control input-sm" type="text" />
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