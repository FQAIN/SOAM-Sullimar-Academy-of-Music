<?php $img_url = base_url() . "assets/img/"; ?>
<?php
$this->load->helper('url');
$base_url = base_url();
?>
<html>
    <head>
        <title>My Address Book</title>

    </head>
    <body>            
        <h2 class="text-center">All Exam Details</h2>
        <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
        <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <td><strong>Exam ID:</strong></td>
                        <td><strong>Exam Name:</strong></td>
                        <td><strong>date of exam:</strong></td>
                        <td><strong>price:</strong></td>
                        <td><strong>image:</strong></td>
                        <td><strong>exam Category:</strong></td>
                        <td><strong>exam Time:</strong></td>
                        <td><strong>courses ID:</strong></td>
                        <td><strong>exam Center ID:</strong></td>
                        <td><strong>staff ID:</strong></td>

                        <td><strong>exam Description:</strong></td>
                        <td><strong>Update:</strong></td>
                        <td><strong>Delete:</strong></td>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($exams->result_array() as $exam): ?>
                        <tr>
                            <td><?php echo $exam['examID']; ?></td>
                            <td><?php echo $exam['examName']; ?></td>
                            <td><?php echo $exam['dateOfExam']; ?></td>
                            <td><?php echo $exam['price']; ?></td>
                            <td><img src="<?php echo $img_url . $exam['image'] ?>" alt="" width="70px"/></td>
                            <td><?php echo $exam['examCategory']; ?></td>
                            <td><?php echo $exam['examTime']; ?></td>
                            <td><?php echo $exam['coursesID']; ?></td>
                            <td><?php echo $exam['examCenterID']; ?></td>
                            <td><?php echo $exam['staffID']; ?></td>

                            <td><?php echo $exam['examDescription']; ?></td>
                            <td>
                                <form action="<?php echo site_url('Exams/updateExam'); ?>" method="POST">
                                    <input type="hidden" name="examID" value="<?php echo $exam['examID'] ?>">
                                    <input type="submit" class="btn btn-light" value="Update">
                                </form>
                            </td>
                            <td>
                                <form action="<?php echo site_url('Exams/deleteExam'); ?>" method="POST">
                                    <input type="hidden" name="examID" value="<?php echo $exam['examID'] ?>">
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
                <button type="button" class="btn btn-light"><a href="<?php echo site_url('Exams/AddExam'); ?>">Add An Exam</a></button><br>
            </div>
        </div>    
    </body>
</html>