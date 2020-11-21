<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="container-fluid">

        <h1 class=""><strong>Book a Lesson</strong></h1>
    </div>
    <div class="panel-body">


        <form name="template" class="form-horizontal">

            <div class="col-md-6">

                <div class="form-group">
                    <label class="col-md-3 control-label">Lesson Name</label>
                    <div class="col-md-9">
                        <select name="element1" id="element1" class="form-control" type="text">
                            <option value="item1">Violin 1</option>
                            <option value="item2">Guitar 2</option>
                            <option value="item3">Piano 3</option>
                        </select>
                        <span class="help-block">Select an option</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Full Name</label>
                    <div class="col-md-9 has-feedback">
                        <input name="element2" class="form-control" type="text" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input name="element3" class="form-control" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Student Number</label>
                    <div class="col-md-9">
                        <input name="element3" class="form-control" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn" id="btnSave">
                            Apply <span class="fa fa-upload"></span>
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</section>
