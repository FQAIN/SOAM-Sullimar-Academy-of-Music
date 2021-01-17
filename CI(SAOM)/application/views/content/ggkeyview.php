<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Exam Application Report Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/generateReports/" class="back"><-Back to Generate Report Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>Exam Name</td>
                                <td>Exam ID</td>
                                <td>Description</td>
                                <td>Date of Exam</td>
                                <td>Category</td>
                                <td>Time</td>
                                <td>Full Name</td>
                                <td>Email</td>
                                <td>Address</td>
                                <td>Date of Birth</td>
                                <td>Phone Number</td>
                                <td>Additional Information</td>
                                <td>Price</td>
                                <td>Season</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->examName; ?></td>
                                    <td><?php echo $result->examID; ?></td>
                                    <td><?php echo $result->examDescription; ?></td>
                                    <td><?php echo $result->dateOfExam; ?></td>
                                    <td><?php echo $result->examCategory; ?></td>
                                    <td><?php echo $result->examTime; ?></td>
                                    <td><?php echo $result->fullName; ?></td>
                                    <td><?php echo $result->email; ?></td>
                                    <td><?php echo $result->address; ?></td>
                                    <td><?php echo $result->dateOfBirth; ?></td>
                                    <td><?php echo $result->phoneNumber; ?></td>
                                    <td><?php echo $result->additionalinfo; ?></td>
                                    <td><?php echo $result->price; ?></td>
                                    <td><?php echo $result->Seasons; ?></td>
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