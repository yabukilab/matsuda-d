-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-14 07:27:01
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `在庫system`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `在庫管理`
--

CREATE TABLE `在庫管理` (
  `code` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `zaikosuu` int(11) NOT NULL,
  `gazou` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `在庫管理`
--

INSERT INTO `在庫管理` (`code`, `name`, `price`, `zaikosuu`, `gazou`) VALUES
(11, 'コカ・コーラ', 120, 100, ''),
(12, '生茶', 140, 200, ''),
(13, '生茶', 140, 200, '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `在庫管理`
--
ALTER TABLE `在庫管理`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `在庫管理`
--
ALTER TABLE `在庫管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
