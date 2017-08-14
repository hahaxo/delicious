-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-08-14 09:37:20
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
(1, 'http://wulfric.me/about/', 'About', 'DES', 'yangpeiyuan', '2017-08-08 06:01:07'),
(2, 'https://mp.weixin.qq.com/s/CctuE0Tw9GT3eckn4Of0uw', '做大哥的样子', '', 'yangpeiyuan', '2017-08-08 06:04:11'),
(3, 'http://www.jianshu.com/p/aa2f885ba871', '深入浅出javascript对象原型 - 简书', '图文并茂的帮助你更好的理解JavaScript原型.熟记并理解以下规则,保你深入理解对象原型,保你面试无忧.', 'yangpeiyuan', '2017-08-08 06:04:50');

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
(1, 'hahaxo1@126.com', '45c596f6de46192d73475363156fbed2454b10d6', '2017-08-02 08:39:36'),
(2, 'hahaxo2@126.com', '45c596f6de46192d73475363156fbed2454b10d6', '2017-08-03 07:45:49'),
(3, 'hahaxo3@126.com', '45c596f6de46192d73475363156fbed2454b10d6', '2017-08-03 07:46:04'),
(4, 'hahaxo4@126.com', '45c596f6de46192d73475363156fbed2454b10d6', '2017-08-03 07:46:43'),
(5, 'hahaxo5@126.com', '45c596f6de46192d73475363156fbed2454b10d6', '2017-08-03 07:46:51'),
(19, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2017-08-03 13:01:01'),
(20, 'admin1', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', '2017-08-03 13:06:55');

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
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
