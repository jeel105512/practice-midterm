CREATE DATABASE practice_midterm;
USE practice_midterm;

CREATE TABLE students(
	student_number INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL,
    gender CHAR
);

ALTER TABLE students AUTO_INCREMENT=100000000;

SELECT * FROM students;