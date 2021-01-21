<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="container-fluid">
        <h1 class=""><strong>Allocate Private Tuiton for Student</strong></h1>
    </div>
    <div class="panel-body">
        <form name="template" class="form-horizontal">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-3 control-label">Room</label>
                    <div class="col-md-9">
                        <select name="element1" id="element1" class="form-control" type="text">
                            <option value="item1">1A16</option>
                            <option value="item2">3B06</option>
                            <option value="item3">1B20</option>
                        </select>
                        <span class="help-block">Select an option</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Teacher</label>
                    <div class="col-md-9">
                        <select name="element1" id="element1" class="form-control" type="text">
                            <option value="item1">Mary Ryan</option>
                            <option value="item2">Carol Rainsford</option>
                            <option value="item3">Suzanne O'Gorman</option>
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
                            Allocate <span class="fa fa-cloud-upload"></span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
