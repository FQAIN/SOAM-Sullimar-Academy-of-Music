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

                            <li class='active'><a href="<?php echo site_url('Home/dashboard'); ?>">Dashboard</a></li>
                            <li><a href="#">Members</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Students/index'); ?>">View Students</a>
                                    <li><a href="<?php echo site_url('Staffs/index'); ?>">View Staffs</a>


                                </ul>
                            </li>
                            <li><a href="#">Exams</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Exams/index'); ?>">View Exams</a>
                                    <li><a href="<?php echo site_url('Pexams/index'); ?>">Process External Exams</a>    


                                </ul>
                            </li>

                            <li><a href="#">Courses/Tuitions</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Courses/index'); ?>">View Courses</a>
                                    <li><a href="<?php echo site_url('Privatetuitions/index'); ?>">View Private Tuitions</a>
                                </ul>
                            </li>
                            <li><a href="#">Books</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Books/index'); ?>">View All Books</a>
                                    <li><a href="<?php echo site_url('Home/viewBookOrders'); ?>">View All Book Orders</a>

                                </ul>
                            </li>

                            <li><a href="#">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Events/index'); ?>">View All Events</a>
                                </ul>
                            </li>

                            <li><a href="#">Timetables</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/processStudentTimetables'); ?>">Process Course Timetables</a>
                                    <li><a href="<?php echo site_url('Home/viewStudentTimetables'); ?>">View Course Timetables</a>
                                    <li><a href="<?php echo site_url('Home/viewTeachersTimetables'); ?>">View Course Timetables for Staff</a>


                                </ul>
                            </li>

                            <li><a href="#">Reports/Requests</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('Home/generateReports'); ?>">Generate Reports</a>
                                    <li><a href="<?php echo site_url('Maintenances/index'); ?>">Instrument Maintenance</a>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('Home/logout'); ?>">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
