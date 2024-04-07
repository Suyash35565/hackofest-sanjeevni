-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 04:15 PM
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
-- Database: `sanjeevani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `sno` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactnum` bigint(11) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`sno`, `username`, `name`, `password`, `dt`, `age`, `address`, `email`, `contactnum`, `gender`) VALUES
(1, 'Avinash4666', 'Avinash', '4666', '2024-04-05 22:46:41', 21, 'v.p.o sagra teh hujur rewa(m.p)', 'avinash@gmail.com', 9343413430, 'Male'),
(2, 'v', 'a', '466690215Aa@', '2024-04-05 23:09:09', 56, 's', 'asda@gmail.com', 1234567894, 'male'),
(3, 'vd', 'a', '466690215Aa@', '2024-04-05 23:10:18', 56, 's', 'asda@gmail.com', 1234567894, 'male'),
(4, 'd', 'p', '466690215Aa@', '2024-04-05 23:13:48', 23, 'q', 'e@gmail.com', 1234567893, 'male'),
(5, 'jh', 'a', '466690215Aa@', '2024-04-05 23:15:00', 76, 'ij', 'hw@gmail.com', 7865432349, 'male'),
(6, 'a', 'poi', '466690215Aa@', '2024-04-06 00:21:02', 56, 'a', 'hw@gmail.com', 1234567890, 'male'),
(7, 'manish567', 'manish', '466690215Aa@', '2024-04-07 16:47:27', 21, 'patna bihar', 'manish@gmail.com', 6745892345, 'male'),
(8, 'sad', 'd', '466690215Aa@', '2024-04-07 16:51:00', 23, 'df', 'asd@gmail.com', 4567893456, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_info`
--

CREATE TABLE `doctors_info` (
  `sno` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactnum` bigint(11) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_info`
--

INSERT INTO `doctors_info` (`sno`, `username`, `name`, `password`, `dt`, `age`, `address`, `email`, `contactnum`, `gender`) VALUES
(1, 'Avinash4666', 'Avinash Dwivedi', '466690215Aa@', '2024-04-05 22:46:41', 21, 'v.p.o sagra teh hujur rewa(m.p)', 'avinash@gmail.com', 9343413430, 'Male'),
(2, 'Piyush009', 'Piyush Singh', '466690215Aa@', '2024-04-05 23:09:09', 56, 's', 'asda@gmail.com', 1234567894, 'male'),
(3, 'Suyash150', 'Suyash Vishnoi', '466690215Aa@', '2024-04-05 23:10:18', 56, 's', 'asda@gmail.com', 1234567894, 'male'),
(4, 'Prashant112', 'Prashant Yadav', '466690215Aa@', '2024-04-05 23:13:48', 23, 'q', 'e@gmail.com', 1234567893, 'male'),
(7, 'Shreya004', 'Shreya Jha', '466690215Aa@', '2024-04-07 08:20:54', 21, 'patna bihar', 'shreya@gmail.com', 8745789378, 'female'),
(8, 'JohnDoe', 'John Doe', 'password123', '2021-04-07 08:26:55', 30, 'New York, USA', 'john.doe@example.com', 1234567890, 'male'),
(9, 'AliceSmith', 'Alice Smith', 'securePass', '2020-04-07 08:26:55', 25, 'London, UK', 'alice.smith@example.com', 9876543210, 'female'),
(10, 'JohnDoe', 'John Doe', 'password123', '2022-04-07 08:34:51', 30, 'New York, USA', 'john.doe@example.com', 1234567890, 'male'),
(11, 'AliceSmith', 'Alice Smith', 'securePass', '2016-04-07 08:34:51', 25, 'London, UK', 'alice.smith@example.com', 9876543210, 'female'),
(12, 'BobJohnson', 'Bob Johnson', 'bobpass', '2021-04-07 08:34:51', 35, 'Los Angeles, USA', 'bob.johnson@example.com', 5551234567, 'male'),
(13, 'EmilyBrown', 'Emily Brown', 'emily123', '2021-04-07 08:34:51', 28, 'Sydney, Australia', 'emily.brown@example.com', 4449876543, 'female'),
(14, 'MichaelWilson', 'Michael Wilson', 'wilsonPass', '2020-04-07 08:34:51', 40, 'Toronto, Canada', 'michael.wilson@example.com', 2223334445, 'male'),
(15, 'SophiaTaylor', 'Sophia Taylor', 'taylorPass', '2022-04-07 08:34:51', 29, 'Paris, France', 'sophia.taylor@example.com', 3335557779, 'female'),
(16, 'DavidMartinez', 'David Martinez', 'davidpass', '2015-04-07 08:34:51', 45, 'Madrid, Spain', 'david.martinez@example.com', 7778889990, 'male'),
(17, 'EmmaAnderson', 'Emma Anderson', 'emma123', '2015-04-07 08:34:51', 32, 'Berlin, Germany', 'emma.anderson@example.com', 9990001112, 'female'),
(18, 'JamesThomas', 'James Thomas', 'thomasPass', '2017-04-07 08:34:51', 27, 'Rome, Italy', 'james.thomas@example.com', 1112223334, 'male'),
(19, 'OliviaHernandez', 'Olivia Hernandez', 'oliviaPass', '2015-04-07 08:34:51', 33, 'Mexico City, Mexico', 'olivia.hernandez@example.com', 8889990001, 'female'),
(20, 'WilliamYoung', 'William Young', 'william123', '2017-04-07 08:34:51', 38, 'Tokyo, Japan', 'william.young@example.com', 1234567890, 'male'),
(21, 'AvaKing', 'Ava King', 'avapass', '2017-04-07 08:34:51', 31, 'Moscow, Russia', 'ava.king@example.com', 4567890123, 'female'),
(22, 'EthanLee', 'Ethan Lee', 'ethan123', '2019-04-07 08:34:51', 36, 'Seoul, South Korea', 'ethan.lee@example.com', 7890123456, 'male'),
(23, 'MiaGarcia', 'Mia Garcia', 'miapass', '2018-04-07 08:34:51', 26, 'Cairo, Egypt', 'mia.garcia@example.com', 9876543210, 'female'),
(24, 'AlexanderBrown', 'Alexander Brown', 'alex123', '2021-04-07 08:34:51', 39, 'São Paulo, Brazil', 'alexander.brown@example.com', 3210987654, 'male'),
(25, 'CharlotteLopez', 'Charlotte Lopez', 'charlotte123', '2016-04-07 08:34:51', 29, 'Bangkok, Thailand', 'charlotte.lopez@example.com', 6543210987, 'female'),
(26, 'DanielHarris', 'Daniel Harris', 'danielpass', '2022-04-07 08:34:51', 41, 'Istanbul, Turkey', 'daniel.harris@example.com', 1357924680, 'male'),
(27, 'AmeliaGonzalez', 'Amelia Gonzalez', 'amelia123', '2019-04-07 08:34:51', 28, 'Jakarta, Indonesia', 'amelia.gonzalez@example.com', 2468013579, 'female'),
(28, 'MichaelRodriguez', 'Michael Rodriguez', 'michaelpass', '2022-04-07 08:34:51', 42, 'Lagos, Nigeria', 'michael.rodriguez@example.com', 5791352468, 'male'),
(29, 'EvelynPerez', 'Evelyn Perez', 'evelyn123', '2018-04-07 08:34:51', 27, 'Mumbai, India', 'evelyn.perez@example.com', 8024681357, 'female'),
(30, 'MatthewSanchez', 'Matthew Sanchez', 'matthew123', '2019-04-07 08:34:51', 43, 'Shanghai, China', 'matthew.sanchez@example.com', 3579024681, 'male'),
(31, 'ChloeTorres', 'Chloe Torres', 'chloe123', '2017-04-07 08:34:51', 30, 'Lima, Peru', 'chloe.torres@example.com', 6801357924, 'female'),
(32, 'JoshuaRamirez', 'Joshua Ramirez', 'joshua123', '2024-04-07 08:34:51', 44, 'Santiago, Chile', 'joshua.ramirez@example.com', 2468135790, 'male'),
(33, 'GraceNguyen', 'Grace Nguyen', 'grace123', '2023-04-07 08:34:51', 26, 'Bogotá, Colombia', 'grace.nguyen@example.com', 9135720468, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `sno` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactnum` bigint(11) NOT NULL,
  `gender` text NOT NULL,
  `lower_bp` int(11) NOT NULL,
  `higher_bp` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`sno`, `username`, `name`, `password`, `dt`, `age`, `address`, `email`, `contactnum`, `gender`, `lower_bp`, `higher_bp`, `weight`) VALUES
(1, 'Anurag008', 'Anurag Tiwari', '466690215Aa@', '2024-04-05 22:46:41', 21, 'v.p.o sagra teh hujur rewa(m.p)', 'avinash@gmail.com', 9343413430, 'Male', 81, 110, 61),
(2, 'Anshu006', 'Anshu Anand Jha', '466690215Aa@', '2024-04-05 23:09:09', 56, 's', 'asda@gmail.com', 1234567894, 'male', 72, 100, 70),
(3, 'Shriya010', 'Shriya Sharma', '466690215Aa@', '2024-04-05 23:10:18', 56, 's', 'asda@gmail.com', 1234567894, 'male', 81, 119, 51),
(4, 'Ajay200', 'Ajay Deo', '466690215Aa@', '2024-04-05 23:13:48', 23, 'q', 'e@gmail.com', 1234567893, 'male', 87, 117, 66),
(9, 'prince567', 'Prince Dwivedi', '4666905Aa@', '2024-04-07 05:14:14', 21, 'patna bihar', 'prince@gmail.com', 0, 'male', 81, 119, 70),
(10, 'prince234', 'Prince dwivedi', '466690215Aa@', '2024-04-07 08:51:20', 21, 'patna bihar', 'prince@gmail.com', 9343413430, 'male', 72, 119, 61),
(11, 'emily789', 'Emily Johnson', 'password789', '2024-04-07 08:54:16', 25, 'New Jersey, USA', 'emily.johnson@example.com', 9876543210, 'female', 68, 115, 59),
(12, 'sam456', 'Samuel Smith', 'sam789pass', '2024-04-07 08:54:16', 35, 'London, UK', 'sam.smith@example.com', 8765432109, 'male', 75, 122, 71),
(13, 'lisa567', 'Lisa Davis', 'lisapass123', '2024-04-07 08:54:16', 29, 'Sydney, Australia', 'lisa.davis@example.com', 7654321098, 'female', 70, 118, 65),
(14, 'alex890', 'Alexander Brown', 'alex456pass', '2024-04-07 08:54:16', 40, 'Los Angeles, USA', 'alex.brown@example.com', 6543210987, 'male', 73, 121, 75),
(15, 'sophia123', 'Sophia Rodriguez', 'sophiapass789', '2024-04-07 08:54:16', 27, 'Paris, France', 'sophia.rodriguez@example.com', 5432109876, 'female', 69, 116, 63),
(16, 'adam678', 'Adam Wilson', 'adam789pass', '2024-04-07 08:54:16', 45, 'Toronto, Canada', 'adam.wilson@example.com', 4321098765, 'male', 76, 123, 80),
(17, 'grace234', 'Grace Martinez', 'grace456pass', '2024-04-07 08:54:16', 31, 'Madrid, Spain', 'grace.martinez@example.com', 3210987654, 'female', 71, 117, 68),
(18, 'david567', 'David Lee', 'david789pass', '2024-04-07 08:54:16', 28, 'Berlin, Germany', 'david.lee@example.com', 2109876543, 'male', 74, 120, 67),
(19, 'olivia890', 'Olivia White', 'olivia789pass', '2024-04-07 08:54:16', 42, 'Rome, Italy', 'olivia.white@example.com', 1098765432, 'female', 77, 124, 78),
(20, 'michael234', 'Michael Taylor', 'michael789pass', '2024-04-07 08:54:16', 32, 'Moscow, Russia', 'michael.taylor@example.com', 987654321, 'male', 72, 118, 70),
(21, 'ava567', 'Ava Anderson', 'ava789pass', '2024-04-07 08:54:16', 26, 'Seoul, South Korea', 'ava.anderson@example.com', 9876543210, 'female', 68, 115, 58),
(22, 'james890', 'James Hernandez', 'james789pass', '2024-04-07 08:54:16', 44, 'Mexico City, Mexico', 'james.hernandez@example.com', 8765432109, 'male', 75, 122, 73),
(23, 'emma234', 'Emma Nguyen', 'emma789pass', '2024-04-07 08:54:16', 33, 'Tokyo, Japan', 'emma.nguyen@example.com', 7654321098, 'female', 70, 118, 66),
(24, 'william567', 'William Torres', 'william789pass', '2024-04-07 08:54:16', 27, 'Moscow, Russia', 'william.torres@example.com', 6543210987, 'male', 73, 120, 69),
(25, 'sophia890', 'Sophia King', 'sophia789pass', '2024-04-07 08:54:16', 46, 'São Paulo, Brazil', 'sophia.king@example.com', 5432109876, 'female', 78, 125, 82),
(26, 'michael234', 'Michael Lopez', 'michael789pass', '2024-04-07 08:54:16', 34, 'Bangkok, Thailand', 'michael.lopez@example.com', 4321098765, 'male', 76, 123, 77),
(27, 'emma567', 'Emma Harris', 'emma789pass', '2024-04-07 08:54:16', 28, 'Istanbul, Turkey', 'emma.harris@example.com', 3210987654, 'female', 71, 117, 64),
(28, 'noah890', 'Noah Gonzales', 'noah789pass', '2024-04-07 08:54:16', 43, 'Jakarta, Indonesia', 'noah.gonzales@example.com', 2109876543, 'male', 74, 121, 76),
(29, 'olivia234', 'Olivia Rodriguez', 'olivia789pass', '2024-04-07 08:54:16', 35, 'Lagos, Nigeria', 'olivia.rodriguez@example.com', 987654321, 'female', 77, 124, 79),
(30, 'jacob567', 'Jacob Perez', 'jacob789pass', '2024-04-07 08:54:16', 29, 'Mumbai, India', 'jacob.perez@example.com', 9876543210, 'male', 72, 118, 71),
(31, 'emma890', 'Emma Sanchez', 'emma789pass', '2024-04-07 08:54:16', 47, 'Shanghai, China', 'emma.sanchez@example.com', 8765432109, 'female', 78, 125, 83),
(32, 'mason234', 'Mason Nguyen', 'mason789pass', '2024-04-07 08:54:16', 36, 'Lima, Peru', 'mason.nguyen@example.com', 7654321098, 'male', 76, 122, 75),
(33, 'isabella567', 'Isabella Brown', 'isabella789pass', '2024-04-07 08:54:16', 30, 'Santiago, Chile', 'isabella.brown@example.com', 6543210987, 'female', 73, 120, 68),
(34, 'oliver890', 'Oliver Garcia', 'oliver789pass', '2024-04-07 08:54:16', 44, 'Bogotá, Colombia', 'oliver.garcia@example.com', 5432109876, 'male', 75, 123, 74),
(35, 'mia234', 'Mia Perez', 'mia789pass', '2024-04-07 08:54:16', 31, 'Buenos Aires, Argentina', 'mia.perez@example.com', 4321098765, 'female', 70, 119, 67),
(36, 'charlotte567', 'Charlotte Martinez', 'charlotte789pass', '2024-04-07 08:54:16', 45, 'Cairo, Egypt', 'charlotte.martinez@example.com', 3210987654, 'male', 77, 124, 78),
(37, '', '', '', '2024-04-07 16:35:08', 0, '', '', 0, '', 0, 0, 0),
(38, 'w', 'asdasd', '466690215Aa@', '2024-04-07 16:36:51', 56, 'q', 'hw@gmail.com', 6756453678, 'sad', 0, 0, 0),
(39, 'ueyueyu', 'wewe', '466690215Aa@', '2024-04-07 16:43:47', 56, 'wew', 'e@gmail.com', 4567823910, 'male', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `visitid` int(11) NOT NULL,
  `doctorid` varchar(30) NOT NULL,
  `patientid` varchar(30) NOT NULL,
  `dt` datetime NOT NULL,
  `statusof` varchar(10) NOT NULL,
  `visited` varchar(5) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_mobile` bigint(12) NOT NULL,
  `dateapp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`visitid`, `doctorid`, `patientid`, `dt`, `statusof`, `visited`, `amount`, `payment`, `doctor_name`, `patient_name`, `patient_mobile`, `dateapp`) VALUES
(1, 'Avinash4666', 'Anurag008', '2024-04-04 20:59:45', 'done', 'yes', 500, 'done', 'Avinash Dwivedi', 'Anurag Tiwari', 9874563789, ''),
(2, 'Avinash4666', 'Anshu006', '2024-04-06 21:00:22', 'done', 'yes', 500, 'done', 'Avinash Dwivedi', 'Anshu Anand Jha', 9758938905, ''),
(3, 'Avinash4666', 'Shriya010', '2024-04-06 21:02:11', 'pending', 'no', 500, 'due', 'Avinash Dwivedi', 'Shriya Sharma', 7589346758, ''),
(4, 'Piyush009', 'Anurag008', '2024-04-06 21:02:44', 'pending', 'no', 500, 'due', 'Piyush Singh', 'Ajay Deo', 9856784534, ''),
(5, 'Avinash4666', 'Anurag008', '2024-04-07 06:11:09', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Anurag Tiwari', 8796547890, ''),
(6, 'Avinash4666', 'olivia234', '2024-04-07 06:32:39', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Olivia Rodriguez', 987654321, ''),
(7, 'Avinash4666', 'emma567', '2024-04-07 06:37:02', 'pending', 'no', 500, 'no', 'Avinash Dwivedi', 'Emma Harris', 3210987654, ''),
(8, 'Avinash4666', 'olivia890', '2024-04-07 06:40:55', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Olivia White', 1098765432, ''),
(9, 'Piyush009', 'ava567', '2024-04-07 06:43:21', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Ava Anderson', 9876543210, ''),
(10, 'Piyush009', 'sophia890', '2024-04-07 06:46:44', 'pending', 'no', 600, 'no', 'Piyush Singh', 'Sophia King', 5432109876, ''),
(11, 'Piyush009', 'olivia890', '2024-04-07 06:48:37', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Olivia White', 1098765432, ''),
(12, 'Avinash4666', 'sophia890', '2024-04-07 06:50:53', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Sophia King', 5432109876, ''),
(13, 'Piyush009', 'olivia890', '2024-04-07 06:52:39', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Olivia White', 1098765432, ''),
(14, 'Piyush009', 'olivia234', '2024-04-07 06:54:13', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Olivia Rodriguez', 987654321, ''),
(15, 'Avinash4666', 'ava567', '2024-04-07 06:56:11', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Ava Anderson', 9876543210, ''),
(16, 'Avinash4666', 'olivia890', '2024-04-07 06:57:39', 'pending', 'no', 500, 'no', 'Avinash Dwivedi', 'Olivia White', 1098765432, ''),
(17, 'Piyush009', 'emma567', '2024-04-07 07:00:38', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Emma Harris', 3210987654, ''),
(18, 'Piyush009', 'olivia890', '2024-04-07 07:01:47', 'pending', 'no', 600, 'no', 'Piyush Singh', 'Olivia White', 1098765432, ''),
(19, 'Piyush009', 'olivia890', '2024-04-07 07:03:33', 'pending', 'no', 500, 'no', 'Piyush SIngh', 'Olivia White', 1098765432, ''),
(20, 'Avinash4666', 'ava567', '2024-04-07 07:04:38', 'pending', 'no', 600, 'no', 'Avinash Dwivedi', 'Ava Anderson', 9876543210, ''),
(21, 'Piyush009', 'olivia890', '2024-04-07 07:06:04', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Olivia White', 1098765432, ''),
(22, 'Piyush009', 'sophia890', '2024-04-07 07:07:23', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Sophia King', 5432109876, ''),
(23, 'Piyush009', 'olivia234', '2024-04-07 07:09:15', 'pending', 'no', 500, 'no', 'Piyush Singh', 'Olivia Rodriguez', 987654321, ''),
(24, 'Avinash4666', 'ava567', '2024-04-07 07:11:51', 'pending', 'no', 500, 'no', 'Avinash Dwivedi', 'Ava Anderson', 9876543210, ''),
(25, 'Piyush009', 'emma567', '2024-04-07 07:14:50', 'pending', 'no', 600, 'no', 'Piyush Singh', 'Emma Harris', 3210987654, ''),
(26, 'Avinash4666', 'Anurag008', '2024-04-07 14:23:21', 'pending', 'no', 500, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 5432109876, ''),
(27, '', 'root', '0000-00-00 00:00:00', 'pending', 'no', 500, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 8967546789, '2024-04-24'),
(28, '', '', '2024-04-07 14:50:55', '', '', 0, '', '', '', 0, 'wq'),
(29, 'Avinash4666', 'Anurag008', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(30, 'Avinash4666', 'Anurag008', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(31, 'Avinash4666', 'Anurag008', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(32, 'Avinash4666', 'Anurag008', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(33, 'Avinash4666', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(34, 'Avinash4666', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'sas', 'Anurag Tiwari', 987654321, '02:89'),
(35, 'Avinash4666', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'sas', 'Anurag Tiwari', 987654321, '02:89'),
(36, '', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'as', 'Anurag Tiwari', 987654321, '02:89'),
(37, '', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'asdasd', 'Anurag Tiwari', 987654321, '02:89'),
(38, '', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'as', 'Anurag Tiwari', 987654321, '02:89'),
(39, '', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'as', 'Anurag Tiwari', 987654321, '02:89'),
(40, 'as', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'as', 'Anurag Tiwari', 987654321, '02:89'),
(41, '', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'a', 'Anurag Tiwari', 987654321, '02:89'),
(42, 'Avinash Dwivedi', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(43, 'Avinash Dwivedi', 'root', '2024-04-07 14:52:36', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '02:89'),
(44, 'Avinash4666', 'root', '2024-04-07 18:54:45', 'pending', 'no', 600, 'due', 'Avinash Dwivedi', 'Anurag Tiwari', 987654321, '2024-04-07 18:54:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `doctors_info`
--
ALTER TABLE `doctors_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`visitid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors_info`
--
ALTER TABLE `doctors_info`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `visitid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
