-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:00 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060718_dhtl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MAGV` int(11) NOT NULL,
  `HOVATEN` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRINHDO` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CHUYENMON` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HOCHAM` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HOCVI` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COQUAN` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `HOVATEN`, `NGAYSINH`, `GIOITINH`, `TRINHDO`, `CHUYENMON`, `HOCHAM`, `HOCVI`, `COQUAN`) VALUES
(1, 'NGUYEN A', '1995-04-05', 'NAM', 'A', NULL, NULL, NULL, 'DHTL'),
(2, 'NGUYEN B', '1987-11-01', 'NAM', 'B', NULL, NULL, NULL, 'DHTL'),
(3, 'NGUYEN C', '1979-02-21', 'NU', 'C', NULL, NULL, NULL, 'DHTL'),
(4, 'NGUYEN D', '1986-03-21', 'NAM', 'D', NULL, NULL, NULL, 'DHTL'),
(5, 'NGUYEN E', '1992-02-01', 'NU', 'E', NULL, NULL, NULL, 'DHTL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
