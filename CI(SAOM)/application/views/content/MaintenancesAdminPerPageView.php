<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
            <section class="" id="">
                <h2 class="text-center">All Maintenance Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td><strong>Instrument ID:</strong></td>
                                <td><strong>Note:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($maintenances->result_array() as $maintenance): ?>
                                <tr>

                                    <td><?php echo $maintenance['instrumentID']; ?></td>
                                    <td><?php echo $maintenance['note']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Maintenances/updateMaintenance'); ?>" method='POST'>
                                            <input type='hidden' name='maintenanceID' value="<?php echo $maintenance['maintenanceID'] ?>"/>
                                            <input type='submit' class='btn btn-light' value='Update'>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Maintenances/deleteMaintenance'); ?>" method='POST'>
                                            <input type='hidden' name='maintenanceID' value="<?php echo $maintenance['maintenanceID'] ?> "/>
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
                        <button type="button" class="btn btn-light"><a href="<?php echo site_url('Maintenances/AddMaintenance'); ?>">Add A Maintenance</a></button><br>
                    </div>
                </div>        
    </body>
</html>