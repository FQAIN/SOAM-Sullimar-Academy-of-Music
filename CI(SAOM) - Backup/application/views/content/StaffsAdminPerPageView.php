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
        <section class="" id="">
            <h2 class="text-center">All Staff Details</h2>
            <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
            <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <td><strong>First Name:</strong></td>
                            <td><strong>Last Name:</strong></td>
                            <td><strong>Role:</strong></td>
                            <td><strong>Date of Birth:</strong></td>
                            <td><strong>Address:</strong></td>
                            <td><strong>Email:</strong></td>
                            <td><strong>Username:</strong></td>
                            <td><strong>Password:</strong></td>
                            <td><strong>Phone:</strong></td>
                            <td><strong>Image:</strong></td>
                            <td><strong>Course ID:</strong></td>
                            <td><strong>Update:</strong></td>
                            <td><strong>Delete:</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($staffs->result_array() as $staff): ?>
                            <tr>

                                <td><?php echo $staff['fName']; ?></td>
                                <td><?php echo $staff['lName']; ?></td>
                                <td><?php echo $staff['role']; ?></td>
                                <td><?php echo $staff['dob']; ?></td>
                                <td><?php echo $staff['address']; ?></td>
                                <td><?php echo $staff['email']; ?></td>
                                <td><?php echo $staff['username']; ?></td>
                                <td><?php echo $staff['password']; ?></td>
                                <td><?php echo $staff['phone']; ?></td>
                                <td><img src="<?php echo $img_url . $staff['image'] ?>" alt="" width="70px"/></td>
                                <td><?php echo $staff['courseID']; ?></td>
                                <td>
                                    <form action="<?php echo site_url('Staffs/updateStaff'); ?>" method='POST'>
                                        <input type='hidden' name='staffID' value="<?php echo $staff['staffID'] ?>"/>
                                        <input type='submit' class='btn btn-light' value='Update'>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?php echo site_url('Staffs/deleteStaff'); ?>" method='POST'>
                                        <input type='hidden' name='staffID' value="<?php echo $staff['staffID'] ?> "/>
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
                    <button type="button" class="btn btn-light"><a href="<?php echo site_url('Staffs/AddStaff'); ?>">Add A Staff</a></button><br>
                </div>
            </div>        
    </body>
</html>