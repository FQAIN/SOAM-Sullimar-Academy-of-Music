<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Reports for Private Tuitions</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/generateReports/" class="back"><-Back to Generate Report Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>privatetuitionID</td>
                                <td>room</td>
                                <td>studentID</td>
                                <td>staffID</td>
                                <td>note</td>
                                <td>courseID</td>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->privatetuitionID; ?></td>
                                    <td><?php echo $result->room; ?></td>
                                    <td><?php echo $result->studentID; ?></td>
                                    <td><?php echo $result->staffID; ?></td>
                                     <td><?php echo $result->note; ?></td>
                                      <td><?php echo $result->courseID; ?></td>
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