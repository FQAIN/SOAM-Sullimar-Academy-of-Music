<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Course Application Report Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/generateReports/" class="back"><-Back to Generate Report Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>Course Name</td>
                                <td>Course ID</td>
                                <td>Description</td>
                                <td>Level</td>
                                <td>Number of Years</td>
                                <td>Category</td>
                                <td>Price</td>
                                <td>Full Name</td>
                                <td>Email</td>
                                <td>Address</td>
                                <td>Date of Birth</td>
                                <td>Phone Number</td>
                                <td>Additional Information</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->courseName; ?></td>
                                    <td><?php echo $result->courseID; ?></td>
                                    <td><?php echo $result->description; ?></td>
                                    <td><?php echo $result->levels; ?></td>
                                    <td><?php echo $result->numberOfYears; ?></td>
                                    <td><?php echo $result->category; ?></td>
                                    <td><?php echo $result->price; ?></td>
                                    <td><?php echo $result->fullName; ?></td>
                                    <td><?php echo $result->email; ?></td>
                                    <td><?php echo $result->address; ?></td>
                                    <td><?php echo $result->dateOfBirth; ?></td>
                                    <td><?php echo $result->phoneNumber; ?></td>
                                    <td><?php echo $result->additionalInfo; ?></td>
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