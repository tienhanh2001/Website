-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2021 lúc 11:14 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webzing`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('admin', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(500) DEFAULT NULL,
  `cus_age` int(11) DEFAULT NULL,
  `cus_phone` varchar(500) DEFAULT NULL,
  `cus_address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(500) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(500) DEFAULT NULL,
  `totalprice` varchar(500) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(500) DEFAULT NULL,
  `song_img` varchar(500) DEFAULT NULL,
  `song_singer` varchar(500) DEFAULT NULL,
  `song_price` int(11) DEFAULT NULL,
  `song_audio` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_img`, `song_singer`, `song_price`, `song_audio`) VALUES
(1, 'Anh Thương em còn dại', 'atecnd.jpg', 'Đình Dũng', 300, 'AnhThuongEmConNonDai-DinhDung-6617165.mp3'),
(2, 'Hai chữ đã từng', 'haichudatung.jpg', 'Việt', 5000, 'HaiChuDaTung-NhuViet-6487469.mp3'),
(3, 'Buồn làm chi em ơi', 'blceo.jpg', 'Hoài Lâm ', 1000, 'BuonLamChiEmOi1-HoaiLam-6297318.mp3'),
(4, 'Cô gái vàng', 'cgv.jpg', 'HuyR x Tùng  Viu', 1000, 'CoGaiVang-HuyRTungViu-6617041.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `songvsorders`
--

CREATE TABLE `songvsorders` (
  `song_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`);

--
-- Chỉ mục cho bảng `songvsorders`
--
ALTER TABLE `songvsorders`
  ADD KEY `song_id` (`song_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Các ràng buộc cho bảng `songvsorders`
--
ALTER TABLE `songvsorders`
  ADD CONSTRAINT `songvsorders_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`),
  ADD CONSTRAINT `songvsorders_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
