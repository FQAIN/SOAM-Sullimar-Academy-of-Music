-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 04:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saom`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addBook` (IN `p_bookName` VARCHAR(45), IN `p_description` VARCHAR(250), IN `p_author` VARCHAR(45), IN `p_yearPublished` YEAR, IN `p_price` DECIMAL, IN `p_category` VARCHAR(45), IN `p_ISBN` VARCHAR(45), IN `p_inStock` INT, IN `p_qty` INT, IN `p_image` VARCHAR(45))  NO SQL
BEGIN
	INSERT INTO books
    (
    	bookName,
        description,
        author,
        yearPublished,
        price,
        category,
        ISBN,
        inStock,
        qty,
        image
    )
    VALUES
    (
    	p_bookName,
        p_description,
        p_author,
        p_yearPublished,
        p_price,
        p_category,
        p_ISBN,
        p_inStock,
        p_qty,
        p_image
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addEvent` (IN `p_name` VARCHAR(45), IN `p_description` VARCHAR(45), IN `p_dateOfEvent` DATE, IN `p_price` DECIMAL(6,2), IN `p_location` VARCHAR(45), IN `p_image` VARCHAR(45))  NO SQL
BEGIN
	INSERT INTO saomevents
    (
    	name,
        description,
        dateOfEvent,
        price,
        location,
        image
    )
    VALUES
    (
    	p_name,
        p_description,
        p_dateOfEvent,
        p_price,
        p_location,
        p_image
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addStaff` (IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_role` VARCHAR(45), IN `p_dob` DATE, IN `p_address` VARCHAR(45), IN `p_email` VARCHAR(45), IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_phone` INT, IN `p_image` VARCHAR(45), IN `p_courseID` INT)  NO SQL
BEGIN
	INSERT INTO staffs
    (
    	fName,
        lName,
        role,
        dob,
        address,
        email,
        username,
        password,
        phone,
        image,
        courseID
    )
    VALUES
    (
    	p_fName,
        p_lName,
        p_role,
        p_dob,
        p_address,
        p_email,
        p_username,
        p_password,
        p_phone,
        p_image,
        p_courseID
    );
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteBook` (IN `p_booksID` INT)  NO SQL
BEGIN
	DELETE FROM books
    WHERE booksID  = p_booksID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEvent` (IN `p_eventID` INT)  NO SQL
BEGIN
	DELETE FROM saomevents
    WHERE p_eventID = eventID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteStaff` (IN `p_staffID` INT)  NO SQL
BEGIN
	DELETE FROM staffs
    WHERE p_staffID = staffID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectBookForUpdate` (IN `p_bookID` INT)  NO SQL
BEGIN
	SELECT booksID, bookName, description, author, yearPublished, price, category, ISBN, inStock, qty, image FROM books
    WHERE booksID = p_bookID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectBooksPerPage` (IN `p_limit` INT, IN `p_start` INT)  NO SQL
BEGIN
SELECT booksID, bookName, description, author, yearPublished, price, category, ISBN, inStock, qty, image 
FROM books
 LIMIT  p_limit,p_start;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectContactsPerPage` (IN `p_limit` INT, IN `p_start` INT)  NO SQL
BEGIN
SELECT eventID,name, description,dateOfEvent,price,location,image
FROM saomevents
 LIMIT p_limit, p_start;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventForUpdate` (IN `p_eventID` INT)  NO SQL
BEGIN
	SELECT eventID,name,description,dateOfEvent,price,location,image
    FROM saomevents
    WHERE eventID = p_eventID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectStaffForUpdate` (IN `p_staffID` INT)  NO SQL
BEGIN
	SELECT 
        staffID,
        fName,
        lName,
        role,
        dob,
        address,
        email,
        username,
        password,
        phone,
        image,
        courseID
    FROM staffs
    WHERE staffID = p_staffID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectStaffsPerPage` (IN `p_limit` INT, IN `p_start` INT)  NO SQL
BEGIN
SELECT 	staffID,
		fName,
        lName,
        role,
        dob,
        address,
        email,
        username,
        password,
        phone,
        image,
        courseID
FROM staffs
 LIMIT p_limit, p_start;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedBook` (IN `p_booksID` INT, IN `p_bookName` VARCHAR(45), IN `p_description` VARCHAR(45), IN `p_author` VARCHAR(45), IN `p_yearPublished` YEAR(4), IN `p_price` INT, IN `p_category` VARCHAR(45), IN `p_ISBN` VARCHAR(45), IN `p_inStock` TINYINT(4), IN `p_qty` INT(11), IN `p_image` VARCHAR(45))  NO SQL
BEGIN
	UPDATE books
    SET bookName = p_bookName,
    description = p_description,
    author = p_author,
    yearPublished = p_yearPublished,
    price = p_price,
    category = p_category,
    ISBN = p_ISBN,
    inStock = p_inStock,
    qty = p_qty,
    image = p_image
    WHERE booksID = p_booksID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedEvent` (IN `p_eventID` INT, IN `p_name` VARCHAR(45), IN `p_description` VARCHAR(250), IN `p_dateOfEvent` DATE, IN `p_price` DECIMAL(6,2), IN `p_location` VARCHAR(45), IN `p_image` VARCHAR(45))  NO SQL
BEGIN
	UPDATE saomevents
    SET name = p_name,
    description = p_description,
    dateOfEvent = p_dateOfEvent,
    price = p_price,
    location = p_location,
    image = p_image
    WHERE eventID = p_eventID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedStaff` (IN `p_staffID` INT, IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_role` VARCHAR(45), IN `p_dob` DATE, IN `p_address` VARCHAR(250), IN `p_email` VARCHAR(45), IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_phone` INT, IN `p_image` VARCHAR(45), IN `p_courseID` INT)  NO SQL
BEGIN
	UPDATE staffs
    SET fName = p_fName,
    lName = p_lName,
    role = p_role,
    dob = p_dob,
    address = p_address,
    email = p_email,
    username = p_username,
    password = p_password,
    phone = p_phone,
    image = p_image,
    courseID = p_courseID
    WHERE staffID = p_staffID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateStudent` (IN `p_memberid` INT, IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_email` VARCHAR(45), IN `p_dob` DATE, IN `p_phone` INT, IN `p_dateEnrollment` DATE, IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_address` VARCHAR(45), IN `p_image` VARCHAR(45))  NO SQL
BEGIN
	UPDATE student
    SET
    username = p_username,
    password = p_password,
    email = p_email,
    dob = p_dob,
    phone = p_phone,
    dateEnrollment = p_dateEnrollment,
    fName = p_fName,
    lName = p_lName,
    address = p_address,
    image = p_image
    WHERE p_memberid = memberID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidStudent` (IN `p_email` VARCHAR(45), IN `p_password` VARCHAR(45))  NO SQL
BEGIN
SELECT password, email
FROM student
WHERE p_email = email AND p_password = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidUser` (IN `p_email` VARCHAR(25), IN `p_password` VARCHAR(25))  NO SQL
BEGIN
SELECT password, email
FROM staffs
WHERE p_email = email AND p_password = password;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllStudentDetails` ()  NO SQL
BEGIN
	SELECT * FROM student;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewCourseDetails` ()  NO SQL
BEGIN
	SELECT * FROM courses;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `viewEventDetails` ()  NO SQL
BEGIN
	SELECT * FROM saomevents;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `book course`
--

CREATE TABLE `book course` (
  `bookCourseID` int(11) NOT NULL,
  `coursesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book events`
--

CREATE TABLE `book events` (
  `bookEventID` int(11) NOT NULL,
  `fullPrice` decimal(10,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `eventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book exams`
--

CREATE TABLE `book exams` (
  `bookExamID` int(11) NOT NULL,
  `examID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book lessons`
--

CREATE TABLE `book lessons` (
  `bookLessonsID` int(11) NOT NULL,
  `BookTime` time DEFAULT NULL,
  `lessonID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book orders`
--

CREATE TABLE `book orders` (
  `bookOrdersID` int(11) NOT NULL,
  `expectedDate` date DEFAULT NULL,
  `expectedTime` time DEFAULT NULL,
  `dateOrderded` date DEFAULT NULL,
  `timeOrdered` time DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `booksID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `booksID` int(11) NOT NULL,
  `bookName` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `yearPublished` year(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `ISBN` varchar(45) DEFAULT NULL,
  `inStock` tinyint(4) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`booksID`, `bookName`, `description`, `author`, `yearPublished`, `price`, `category`, `ISBN`, `inStock`, `qty`, `image`) VALUES
(8, 'book1', 'kjhv', 'kjlhbv', 2000, 20, 'ljhb', 'ljhb', 1, 1, 'khjb'),
(9, 'book2', 'kjhv ', 'kjhvbb', 2002, 30, 'lkhjb', 'lkjhb', 30, 30, ';kljhb');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursesID` int(11) NOT NULL,
  `courseName` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  `numberOfYears` int(11) DEFAULT NULL,
  `GroupCategory` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `studentID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam center`
--

CREATE TABLE `exam center` (
  `examCenterID` int(11) NOT NULL,
  `Location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `examID` int(11) NOT NULL,
  `examName` varchar(45) DEFAULT NULL,
  `dateOfExam` date DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `examCategory` varchar(45) DEFAULT NULL,
  `examTime` time DEFAULT NULL,
  `coursesID` int(11) NOT NULL,
  `examCenterID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generate reports`
--

CREATE TABLE `generate reports` (
  `generateReportsID` int(11) NOT NULL,
  `types` varchar(45) DEFAULT NULL,
  `month` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generate result sheet`
--

CREATE TABLE `generate result sheet` (
  `generateResultSheetID` int(11) NOT NULL,
  `Result` varchar(45) DEFAULT NULL,
  `studentID` int(11) NOT NULL,
  `examID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessonID` int(11) NOT NULL,
  `LessonName` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `fName` varchar(45) DEFAULT NULL,
  `lName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `email`, `dob`, `phone`, `fName`, `lName`, `address`, `password`) VALUES
(1, 'fyaz@gmail.com', '2020-12-12', 83838338, 'Fyaz', 'Ikram', '25 dfshhf', 'fyaz');

-- --------------------------------------------------------

--
-- Table structure for table `private tuition`
--

CREATE TABLE `private tuition` (
  `privateTuitionID` int(11) NOT NULL,
  `Room` varchar(45) DEFAULT NULL,
  `studentID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `process exams`
--

CREATE TABLE `process exams` (
  `processExamsID` int(11) NOT NULL,
  `examID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `process student timetable`
--

CREATE TABLE `process student timetable` (
  `processStudentTimetableID` int(11) NOT NULL,
  `days` varchar(45) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `timeSlots` time DEFAULT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `process teacher timetable`
--

CREATE TABLE `process teacher timetable` (
  `processTeacherTimetableID` int(11) NOT NULL,
  `days` varchar(45) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `timeSlots` time DEFAULT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseID` int(11) NOT NULL,
  `datePurchased` date DEFAULT NULL,
  `shoppingCartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saomevents`
--

CREATE TABLE `saomevents` (
  `eventID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `dateOfEvent` date DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saomevents`
--

INSERT INTO `saomevents` (`eventID`, `name`, `description`, `dateOfEvent`, `price`, `location`, `image`) VALUES
(11, 'aaaaaaaaaaaaaaaa', 'fyaz', '2020-12-19', '23.00', 'fdfd', 'df'),
(12, 'Fyaz', 'FYAZ', '2020-12-10', '23.00', 'fdfd', 'df'),
(14, 'dfdf', 'sdsd', '2020-12-24', '12.00', 'Event 1 ', 'sfdsfd'),
(16, 'asd', 'dsa', '2006-04-02', '26.00', 'tgymjh', 'ymhu,ji'),
(17, 'New Event', 'New Event Description', '2053-06-13', '50.00', 'New Event Location', 'New Event Image');

-- --------------------------------------------------------

--
-- Table structure for table `shopping cart`
--

CREATE TABLE `shopping cart` (
  `shoppingCartID` int(11) NOT NULL,
  `session_id` int(11) DEFAULT NULL,
  `fullPrice` decimal(10,0) DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `imagePath` varchar(45) DEFAULT NULL,
  `bookEventID` int(11) NOT NULL,
  `bookOrderID` int(11) NOT NULL,
  `bookCourseID` int(11) NOT NULL,
  `bookLessonID` int(11) NOT NULL,
  `bookExamsID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staffID` int(11) NOT NULL,
  `fName` varchar(45) DEFAULT NULL,
  `lName` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staffID`, `fName`, `lName`, `role`, `dob`, `address`, `email`, `username`, `password`, `phone`, `image`, `courseID`) VALUES
(1, 'joe', 'M', 'Staff', '0000-00-00', 'Add1', 'joe@email.com', 'jm', 'password', '0', 'null', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `memberID` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `dateEnrollment` date DEFAULT NULL,
  `fName` varchar(45) DEFAULT NULL,
  `lName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `view student timetable`
--

CREATE TABLE `view student timetable` (
  `viewStudentTimetableID` int(11) NOT NULL,
  `timetableLayout` varchar(45) DEFAULT NULL,
  `weeksToView` varchar(45) DEFAULT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `view teacher timetable`
--

CREATE TABLE `view teacher timetable` (
  `viewTeacherTimetableID` int(11) NOT NULL,
  `timetableLayout` varchar(45) DEFAULT NULL,
  `weeksToView` varchar(45) DEFAULT NULL,
  `staffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book course`
--
ALTER TABLE `book course`
  ADD PRIMARY KEY (`bookCourseID`),
  ADD KEY `fk_Book Course_Courses1_idx` (`coursesID`);

--
-- Indexes for table `book events`
--
ALTER TABLE `book events`
  ADD PRIMARY KEY (`bookEventID`),
  ADD KEY `fk_Book Events_Events1_idx` (`eventID`);

--
-- Indexes for table `book exams`
--
ALTER TABLE `book exams`
  ADD PRIMARY KEY (`bookExamID`),
  ADD KEY `fk_Book Exams_Exams1_idx` (`examID`);

--
-- Indexes for table `book lessons`
--
ALTER TABLE `book lessons`
  ADD PRIMARY KEY (`bookLessonsID`),
  ADD KEY `fk_Book Lessons_Lessons1_idx` (`lessonID`);

--
-- Indexes for table `book orders`
--
ALTER TABLE `book orders`
  ADD PRIMARY KEY (`bookOrdersID`),
  ADD KEY `fk_Book Orders_Books1_idx` (`booksID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`booksID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`coursesID`),
  ADD KEY `fk_Courses_Student_idx` (`studentID`),
  ADD KEY `fk_Courses_Staffs1_idx` (`staffID`);

--
-- Indexes for table `exam center`
--
ALTER TABLE `exam center`
  ADD PRIMARY KEY (`examCenterID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`examID`),
  ADD KEY `fk_Exams_Courses1_idx` (`coursesID`),
  ADD KEY `fk_Exams_Exam Center1_idx` (`examCenterID`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `generate reports`
--
ALTER TABLE `generate reports`
  ADD PRIMARY KEY (`generateReportsID`);

--
-- Indexes for table `generate result sheet`
--
ALTER TABLE `generate result sheet`
  ADD PRIMARY KEY (`generateResultSheetID`),
  ADD KEY `fk_Generate Result Sheet_Student1_idx` (`studentID`),
  ADD KEY `fk_Generate Result Sheet_Exams1_idx` (`examID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessonID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `private tuition`
--
ALTER TABLE `private tuition`
  ADD PRIMARY KEY (`privateTuitionID`),
  ADD KEY `fk_Private Tuition_Student1_idx` (`studentID`),
  ADD KEY `fk_Private Tuition_Staffs1_idx` (`staffID`);

--
-- Indexes for table `process exams`
--
ALTER TABLE `process exams`
  ADD PRIMARY KEY (`processExamsID`),
  ADD KEY `fk_Process Exams_Exams1_idx` (`examID`),
  ADD KEY `fk_Process Exams_Staffs1_idx` (`staffID`);

--
-- Indexes for table `process student timetable`
--
ALTER TABLE `process student timetable`
  ADD PRIMARY KEY (`processStudentTimetableID`),
  ADD KEY `fk_Process Student Timetable_Student1_idx` (`studentID`);

--
-- Indexes for table `process teacher timetable`
--
ALTER TABLE `process teacher timetable`
  ADD PRIMARY KEY (`processTeacherTimetableID`),
  ADD KEY `fk_Process Teacher Timetable_Staffs1_idx` (`staffID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseID`),
  ADD KEY `fk_Purchase_Shopping cart1_idx` (`shoppingCartID`);

--
-- Indexes for table `saomevents`
--
ALTER TABLE `saomevents`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `shopping cart`
--
ALTER TABLE `shopping cart`
  ADD PRIMARY KEY (`shoppingCartID`),
  ADD KEY `fk_Shopping cart_Book Events1_idx` (`bookEventID`),
  ADD KEY `fk_Shopping cart_Book Orders1_idx` (`bookOrderID`),
  ADD KEY `fk_Shopping cart_Book Course1_idx` (`bookCourseID`),
  ADD KEY `fk_Shopping cart_Book Lessons1_idx` (`bookLessonID`),
  ADD KEY `fk_Shopping cart_Book Exams1_idx` (`bookExamsID`),
  ADD KEY `fk_Shopping cart_Staffs1_idx` (`staffID`),
  ADD KEY `fk_Shopping cart_Member1_idx` (`memberID`),
  ADD KEY `fk_Shopping cart_Student1_idx` (`studentID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `view student timetable`
--
ALTER TABLE `view student timetable`
  ADD PRIMARY KEY (`viewStudentTimetableID`),
  ADD KEY `fk_View Student Timetable_Student1_idx` (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book course`
--
ALTER TABLE `book course`
  MODIFY `bookCourseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book events`
--
ALTER TABLE `book events`
  MODIFY `bookEventID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book exams`
--
ALTER TABLE `book exams`
  MODIFY `bookExamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book lessons`
--
ALTER TABLE `book lessons`
  MODIFY `bookLessonsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book orders`
--
ALTER TABLE `book orders`
  MODIFY `bookOrdersID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `booksID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `coursesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam center`
--
ALTER TABLE `exam center`
  MODIFY `examCenterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `examID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lessonID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `private tuition`
--
ALTER TABLE `private tuition`
  MODIFY `privateTuitionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `process exams`
--
ALTER TABLE `process exams`
  MODIFY `processExamsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saomevents`
--
ALTER TABLE `saomevents`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shopping cart`
--
ALTER TABLE `shopping cart`
  MODIFY `shoppingCartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
