<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body> 
            <section class="" id="">
                <h2 class="text-center">All Event Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td><strong>Name:</strong></td>
                                <td><strong>Description:</strong></td>
                                <td><strong>Date of Event:</strong></td>
                                <td><strong>Price:</strong></td>
                                <td><strong>Location:</strong></td>
                                <td><strong>Image:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($events->result_array() as $event): ?>
                                <tr>
                                    <td><?php echo $event['name']; ?></td>
                                    <td><?php echo $event['description']; ?></td>
                                    <td><?php echo $event['dateOfEvent']; ?></td>
                                    <td><?php echo $event['price']; ?></td>
                                    <td><?php echo $event['location']; ?></td>
                                    <td><?php echo $event['image']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Events/updateEvent'); ?>" method="POST">
                                            <input type="hidden" name="eventID" value="<?php echo $event['eventID'] ?>">
                                            <input type="submit" class="btn btn-light" value="Update">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Events/deleteEvent'); ?>" method="POST">
                                            <input type="hidden" name="eventID" value="<?php echo $event['eventID'] ?>">
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
                        <button type="button" class="btn btn-light"><a href="<?php echo site_url('Events/AddEvent'); ?>">Add An Event</a></button><br>
                    </div>
                </div>        
    </body>
</html>