<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="container-fluid">
        <h1 class=""><strong>Course Web Timetables</strong></h1>
    </div>
    <div class="panel-body">

        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Course ID</label>
                <div class="col-md-9">
                    <form action="<?php echo site_url('Timetables/skeyword'); ?>" method="POST">
                        <input type="number" name="courseID" required="" style="border-radius: 5px">
                        <button type="button" class="btn btn-light"><input type="submit" name="submit" value="Search" style="border: none;"></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>