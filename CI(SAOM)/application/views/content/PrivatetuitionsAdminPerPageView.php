<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <section class="" id="">
            <h2 class="text-center">All Privatetuition Details</h2>
            <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
            <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <td><strong>Room:</strong></td>
                            <td><strong>Student ID:</strong></td>
                            <td><strong>Staff ID:</strong></td>
                            <td><strong>Note:</strong></td>
                            <td><strong>Course ID:</strong></td>
                             <td><strong>Date:</strong></td>
                              <td><strong>Time:</strong></td>

                            <td><strong>Update:</strong></td>
                            <td><strong>Delete:</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($privatetuitions->result_array() as $privatetuition): ?>
                            <tr>

                                <td><?php echo $privatetuition['room']; ?></td>
                                <td><?php echo $privatetuition['studentID']; ?></td>
                                <td><?php echo $privatetuition['staffID']; ?></td>
                                <td><?php echo $privatetuition['note']; ?></td>
                                <td><?php echo $privatetuition['courseID']; ?></td>
                                <td><?php echo $privatetuition['date']; ?></td>
                                <td><?php echo $privatetuition['time']; ?></td>
                                <td>
                                    <form action="<?php echo site_url('Privatetuitions/updatePrivatetuition'); ?>" method='POST'>
                                        <input type='hidden' name='privatetuitionID' value="<?php echo $privatetuition['privatetuitionID'] ?>"/>
                                        <input type='submit' class='btn btn-light' value='Update'>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?php echo site_url('Privatetuitions/deletePrivatetuition'); ?>" method='POST'>
                                        <input type='hidden' name='privatetuitionID' value="<?php echo $privatetuition['privatetuitionID'] ?> "/>
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
                    <button type="button" class="btn btn-light"><a href="<?php echo site_url('Privatetuitions/AddPrivatetuition'); ?>">Add A Privatetuition</a></button><br>
                </div>
            </div>        
    </body>
</html>