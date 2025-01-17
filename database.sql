-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 06:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dressify`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

create table user(name varchar(100) not null,email varchar(100) not null,user_name varchar(100) primary key not null,password varchar(255) not null);
--
-- Dumping data for table `educator`
--
INSERT INTO `user` (`name`, `email`, 'usernsme',`password`) VALUES
('shana', 'MAIL@gmail.com', 'a','$2y$10$RGk4jOV6.XqZsi6aPghwe.p6AcQj1jX5Xye3sJCk8uADKUnuspIay '),
('siri', 'srujsrjk@gmail.com ', 'd','$2y$10$aumVcEbGk5cz1AYoPAm6g.fLNTdjaEdg2OtueeP1NnAniSqPf7jne');
-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

create table contactus(username varchar(100) primary key not null,email varchar(100) not null,subject varchar(255) not null,message text not null);
--
-- Dumping data for table `learner`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--
CREATE TABLE Designers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    bio TEXT,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_no VARCHAR(15) NOT NULL,
    image_url varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


--
-- Dumping data for table `learner`
--
-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--
CREATE TABLE Customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    bio TEXT,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_no VARCHAR(15) NOT NULL,
    image_url varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--
-- Dumping data for table `learner`
--


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;