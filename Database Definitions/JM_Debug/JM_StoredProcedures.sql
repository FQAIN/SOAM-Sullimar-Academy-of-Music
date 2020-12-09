DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectBooksPerPage`(IN `p_limit` INT, IN `p_start` INT)
    NO SQL
BEGIN
SELECT booksID, bookName, description, author, yearPublished, price, category, ISBN, inStock, qty, image 
FROM books
 LIMIT  p_limit,p_start;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectStaffsPerPage`(IN `p_limit` INT, IN `p_start` INT)
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `addBook`(IN `p_bookName` VARCHAR(45), IN `p_description` VARCHAR(250), IN `p_author` VARCHAR(45), IN `p_yearPublished` YEAR, IN `p_price` DECIMAL, IN `p_category` VARCHAR(45), IN `p_ISBN` VARCHAR(45), IN `p_inStock` INT, IN `p_qty` INT, IN `p_image` VARCHAR(45))
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectContactsPerPage`(IN `p_limit` INT, IN `p_start` INT)
    NO SQL
BEGIN
SELECT eventID,name, description,dateOfEvent,price,location,image
FROM saomevents
 LIMIT p_limit, p_start;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidStudent`(IN `p_email` VARCHAR(45), IN `p_password` VARCHAR(45))
    NO SQL
BEGIN
SELECT password, email
FROM student
WHERE p_email = email AND p_password = password;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidUser`(IN `p_email` VARCHAR(25), IN `p_password` VARCHAR(25))
    NO SQL
BEGIN
SELECT password, email
FROM staffs
WHERE p_email = email AND p_password = password;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `addEvent`(IN `p_name` VARCHAR(45), IN `p_description` VARCHAR(45), IN `p_dateOfEvent` DATE, IN `p_price` DECIMAL(6,2), IN `p_location` VARCHAR(45), IN `p_image` VARCHAR(45))
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `addStaff`(IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_role` VARCHAR(45), IN `p_dob` DATE, IN `p_address` VARCHAR(45), IN `p_email` VARCHAR(45), IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_phone` INT, IN `p_image` VARCHAR(45), IN `p_courseID` INT)
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteBook`(IN `p_booksID` INT)
    NO SQL
BEGIN
	DELETE FROM books
    WHERE booksID  = p_booksID;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEvent`(IN `p_eventID` INT)
    NO SQL
BEGIN
	DELETE FROM saomevents
    WHERE p_eventID = eventID;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteStaff`(IN `p_staffID` INT)
    NO SQL
BEGIN
	DELETE FROM staffs
    WHERE p_staffID = staffID;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectBookForUpdate`(IN `p_bookID` INT)
    NO SQL
BEGIN
	SELECT booksID, bookName, description, author, yearPublished, price, category, ISBN, inStock, qty, image FROM books
    WHERE booksID = p_bookID;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectEventForUpdate`(IN `p_eventID` INT)
    NO SQL
BEGIN
	SELECT eventID,name,description,dateOfEvent,price,location,image
    FROM saomevents
    WHERE eventID = p_eventID;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectStaffForUpdate`(IN `p_staffID` INT)
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedBook`(IN `p_booksID` INT, IN `p_bookName` VARCHAR(45), IN `p_description` VARCHAR(45), IN `p_author` VARCHAR(45), IN `p_yearPublished` YEAR(4), IN `p_price` INT, IN `p_category` VARCHAR(45), IN `p_ISBN` VARCHAR(45), IN `p_inStock` TINYINT(4), IN `p_qty` INT(11), IN `p_image` VARCHAR(45))
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedEvent`(IN `p_eventID` INT, IN `p_name` VARCHAR(45), IN `p_description` VARCHAR(250), IN `p_dateOfEvent` DATE, IN `p_price` DECIMAL(6,2), IN `p_location` VARCHAR(45), IN `p_image` VARCHAR(45))
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateSelectedStaff`(IN `p_staffID` INT, IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_role` VARCHAR(45), IN `p_dob` DATE, IN `p_address` VARCHAR(250), IN `p_email` VARCHAR(45), IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_phone` INT, IN `p_image` VARCHAR(45), IN `p_courseID` INT)
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateStudent`(IN `p_memberid` INT, IN `p_username` VARCHAR(45), IN `p_password` VARCHAR(45), IN `p_email` VARCHAR(45), IN `p_dob` DATE, IN `p_phone` INT, IN `p_dateEnrollment` DATE, IN `p_fName` VARCHAR(45), IN `p_lName` VARCHAR(45), IN `p_address` VARCHAR(45), IN `p_image` VARCHAR(45))
    NO SQL
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
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `viewAllStudentDetails`()
    NO SQL
BEGIN
	SELECT * FROM student;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `viewCourseDetails`()
    NO SQL
BEGIN
	SELECT * FROM courses;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `viewEventDetails`()
    NO SQL
BEGIN
	SELECT * FROM saomevents;
END$$
DELIMITER ;
