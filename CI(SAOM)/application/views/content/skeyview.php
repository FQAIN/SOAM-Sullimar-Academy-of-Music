<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Book Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/viewStudentTimetables/" class="back"><-Back to Timetable Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>Day</td>
                                <td>Date</td>
                                <td>Timeslots</td>
                                <td>Module Name</td>
<!--                                <td>Course ID</td>
                                <td>Staff ID</td>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->day; ?></td>
                                    <td><?php echo $result->dates; ?></td>
                                    <td><?php echo $result->timeslots; ?></td>
                                    <td><?php echo $result->moduleName; ?></td>
<!--                                    <td><?php echo $result->courseID; ?></td>
                                    <td><?php echo $result->staffID; ?></td>-->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--Render pagination links--> 
                <?php echo "</br>" . $this->pagination->create_links(); ?>   
        </form>
    </body>
</html>