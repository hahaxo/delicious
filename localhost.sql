-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-08-18 11:51:40
-- 服务器版本： 10.1.25-MariaDB
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
-- Database: `delicious`
--
CREATE DATABASE IF NOT EXISTS `delicious` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `delicious`;

-- --------------------------------------------------------

--
-- 表的结构 `bookmark`
--

CREATE TABLE `bookmark` (
  `BID` int(11) NOT NULL,
  `URL` text NOT NULL,
  `TITLE` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `AUTHOR` text NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bookmark`
--

INSERT INTO `bookmark` (`BID`, `URL`, `TITLE`, `DESCRIPTION`, `AUTHOR`, `TIME`) VALUES
(1, 'https://www.taskade.com/', 'Taskade', 'Taskade is a collaborative space for your ideas goals and daily tasks', 'hahaxo@126.com', '2017-08-18 09:48:35'),
(2, 'http://designguidelines.co/', 'Design Guidelines — The way products are built.', 'The way products are built\r\n\r\n', 'hahaxo@126.com', '2017-08-18 09:50:26');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `TIME`) VALUES
(1, 'hahaxo@126.com', '2e3c0feeabaeb595f91f6dcc1639939ea012c490', '2017-08-18 09:44:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
