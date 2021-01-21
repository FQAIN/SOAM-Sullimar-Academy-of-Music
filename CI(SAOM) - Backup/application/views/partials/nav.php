<?php $img_url = base_url() . "assets/img/"; ?>
<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                                <img src="<?php echo $img_url . "Screenshot 2020-11-17 184447.png" ?>" alt="Venue Logo" width="20%" height="100px">
                            </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                                <li><a href="#">Books</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('Home/viewBooks'); ?>">View All Books</a></li>
                                    </ul>
                                </li>

                                </li>
                                <li><a href="#">Exams</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('Home/viewExam'); ?>">View All Exams</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('Home/viewEvents'); ?>">View All Events</a>


                                    </ul>
                                </li>
                                <li><a href="#">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo site_url('Home/viewCourses'); ?>">View All Courses</a>
                                    </ul>
                                </li>

                                <li><a href="<?php echo site_url('Home/shoppingCart'); ?>"><i class="fa fa-shopping-cart"></i></a></li>

                                <li class='active'><a href="<?php echo site_url('Home/loginStudent'); ?>">Login/Register</a></li>

                                    <!--<li><a href="<?php echo site_url('Home/liveTV'); ?>"><i class="fa fa-youtube-play"></i></a></li>-->
<!--                                     <li><a href="<?php echo site_url('Home/profile'); ?>"><i class="fa fa-user"></i></a></li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>





    <!--    
                                            <li><a href="<?php echo site_url('Home/addItemToTeachersArea'); ?>">Add Item To Teachers Area</a>  -->