-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-14 07:28:41
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
-- テーブルの構造 `管理者情報管理`
--

CREATE TABLE `管理者情報管理` (
  `code` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `管理者情報管理`
--

INSERT INTO `管理者情報管理` (`code`, `name`, `pass`) VALUES
(1, '平川真寛', 25),
(2, '木村夢希', 1),
(3, '落合駿太', 827),
(4, '松田紀美', 827);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `管理者情報管理`
--
ALTER TABLE `管理者情報管理`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `管理者情報管理`
--
ALTER TABLE `管理者情報管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
