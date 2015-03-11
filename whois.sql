-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2015 at 04:32 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whois`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `query` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `query`) VALUES
('bestsmile', 'Best Smile', 'SELECT `name`, `image_url`, `bestsmile` FROM `faces` ORDER BY bestsmile DESC'),
('coolestboy', 'Coolest Boy', 'SELECT `name`, `image_url`, `coolestboy` FROM `faces` WHERE gender=''1'' ORDER BY coolestboy DESC'),
('cutestboy', 'Cutest Boy', 'SELECT `name`, `image_url`, `cutestboy` FROM `faces` WHERE gender=''1'' ORDER BY cutestboy DESC'),
('hottestgirl', 'Hottest girl', 'SELECT `name`, `image_url`, `hottestgirl` FROM `faces` WHERE gender=''0'' ORDER BY hottestgirl DESC');

-- --------------------------------------------------------

--
-- Table structure for table `faces`
--

CREATE TABLE IF NOT EXISTS `faces` (
  `name` varchar(100) NOT NULL,
  `gender` int(2) NOT NULL,
  `image_url` varchar(10000) NOT NULL,
  `cutestboy` int(2) NOT NULL DEFAULT '0',
  `hottestgirl` int(2) NOT NULL DEFAULT '0',
  `coolestboy` int(2) NOT NULL DEFAULT '0',
  `bestsmile` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faces`
--

INSERT INTO `faces` (`name`, `gender`, `image_url`, `cutestboy`, `hottestgirl`, `coolestboy`, `bestsmile`) VALUES
('Aamod Chemburkar', 1, '', 0, 0, 0, 0),
('Abhishek Dandegaonkar', 1, '', 0, 0, 0, 0),
('Abhishek Kumar Goyal ', 1, '', 0, 0, 0, 0),
('Abhishek Pandey', 1, '', 0, 0, 0, 0),
('Advait Pakhode', 1, '', 0, 0, 0, 0),
('Aishwarya Khaire', 0, '', 0, 0, 0, 0),
('Akash Nagapure', 1, '', 0, 0, 0, 0),
('Alabhya Farkiya', 1, '', 0, 0, 0, 0),
('Alok Goyal', 1, '', 1, 0, 0, 0),
('Anisha Gaikwad', 0, '', 0, 0, 0, 0),
('Ankita Ashok Singh', 0, '', 0, 1, 0, 0),
('Aparna Ashok Surve', 0, '', 0, 0, 0, 0),
('Apurva Choudhari', 0, '', 0, 0, 0, 0),
('Ashvinee Gaikwad', 0, '', 0, 0, 0, 0),
('Bhagyashree Wasudeo Bhondokar', 0, '', 0, 0, 0, 0),
('Devaj Mitra', 1, '', 3, 0, 0, 0),
('Devendra Bahirat', 1, '', 0, 0, 0, 0),
('Devika Patil', 0, '', 0, 0, 0, 0),
('Dhadiwal Kalpesh Paraskumar', 1, '', 0, 0, 0, 0),
('Dhanashree Poal', 0, '', 0, 0, 0, 0),
('Dharmendra Kumar', 1, '', 0, 0, 0, 0),
('Dipali Salunkhe', 0, '', 0, 0, 0, 0),
('Gauri Somavanshi', 0, '', 0, 0, 0, 0),
('Indraneel Ghule', 1, '', 0, 0, 0, 0),
('Juilee Kapure', 0, '', 0, 0, 0, 0),
('Jyoti Nikam', 0, '', 0, 0, 0, 0),
('Kalpesh Nagmoti', 1, '', 0, 0, 0, 0),
('Kedar Kulkarni', 1, '', 0, 0, 0, 0),
('Mayuri Vibhute', 0, '', 0, 0, 0, 0),
('Mukti Chowkwale', 0, '', 0, 0, 0, 0),
('Nadeem Kapshikar', 1, '', 0, 0, 0, 0),
('Neha Valish Koushik', 0, '', 0, 0, 0, 0),
('Nilesh Thite', 1, '', 0, 0, 0, 0),
('Onkar Tummanpalli', 1, '', 0, 0, 0, 0),
('Parag Bhavsar', 1, '', 0, 0, 0, 0),
('pooja ranawade', 0, '', 0, 0, 0, 0),
('Poonam Mahamure', 0, '', 0, 0, 0, 0),
('Pranav Tambat', 1, '', 0, 0, 0, 0),
('Prasad Somawanshi', 1, '', 0, 0, 1, 0),
('Prashant Chandrakant Sangale', 1, '', 1, 0, 0, 0),
('Prashant Saini', 1, '', 0, 0, 0, 0),
('Puneet Gupta', 1, '', 0, 0, 0, 0),
('Ritesh Prasad', 1, '', 0, 0, 0, 0),
('Rohan Shethia', 1, '', 0, 0, 0, 0),
('Rutuja Patil', 0, '', 0, 0, 0, 0),
('Rutvik K Pensionwar', 1, '', 0, 0, 0, 0),
('Sachin Pusadkar', 1, '', 0, 0, 0, 0),
('Sameer Thigale', 1, '', 0, 0, 0, 0),
('Sanjna Sinha', 0, '', 0, 0, 0, 0),
('Sayli Bahekar', 0, '', 0, 0, 0, 0),
('Shivam Raj', 1, '', 0, 0, 0, 0),
('Shraddha Borkar', 0, '', 0, 0, 0, 0),
('Shraddha Nagargoje', 0, '', 0, 0, 0, 0),
('Shrikant Gangade', 1, '', 0, 0, 0, 0),
('Shweta Valunj', 0, '', 0, 0, 0, 0),
('Shwetali Jori', 0, '', 0, 0, 0, 0),
('Snehal Jadhav ', 0, '', 0, 0, 0, 0),
('Sohail Ahmed Shaikh', 1, '', 0, 0, 0, 0),
('Sonakshi nathak', 0, '', 0, 0, 0, 0),
('Sonali Bandgar', 0, '', 0, 0, 0, 0),
('Sujay Bothe', 1, '', 0, 0, 0, 0),
('Sunny Hemant Bangale', 1, '', 0, 0, 0, 0),
('Swapnil Chougule', 1, '', 0, 0, 0, 0),
('Swati Krishnan', 0, '', 0, 0, 0, 0),
('Tej Pratap Singh', 1, '', 0, 0, 0, 4),
('Tejas Sathe', 1, '', 0, 0, 0, 0),
('Tushar Kadus', 1, '', 0, 0, 0, 0),
('Tushar Prasad', 1, '', 2, 0, 0, 1),
('Vaishnavi Pakhode', 0, '', 0, 0, 0, 0),
('Vibha Ravichandran', 0, '', 0, 0, 0, 0),
('Virindersingh Kirade', 1, '', 0, 0, 0, 0),
('Yashashri Kumbhar', 0, '', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
