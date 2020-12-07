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

a:link, a:visited{
    text-decoration: none;
     color: white;
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
        <div ><h1>All Event Details</h1></div>
        <div>
                <p><a href="<?php echo base_url(); ?>index.php/Home/index/" class="back"><-Back to Home Menu</a></p>
            <?php 
//            $template = array(
// 'table_open' => ' <table class="table table-striped table-dark">',
// 'thead_open' => '<th style="font-weight:bold">',
// 'thead_close' => '</thead>',
// 'heading_row_start' => '<tr>',
// 'heading_row_end' => '</tr>',
// 'heading_cell_start' => '<th>',
// 'heading_cell_end' => '</th>',
// 'tbody_open' => '<tbody>',
// 'tbody_close' => '</tbody>',
// 'row_start' => '<tr>',
// 'row_end' => '</tr>',
// 'cell_start' => '<td>',
// 'cell_end' => '</td>',
// 'row_alt_start' => '<tr>',
// 'row_alt_end' => '</tr>',
// 'cell_alt_start' => '<td>',
// 'cell_alt_end' => '</td>',
// 'table_close' => '</table>'
//);
//$this->table->set_template($template);
            
$this->table->set_heading('ID', 'Name', 'Description','Date','Price','Location','Image');
            echo $this->table->generate($page);
            ?>
                
        </div>
         <!--Render pagination links--> 
<?php echo "</br>" . $this->pagination->create_links(); ?>

          </form>
        <button class="round"><a href="<?php echo site_url('Home/AddEvent'); ?>">Add An Event</a></button><br>
        
    </body>
</html>