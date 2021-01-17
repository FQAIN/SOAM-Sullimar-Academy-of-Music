<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="container-fluid">
        <h1 class=""><strong>Generate Reports by Year</strong></h1>
    </div>
    <div class="panel-body">

        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Sales Report for Courses</label>
                <div class="col-md-9">
                    <form action="<?php echo site_url('GenerateReports/skeyword'); ?>" method="POST">
                        <input type="text" name="year_added" required="" style="border-radius: 5px" placeholder="Enter Year to Search">
                        <button type="button" class="btn btn-light"><input type="submit" name="submit" value="Search" style="border: none;"></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>