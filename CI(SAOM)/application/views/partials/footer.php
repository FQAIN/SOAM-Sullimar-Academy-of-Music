<?php 
    $js_base = base_url() . "assets/js/";
    $img_url = base_url() . "assets/img/";
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <img src="<?php echo $img_url."Screenshot 2020-11-17 184447.png";?>" alt="Venue Logo">
                    </div>
                    <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-stop"></i>Help FAQs</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Register</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Login</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>My Profile</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>How It Works?</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>More About Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-stop"></i>Our Clients</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Partnerships</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Blog Entries</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Contact Information</h4>
                    </div>
                    <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                    <ul>
                        <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                        <li><span>Email:</span><a href="#">hi@company.co</a></li>
                        <li><span>Address:</span><a href="#">company.co</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>Copyright &copy; 2020 SAOM

        - Design: <a rel="nofollow" href="#">Enigma Crackers</a>
         <p class='active'><a href="<?php echo site_url('Home/login'); ?>">Login for Staff</a></p>
    </p>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $js_base."vendor/jquery-1.11.2.min.js"?>"></script>
<script src="<?php echo $js_base."vendor/bootstrap.min.js"?>"></script>
<script src="<?php echo $js_base."datepicker.js"?>"></script>
<script src="<?php echo $js_base."plugins.js"?>"></script>
<script src="<?php echo $js_base."main.js"?>"></script>
</body>
</html>