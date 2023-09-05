-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2023-09-05 10:00:33
-- 伺服器版本： 8.0.31
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nkust_tsmc`
--

-- --------------------------------------------------------

--
-- 資料表結構 `isp1_move`
--

CREATE TABLE `isp1_move` (
  `name` varchar(100) NOT NULL,
  `needy1-1` tinyint(1) DEFAULT NULL,
  `needy1-2` tinyint(1) DEFAULT NULL,
  `needy1-3` tinyint(1) DEFAULT NULL,
  `needy1-4` tinyint(1) DEFAULT NULL,
  `needy1-5` tinyint(1) DEFAULT NULL,
  `needy1-6` tinyint(1) DEFAULT NULL,
  `help1-1` tinyint(1) DEFAULT NULL,
  `help1-2` tinyint(1) DEFAULT NULL,
  `help1-3` tinyint(1) DEFAULT NULL,
  `help1-4` tinyint(1) DEFAULT NULL,
  `help1-5` tinyint(1) DEFAULT NULL,
  `help1-6` tinyint(1) DEFAULT NULL,
  `ans1-1` tinyint(1) DEFAULT NULL,
  `ans1-2` tinyint(1) DEFAULT NULL,
  `ans1-3` tinyint(1) DEFAULT NULL,
  `ans1-4` tinyint(1) DEFAULT NULL,
  `ans1-5` tinyint(1) DEFAULT NULL,
  `ans1-6` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='行動能力';

-- --------------------------------------------------------

--
-- 資料表結構 `isp2_life`
--

CREATE TABLE `isp2_life` (
  `name` int NOT NULL,
  `needy2-1` tinyint(1) DEFAULT NULL,
  `needy2-2` tinyint(1) DEFAULT NULL,
  `needy2-3` tinyint(1) DEFAULT NULL,
  `needy2-4` tinyint(1) DEFAULT NULL,
  `needy2-5` tinyint(1) DEFAULT NULL,
  `needy2-6` tinyint(1) DEFAULT NULL,
  `needy2-7` tinyint(1) DEFAULT NULL,
  `help2-1` tinyint(1) DEFAULT NULL,
  `help2-2` tinyint(1) DEFAULT NULL,
  `help2-3` tinyint(1) DEFAULT NULL,
  `help2-4` tinyint(1) DEFAULT NULL,
  `help2-5` tinyint(1) DEFAULT NULL,
  `help2-6` tinyint(1) DEFAULT NULL,
  `help2-7` tinyint(1) DEFAULT NULL,
  `help2-8` tinyint(1) DEFAULT NULL,
  `ans2-1` tinyint(1) DEFAULT NULL,
  `ans2-2` tinyint(1) DEFAULT NULL,
  `ans2-3` tinyint(1) DEFAULT NULL,
  `ans2-4` tinyint(1) DEFAULT NULL,
  `ans2-5` tinyint(1) DEFAULT NULL,
  `ans2-6` tinyint(1) DEFAULT NULL,
  `ans2-7` tinyint(1) DEFAULT NULL,
  `ans2-8` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='生活適應';

-- --------------------------------------------------------

--
-- 資料表結構 `isp3_talk`
--

CREATE TABLE `isp3_talk` (
  `name` varchar(300) NOT NULL,
  `needy3-1` tinyint(1) NOT NULL,
  `needy3-2` tinyint(1) NOT NULL,
  `needy3-3` tinyint(1) NOT NULL,
  `help3-1` tinyint(1) NOT NULL,
  `help3-2` tinyint(1) NOT NULL,
  `ans3-1` tinyint(1) NOT NULL,
  `ans3-2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `isp4_health`
--

CREATE TABLE `isp4_health` (
  `name` varchar(300) NOT NULL,
  `needy4-1` tinyint(1) NOT NULL,
  `needy4-2` tinyint(1) NOT NULL,
  `needy4-3` tinyint(1) NOT NULL,
  `needy4-4` tinyint(1) NOT NULL,
  `needy4-5` tinyint(1) NOT NULL,
  `needy4-6` tinyint(1) NOT NULL,
  `help4-1` tinyint(1) NOT NULL,
  `help4-2` tinyint(1) NOT NULL,
  `help4-3` tinyint(1) NOT NULL,
  `help4-4` tinyint(1) NOT NULL,
  `help4-5` tinyint(1) NOT NULL,
  `help4-6` tinyint(1) NOT NULL,
  `help4-7` tinyint(1) NOT NULL,
  `ans4-1` tinyint(1) NOT NULL,
  `ans4-2` tinyint(1) NOT NULL,
  `ans4-3` tinyint(1) NOT NULL,
  `ans4-4` tinyint(1) NOT NULL,
  `ans4-5` tinyint(1) NOT NULL,
  `ans4-6` tinyint(1) NOT NULL,
  `ans4-7` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `isp5_self`
--

CREATE TABLE `isp5_self` (
  `name` varchar(300) NOT NULL,
  `needy5-1` tinyint(1) NOT NULL,
  `needy5-2` tinyint(1) NOT NULL,
  `needy5-3` tinyint(1) NOT NULL,
  `needy5-4` tinyint(1) NOT NULL,
  `needy5-5` tinyint(1) NOT NULL,
  `needy5-6` tinyint(1) NOT NULL,
  `help5-1` tinyint(1) NOT NULL,
  `help5-2` tinyint(1) NOT NULL,
  `help5-3` tinyint(1) NOT NULL,
  `help5-4` tinyint(1) NOT NULL,
  `ans5-1` tinyint(1) NOT NULL,
  `ans5-2` tinyint(1) NOT NULL,
  `ans5-3` tinyint(1) NOT NULL,
  `ans5-4` tinyint(1) NOT NULL,
  `ans5-5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `isp6_school`
--

CREATE TABLE `isp6_school` (
  `name` varchar(300) NOT NULL,
  `needy6-1` tinyint(1) NOT NULL,
  `needy6-2` tinyint(1) NOT NULL,
  `needy6-3` tinyint(1) NOT NULL,
  `needy6-4` tinyint(1) NOT NULL,
  `needy6-5` tinyint(1) NOT NULL,
  `needy6-6` varchar(300) NOT NULL,
  `needy6-7` varchar(300) NOT NULL,
  `needy6-8` varchar(300) NOT NULL,
  `needy6-9` varchar(300) NOT NULL,
  `needy6-10` varchar(300) NOT NULL,
  `needy6-11` varchar(300) NOT NULL,
  `needy6-12` varchar(300) NOT NULL,
  `needy6-13` tinyint(1) NOT NULL,
  `help6-1` tinyint(1) NOT NULL,
  `help6-2` tinyint(1) NOT NULL,
  `help6-2-1` varchar(300) NOT NULL,
  `help6-2-2` varchar(300) NOT NULL,
  `help6-2-3` varchar(300) NOT NULL,
  `help6-2-4` varchar(300) NOT NULL,
  `help6-3` tinyint(1) NOT NULL,
  `help6-4` tinyint(1) NOT NULL,
  `help6-4-1` varchar(300) NOT NULL,
  `help6-4-2` varchar(300) NOT NULL,
  `help6-4-3` varchar(300) NOT NULL,
  `help6-4-4` varchar(300) NOT NULL,
  `help6-5` tinyint(1) NOT NULL,
  `help6-5-1` varchar(300) NOT NULL,
  `help6-5-2` varchar(300) NOT NULL,
  `help6-5-3` varchar(300) NOT NULL,
  `help6-5-4` varchar(300) NOT NULL,
  `help6-6` tinyint(1) NOT NULL,
  `help6-6-1` varchar(300) NOT NULL,
  `help6-6-2` varchar(300) NOT NULL,
  `help6-7` tinyint(1) NOT NULL,
  `help6-8` tinyint(1) NOT NULL,
  `help6-9` tinyint(1) NOT NULL,
  `help6-10` tinyint(1) NOT NULL,
  `ans6-1` tinyint(1) NOT NULL,
  `ans6-2` tinyint(1) NOT NULL,
  `ans6-3` tinyint(1) NOT NULL,
  `ans6-4` tinyint(1) NOT NULL,
  `ans6-5` tinyint(1) NOT NULL,
  `ans6-6` tinyint(1) NOT NULL,
  `ans6-7` tinyint(1) NOT NULL,
  `ans6-8` tinyint(1) NOT NULL,
  `ans6-9` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `School_ID` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Skill` varchar(45) NOT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Type_ID` varchar(100) DEFAULT NULL,
  `Score_credit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student`
--

INSERT INTO `student` (`id`, `School_ID`, `Name`, `Skill`, `Type`, `Type_ID`, `Score_credit`) VALUES
(37, 'test', 'test2', 'test3', 'test4', 'test5', 'test6'),
(38, 'C111196121', '吳承瑋', '不分系', '自閉', '輕度', '196');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_1`
--

CREATE TABLE `student_help_1` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_1`
--

INSERT INTO `student_help_1` (`year`, `name`, `help-1`, `help-2`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 2, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_2`
--

CREATE TABLE `student_help_2` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `help-8` int NOT NULL DEFAULT '0',
  `help-9` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_2`
--

INSERT INTO `student_help_2` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 1, 0, 1, 0, 0, 3, 0, 7, '', ''),
('111-2', 'test2', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', ''),
('112-1', '吳承瑋', 0, 0, 0, 1, 0, 1, 1, 0, 0, 3, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_3`
--

CREATE TABLE `student_help_3` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_3`
--

INSERT INTO `student_help_3` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 1, 0, 0, 2, 0, 3, '', ''),
('111-1', '吳承瑋', 2, 0, 0, 1, 0, 3, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_4`
--

CREATE TABLE `student_help_4` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_5`
--

CREATE TABLE `student_help_5` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `help-8` int NOT NULL DEFAULT '0',
  `help-9` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_6`
--

CREATE TABLE `student_help_6` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_6`
--

INSERT INTO `student_help_6` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 1, 1, 1, 0, 0, 5, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_7`
--

CREATE TABLE `student_help_7` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_8`
--

CREATE TABLE `student_help_8` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_8`
--

INSERT INTO `student_help_8` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`, `info`, `time`) VALUES
('111-1', '吳承瑋', 0, 1, 0, 2, 0, 1, 0, 4, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_9`
--

CREATE TABLE `student_help_9` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_10`
--

CREATE TABLE `student_help_10` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_11`
--

CREATE TABLE `student_help_11` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_12`
--

CREATE TABLE `student_help_12` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_13`
--

CREATE TABLE `student_help_13` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_14`
--

CREATE TABLE `student_help_14` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `student_help_all`
--

CREATE TABLE `student_help_all` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `help-8` int NOT NULL DEFAULT '0',
  `help-9` int NOT NULL DEFAULT '0',
  `help-10` int NOT NULL DEFAULT '0',
  `help-11` int NOT NULL DEFAULT '0',
  `help-12` int NOT NULL DEFAULT '0',
  `help-13` int NOT NULL DEFAULT '0',
  `help-14` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_help_all`
--

INSERT INTO `student_help_all` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`, `help-10`, `help-11`, `help-12`, `help-13`, `help-14`) VALUES
('111-2', '吳承瑋', 2, 0, 3, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0),
('111-1', '吳承瑋', 2, 0, 3, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0),
('111-2', 'test2', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('112-1', '吳承瑋', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_1`
--

CREATE TABLE `student_infohelp_1` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_1`
--

INSERT INTO `student_infohelp_1` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_2`
--

CREATE TABLE `student_infohelp_2` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_2`
--

INSERT INTO `student_infohelp_2` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 1, 1, 4, '', ''),
('111-1', '吳承瑋', 2, 0, 0, 0, 2, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_3`
--

CREATE TABLE `student_infohelp_3` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_3`
--

INSERT INTO `student_infohelp_3` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 1, 0, 0, 0, 0, 3, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_4`
--

CREATE TABLE `student_infohelp_4` (
  `year` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0',
  `help-6` int NOT NULL DEFAULT '0',
  `help-7` int NOT NULL DEFAULT '0',
  `help-8` int NOT NULL DEFAULT '0',
  `help-9` int NOT NULL DEFAULT '0',
  `help-10` int NOT NULL DEFAULT '0',
  `help-11` int NOT NULL DEFAULT '0',
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_4`
--

INSERT INTO `student_infohelp_4` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`, `help-10`, `help-11`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 3, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_5`
--

CREATE TABLE `student_infohelp_5` (
  `year` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `help-1` int NOT NULL,
  `help-2` int NOT NULL,
  `help-3` int NOT NULL,
  `help-4` int NOT NULL,
  `help-5` int NOT NULL,
  `help-6` int NOT NULL,
  `total` int NOT NULL,
  `info` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_5`
--

INSERT INTO `student_infohelp_5` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `total`, `info`, `time`) VALUES
('111-2', '吳承瑋', 0, 1, 0, 2, 0, 0, 3, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `student_infohelp_all`
--

CREATE TABLE `student_infohelp_all` (
  `year` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `help-1` int NOT NULL DEFAULT '0',
  `help-2` int NOT NULL DEFAULT '0',
  `help-3` int NOT NULL DEFAULT '0',
  `help-4` int NOT NULL DEFAULT '0',
  `help-5` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `student_infohelp_all`
--

INSERT INTO `student_infohelp_all` (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`) VALUES
('111-2', '吳承瑋', 0, 4, 0, 3, 0),
('111-1', '吳承瑋', 0, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `student_learn_hour`
--

CREATE TABLE `student_learn_hour` (
  `id` bigint NOT NULL,
  `year` varchar(200) NOT NULL,
  `month_1` int NOT NULL DEFAULT '0',
  `month_2` int NOT NULL DEFAULT '0',
  `month_3` int NOT NULL DEFAULT '0',
  `month_4` int NOT NULL DEFAULT '0',
  `month_5` int NOT NULL DEFAULT '0',
  `Name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `teacher_acc`
--

CREATE TABLE `teacher_acc` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `student_learn_hour`
--
ALTER TABLE `student_learn_hour`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `student_learn_hour`
--
ALTER TABLE `student_learn_hour`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
