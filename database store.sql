-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2020 at 09:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Redmi As10', 35999),
(2, 'Oppo Ts9', 47999),
(3, 'Apple model#301', 45000),
(4, 'Realme ', 53999),
(5, 'Blackberry A10', 41999),
(6, 'Realme Grand', 29999),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba#111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phill', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'MONIKA SHARMA', 'monika@gmail.com', '98765', '985335566', 'Jammu', 'udampur'),
(2, 'ANKIT MANGLA', 'ankit@gmail.com', '12345', '987654567', 'Faridabad', 'palwal'),
(3, 'ISHANT KHURANA', 'ishant@gmail.com', '345678', '45677345', 'Hansi', 'Hisar'),
(4, 'PARVEEN JANGRA', 'parveen@gmail.com', '456789vvn', '8456756', 'Hansi', 'Hisar'),
(5, 'AARUSHI', 'aarushi@gmail.com', '456789jhjk', '3456798765', 'Kurushetra', 'Thanesar'),
(6, 'KOMAL', 'komal@gmail.com', 'erfg4567', '09874478', 'Kurushetra', 'NIT Kurushetra'),
(7, 'SUNAINA', 'sunaina@gmail.com', 'efvju', '3456723', 'kurushetra', 'kurushetra'),
(8, 'ISHANT MAHAWAL', 'ishant1@gmail.com', 'trfg', 'esfcg', 'faridabad', 'ballabgarh'),
(9, 'MOHIT', 'mohit@gmail.com', 'refcg', '785678', 'faridabad', 'faridabad'),
(10, 'RAKSHITA', 'rakshu@gmail.com', 'redfghj', '543456', 'karnal', 'karnal'),
(11, 'KUNIKA', 'kunika@gmail.com', 'w3erfdf', '2345', 'panipat', 'panipat'),
(12, 'KIRTI', 'kirti@gmail.com', 'jhdfc', '4567', 'panipat', 'panipat'),
(13, 'SWATI', 'swati@gmail.com', 'w3edvfb', '23455678', 'sonepat', 'sonepat'),
(18, 'diksha ', ' diksha@gmail.com ', ' 7f4b52a16642ca97044566ce8ce63282', '23456789 ', 'FARIDABAD ', ' harayana '),
(24, 'shivam ', ' shiva@gmail.com ', ' 876543', '12345 ', 'FARIDABAD ', ' harayana '),
(27, 'Nikhil ', ' nikhil@gmail.com ', ' 14e1b600b1fd579f47433b88e8d85291', '12345678 ', 'FARIDABAD ', ' harayana '),
(29, 'beena ', ' beena@gmail.com ', ' 14e1b600b1fd579f47433b88e8d85291', '1234567 ', 'gorakhpur ', ' UP '),
(30, 'Shivani', 'shivani@gmail.com', 'a6274f15bf8571dddc1a4467a1376f17', '', 'FARIDABAD', 'harayana'),
(33, 'navya', 'navya@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '', 'FARIDABAD', 'harayana'),
(36, 'sanjay', 'sanjay@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'FARIDABAD', 'harayana'),
(38, 'shivam', 'shivaamm@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'gurgaon', 'delhi'),
(39, 'bhanu', 'bhanu@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '', 'chennai', 'tamil nadu'),
(40, 'monika mahajan', 'monika123@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'amritsar', 'punjab'),
(41, 'sonakshi', 'sonakshi@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'mumbai', 'maharashtra'),
(42, 'diksha', 'dakshu@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'aligarh', 'UP'),
(43, 'Srishti', 's@gmail.com', '4d3cde7b6a4a8f0740c10771c418713e', '', 'manipur', 'arunachal pradesh'),
(44, 'satyam', 'satya@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'ahmedabad', 'gujarat'),
(45, 'shiksha', 'shiksha@gmail.com', '73812f2b9a460ff9b3873fbcf717b5f7', '', 'amritsar', 'punjab'),
(46, 'vansh', 'vansh@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'delhi', 'delhi'),
(47, 'PRASHANT', 'prashant@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'bangalore', 'bangalore'),
(48, 'amit', 'amit@gmail.com', '73812f2b9a460ff9b3873fbcf717b5f7', '', 'gorakhpur', 'UP'),
(49, 'kinshuk@gmail.com', 'k@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '', 'FARIDABAD', 'harayana'),
(50, 'anshul', 'anshul@gmail.com', '2e5ee9e2bb412d0ae33547678c5f09f4', '', 'kurushetra', 'harayana'),
(51, 'sanskriti', 'sss@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'mumbai', 'mumbai'),
(52, 'sonu', 'sonu@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '', 'rurkee', 'rurkee'),
(54, 'rakshu', 'r@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'karnal', 'karnal'),
(55, 'drishti', 'drishti@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'shimla', 'shimla'),
(56, 'harshit', 'harshit@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'agra', 'UP'),
(57, 'akshit', 'akshit@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'jaipur', 'rajasthan'),
(58, 'shashi', 'shashi@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'madhya pradesh', 'MP'),
(59, 'niku', 'niku@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'saharanpur', 'UP'),
(60, 'navya', 'navta@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'aligarh', 'UP'),
(61, 'kushu', 'kushu@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '', 'ambala', 'ambala'),
(62, 'divya', 'divya123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9876543210', 'amritsar', 'punjab'),
(63, 'nitya', 'nitya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9876543210', 'assam', 'arunachal pradesh'),
(64, 'shikha', 'shikha@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '9876543212', 'meerut', 'meerut'),
(65, 'monika', 'monika12@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', '9876543217', 'karnal', 'karnal'),
(66, 'SANJAY MAHAJAN', 'sanjay123@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', '9876543217', 'FARIDABAD', 'harayana'),
(67, 'diksha', 'diksha@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543210', 'assam', 'arunachal pradesh'),
(68, 'dron', 'dron@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543210', 'lakshmi nagar', 'delhi'),
(69, 'carry', 'carry@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543210', 'FARIDABAD', 'harayana'),
(70, 'shruti', 'shruti@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', '9891877654', 'karnal', 'karnal'),
(71, 'diksha', 'dikshan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543210', 'hyderabad', 'hyderabad'),
(72, 'tanvi', 'tanvi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9876543217', 'FARIDABAD', 'harayana'),
(73, 't', 'ta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9876543217', 'FARIDABAD', 'harayana'),
(74, 'diksha', 'dd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9876543213', 'gujarat', 'gujarat'),
(75, 'nikhil mahajan', 'niku123@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9891844154', 'agra', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `status` enum('Add to Cart','Added to Cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `items_id` (`items_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `items_id`, `status`) VALUES
(1, 1, 3, 'Confirmed'),
(2, 8, 6, 'Confirmed'),
(5, 4, 1, 'Confirmed'),
(6, 6, 12, 'Add to Cart'),
(7, 3, 10, 'Add to Cart'),
(10, 11, 7, 'Confirmed'),
(11, 9, 8, 'Confirmed'),
(14, 7, 2, 'Confirmed'),
(15, 5, 1, 'Confirmed'),
(16, 13, 4, 'Confirmed'),
(17, 6, 3, 'Confirmed'),
(18, 64, 2, 'Confirmed'),
(19, 64, 2, 'Confirmed'),
(20, 64, 6, 'Confirmed'),
(22, 65, 2, 'Confirmed'),
(24, 66, 5, 'Confirmed'),
(25, 66, 2, 'Confirmed'),
(26, 70, 2, 'Confirmed'),
(27, 70, 3, 'Confirmed'),
(31, 72, 5, 'Confirmed'),
(33, 72, 6, 'Confirmed'),
(35, 72, 4, 'Confirmed'),
(36, 74, 2, 'Confirmed'),
(37, 74, 3, 'Confirmed'),
(38, 67, 2, 'Confirmed'),
(41, 75, 3, 'Confirmed'),
(43, 75, 6, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
