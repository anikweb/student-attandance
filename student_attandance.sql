-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 11:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_attandance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `id` int(255) UNSIGNED NOT NULL,
  `student_id` int(255) UNSIGNED NOT NULL,
  `status` varchar(10) DEFAULT 'false',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attandance`
--

INSERT INTO `attandance` (`id`, `student_id`, `status`, `date`) VALUES
(1, 3, 'true', '2022-09-21'),
(2, 4, 'true', '2022-09-21'),
(3, 5, 'false', '2022-09-21'),
(4, 24, 'false', '2022-09-21'),
(5, 12, 'false', '2022-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `roll` int(10) NOT NULL,
  `session` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `department`, `roll`, `session`, `semester`, `contact_number`, `email`, `guardian_name`, `guardian_number`) VALUES
(3, 'Turja Datta Niloy', 'computer', 160458, '18-19', '8th', '017123456', 'jokozin@mailinator.com', 'Ishmael Nash', '667'),
(4, 'Sanjida Islam Sanny', 'computer', 160455, '18-19', '8th', '01783674575', 'aniknandi.it@gmail.com', 'Joysree Rani Nandi', '01783674575'),
(5, 'Anik  Kumar Nandi', 'computer', 160471, '18-19', '8th', '01783674575', 'aniknandi.it@gmail.com', 'Joysree Rani Nandi', '01783674575'),
(7, 'Claire Hill', 'computer', 0, '11-12', '1st', '145', 'fadazukamy@mailinator.com', 'Dahlia Sullivan', '801'),
(8, 'Adele Carpenter', 'electrical', 0, '22-23', '4th', '315', 'rixuto@mailinator.com', 'Forrest Blevins', '553'),
(9, 'Abra Knapp', 'electrical', 83, '11-12', '2nd', '441', 'jugezigicu@mailinator.com', 'Adrian Welch', '953'),
(10, 'Tate Rivas', 'electrical', 84, '14-15', '8th', '207', 'magosi@mailinator.com', 'Colorado Winters', '422'),
(11, 'Sloane Gilmore', 'electrical', 97, '22-23', '3rd', '820', 'lyjetapu@mailinator.com', 'Melvin Davidson', '408'),
(12, 'Armand Mccarthy', 'mechanical', 59, '19-20', '6th', '769', 'feroduqise@mailinator.com', 'Brenda Schultz', '288'),
(13, 'Wallace Ashley', 'mechanical', 100, '22-23', '3rd', '647', 'namyqeby@mailinator.com', 'Rana Gutierrez', '122'),
(14, 'Thomas Clayton', 'electronics', 24, '14-15', '4th', '630', 'dykyno@mailinator.com', 'Alexa Wooten', '215'),
(15, 'Hop Benton', 'electronics', 78, '21-22', '3rd', '16', 'rapezib@mailinator.com', 'Paki Sharp', '755'),
(16, 'Maxwell Roy', 'civil', 80, '21-22', '4th', '299', 'javeg@mailinator.com', 'John Patterson', '109'),
(17, 'Colette Nicholson', 'mechanical', 20, '17-18', '6th', '788', 'qypifelu@mailinator.com', 'Cynthia Odonnell', '364'),
(18, 'Roary Dotson', 'electronics', 49, '15-16', '7th', '523', 'kiqet@mailinator.com', 'Marshall Zimmerman', '930'),
(19, 'Paul Snider', 'computer', 55, '19-20', '6th', '710', 'sotes@mailinator.com', 'Ayanna Haley', '269'),
(20, 'Driscoll Wilkerson', 'mechanical', 35, '12-13', '3rd', '307', 'qoqu@mailinator.com', 'Dawn Ford', '256'),
(21, 'Azalia Albert', 'mechanical', 73, '18-19', '8th', '555', 'nakuk@mailinator.com', 'Wallace Keller', '922'),
(22, 'Emma Cameron', 'electrical', 100, '19-20', '3rd', '968', 'diqadevez@mailinator.com', 'Guinevere Avery', '67'),
(23, 'Hyatt Dunn', 'computer', 52, '10-11', '8th', '5', 'hesip@mailinator.com', 'Angela Dejesus', '33'),
(24, 'Michael Farrell', 'electrical', 52, '20-21', '6th', '207', 'mecuw@mailinator.com', 'Nathan Blake', '984'),
(25, 'Lucian Ayala', 'electrical', 30, '18-19', '2nd', '526', 'hujocaliqu@mailinator.com', 'Nyssa Weaver', '47'),
(26, 'Kaitlin Stanton', 'electrical', 18, '19-20', '6th', '643', 'juburo@mailinator.com', 'Margaret Miranda', '302'),
(27, 'Chadwick Williams', 'electronics', 54, '17-18', '2nd', '508', 'zubesen@mailinator.com', 'Thomas Gilmore', '477'),
(28, 'Kermit Jarvis', 'mechanical', 59, '18-19', '8th', '342', 'dekahyh@mailinator.com', 'Gloria Nguyen', '524'),
(29, 'Timon Pierce', 'mechanical', 24, '12-13', '3rd', '994', 'typor@mailinator.com', 'Quamar Fitzgerald', '382'),
(30, 'Megan Reyes', 'mechanical', 50, '11-12', '4th', '454', 'cofoxaxih@mailinator.com', 'Abel Wilkinson', '963'),
(31, 'Donna Riggs', 'electrical', 92, '15-16', '1st', '958', 'defefaf@mailinator.com', 'Nadine Terry', '70'),
(32, 'Hedwig Battle', 'computer', 21, '15-16', '2nd', '61', 'wirad@mailinator.com', 'Carol Dickson', '356'),
(33, 'Jacob Solis', 'mechanical', 12, '16-17', '6th', '33', 'levosixon@mailinator.com', 'Alec Goodwin', '145'),
(34, 'Rudyard Jordan', 'electrical', 24, '22-23', '3rd', '849', 'lebubupeny@mailinator.com', 'Vernon Christian', '635'),
(35, 'Brock Williamson', 'electronics', 14, '16-17', '2nd', '580', 'xidikadi@mailinator.com', 'Isaiah Schwartz', '513'),
(36, 'Willa Reynolds', 'electrical', 61, '14-15', '2nd', '440', 'dulasejo@mailinator.com', 'Edward Pope', '62'),
(37, 'Danielle Keith', 'civil', 10, '20-21', '4th', '663', 'jidizen@mailinator.com', 'Prescott Warner', '965'),
(38, 'Elton Olsen', 'mechanical', 86, '13-14', '6th', '756', 'sisywi@mailinator.com', 'Indira Marsh', '500'),
(39, 'Travis Wade', 'electronics', 41, '15-16', '3rd', '194', 'jywefyf@mailinator.com', 'Tatiana Blankenship', '378'),
(40, 'Barbara Martin', 'computer', 89, '20-21', '7th', '70', 'qazuqu@mailinator.com', 'Quentin Bird', '819'),
(41, 'Cheyenne Holt', 'computer', 17, '18-19', '2nd', '391', 'bibybov@mailinator.com', 'Cooper Ware', '863'),
(42, 'Ashely Greer', 'computer', 55, '18-19', '2nd', '430', 'sonucobab@mailinator.com', 'Lareina Abbott', '564'),
(43, 'Prescott Holden', 'computer', 71, '21-22', '5th', '346', 'cekywah@mailinator.com', 'Tamekah Lynn', '625'),
(44, 'Cassady Mueller', 'computer', 3, '12-13', '2nd', '613', 'vaja@mailinator.com', 'Quinn Floyd', '492'),
(45, 'Nissim Levine', 'computer', 76, '12-13', '6th', '389', 'syve@mailinator.com', 'Melinda Bentley', '752'),
(46, 'Sylvester Orr', 'computer', 92, '20-21', '8th', '555', 'jusi@mailinator.com', 'Hayley Albert', '452'),
(47, 'Graham Fletcher', 'electrical', 35, '19-20', '4th', '486', 'tedija@mailinator.com', 'Kai Saunders', '516'),
(48, 'Katell Walter', 'computer', 43, '20-21', '7th', '313', 'rifozih@mailinator.com', 'William Rodgers', '536'),
(49, 'Bryar Langley', 'computer', 30, '16-17', '7th', '42', 'vokequfu@mailinator.com', 'Lani Reynolds', '597'),
(50, 'Simone Slater', 'electrical', 51, '18-19', '2nd', '50', 'moxokypuco@mailinator.com', 'Ingrid Wiggins', '249'),
(51, 'Kaseem Mccormick', 'electronics', 46, '14-15', '8th', '196', 'binime@mailinator.com', 'Oliver Kelly', '135'),
(52, 'Bertha Berger', 'electrical', 6, '19-20', '8th', '153', 'zinixewywo@mailinator.com', 'Gannon Gordon', '548'),
(53, 'Kaye Montgomery', 'computer', 30, '20-21', '6th', '68', 'qemikyqy@mailinator.com', 'Chancellor Hensley', '14'),
(54, 'Kyla Short', 'electrical', 11, '20-21', '1st', '465', 'pazivyx@mailinator.com', 'Mallory Tillman', '140'),
(55, 'Sheila Galloway', 'mechanical', 33, '14-15', '3rd', '338', 'fyloroh@mailinator.com', 'Henry Gray', '452'),
(56, 'Wyatt Neal', 'mechanical', 96, '14-15', '6th', '834', 'zebakonaru@mailinator.com', 'Talon Mcintosh', '262'),
(57, 'Vivian Snyder', 'electrical', 51, '21-22', '1st', '338', 'wuvo@mailinator.com', 'Bevis Doyle', '521'),
(58, 'Candice Reid', 'mechanical', 55, '18-19', '3rd', '244', 'nofez@mailinator.com', 'Dana Wilcox', '442'),
(59, 'Echo Young', 'computer', 46, '19-20', '3rd', '168', 'jyny@mailinator.com', 'Malik Morales', '94'),
(60, 'Oprah Glover', 'electrical', 64, '15-16', '8th', '14', 'wahaq@mailinator.com', 'Byron Walker', '749'),
(61, 'Alisa Benson', 'electrical', 6, '15-16', '8th', '231', 'wusupagecu@mailinator.com', 'Hedwig Horn', '671'),
(62, 'Tanisha Berry', 'electronics', 43, '14-15', '3rd', '114', 'repakinapi@mailinator.com', 'Jolie Austin', '101'),
(63, 'Lara Morin', 'civil', 4, '16-17', '1st', '216', 'cynamufu@mailinator.com', 'Nolan Wilcox', '55'),
(64, 'Miriam Gross', 'civil', 3, '22-23', '7th', '436', 'qenivufucy@mailinator.com', 'Norman Roberson', '217'),
(65, 'Heather Mcconnell', 'computer', 39, '10-11', '8th', '546', 'nelywakyci@mailinator.com', 'Clark Rodriguez', '513'),
(66, 'Eaton Mcbride', 'computer', 16, '11-12', '8th', '881', 'vysehuti@mailinator.com', 'Karly Morin', '713'),
(67, 'Xanthus Hall', 'computer', 52, '19-20', '5th', '323', 'dyjute@mailinator.com', 'Mary Mcgowan', '903'),
(68, 'Carolyn Velez', 'electronics', 50, '14-15', '5th', '151', 'giqoqicu@mailinator.com', 'Lillian Olsen', '389'),
(69, 'Zeus Brown', 'electrical', 16, '15-16', '4th', '740', 'xytuxo@mailinator.com', 'Aladdin Dale', '891'),
(70, 'Regina Wright', 'civil', 5, '13-14', '7th', '197', 'kuce@mailinator.com', 'Avye Bauer', '879'),
(71, 'Berk Bowman', 'electrical', 49, '20-21', '4th', '452', 'dyqisar@mailinator.com', 'Ivana Hughes', '501'),
(72, 'Blythe Nixon', 'civil', 35, '17-18', '4th', '949', 'morixezab@mailinator.com', 'Dana Davidson', '203'),
(73, 'Chase Aguirre', 'civil', 61, '18-19', '8th', '757', 'wycytirib@mailinator.com', 'Amal Hull', '424'),
(74, 'Deirdre Morales', 'electrical', 16, '18-19', '8th', '904', 'kaluzoxuzi@mailinator.com', 'Chava Saunders', '978'),
(75, 'Gisela Petty', 'electrical', 31, '18-19', '8th', '577', 'sykidiqol@mailinator.com', 'Lucius Hines', '840'),
(76, 'Mark Hopper', 'mechanical', 19, '22-23', '8th', '894', 'lapefoga@mailinator.com', 'Perry Carter', '896'),
(77, 'Yetta Hobbs', 'mechanical', 16, '22-23', '8th', '185', 'gapusoz@mailinator.com', 'Emily Wolf', '848'),
(78, 'Astra Stein', 'computer', 11, '22-23', '7th', '44', 'wawetuf@mailinator.com', 'Jade Sawyer', '693'),
(79, 'Colby Frank', 'computer', 74, '22-23', '7th', '414', 'galagyqa@mailinator.com', 'Hedley Dale', '475'),
(80, 'Christine Stark', 'computer', 30, '19-20', '6th', '47', 'cyzibyw@mailinator.com', 'Nero Sutton', '123'),
(81, 'Vielka Shelton', 'electrical', 25, '10-11', '1st', '259', 'hopapuromi@mailinator.com', 'Deacon Mccormick', '358'),
(82, 'Amanda Ryan', 'electrical', 74, '19-20', '6th', '184', 'jywy@mailinator.com', 'Caleb Howard', '167'),
(83, 'Ignacia Goodwin', 'electrical', 82, '19-20', '6th', '862', 'sekoh@mailinator.com', 'Iris Bird', '365'),
(84, 'Fritz Boone', 'electrical', 2, '19-20', '6th', '662', 'wyhahyd@mailinator.com', 'Lois Collier', '804'),
(85, 'Lynn Kerr', 'mechanical', 28, '10-11', '1st', '403', 'gusoq@mailinator.com', 'Evan Griffin', '535'),
(86, 'Samson Vaughn', 'computer', 55, '21-22', '4th', '594', 'dilyguhe@mailinator.com', 'Cruz Figueroa', '83'),
(87, 'Hope Snider', 'computer', 75, '21-22', '4th', '599', 'facujeq@mailinator.com', 'Blaze Fox', '685'),
(88, 'Colorado Jones', 'computer', 23, '21-22', '4th', '769', 'mygud@mailinator.com', 'Jolene Vinson', '113'),
(89, 'Victoria Yates', 'mechanical', 10, '22-23', '8th', '209', 'cepidomew@mailinator.com', 'Clementine Terrell', '770'),
(92, 'Merritt Duke', 'mechanical', 48, '11-12', '8th', '690', 'xenin@mailinator.com', 'Cullen Hooper', '594'),
(93, 'Charissa Mclaughlin', 'mechanical', 66, '11-12', '8th', '867', 'qevujynik@mailinator.com', 'Fiona Levy', '391'),
(95, 'Chaim Mathews', 'computer', 13, '10-11', '6th', '691', 'kuwezek@mailinator.com', 'Linus Mccarty', '813'),
(96, 'Dominique Pruitt', 'computer', 67, '10-11', '6th', '667', 'bygivo@mailinator.com', 'Nicole Welch', '380'),
(97, 'Evelyn Ashley', 'mechanical', 67, '15-16', '2nd', '718', 'lekula@mailinator.com', 'Lavinia Herrera', '171'),
(98, 'Clare Stafford', 'mechanical', 0, '15-16', '1st', '402', 'wividyjo@mailinator.com', 'Summer Sweet', '262'),
(99, 'Herman Ashley', 'mechanical', 46, '15-16', '1st', '650', 'paru@mailinator.com', 'Roth Massey', '538'),
(101, 'Mashrafa Jeba', 'electronics', 2705868, '12-13', '3rd', '207', 'aniknandi.it@gmail.com', 'Mannix Bond', '452');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Teacher\'s', 'anik.mbf@gmail.com', '$2y$10$2kbvFMCbXg.YD2QRRmUNrObkFv8tB971jQtj3ZtRztlT4jCnKytxS', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attandance`
--
ALTER TABLE `attandance`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
