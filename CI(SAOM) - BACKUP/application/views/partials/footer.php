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
                        <img src="<?php echo $img_url . "Screenshot 2020-11-17 184447.png"; ?>" alt="Venue Logo" width="100%" height="100px">
                    </div>
                    <p>The Sullimar Academy of Music is situated on the Dublin Road in Limerick. SAOM was established in 1980 as a small school of music with 2 teachers and over 30 pupils.</p>
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
                                <li><a href="Home/loginStudent"><i class="fa fa-stop"></i>Register</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-stop"></i>Our Clients</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Partnerships</a></li>
                                <li><a href="#"><i class="fa fa-stop"></i>Blog Entries</a></li>
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
                    <p>Feel free to contact us anytime, and anywhere. We are always here to help you</p>
                    <ul>
                        <li><span>Phone:</span><a href="#">087 352 1161</a></li>
                        <li><span>Email:</span><a href="#">soam@gmail.com</a></li>
                        <li><span>Address:</span><a href="#">25 The Crescent Kilteragh</a></li>
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
<script src="<?php echo $js_base . "vendor/jquery-1.11.2.min.js" ?>"></script>
<script src="<?php echo $js_base . "vendor/bootstrap.min.js" ?>"></script>
<script src="<?php echo $js_base . "datepicker.js" ?>"></script>
<script src="<?php echo $js_base . "plugins.js" ?>"></script>
<script src="<?php echo $js_base . "main.js" ?>"></script>
</body>
</html>