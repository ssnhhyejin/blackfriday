-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-12-27 11:13
-- 서버 버전: 5.7.28
-- PHP 버전: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `shinshopping`
--
CREATE DATABASE IF NOT EXISTS `shinshopping` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shinshopping`;

-- --------------------------------------------------------

--
-- 테이블 구조 `item`
--

CREATE TABLE `item` (
  `num` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(10) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `designer` varchar(50) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `clothes` varchar(50) DEFAULT NULL,
  `acc` varchar(50) DEFAULT NULL,
  `bag` varchar(50) DEFAULT NULL,
  `shoes` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `file_copied` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `item`
--

INSERT INTO `item` (`num`, `pname`, `price`, `size`, `quantity`, `designer`, `state`, `clothes`, `acc`, `bag`, `shoes`, `file_name`, `file_type`, `file_copied`) VALUES
(11, 'Leather sneakers', 450, 'L', 3, 'mcq', NULL, NULL, NULL, NULL, 'sneakers', NULL, NULL, NULL),
(10, 'T-Shirt', 450, 'XL', 25, 'gucci', NULL, 'top', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'cap', 330, 'M', 34, 'gucci', NULL, NULL, 'cap', NULL, NULL, NULL, NULL, NULL),
(9, 'Bag', 200, 'L', 90, 'ysl', NULL, NULL, NULL, 'shoulder', NULL, NULL, NULL, NULL),
(12, 'Logo hoodie', 550, 'XL', 21, 'gucci', NULL, 'top', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Earring', 720, 's', 800, 'mcq', 'new', NULL, 'earring', NULL, NULL, NULL, NULL, NULL),
(15, 'Double Jacket', 4000, 'L', 50, 'ysl', 'new', 'outer', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Loafer', 1000, 'm', 40, 'gucci', 'new', NULL, NULL, NULL, 'loafers', NULL, NULL, NULL),
(17, 'straight pants', 1500, 'm', 50, 'ysl', 'new', 'bottom', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Tote Bag', 1970, 'l', 80, 'gucci', 'recomm', NULL, NULL, 'clutch', NULL, NULL, NULL, NULL),
(19, 'Blouse In Silk', 1913, 'm', 70, 'ysl', 'recomm', 'top', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'flower sandals', 630, 'm', 50, 'mcq', 'recomm', NULL, NULL, NULL, 'boots', NULL, NULL, NULL),
(21, 'Double G necklace', 520, 'l', 45, 'gucci', 'recomm', NULL, 'necklace', NULL, NULL, NULL, NULL, NULL),
(22, 'Mcqueen Backpack', 700, 'm', 80, 'mcq', NULL, NULL, NULL, 'backpacks', NULL, NULL, NULL, NULL),
(25, 'ace sneakers', 1250, 'l', 12, 'gucci', NULL, NULL, NULL, NULL, 'sneakers', 'ace sneakers.jpg', 'image/jpeg', 'ace sneakers.jpg'),
(26, 'Rhyton sneakers', 1500, 'xxl', 12, 'gucci', NULL, NULL, NULL, NULL, 'sneakers', 'Rhyton sneakers.jpg', 'image/jpeg', 'Rhyton sneakers.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `pass` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `email` char(80) DEFAULT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`num`, `id`, `pass`, `name`, `email`, `regist_day`, `level`, `address`) VALUES
(1, 'iual0605', '1234', '신혜진', 'iual0605@naver.com', '2019-12-13 (11:10)', 9, '0'),
(3, 'beetle108', '1234', '정해주', 'beetle108108@gmail.com', '2019-12-13 (12:49)', 9, '0'),
(4, 'manager', '12345', 'Manager', NULL, NULL, 1, NULL),
(6, 'sangshin', '123', '신상우', 'ㄴ어랴ㅐ@ㄴㄹ댜', '2019-12-16 (13:36)', 9, '439 N Fairfax Ave, Los Angeles, CA 90036, USA'),
(7, 'shin', '123', 'sangshin', 'sdiofhjsd@oisdhf.com', '2019-12-16 (15:56)', 9, '190 Bowery, New York, NY 10012, USA'),
(8, 'sangwoo', '123', 'dsfsdf', 'dsfdsf@dsfsdf', '2019-12-26 (23:03)', 9, '190 Bowery, New York, NY 10012, USA'),
(9, 'ljh961103', 'ljh1103', '이종훈', 'ljh961103@naver.com', '2019-12-27 (10:05)', 9, 'Yongin');

-- --------------------------------------------------------

--
-- 테이블 구조 `message`
--

CREATE TABLE `message` (
  `num` int(11) NOT NULL,
  `send_id` char(20) NOT NULL,
  `rv_id` char(20) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `message`
--

INSERT INTO `message` (`num`, `send_id`, `rv_id`, `subject`, `content`, `regist_day`) VALUES
(1, 'manager', 'sangshin', 'hey', 'hi', '2019-12-16 (14:31)'),
(2, 'sangshin', 'manager', 'hihi', 'hsdiofsvdsdac', '2019-12-16 (14:36)'),
(6, 'manager', 'sangshin', 'RE: hihi', '\r\nhihi\r\n-----------------------------------------------\r\n&gt; hsdiofsvdsdac', '2019-12-26 (23:05)'),
(4, 'manager', 'iual0605', '안녕하세요', 'hi', '2019-12-20 (13:44)'),
(5, 'iual0605', 'manager', 'RE: 안녕하세요', '\r\nhi, nice to meet you\r\n-----------------------------------------------\r\n&gt; hi', '2019-12-20 (13:48)');

-- --------------------------------------------------------

--
-- 테이블 구조 `order_list`
--

CREATE TABLE `order_list` (
  `order_num` int(11) NOT NULL,
  `id` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `order_date` date DEFAULT NULL,
  `order_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `order_list`
--

INSERT INTO `order_list` (`order_num`, `id`, `name`, `price`, `content`, `order_date`, `order_status`) VALUES
(16, 'sangshin', 'Tote Bag + 4 items', 5708, 'Tote Bag + 4 items', '2019-12-26', 'order submitted'),
(9, 'sangshin', 'Loafer + 1items', 5000, 'Loafer + 1items', '2019-12-26', 'order submitted'),
(8, 'sangshin', 'Bag + 1items', 900, 'Bag + 1items', '2019-12-26', 'order submitted'),
(12, 'sangshin', 'T-Shirt + 1 items', 795, 'T-Shirt + 1 items', '2019-12-26', 'order submitted'),
(15, 'sangshin', 'Earring + 2 items', 1515, 'Earring + 2 items', '2019-12-26', 'order submitted'),
(14, 'manager', 'cap + 2 items', 3095, 'cap + 2 items', '2019-12-26', 'order submitted'),
(17, 'sangshin', 'cap + 1 items', 795, 'cap + 1 items', '2019-12-26', 'order submitted');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `item`
--
ALTER TABLE `item`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
