<?php
$base_url = base_url(); //assign base url to variable
$img_url = base_url() . "assets/images/"; //assign images url directory
$css_url = base_url() . "assets/css/"; //assign CSS url directory
$script_url = base_url() . "assets/js/"; //assign JS scripts url directory
?>

<?php include("partials/header.php");?>

<?php include("partials/hero.php");?>

<?php echo $content;?>

<?php include("partials/footer.php");?>
