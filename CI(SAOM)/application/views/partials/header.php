<?php $js_base = base_url() . "assets/js/";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SAOM</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo link_tag("assets/css/bootstrap.min.css");?>
        <?php echo link_tag("assets/css/bootstrap-theme.min.css");?>
        <?php echo link_tag("assets/css/fontAwesome.css");?>
        <?php echo link_tag("assets/css/hero-slider.css");?>
        <?php echo link_tag("assets/css/owl-carousel.css");?>
        <?php echo link_tag("assets/css/datepicker.css");?>
        <?php echo link_tag("assets/css/main.css");?>
        <?php echo link_tag("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900");?>
        <script src="<?php echo $js_base."vendor/modernizr-2.8.3-respond-1.4.2.min.js"?>"></script>

    </head>
    <?php include('nav.php');?>