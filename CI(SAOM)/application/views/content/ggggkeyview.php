<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Reports for Sales on Books and Events</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/generateReports/" class="back"><-Back to Generate Report Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>Date Purchased</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Address</td>
                                <td>Email</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->datePurchased; ?></td>
                                    <td><?php echo $result->fName; ?></td>
                                    <td><?php echo $result->lName; ?></td>
                                    <td><?php echo $result->address; ?></td>
                                    <td><?php echo $result->email; ?></td>
                                    <td><?php echo $result->total; ?></td>
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