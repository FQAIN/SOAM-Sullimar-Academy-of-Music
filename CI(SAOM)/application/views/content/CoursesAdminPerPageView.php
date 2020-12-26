<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Course Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td><strong>Description:</strong></td>
                                <td><strong>Level:</strong></td>
                                <td><strong>Number of Years:</strong></td>
                                <td><strong>Group Category:</strong></td>
                                <td><strong>Image:</strong></td>
                                <td><strong>Staff ID:</strong></td>
                                <td><strong>Price:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($courses->result_array() as $course): ?>
                                <tr>
                                    <td><?php echo $course['courseName']; ?></td>
                                    <td><?php echo $course['description']; ?></td>
                                    <td><?php echo $course['levels']; ?></td>
                                    <td><?php echo $course['numberOfYears']; ?></td>
                                    <td><?php echo $course['groupCategory']; ?></td>
                                    <td><?php echo $course['image']; ?></td>
                                    <td><?php echo $course['staffID']; ?></td>
                                    <td><?php echo $course['price']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Courses/updateCourse'); ?>" method="POST">
                                            <input type="hidden" name="coursesID" value="<?php echo $course['coursesID'] ?>">
                                            <input type="submit" class="btn btn-light" value="Update">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Courses/deleteCourse'); ?>" method="POST">
                                            <input type="hidden" name="coursesID" value="<?php echo $course['coursesID'] ?>">
                                            <input type="submit" class="btn btn-light" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!--Render pagination links--> 
                <?php echo "</br>" . $this->pagination->create_links(); ?>
                <div class="container">
                    <div class="vertical-center">
                        <button type="button" class="btn btn-light"><a href="<?php echo site_url('Courses/AddCourse'); ?>">Add An Course</a></button><br>
                    </div>
                </div>        
        </form>
    </body>
</html>