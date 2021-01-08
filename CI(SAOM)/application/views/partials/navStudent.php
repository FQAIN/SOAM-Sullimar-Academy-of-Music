<?php $img_url = base_url() . "assets/img/"; ?>
<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.html"><div class="logo">
                            <img src="<?php echo $img_url . "Screenshot 2020-11-17 184447.png" ?>"alt="Venue Logo" width="20%" height="100px">
                        </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">

                            <li class='active'><a href="<?php echo site_url('Home/dashboardStudent'); ?>">Menu</a></li>

                            <li><a href="#">Exams</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewExamS'); ?>">View Exams</a>


                                </ul>
                            </li>

                            <li><a href="#">Course</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewCoursesS'); ?>">View Courses</a>
                                </ul>
                            </li>
                            <li><a href="#">Book</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewBooksS'); ?>">View All Books</a>

                                </ul>
                            </li>

                            <li><a href="#">Event</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewEventsS'); ?>">View All Events</a>
                                </ul>
                            </li>

                            <li><a href="#">Timetable</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewStudentTimetablesS'); ?>">View Student Timetables</a>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('Home/logoutStudent'); ?>">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
