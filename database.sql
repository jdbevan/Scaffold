CREATE DATABASE test;
USE test;

CREATE USER 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL ON test.* TO 'user'@'%';

CREATE TABLE employees (id INT(11) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, job VARCHAR(100) NOT NULL);

INSERT INTO employees (name,job) VALUES ('Jon','Web Developer'),('Mark','Managing Director'),('Tom','Marketing Expert'),
('Sam', 'Web Designer'),('Bhups', 'Web Designer'),('Hannah','Finance Department'),('Jacqui','Client Manager'),('Abby', 'Copy Writer');
