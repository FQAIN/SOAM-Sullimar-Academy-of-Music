-- Database : addressBookDB

CREATE TABLE master_name(
    master_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date_added DATETIME,
    date_modified DATETIME,
    f_name VARCHAR(75),
    l_name VARCHAR(75)
);

CREATE TABLE address(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    master_id INT REFERENCES master_name(master_id),
    date_added DATETIME,
    date_modified DATETIME,
    address VARCHAR(255),
    city VARCHAR(30),
    town VARCHAR(35),
    type ENUM('home', 'work', 'other')
);

CREATE TABLE telephone(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    master_id INT REFERENCES master_name(master_id),
    date_added DATETIME,
    date_modified DATETIME,
    telephoneNo VARCHAR(30),
    type ENUM('home', 'work', 'other')
);

CREATE TABLE fax(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    master_id INT REFERENCES master_name(master_id),
    date_added DATETIME,
    date_modified DATETIME,
    fax_number VARCHAR(25),
    type ENUM('home', 'work', 'other')
);

CREATE TABLE email(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    master_id INT NOT NULL,
    date_added DATETIME,
    date_modified DATETIME,
    email VARCHAR(150),
    type ENUM('home', 'work', 'other')
);

CREATE TABLE personal_notes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    master_id INT REFERENCES master_name(master_id),
    date_added DATETIME,
    date_modified DATETIME,
    note TEXT
);