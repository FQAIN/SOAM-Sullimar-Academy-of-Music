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

                            <li class='active'><a href="<?php echo site_url('Home/dashboardStudent'); ?>">Dashboard</a></li>

                            <li><a href="#">Exams</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewExamsAdmin'); ?>">View Exams</a>
                                    <li><a href="<?php echo site_url('Home/bookExams'); ?>">Book Exam</a>


                                </ul>
                            </li>

                            <li><a href="#">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewCoursesAdmin'); ?>">View Courses</a>
                                    <li><a href="<?php echo site_url('Home/applyForCourses'); ?>">Apply for Courses</a>
                                </ul>
                            </li>
                            <li><a href="#">Books</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Books/index'); ?>">View All Books</a>
                                    <li><a href="<?php echo site_url('Home/viewBookOrders'); ?>">Order Book</a>

                                </ul>
                            </li>

                            <li><a href="#">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewEvents'); ?>">View All Events</a>
                                    <li><a href="<?php echo site_url('Home/BookEvents'); ?>">Book Events</a>


                                </ul>
                            </li>

                            <li><a href="#">Timetables</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/viewStudentTimetables'); ?>">View Student Timetables</a>
                                    <li><a href="<?php echo site_url('Home/viewTeachersTimetables'); ?>">View Teacher Timetables</a>
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
