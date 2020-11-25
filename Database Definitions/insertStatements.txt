INSERT INTO `events`(`eventID`, `name`, `description`, `dateOfEvent`, `price`, `location`, `image`) VALUES (1,'Ferights','Best Event','2020-12-12',12.90,'Dublin','c/saom/images');

INSERT INTO `generate reports`(`generateReportsID`, `types`, `month`, `year`) VALUES (1,'Box Office Sales','2020-12-12','2020');

INSERT INTO `lessons`(`lessonID`, `LessonName`, `Location`, `time`, `Date`) VALUES (1,'Violin','Dublin 16th Dundrum','12:09:12','2010-12-12');

INSERT INTO `book lessons`(`bookLessonsID`, `BookTime`, `lessonID`) VALUES (1,'12:12:12',1);

INSERT INTO `exam center`(`examCenterID`, `Location`) VALUES (1,'Limeick');

INSERT INTO `student`(`memberID`, `username`, `password`, `email`, `dob`, `phone`, `dateEnrollment`, `fName`, `lName`, `address`, `image`) VALUES (1,'fyaz','fyaz123','fyaz@gmail.com','1999-12-04',098722722121,'2020-12-12','Fyaz','Ikram','25th the kings road','c/saom/images');

INSERT INTO `staffs`(`staffID`, `fName`, `lName`, `role`, `staffCourse`, `dob`, `address`, `email`, `username`, `password`, `phone`, `image`) VALUES (1,'fyaz','ikram','Admin','Violin',1990-12-12,'25th the kings road','fyaz@gmail.com','fyaz','fyaz123',0894389235,'c/saom/images');

INSERT INTO `courses`(`coursesID`, `courseName`, `description`, `level`, `numberOfYears`, `GroupCategory`, `image`, `studentID`, `staffID`) VALUES (1,'Vioiln','The Experts Class','Level 7 ',3,'Instruments','c/saom/images',1,1);

INSERT INTO `member`(`memberID`, `email`, `dob`, `phone`, `fName`, `lName`, `address`) VALUES (1,'fyaz@gmail.com','2020-12-12',077878537834,'Fyaz','Ikram','the 6th backyard road');

INSERT INTO `book course`(`bookCourseID`, `coursesID`) VALUES (1,1);

INSERT INTO `book events`(`bookEventID`, `fullPrice`, `qty`, `eventID`) VALUES (1,12.90,4,1);

INSERT INTO `books`(`booksID`, `bookName`, `description`, `author`, `yearPublished`, `price`, `category`, `ISBN`, `inStock`, `qty`, `image`) VALUES (1,'Vocals','Best Book to improve voice','Pierce Griffin',2016,12.89,'Vocals','44GFHJDFSH','Y',2,'c/saom/image');

INSERT INTO `book orders`(`bookOrdersID`, `expectedDate`, `expectedTime`, `dateOrderded`, `timeOrdered`, `qty`, `booksID`) VALUES (1,'2020-12-12','12:12:12','2020-11-11','12:12:09',7,1);

INSERT INTO `view teacher timetable`(`viewTeacherTimetableID`, `timetableLayout`, `weeksToView`, `staffID`) VALUES (1,'Grid Layout','This Week',1);

INSERT INTO `view student timetable`(`viewStudentTimetableID`, `timetableLayout`, `weeksToView`, `studentID`)VALUES (1,'Grid Layout','This Week',1);

INSERT INTO `process student timetable`(`processStudentTimetableID`, `days`, `dates`, `timeSlots`, `studentID`) VALUES (1,'Monday','2020-12-12','12:12:12',1);

INSERT INTO `process teacher timetable`(`processTeacherTimetableID`, `days`, `dates`, `timeSlots`, `staffID`) VALUES (1,'Monday','2020-12-12','12:12:12',1);

INSERT INTO `exams`(`examID`, `examName`, `dateOfExam`, `price`, `image`, `examCategory`, `examTime`, `coursesID`, `examCenterID`) VALUES (1,'Violin Advanced','2020-12-12',12.90,'c/saom/images','Instruments','12:12:12',1,1);

INSERT INTO `book exams`(`bookExamID`, `examID`) VALUES (1,1);

INSERT INTO `generate result sheet`(`generateResultSheetID`, `Result`, `studentID`, `examID`) VALUES (1,'90.78',1,1);

INSERT INTO `private tuition`(`privateTuitionID`, `Room`, `studentID`, `staffID`) VALUES (1,'Room 12A0',1,1);

INSERT INTO `process exams`(`processExamsID`, `examID`, `staffID`) VALUES (1,1,1);

INSERT INTO `shopping cart`(`shoppingCartID`, `session_id`, `fullPrice`, `dateAdded`, `imagePath`, `bookEventID`, `bookOrderID`, `bookCourseID`, `bookLessonID`, `bookExamsID`, `staffID`, `memberID`, `studentID`) VALUES (1,1,12.90,'2020-12-12','c/saom/images',1,1,1,1,1,1,1,1);

INSERT INTO `purchase`(`purchaseID`, `datePurchased`, `shoppingCartID`) VALUES (1,'2020-12-12',1);



