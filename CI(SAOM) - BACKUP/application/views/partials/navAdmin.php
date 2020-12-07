<?php $img_url = base_url() . "assets/img/";?>
  <div class="wrap">
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="primary-nav-button" type="button">Menu</button>
                            <a href="index.html"><div class="logo">
                                          <img src="<?php echo $img_url."Screenshot 2020-11-17 184447.png"?>"alt="Venue Logo" width="20%" height="100px">
                                </div></a>
                            <nav id="primary-nav" class="dropdown cf">
                                <ul class="dropdown menu">

                                    <li class='active'><a href="<?php echo site_url('Home/dashboard'); ?>">Dashboard</a></li>
                                    <li><a href="#">Members</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/viewStudents'); ?>">List Students</a>
                                            <li><a href="<?php echo site_url('Home/viewStaffs'); ?>">List Staffs</a>


                                        </ul>
                                    </li>
                                    <li><a href="#">Exams</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/viewExamsAdmin'); ?>">View Exams</a>
                                            <li><a href="<?php echo site_url('Home/bookExams'); ?>">Book Exam</a>
                                            <li><a href="<?php echo site_url('Home/processExternalExams'); ?>">Process External Exams</a>    


                                        </ul>
                                    </li>

                                    <li><a href="#">Courses/Lessons</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/viewCoursesAdmin'); ?>">View Courses</a>
                                            <li><a href="<?php echo site_url('Home/applyForCourses'); ?>">Apply for Courses</a>
                                                <li><a href="<?php echo site_url('Home/allocatePrivateTuition'); ?>">Allocate Private Tuition</a>
                                        </ul>
                                    </li>
                                    <li><a href="#">Books</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/viewBooksAdmin'); ?>">View All Books</a>
                                            <li><a href="<?php echo site_url('Home/viewBookOrders'); ?>">View All Book Orders</a>

                                        </ul>
                                    </li>

                                    <li><a href="#">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/viewEventsAdmin'); ?>">View All Events</a>
                                            <li><a href="<?php echo site_url('Home/BookEvents'); ?>">Book Events</a>


                                        </ul>
                                    </li>

                                    <li><a href="#">Timetables</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/processStudentTimetables'); ?>">Process Student Timetables</a>
                                            <li><a href="<?php echo site_url('Home/processTeachersTimetables'); ?>">Process Teacher Timetables</a>
                                            <li><a href="<?php echo site_url('Home/viewStudentTimetables'); ?>">View Student Timetables</a>
                                            <li><a href="<?php echo site_url('Home/viewTeachersTimetables'); ?>">View Teacher Timetables</a>


                                        </ul>
                                    </li>

                                    <li><a href="#">Reports</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo site_url('Home/generateReports'); ?>">Generate Reports</a>
                                            <li><a href="<?php echo site_url('Home/generateResultSheet'); ?>">Generate Result Sheet</a>


                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
