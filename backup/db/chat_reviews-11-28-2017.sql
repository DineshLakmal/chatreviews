-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 12:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting_partner`
--

CREATE TABLE `chatting_partner` (
  `cp_id` char(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `cs_id` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatting_partner`
--

INSERT INTO `chatting_partner` (`cp_id`, `name`, `cs_id`) VALUES
('test_p_001', 'Dinesh Lakmal', 'test_s001');

-- --------------------------------------------------------

--
-- Table structure for table `chat_sessions`
--

CREATE TABLE `chat_sessions` (
  `cs_id` char(10) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `date_start` char(10) DEFAULT NULL,
  `date_close` char(10) DEFAULT NULL,
  `user_id` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_sessions`
--

INSERT INTO `chat_sessions` (`cs_id`, `name`, `date_start`, `date_close`, `user_id`) VALUES
('test_s001', 'Test', '6/29/2017', NULL, 'test_001');

-- --------------------------------------------------------

--
-- Table structure for table `emotion`
--

CREATE TABLE `emotion` (
  `emotion_id` char(10) NOT NULL,
  `emotion_text` char(50) DEFAULT NULL,
  `emotion_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emotion`
--

INSERT INTO `emotion` (`emotion_id`, `emotion_text`, `emotion_count`) VALUES
('emotion001', 'anger', 121),
('emotion002', 'disgust', 67),
('emotion003', 'fear', 24),
('emotion004', 'guilt', 83),
('emotion005', 'joy', 161),
('emotion006', 'sadness', 40),
('emotion007', 'shame', 42);

-- --------------------------------------------------------

--
-- Table structure for table `evaluatehealth`
--

CREATE TABLE `evaluatehealth` (
  `id` int(11) NOT NULL,
  `msghealthCount` int(11) DEFAULT NULL,
  `trust` int(11) DEFAULT NULL,
  `totalLess` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluatehealth`
--

INSERT INTO `evaluatehealth` (`id`, `msghealthCount`, `trust`, `totalLess`) VALUES
(1, 2, 3, NULL),
(2, 51, 45, NULL),
(3, 51, 45, NULL),
(4, 51, 45, NULL),
(5, 0, 49, NULL),
(6, 0, 49, NULL),
(7, 0, 49, NULL),
(8, 0, 49, NULL),
(9, 0, 49, NULL),
(10, 0, 49, NULL),
(11, 0, 49, NULL),
(12, 0, 49, NULL),
(13, 0, 49, NULL),
(14, 0, 49, NULL),
(15, 0, 49, NULL),
(16, 0, 49, NULL),
(17, 0, 49, NULL),
(18, 0, 49, NULL),
(19, 0, 49, NULL),
(20, 0, 49, NULL),
(21, 0, 49, NULL),
(22, 0, 49, NULL),
(23, 0, 49, NULL),
(24, 0, 49, NULL),
(25, 0, 49, NULL),
(26, 0, 49, NULL),
(27, 0, 49, NULL),
(28, 0, 49, NULL),
(29, 0, 49, NULL),
(30, 0, 49, NULL),
(31, 0, 49, NULL),
(32, 0, 49, NULL),
(33, 0, 49, NULL),
(34, 0, 49, NULL),
(35, 0, 49, NULL),
(36, 0, 49, NULL),
(37, 0, 49, NULL),
(38, 0, 49, NULL),
(39, 0, 49, NULL),
(40, 0, 49, NULL),
(41, 0, 49, NULL),
(42, 0, 49, NULL),
(43, 0, 49, NULL),
(44, 0, 49, NULL),
(45, 0, 49, NULL),
(46, 0, 49, NULL),
(47, 0, 49, NULL),
(48, 0, 49, NULL),
(49, 0, 49, NULL),
(50, 0, 49, NULL),
(51, 0, 49, NULL),
(52, 0, 49, NULL),
(53, 0, 49, NULL),
(54, 0, 49, NULL),
(55, 0, 49, NULL),
(56, 0, 49, NULL),
(57, 0, 49, NULL),
(58, 0, 49, NULL),
(59, 0, 49, NULL),
(60, 0, 49, NULL),
(61, 0, 49, NULL),
(62, 0, 49, NULL),
(63, 0, 49, NULL),
(64, 0, 49, NULL),
(65, 0, 49, NULL),
(66, 37, 49, NULL),
(67, 37, 49, NULL),
(68, 37, 49, NULL),
(69, 37, 49, NULL),
(70, 37, 49, NULL),
(71, 37, 49, NULL),
(72, 37, 49, NULL),
(73, 37, 49, NULL),
(74, 37, 49, -12),
(75, 37, 49, -12),
(76, 37, 49, -12);

-- --------------------------------------------------------

--
-- Table structure for table `healthy`
--

CREATE TABLE `healthy` (
  `healthy_id` char(10) NOT NULL,
  `no_of_text` int(11) DEFAULT NULL,
  `no_of_healthy_text` int(11) DEFAULT NULL,
  `category` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthy`
--

INSERT INTO `healthy` (`healthy_id`, `no_of_text`, `no_of_healthy_text`, `category`) VALUES
('healthy_01', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg` varchar(100) DEFAULT NULL,
  `cs_id` char(10) DEFAULT NULL,
  `topic_id` char(10) DEFAULT NULL,
  `personal_info_id` char(10) DEFAULT NULL,
  `healthy_id` char(10) DEFAULT NULL,
  `emotion_id` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg`, `cs_id`, `topic_id`, `personal_info_id`, `healthy_id`, `emotion_id`) VALUES
(560, 'I had a wonderful experience! The rooms were wonderful and the staff was helpful.', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion005'),
(585, 'what happened', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(586, 'go test one', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion003'),
(587, 'hi', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(588, 'the game is one', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion001'),
(589, 'the game is one', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion001'),
(590, 'i want eat', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion002'),
(591, 'hi guys i am here', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(592, 'what to with this', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(593, 'really', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion007'),
(594, 'not now can you imagine it', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion006'),
(595, 'i like politics', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion007'),
(596, 'it seems so nice to me', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion001'),
(597, 'go hell', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(598, 'what to do', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(599, 'nice bag', 'test_s001', 'topic006', 'pinfo_001', 'healthy_01', 'emotion005'),
(600, 'where are you', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion002'),
(601, 'go hell', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(602, 'my noise is awesome', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion004'),
(603, 'have you used it', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion004'),
(604, 'not no', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(605, 'now now', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion002'),
(606, 'my uncle is here', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion005'),
(607, 'i want money', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion004'),
(608, 'to buy a bag', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion007'),
(609, 'create app', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(610, 'go to pizza hut', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion003'),
(611, 'what to do now', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(612, 'those go ever new', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion006'),
(613, 'be brave', 'test_s001', 'topic006', 'pinfo_001', 'healthy_01', 'emotion003'),
(614, 'so stressed these days', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion002'),
(615, 'my house', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion003'),
(616, 'pencil box', 'test_s001', 'topic006', 'pinfo_001', 'healthy_01', 'emotion002'),
(617, 'what are u doing these days', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion002'),
(618, 'i did my project well', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(619, 'now hope you will do', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion006'),
(620, 'get notification', 'test_s001', 'topic006', 'pinfo_001', 'healthy_01', 'emotion005'),
(621, 'but how', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion006'),
(622, 'crashed', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion004'),
(623, 'go hell', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(624, 'where the girl', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion002'),
(625, 'how to create methodology', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion002'),
(626, 'not the best case', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion006'),
(627, 'see bro i am here', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion005'),
(628, 'for while', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion004'),
(629, 'been long time', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion005'),
(630, 'can identify', 'test_s001', 'topic006', 'pinfo_001', 'healthy_01', 'emotion002'),
(631, 'for bigger case', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(632, 'you see not to find', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion006'),
(633, 'the case', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(634, 'but i am ok with this', 'test_s001', 'topic001', 'pinfo_001', 'healthy_01', 'emotion001'),
(635, 'my name is indika.', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion005'),
(636, 'my name is indika.', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion005'),
(637, 'hi where are you?', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion002'),
(638, 'my Name is Dinesh.', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion005'),
(639, 'Hi who is this?', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion002'),
(640, 'not later we will do it', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion004'),
(641, 'hi where', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(642, 'go with this', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion001'),
(643, 'go now', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion006'),
(644, 'go now', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion006'),
(645, 'frrr', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(646, 'thyu', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(647, 'hi be there', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(648, 'hi there', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(649, 'hi there', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(650, 'hi', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(651, 'hotmail', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(652, 'go now', 'test_s001', 'topic002', 'pinfo_001', 'healthy_01', 'emotion006'),
(653, 'go second', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion006'),
(654, 'hello', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion001'),
(655, 'hello', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion001'),
(656, 'hi', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(657, 'Hello', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion001'),
(658, 'hi there', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion003'),
(659, 'hey', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion001'),
(660, 'there', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion003'),
(661, 'where are you', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion002'),
(662, 'hi', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion001'),
(663, 'where are you?', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion002'),
(664, 'hi again', 'test_s001', 'topic003', 'pinfo_001', 'healthy_01', 'emotion005'),
(665, 'where i am now?', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion007'),
(666, 'wht?', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(667, 'wht?', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(668, 'wht?', 'test_s001', 'topic007', 'pinfo_001', 'healthy_01', 'emotion001'),
(669, 'hey', 'test_s001', 'topic004', 'pinfo_001', 'healthy_01', 'emotion001'),
(670, 'where i am now', 'test_s001', 'topic005', 'pinfo_001', 'healthy_01', 'emotion007');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_info_id` char(10) NOT NULL,
  `msgcount` int(11) DEFAULT NULL,
  `infocount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`personal_info_id`, `msgcount`, `infocount`) VALUES
('pinfo_001', 87, 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info_data`
--

CREATE TABLE `personal_info_data` (
  `pdata_id` char(10) NOT NULL,
  `define_data` char(20) DEFAULT NULL,
  `personal_info_id` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_review`
--

CREATE TABLE `session_review` (
  `sr_id` int(11) NOT NULL,
  `positive_topics` float DEFAULT NULL,
  `positive_emotions` float DEFAULT NULL,
  `personal_info` float DEFAULT NULL,
  `healthiness` float DEFAULT NULL,
  `cs_id` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_review`
--

INSERT INTO `session_review` (`sr_id`, `positive_topics`, `positive_emotions`, `personal_info`, `healthiness`, `cs_id`) VALUES
(1, 28.3234, 53.1599, 0, 56.3218, 'test_s001');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` char(10) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `category` char(20) DEFAULT NULL,
  `percentage` float NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `name`, `category`, `percentage`, `count`) VALUES
('topic001', 'Food', 'Food', 6.71876, 0),
('topic002', 'Politics', 'Politics', 23.5353, 0),
('topic003', 'Sport', 'Sport', 19.2308, 0),
('topic004', 'Money', 'Money', 12.359, 0),
('topic005', 'Education', 'Education', 23.2734, 0),
('topic006', 'Others', 'Others', 5.56378, 0),
('topic007', 'Null', 'Null', 9.31942, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(10) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `address` char(25) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` char(25) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  `hubVerifyToken` varchar(100) NOT NULL,
  `accessToken` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `address`, `age`, `email`, `password`, `hubVerifyToken`, `accessToken`) VALUES
('test_001', 'Dinesh Lakmal', 'Test 37/16', 24, 'dineshed25@gmail.com', '123456', 'TOKEN123', 'EAAbU8Us6RZCEBAP23cHhQbcnpn7hRJICZBddbPHGoWecjq7VVlGUX6uXNwJcZCTLHZBZB67txnJGIEBMzSe76tgunn8FSP6HyXJr9Uw5urvbMbNx7gG6AQZAbVP51TM48a0n9FAeQGYVPZBvm255hgiZBB1eycFNykLwiHvcVbrjyiFbaAZBRz37z'),
('user_001', 'Edirisinghe', '90/23 Rahula Road', 23, 'dineshee@chatreviews.com', '123456', 'TOKEN123', 'EAAbU8Us6RZCEBAP23cHhQbcnpn7hRJICZBddbPHGoWecjq7VVlGUX6uXNwJcZCTLHZBZB67txnJGIEBMzSe76tgunn8FSP6HyXJr9Uw5urvbMbNx7gG6AQZAbVP51TM48a0n9FAeQGYVPZBvm255hgiZBB1eycFNykLwiHvcVbrjyiFbaAZBRz37z'),
('user_002', 'Second Developer', '142555', 23, 'dineshed25@gmail.com', '12345678', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatting_partner`
--
ALTER TABLE `chatting_partner`
  ADD PRIMARY KEY (`cp_id`),
  ADD KEY `fk_Chatting_partner` (`cs_id`);

--
-- Indexes for table `chat_sessions`
--
ALTER TABLE `chat_sessions`
  ADD PRIMARY KEY (`cs_id`),
  ADD KEY `fk_Chat_sessions` (`user_id`);

--
-- Indexes for table `emotion`
--
ALTER TABLE `emotion`
  ADD PRIMARY KEY (`emotion_id`);

--
-- Indexes for table `evaluatehealth`
--
ALTER TABLE `evaluatehealth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthy`
--
ALTER TABLE `healthy`
  ADD PRIMARY KEY (`healthy_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `fk_Message_Chat_sessions` (`cs_id`),
  ADD KEY `fk_Message_Topic` (`topic_id`),
  ADD KEY `fk_Message_Personal_info` (`personal_info_id`),
  ADD KEY `fk_Message_Healthy` (`healthy_id`),
  ADD KEY `fk_Message_Emotion` (`emotion_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_info_id`);

--
-- Indexes for table `personal_info_data`
--
ALTER TABLE `personal_info_data`
  ADD PRIMARY KEY (`pdata_id`),
  ADD KEY `fk_Personal_info_data` (`personal_info_id`);

--
-- Indexes for table `session_review`
--
ALTER TABLE `session_review`
  ADD PRIMARY KEY (`sr_id`),
  ADD KEY `fk_session_review` (`cs_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluatehealth`
--
ALTER TABLE `evaluatehealth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=671;
--
-- AUTO_INCREMENT for table `session_review`
--
ALTER TABLE `session_review`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatting_partner`
--
ALTER TABLE `chatting_partner`
  ADD CONSTRAINT `fk_Chatting_partner` FOREIGN KEY (`cs_id`) REFERENCES `chat_sessions` (`cs_id`);

--
-- Constraints for table `chat_sessions`
--
ALTER TABLE `chat_sessions`
  ADD CONSTRAINT `fk_Chat_sessions` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_Message_Chat_sessions` FOREIGN KEY (`cs_id`) REFERENCES `chat_sessions` (`cs_id`),
  ADD CONSTRAINT `fk_Message_Emotion` FOREIGN KEY (`emotion_id`) REFERENCES `emotion` (`emotion_id`),
  ADD CONSTRAINT `fk_Message_Healthy` FOREIGN KEY (`healthy_id`) REFERENCES `healthy` (`healthy_id`),
  ADD CONSTRAINT `fk_Message_Personal_info` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`personal_info_id`),
  ADD CONSTRAINT `fk_Message_Topic` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`);

--
-- Constraints for table `personal_info_data`
--
ALTER TABLE `personal_info_data`
  ADD CONSTRAINT `fk_Personal_info_data` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`personal_info_id`);

--
-- Constraints for table `session_review`
--
ALTER TABLE `session_review`
  ADD CONSTRAINT `fk_session_review` FOREIGN KEY (`cs_id`) REFERENCES `chat_sessions` (`cs_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
