<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Student Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>

                                <td><strong>Username:</strong></td>
                                <td><strong>Password:</strong></td>
                                <td><strong>Email:</strong></td>
                                <td><strong>Date of Birth:</strong></td>
                                <td><strong>Phone:</strong></td>
                                <td><strong>Date of Enrollment:</strong></td>
                                <td><strong>First Name:</strong></td>
                                <td><strong>Last Name:</strong></td>
                                <td><strong>Address:</strong></td>
                                <td><strong>Image:</strong></td>
                                <td><strong>Result:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students->result_array() as $student): ?>
                                <tr>
                                    <td><?php echo $student['username']; ?></td>
                                    <td><?php echo $student['password']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['dob']; ?></td>
                                    <td><?php echo $student['phone']; ?></td>
                                    <td><?php echo $student['dateEnrollment']; ?></td>
                                    <td><?php echo $student['fName']; ?></td>
                                    <td><?php echo $student['lName']; ?></td>
                                    <td><?php echo $student['address']; ?></td>
                                    <td><?php echo $student['image']; ?></td>
                                    <td><?php echo $student['result']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Students/updateStudent'); ?>" method='POST'>
                                            <input type='hidden' name='studentID' value="<?php echo $student['studentID'] ?>"/>
                                            <input type='submit' class='btn btn-light' value='Update'>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Students/deleteStudent'); ?>" method='POST'>
                                            <input type='hidden' name='studentID' value="<?php echo $student['studentID'] ?> "/>
                                            <input class='btn btn-light' type='submit' value='Delete'>
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
                  <!--      <button type="button" class="btn btn-light"><a href="<?php echo site_url('Students/AddStaff'); ?>">Add A Staff</a></button><br>-->
                    </div>
                </div>        
        </form>
    </body>
</html>