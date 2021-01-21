<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>
            <section class="" id="">
                <h2 class="text-center">All Reports for Maintenance Requests</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/generateReports/" class="back"><-Back to Generate Report Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td>maintenanceID</td>
                                <td>instrumentID</td>
                                <td>note</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?php echo $result->maintenanceID; ?></td>
                                    <td><?php echo $result->instrumentID; ?></td>
                                    <td><?php echo $result->note; ?></td>
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