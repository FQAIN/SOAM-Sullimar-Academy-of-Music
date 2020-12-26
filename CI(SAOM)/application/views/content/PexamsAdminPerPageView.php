<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
    </head>
    <body>
        <form>  
            <section class="" id="">
                <h2 class="text-center">All Processed External Exam Details</h2>
                <p class="text-center"><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
                <div class="table-responsive mx-auto" style="width: 100%; padding: 40px;">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <td><strong>Exam ID:</strong></td>
                                <td><strong>Staff ID:</strong></td>
                                <td><strong>Update:</strong></td>
                                <td><strong>Delete:</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pexams->result_array() as $pexam): ?>
                                <tr>

                                    <td><?php echo $pexam['examID']; ?></td>
                                    <td><?php echo $pexam['staffID']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Pexams/updatePexam'); ?>" method='POST'>
                                            <input type='hidden' name='pexamID' value="<?php echo $pexam['pexamID'] ?>"/>
                                            <input type='submit' class='btn btn-light' value='Update'>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Pexams/deletePexam'); ?>" method='POST'>
                                            <input type='hidden' name='pexamID' value="<?php echo $pexam['pexamID'] ?> "/>
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
                        <button type="button" class="btn btn-light"><a href="<?php echo site_url('Pexams/AddPexam'); ?>">Process An External Exam</a></button><br>
                    </div>
                </div>        
        </form>
    </body>
</html>