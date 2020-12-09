<?php $img_url = base_url() . "assets/img/"; ?>
<html>
    <head>
        <title>My Address Book</title>
        <style>
body {
  background: white;
  color: black;
  font-family: sans-serif;
}

/*Responsive table*/
table { 
  width: 100%; 
  border-collapse: collapse; 
  background: #222; 
  color: #f3f3f3;
}

td, th { 
  padding: 8px; 
  text-align: left; 
}

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #2c343b; 
}

th { 
  background: #000; 
  font-weight: bold; 
}

h1 a {
  text-decoration: none;
  color: #fff;
}   

p a:link, p a:visited{
    text-decoration: none;
     color: black;
}

button a:link, button a:visited{
    text-decoration: none;
     color: white;
}


p{
    color: black;
}

.round {
  background: #0069eb;
  border-radius: 30px;
  border: none;
  color: #fff;
  font-size: 16px;
  padding: 15px 30px;
  text-decoration: none; }
        </style>
    </head>
    <body>
          <form>  
        <div ><h1>All Staff Details</h1></div>
        <div>
                <p><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
            
            <table>
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
                            <?php
                                if ($staffs->num_rows() > 0) 
                                {
                                    foreach ($staffs->result_array() as $staff)
                                    {
                                        echo 
                                        "<tr>	
                                            <td>".$staff['fName']."</td>
                                            <td>".$staff['lName']."</td>
                                            <td>".$staff['role']."</td>
                                            <td>".$staff['dob']."</td>
                                            <td>".$staff['address']."</td>
                                            <td>".$staff['email']."</td>
                                            <td>".$staff['username']."</td>
                                            <td>".$staff['password']."</td>
                                            <td>".$staff['phone']."</td>
                                            <td>".$staff['image']."</td>
                                            <td>".$staff['courseID']."</td>
                                            <td>
                                                <form action=" . site_url('Staffs/updateStaff') . " method='POST'>
                                                    <input type='hidden' name='staffID' value=" . $staff['staffID'] . "/>
                                                    <input type='submit' class='round' value='Update'>
                                                </form>
                                            </td>
                                            <td>
                                                <form action=" . site_url('Staffs/deleteStaff') . " method='POST'>
                                                    <input type='hidden' name='staffID' value=" . $staff['staffID'] . "/>
                                                    <input class='round' type='submit' value='Delete'>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                }
                            ?>
                        </table>
                
        </div>
         <!--Render pagination links--> 
<?php echo "</br>" . $this->pagination->create_links(); ?>

          </form>
        <button class="round"><a href="<?php echo site_url('Staffs/AddStaff'); ?>">Add A Staff</a></button><br>
        
    </body>
</html>