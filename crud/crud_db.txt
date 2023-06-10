CREATE DATABASE crud_db;

CREATE TABLE `users` (
  'id' int primary key AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL
);
