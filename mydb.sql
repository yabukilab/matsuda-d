-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-05 09:57:07
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
-- データベース: `mydb`
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

--
-- テーブルのデータのダンプ `dat_sales`
--

INSERT INTO `dat_sales` (`code`, `data`, `name`, `email`, `postal1`, `postal2`, `address`, `tel`) VALUES
(1, '2024-06-28 05:29:46', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(2, '2024-06-28 05:29:58', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(3, '2024-06-28 05:30:07', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(4, '2024-06-28 05:30:16', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(5, '2024-06-28 05:30:25', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(6, '2024-06-28 05:33:38', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(7, '2024-06-28 05:33:49', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(8, '2024-06-28 05:34:13', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(9, '2024-06-28 05:48:42', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(10, '2024-06-28 06:28:43', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(11, '2024-06-28 06:32:50', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(12, '2024-06-28 06:33:56', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(13, '2024-06-28 06:34:29', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(14, '2024-06-28 06:34:57', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(15, '2024-06-28 06:45:38', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(16, '2024-06-28 06:45:51', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(17, '2024-06-28 06:46:01', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(18, '2024-06-28 06:46:14', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(19, '2024-06-28 06:47:05', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(20, '2024-06-28 06:47:39', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(21, '2024-06-28 06:51:59', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(22, '2024-06-28 06:54:13', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(23, '2024-06-28 06:54:29', '平川真寛', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(24, '2024-06-28 06:54:57', 'あああ', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(25, '2024-06-28 06:57:39', 'いいい', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(26, '2024-06-28 06:59:01', 'いいい', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(27, '2024-06-28 08:14:13', 'あいうえお', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(28, '2024-06-28 08:24:10', 'あいうえお', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(29, '2024-07-02 03:36:56', 'あいうえお', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850'),
(30, '2024-07-02 03:37:17', 'あいうえお', 'h.mahiro0124@gmail.com', '273', '0012', '千葉県船橋市浜町2-2-1-820', '07089323850');

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

--
-- テーブルのデータのダンプ `dat_sales_product`
--

INSERT INTO `dat_sales_product` (`code`, `code_sales`, `code_product`, `price`, `quantity`) VALUES
(1, 3, 12, 140, 1),
(2, 3, 16, 3000, 1),
(3, 4, 12, 140, 1),
(4, 4, 16, 3000, 1),
(5, 5, 12, 140, 1),
(6, 5, 16, 3000, 1),
(7, 6, 12, 140, 1),
(8, 6, 16, 3000, 1),
(9, 17, 13, 140, 1),
(10, 17, 14, 800, 1),
(11, 18, 13, 140, 1),
(12, 18, 14, 800, 1),
(13, 19, 12, 140, 1),
(14, 19, 16, 3000, 1),
(15, 20, 18, 450, 1),
(16, 20, 19, 250, 1),
(17, 21, 18, 450, 1),
(18, 21, 19, 250, 1),
(19, 22, 18, 450, 1),
(20, 22, 19, 250, 1),
(21, 23, 18, 450, 1),
(22, 23, 19, 250, 1),
(23, 24, 18, 450, 1),
(24, 24, 19, 250, 1),
(25, 24, 12, 140, 1),
(26, 24, 15, 1200, 1),
(27, 25, 18, 450, 1),
(28, 25, 19, 250, 1),
(29, 25, 12, 140, 1),
(30, 25, 15, 1200, 1),
(31, 25, 14, 800, 1),
(32, 26, 18, 450, 1),
(33, 26, 19, 250, 1),
(34, 26, 12, 140, 1),
(35, 26, 15, 1200, 1),
(36, 26, 14, 800, 1),
(37, 27, 18, 450, 1),
(38, 27, 19, 250, 1),
(39, 27, 12, 140, 1),
(40, 27, 15, 1200, 1),
(41, 27, 14, 800, 1),
(42, 27, 21, 2000, 2),
(43, 28, 14, 800, 1),
(44, 29, 23, 1, 1),
(45, 29, 12, 140, 1),
(46, 30, 23, 1, 1),
(47, 30, 12, 140, 1);

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
(12, '生茶', 140, 150, ''),
(13, '生茶', 140, 200, ''),
(14, 'パンプキン', 800, 5000, ''),
(15, '佐渡サーモン', 1200, 25, ''),
(16, '大間産マグロ', 3000, 400, ''),
(17, 'ヤリイカ', 400, 500, ''),
(18, 'カワハギ', 450, 35, ''),
(19, '鯵', 250, 10, ''),
(21, 'メロン', 2000, 80, ''),
(22, 'マンゴー', 1000, 1000, 'img_mango.jpg'),
(23, 'a', 1, 1, ''),
(24, 'a', 1, 1, ''),
(25, 'a', 1, 1, ''),
(26, 'a', 1, 1, '');

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

drop table if exist 管理者情報管理;
INSERT INTO `管理者情報管理` (`code`, `name`, `pass`) VALUES
(27, 'a', 0),
(30, 'a', 0),
(31, 'a', 0);
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
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `dat_sales`
--
ALTER TABLE `dat_sales`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- テーブルの AUTO_INCREMENT `dat_sales_product`
--
ALTER TABLE `dat_sales_product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- テーブルの AUTO_INCREMENT `在庫管理`
--
ALTER TABLE `在庫管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- テーブルの AUTO_INCREMENT `管理者情報管理`
--
ALTER TABLE `管理者情報管理`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
