<?php 
    $js_base = base_url() . "assets/js/";
    $img_url = base_url() . "assets/img/";
?>
<section class="contact" id="contact">
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.3906854187785!2d-8.638198684640777!3d52.63485427983608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485b5b79ff40c8a5%3A0x22ca49f2cc3abfcd!2s25%20The%20Crescent%2C%20Kilteragh%2C%20Dooradoyle%2C%20Co.%20Limerick%2C%20V94%20FDN8!5e0!3m2!1sen!2sie!4v1605648532060!5m2!1sen!2sie"  width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="wrapper">
                <div class="section-heading">
                    <span>Contact Us</span>
                    <h2>Please Contact Us To Get In Touch With Us</h2>
                </div>
                <button id="modBtn" class="modal-btn">Talk to us</button>
            </div>  
            <div id="modal" class="modal">
                <div class="modal-content">
                    <div class="close fa fa-close"></div>
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <span>Talk To Us</span>
                                            <h2>Let's have a discussion</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">                                          
                                            <div class="section-heading">
                                                <span>More About Us</span>
                                                <h2>Venue Company</h2>
                                            </div>
                                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus eu bibendum.</p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                                                <li><span>Email:</span><a href="#">hi@company.co</a></li>
                                                <li><span>Address:</span><a href="#">company.co</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</section>

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

        - Design: <a rel="nofollow" href="#">Enigma Crackers</a></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $js_base."vendor/jquery-1.11.2.min.js"?>"></script>
<script src="<?php echo $js_base."vendor/bootstrap.min.js"?>"></script>
<script src="<?php echo $js_base."datepicker.js"?>"></script>
<script src="<?php echo $js_base."plugins.js"?>"></script>
<script src="<?php echo $js_base."main.js"?>"></script>
</body>
</html>