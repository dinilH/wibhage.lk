-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 07:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wibhage_lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(1, 'grade 1', '2021-08-12 09:57:21'),
(2, 'grade 2', '2021-08-12 09:57:29'),
(3, 'grade 3', '2021-08-12 09:57:44'),
(4, 'grade 4', '2021-08-12 09:57:57'),
(5, 'grade 5', '2021-08-12 09:58:26'),
(6, 'grade 6', '2021-08-12 09:58:35'),
(7, 'grade 7', '2021-08-12 09:58:44'),
(8, 'grade 8', '2021-08-12 09:58:54'),
(9, 'grade 9', '2021-08-12 09:59:01'),
(10, 'grade 10', '2021-08-12 09:59:01'),
(11, 'grade 11', '2021-07-26 13:24:11'),
(12, 'grade 12', '2021-07-26 13:24:18'),
(13, 'grade 13', '2021-07-26 13:24:18'),
(14, 'University', '2021-07-26 13:24:18'),
(15, 'BSc', '2021-07-26 13:24:18'),
(16, 'Dhamma School', '2021-07-26 13:24:18'),
(17, 'Others', '2021-07-26 13:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl`
--

CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_course` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee_tbl`
--

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_fullname`, `exmne_course`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(1, 'Dinil Hansara', '13', 'owner@wibhage.lk', 'developer', 'active'),
(2, 'Demo', '13', 'demo@wibhage.lk', '12345', 'active'),
(3, 'Shashintha', '14', 'shashintha@gmail.com', 'shashi@12345', 'active'),
(4, 'Saman', '16', 'saman2003@gmail.com', 'samansaman', 'active'),
(5, 'Chanuli', '7', 'chanu@yahoo.com', 'HeyWinCha972', 'active'),
(6, 'Achira', '4', 'achira2012@gmail.com', 'G4Me', 'active'),
(7, 'Sadunika', '11', 'Sandu@widasa.com', 'widasaAuthI23', 'active'),
(8, 'Shawn Fdo', '15', 'shawnm@yahoo.com', 'IamShawn2000', 'active'),
(9, 'Teacher Chathura', 'others', 'chathura@wibhage.lk', 'chathura', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(1, 1, 1, 3, 'Wikipedia', 'old', '2021-08-13 04:02:51'),
(2, 1, 1, 41, '1,2', 'old', '2021-08-13 04:02:51'),
(3, 1, 1, 1, 'Avi,mov,wmv,mp3', 'old', '2021-08-13 04:02:51'),
(4, 1, 1, 2, 'i.)-incorrect ,ii.)-correct', 'old', '2021-08-13 04:02:51'),
(5, 1, 1, 45, 'www.mail.com', 'old', '2021-08-13 10:04:07'),
(6, 1, 1, 41, '1,2', 'old', '2021-08-13 10:04:07'),
(7, 1, 1, 3, 'Safari', 'old', '2021-08-13 10:04:07'),
(8, 1, 1, 46, 'American Stock Code for Information Interchange', 'old', '2021-08-13 10:04:07'),
(9, 1, 1, 2, 'both are incorrect', 'old', '2021-08-13 10:04:07'),
(10, 1, 1, 47, 'B', 'old', '2021-08-13 10:04:07'),
(11, 1, 1, 42, 'a,b,d', 'old', '2021-08-13 10:04:07'),
(12, 1, 1, 43, 'Large Area Network', 'old', '2021-08-13 10:04:07'),
(13, 1, 1, 1, 'Avi,mov,wmv,mp3', 'old', '2021-08-13 10:04:07'),
(14, 1, 1, 44, 'On line learning', 'old', '2021-08-13 10:04:07'),
(15, 1, 1, 1, 'Avi,midi,wav,mp3', 'new', '2021-08-13 10:04:07'),
(16, 1, 1, 45, 'dinil@mail.com', 'new', '2021-08-13 10:04:07'),
(17, 1, 1, 2, 'i,ii are correct', 'new', '2021-08-13 10:04:07'),
(18, 1, 1, 42, 'a', 'new', '2021-08-13 10:04:07'),
(19, 1, 1, 44, 'Learning through E-thaksalawa', 'new', '2021-08-13 10:04:07'),
(20, 1, 1, 47, 'A', 'new', '2021-08-13 10:04:07'),
(21, 1, 1, 46, 'AFrican Standard Code for Information Interchange', 'new', '2021-08-13 10:04:07'),
(22, 1, 1, 3, 'Wikipedia', 'new', '2021-08-13 10:04:07'),
(23, 1, 1, 43, 'Large Area Network', 'new', '2021-08-13 10:04:07'),
(24, 1, 1, 41, '1', 'new', '2021-08-13 10:04:07'),
(25, 1, 8, 57, 'The footsteps of my friend are heard by me when I am alone.', 'new', '2021-08-19 17:36:11'),
(26, 1, 8, 54, 'The fight was not being given up by him even though he was badly bruised.', 'new', '2021-08-19 17:36:11'),
(27, 1, 8, 56, 'He was upbraided by his wife for his irresponsible handling of the family finance.', 'new', '2021-08-19 17:36:11'),
(28, 1, 8, 55, 'Tranquilizer should been avoided by us in order to have a good health.', 'new', '2021-08-19 17:36:11'),
(29, 1, 8, 58, 'Whenever I said something I was never understood by her.', 'new', '2021-08-19 17:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_attempt`
--

INSERT INTO `exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(4, 1, 8, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(1, 1, 'Select the option that includes file formats suitable for distributing sound files across the internet.', 'Wmv,mp4,wma,mp3', 'Avi,midi,wav,mp3', 'Avi,mov,wmv,mp3', 'Midi,wav,wma,mp3', 'Midi,wav,wma,mp3', 'active'),
(2, 1, 'Which of the following statements is/are correct?<br>\r\ni.)Cache memory is faster than random access memory<br>\r\nii.)Random-access memory is closer to the processor than cache memory', 'i,ii are correct', 'i.)-incorrect ,ii.)-correct', 'i.)-correct ,ii.)-incorrect', 'both are incorrect', 'i.)-correct ,ii.)-incorrect', 'active'),
(3, 1, 'Which one of the following is <span style=\"color:red\">NOT</span> a web browser?', 'Firefox', 'Chrome', 'Safari', 'Wikipedia', 'Wikipedia', 'active'),
(41, 1, '<p>&nbsp;Which of the following statements is <span style=\"background-color: #e03e2d;\">NOT</span> correct ?</p>\r\n<ol>\r\n<li>The computer is capable of processing only digital signal</li>\r\n<li>Appropriate software is required for processing the data</li>\r\n<li>Computer is capable of processing digital as well as analog signals</li>\r\n<li>Computer is capable of analysing both quantitative and qualitative data</li>\r\n</ol>', '1', '1,2', '3', '3,4', '1', 'active'),
(42, 1, '<p>Which of the following is the correct statement?</p>\r\n<ol style=\"list-style-type: lower-alpha;\">\r\n<li>A set of instructions is called a programme</li>\r\n<li>Computers can be used for diagnosing the difficulty of a student in learning a subject</li>\r\n<li>Psychological testing can be done with the help of computer provided software is available</li>\r\n<li>All of the above</li>\r\n</ol>', 'a', 'a,b,d', 'b,c', 'd', 'd', 'active'),
(43, 1, '<p>&nbsp;<span style=\"background-color: #239ee4;\">LAN</span> stands for:</p>', 'Live Area Network', 'Local And National', 'Large Area Network', 'Local Area Network', 'Local Area Network', 'active'),
(44, 1, '<p>&nbsp;Information and Communication Technology includes:</p>', 'On line learning', 'Web Based Learning', 'Learning through E-thaksalawa', 'All of the above', 'All of the above', 'active'),
(45, 1, '<p>Which of the following is the appropriate format of URL of e-mail?</p>', 'www.mail.com', 'www_mail.com', 'dinil@mail.com', 'DINIL@mail.com', 'dinil@mail.com', 'active'),
(46, 1, '<p>On the keyboard of computer each character has an \"ASCII\" value which stands for:</p>', 'Adaptable Standard Code for Information Change', 'American Standard Code for Information Interchange', 'American Stock Code for Information Interchange', 'AFrican Standard Code for Information Interchange', 'American Standard Code for Information Interchange', 'active'),
(47, 1, '<div class=\"mcq_question_text\">\r\n<p>Transfer of data from one application to another line is known as:</p>\r\n</div>\r\n<table class=\"table table-bordered mcq_options_table\" style=\"border-collapse: collapse; border-style: solid;\">\r\n<tbody>\r\n<tr class=\" mcq_option\">\r\n<td class=\"opt_col_1\">&nbsp;</td>\r\n<td class=\"opt_col_2 text-bold\">A.</td>\r\n<td class=\"opt_col_3\">\r\n<p>Dodgy Data Exchange</p>\r\n</td>\r\n</tr>\r\n<tr class=\" correct_answer  mcq_option\">\r\n<td class=\"opt_col_1\">&nbsp;</td>\r\n<td class=\"opt_col_2 text-bold\">B.</td>\r\n<td class=\"opt_col_3\">\r\n<p>Dynamic Data Exchange</p>\r\n</td>\r\n</tr>\r\n<tr class=\" mcq_option\">\r\n<td class=\"opt_col_1\">&nbsp;</td>\r\n<td class=\"opt_col_2 text-bold\">C.</td>\r\n<td class=\"opt_col_3\">\r\n<p>Dynamic Disk Exchange</p>\r\n</td>\r\n</tr>\r\n<tr class=\" mcq_option\">\r\n<td class=\"opt_col_1\">&nbsp;</td>\r\n<td class=\"opt_col_2 text-bold\">D.</td>\r\n<td class=\"opt_col_3\" style=\"border-style: solid;\">\r\n<p>Dogmatic Data Exchange</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'A', 'B', 'C', 'D', 'B', 'active'),
(48, 2, '<p><strong>Fill in the blank using the correct word</strong></p>\r\n<p>When the Principal entered the class, a student&hellip;&hellip;&hellip;. on the blackboard<strong>.</strong></p>\r\n<ol>\r\n<li>Wrote&nbsp;</li>\r\n<li>is writing&nbsp;</li>\r\n<li>writes&nbsp;</li>\r\n<li>was writing&nbsp;&nbsp;</li>\r\n</ol>\r\n<p>&nbsp;</p>', '1', '2', '3', '4', '4', 'active'),
(49, 2, '<p><strong>In each of the following questions, find the correctly spelled</strong></p>\r\n<p><strong> word.</strong></p>\r\n<p><em>1. Reannaisance</em><br /><em>&nbsp;2. Renaissance</em><br /><em>&nbsp;3.Renaissance</em><br /><em>&nbsp;4. Renaisance</em></p>', '1', '2', '3', '4', '3', 'active'),
(50, 2, '<p>&nbsp;<strong>Select&nbsp;Correct Word</strong></p>\r\n<p>&nbsp;A. Aceleration</p>\r\n<p>&nbsp;B.&nbsp;Aceeleration</p>\r\n<p>&nbsp;C. Accelaration</p>\r\n<p>&nbsp;D. Acceleration&nbsp;</p>', 'A', 'B', 'C', 'D', 'D', 'active'),
(51, 2, '<p><strong>Which of the following sentences is correctly punctuated?</strong></p>', 'Everyone has special skills; some people use them very well.', 'Everyone has special skills; and, some people use them very well.', 'Everyone has special skills some people use them very well.', 'D) Everyone has special skills and, some people use them very well.', 'Everyone has special skills; some people use them very well.', 'active'),
(52, 2, '<p><strong>One who possesses many talents</strong></p>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;one who possesses many talents&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:4865,&quot;3&quot;:[null,0],&quot;11&quot;:3,&quot;12&quot;:0,&quot;15&quot;:&quot;Calibri&quot;}\">One word substitute for the given word is?</span></p>', 'Versatile', 'Nubile', 'Wisdom', 'Exceptional', 'Versatile', 'active'),
(53, 2, '<p><strong>Which part of the given sentence has an error?</strong></p>\r\n<p>She does not speak of either German or French.</p>', 'dones not', 'of', 'speak', 'or', 'of', 'active'),
(54, 8, '<h2>MCQS ON ACTIVE AND PASSIVE VOICE</h2>\r\n<p>He did not give up the fight even though he was badly bruised.</p>', 'The fight did not give up by him even though he was badly bruised.', 'The fight had not given up by him even though he was badly bruised.', 'The fight was not given up by him even though he was badly bruised.', 'The fight was not being given up by him even though he was badly bruised.', 'The fight was not given up by him even though he was badly bruised.', 'active'),
(55, 8, '<p>We should avoid tranquilizer in order to have good health.</p>', 'Tranquilizer should avoided by us in order to have good health.', 'Tranquilizer should been avoided by us in order to have a good health.', 'Tranquilizer should be avoid by us in order to have a good health.', 'Tranquilizer should be avoided by us in order to have a good health.', 'Tranquilizer should be avoided by us in order to have a good health.', 'active'),
(56, 8, '<p>His wife upbraided him for his irresponsible handling of the family finance.</p>', 'He upbraided by his wife for his irresponsible handling of the family finance.', 'He was upbraided by his wife for his irresponsible handling of the family finance.', 'He has upbraided by his wife for his irresponsible handling of the family finance.', 'He were upbraided by his wife for his irresponsible handling of the family finance.', 'He was upbraided by his wife for his irresponsible handling of the family finance.', 'active'),
(57, 8, '<p>When I am alone, I hear the footsteps of my friend in my imagination.</p>', 'The footsteps of my friend heard by me, when I am alone.', 'The footsteps of my friend is heard by me when I am alone.', 'The footsteps of my friend are heard by me when I am alone.', 'The footsteps of my friend was heard by me when I am alone.', 'The footsteps of my friend is heard by me when I am alone.', 'active'),
(58, 8, '<p>She never understood me, whenever I said something.</p>', 'Whenever I said something, I never understood by her.', 'Whenever I said something, I had never understood by her.', 'Whenever I said something, I was being never understood by her.', 'Whenever I said something I was never understood by her.', 'Whenever I said something I was never understood by her.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ex_start` datetime DEFAULT NULL COMMENT 'විභාගෙ පටන් ගන්න වෙලාව',
  `ex_creator_id` varchar(255) NOT NULL COMMENT 'examinee_tbl එකේ foriegn key එක',
  `ex_Camera_Tracking` tinyint(1) NOT NULL COMMENT 'Advanced feature'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`, `ex_start`, `ex_creator_id`, `ex_Camera_Tracking`) VALUES
(1, 13, 'Grade 13 ICT', '30', 10, ' ICT online test no.1', '2021-08-13 04:01:27', '2021-08-11 16:14:00', '1', 1),
(2, 13, 'A/L General English', '10', 6, '<p>G/Richmond College 1<sup> st</sup> term test</p>', '2021-08-19 07:30:37', '2021-08-12 11:23:00', '1', 0),
(8, 13, 'Grade 13 English Active voice Passive voice test', '10', 5, 'First-term test paper-Part 1', '2021-08-19 17:38:48', '2021-08-19 20:53:00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(1, 1, 'Dinil Hansara', 'Good job', 'August 19, 2021'),
(2, 1, 'Anonymous', 'This site helped me a lot', 'August 19, 2021'),
(3, 1, 'Anonymous', 'good job', 'August 19, 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  ADD PRIMARY KEY (`exmne_id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
