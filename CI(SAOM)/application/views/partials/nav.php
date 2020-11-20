<?php $img_url = base_url() . "assets/img/";?>
<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                                <img src="<?php echo $img_url."Screenshot 2020-11-17 184447.png"?>" alt="Venue Logo" width="20%" height="100px">
                            </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.php">Home</a></li>
                                <li><a href="#">Books</a>
                                    <ul class="sub-menu">
                                        <li><a href="viewBooks.html">Categories of Books</a>
                                            <ul class="sub-menu">
                                                <li><a href="viewBooks.html">Musical Instruments</a></li>
                                                <li><a href="viewBooks.html">Vocals</a></li>
                                                <li><a href="viewBooks.html">Tuning</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="viewEvents.html">View All Events</a>
                                        <li><a href="bookEvent.html">Book Events</a>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Admin 1 </a>
                                    <ul class="sub-menu">
                                        <li><a href="listStudents.html">View All Students</a>
                                        <li><a href="listCourses.html">View All Courses</a>
                                        <li><a href="viewExams.html">View Exam Details</a>
                                        <li><a href="addEvent.html">Add an Event</a>
                                        <li><a href="updateStaffDetails.html">Update Staff Details</a>
                                        <li><a href="monthlySalesReport.html">Monthly Sales Report Generation</a>
                                        <li><a href="privateTuiton.html">Allocate Private Tuiton For Student</a>
                                        <li><a href="processExternalExam.html">Process External Exams</a>
                                        <li><a href="register.html">Register Student/Staff</a>
                                        <li><a href="listStaffs.html">View Staff Details</a>
                                        <li><a href="addABook.html">Add a Book</a>
                                        <li><a href="addStaff.html">Add a Staff</a>
                                        <li><a href="bookExam.html">Book an Exam</a>
                                        <li><a href="generateResultSheet.html">Generate Result Sheet</a>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Admin 2</a>
                                    <ul class="sub-menu">
                                        <li><a href="processStudentTimetable.html">Process Student Timetable</a>
                                        <li><a href="teacherDashboard.html">Teachers Area/Dashboard</a>
                                        <li><a href="ProcessTeacherTimetable.html">Process Teacher Timetable</a>  
                                        <li><a href="BookACourse.html">Book a course</a>  
                                        <li><a href="updateABook.html">update a Book</a>  
                                        <li><a href="<?php echo site_url('Home/addItemToTeachersArea'); ?>">Add Item To Teachers Area</a>  
                                        <li><a href="updateCourseDetails.html">Update Course Details</a>  
                                        <li><a href="updateEventDetails.html">Update Event Details</a>  
                                        <li><a href="updateStudentResults.php">Update Student Results</a>  
                                        <li><a href="addNewCourse.php">Add New Course</a>  
                                        <li><a href="bookLesson.php">Book Lesson</a>  
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Account</a>
                                    <ul class="sub-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="#">Register</a>
                                        <li><a href="profile.html">My Profile</a>
                                        <li><a href="viewStudentTimetable.html">View Student Timetables</a>
                                        <li><a href="viewTeacherTimetable.html">View Teacher Timetables</a>
                                        <li><a href="purchaseBook.html">Purchase Items</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>