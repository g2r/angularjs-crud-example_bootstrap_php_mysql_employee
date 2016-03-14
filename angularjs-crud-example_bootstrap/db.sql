-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 11:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpajaxcrudlevel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(512) NOT NULL,
  `dept` text NOT NULL,
  `salary` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `dept`, `salary`, `created`, `modified`) VALUES
(1, 'JAMES', 'ANALYST', 30944, '2014-06-01 01:12:26', '2014-05-31 15:12:26'),
(2, 'ADAMS', 'ANALYST', 30944, '2014-06-01 01:12:26', '2014-05-31 15:12:26'),
(3, 'TURNER', 'ANALYST', 30944, '2014-06-01 01:12:26', '2014-05-31 15:12:26'),
(6, 'KING', 'CLERK', 5149, '2014-06-01 01:12:26', '2014-05-31 00:12:21'),
(7, 'SCOTT', 'SALESMAN', 5149, '2014-06-01 01:13:45', '2014-05-31 00:13:39'),
(8, 'CLARK', 'PRESIDENT', 1944, '2014-06-01 01:14:13', '2014-05-31 00:14:08'),
(9, 'BLAKE', 'ANALYST', 1944, '2014-06-01 01:18:36', '2014-05-31 00:18:31'),
(10, 'MARTIN', 'MANAGER', 1944, '2014-06-06 17:10:01', '2014-06-05 16:09:51'),
(11, 'JONES', 'MANAGER', 7839, '2014-06-06 17:11:04', '2014-06-05 16:10:54'),
(12, 'WARD', 'SALESMAN', 7698, '2014-06-06 17:12:21', '2014-06-05 16:12:11'),
(67, 'ALLEN', 'SALESMAN', 7698, '2016-03-14 18:49:21', '2016-03-14 17:49:21'),
(70, 'SMITH', 'CLERK', 2222, '2016-03-14 19:33:16', '2016-03-14 18:33:16'),
(0, '', '', 0, '2016-03-14 23:48:28', '2016-03-14 22:48:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
