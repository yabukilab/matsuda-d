-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-01 10:55:15
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
-- テーブルの構造 `dat_sales`
--

CREATE TABLE `dat_sales` (
  `code` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `postal1` varchar(3) NOT NULL,
  `postal2` varchar(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `dat_sales_product`
--

CREATE TABLE `dat_sales_product` (
  `code` int(11) NOT NULL,
  `code_sales` int(11) NOT NULL,
  `code_product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- テーブルの構造 `管理者情報管理`
--

CREATE TABLE `管理者情報管理` (
  `code` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `顧客情報管理`
--

CREATE TABLE `顧客情報管理` (
  `code` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `dat_sales`
--
ALTER TABLE `dat_sales`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `dat_sales_product`
--
ALTER TABLE `dat_sales_product`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `在庫管理`
--
ALTER TABLE `在庫管理`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `管理者情報管理`
--
ALTER TABLE `管理者情報管理`
  ADD PRIMARY KEY (`code`);

--
-- テーブルのインデックス `顧客情報管理`
--
ALTER TABLE `顧客情報管理`
  ADD PRIMARY KEY (`code`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `dat_sales`
--
ALTER TABLE `dat_sales`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `dat_sales_product`
--
ALTER TABLE `dat_sales_product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `在庫管理`
--
ALTER TABLE `在庫管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `管理者情報管理`
--
ALTER TABLE `管理者情報管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `顧客情報管理`
--
ALTER TABLE `顧客情報管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
