-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2015 at 12:44 PM
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
  `views` int(10) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `query`, `views`, `created`) VALUES
('bestpersonalityinboys', 'Best Personality In Boys', 'SELECT `name`, `image_url`, `bestpersonalityinboys` FROM `faces` WHERE gender=''1'' ORDER BY bestpersonalityinboys DESC', 1, '2015-03-15 06:49:46'),
('bestsmile', 'Best Smile', 'SELECT `name`, `image_url`, `bestsmile` FROM `faces` ORDER BY bestsmile DESC', 3, '0000-00-00 00:00:00'),
('coolestboy', 'Coolest Boy', 'SELECT `name`, `image_url`, `coolestboy` FROM `faces` WHERE gender=''1'' ORDER BY coolestboy DESC', 0, '0000-00-00 00:00:00'),
('cutestboy', 'Cutest Boy', 'SELECT `name`, `image_url`, `cutestboy` FROM `faces` WHERE gender=''1'' ORDER BY cutestboy DESC', 0, '0000-00-00 00:00:00'),
('hottestgirl', 'Hottest girl', 'SELECT `name`, `image_url`, `hottestgirl` FROM `faces` WHERE gender=''0'' ORDER BY hottestgirl DESC', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faces`
--

CREATE TABLE IF NOT EXISTS `faces` (
  `name` varchar(100) NOT NULL,
  `gender` int(2) NOT NULL,
  `image_url` varchar(10000) NOT NULL DEFAULT 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png',
  `shout` text NOT NULL,
  `cutestboy` int(2) NOT NULL DEFAULT '0',
  `hottestgirl` int(2) NOT NULL DEFAULT '0',
  `coolestboy` int(2) NOT NULL DEFAULT '0',
  `bestsmile` int(2) NOT NULL DEFAULT '0',
  `bestpersonalityinboys` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faces`
--

INSERT INTO `faces` (`name`, `gender`, `image_url`, `shout`, `cutestboy`, `hottestgirl`, `coolestboy`, `bestsmile`, `bestpersonalityinboys`) VALUES
('Aamod Chemburkar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Abhishek Dandegaonkar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Abhishek Kumar Goyal ', 1, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xtp1/v/t1.0-1/p160x160/10389188_845946188795602_438157589173344668_n.jpg?oh=906da6ebd7f862d860d1489430914ce0&oe=5580513E&__gda__=1433379135_3e691dfd9d1a12f0e8f1086206a01c8f', ':shexpl: <small>At 2015 03 15 11 03</small> <h1>"Hiiiiiiii"</h1>:shexpl: <small>At 2015 03 15 11 03</small> <h1>"2"</h1>', 0, 0, 0, 0, 0),
('Abhishek Pandey', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Advait Pakhode', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Aishwarya Khaire', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Akash Nagapure', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Alabhya Farkiya', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Alok Goyal', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Anisha Gaikwad', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Ankita Ashok Singh', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Aparna Ashok Surve', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Apurva Choudhari', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Ashvinee Gaikwad', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Bhagyashree Wasudeo Bhondokar', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Devaj Mitra', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Devendra Bahirat', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Devika Patil', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Dhadiwal Kalpesh Paraskumar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Dhanashree Poal', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Dharmendra Kumar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Dipali Salunkhe', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Gauri Somavanshi', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Indraneel Ghule', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Juilee Kapure', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Jyoti Nikam', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Kalpesh Nagmoti', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Kedar Kulkarni', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Mayuri Vibhute', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Mukti Chowkwale', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Nadeem Kapshikar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Neha Valish Koushik', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Nilesh Thite', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Onkar Tummanpalli', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Parag Bhavsar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('pooja ranawade', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Poonam Mahamure', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Pranav Tambat', 1, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c66.66.824.824/s160x160/993328_532862250097027_1882575112_n.jpg?oh=83a6602dd985df1ecaa6e0f2294d5e55&oe=5579F2AE&__gda__=1434872442_6e69aa8487e33ccf9dd67747ba2cdd3b', '', 0, 0, 0, 0, 0),
('Prasad Somawanshi', 1, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c50.50.621.621/s160x160/522214_100725523401769_292444918_n.jpg?oh=03e9eb1cb571d9cb1bb67afea1ecf64a&oe=55754880&__gda__=1434038434_2ec1dfa880fc242ee013355441070e59', '', 0, 0, 0, 0, 0),
('Prashant Chandrakant Sangale', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Prashant Saini', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Puneet Gupta', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Ritesh Prasad', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Rohan Shethia', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Rutuja Patil', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Rutvik K Pensionwar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sachin Pusadkar', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sameer Thigale', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sanjna Sinha', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sayli Bahekar', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shivam Raj', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shraddha Borkar', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shraddha Nagargoje', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shrikant Gangade', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shweta Valunj', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Shwetali Jori', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Snehal Jadhav ', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sohail Ahmed Shaikh', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sonakshi nathak', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sonali Bandgar', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sujay Bothe', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Sunny Hemant Bangale', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Swapnil Chougule', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Swati Krishnan', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Tej Pratap Singh', 1, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/c113.33.414.414/s160x160/407399_324747880900802_2014261954_n.jpg?oh=c2c2d2d4300d63c746b3df97a0ae2386&oe=5571F846&__gda__=1434009573_cf2f36536d77357c1a082b1474e84bc0', '', 0, 0, 0, 0, 0),
('Tejas Sathe', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Tushar Kadus', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Tushar Prasad', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Vaishnavi Pakhode', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Vibha Ravichandran', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Virindersingh Kirade', 1, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0),
('Yashashri Kumbhar', 0, 'https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/user-128.png', '', 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
