-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2019 lúc 09:40 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ticketonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ben`
--

CREATE TABLE `ben` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenBen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ben`
--

INSERT INTO `ben` (`id`, `TenBen`) VALUES
(1, 'Thành phố Hồ Chí Minh'),
(2, 'Đà Lạt'),
(3, 'Phan Thiết'),
(4, 'Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietghe`
--

CREATE TABLE `chitietghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `idSoDoGhe` int(10) UNSIGNED NOT NULL,
  `TenGhe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietghe`
--

INSERT INTO `chitietghe` (`id`, `idSoDoGhe`, `TenGhe`) VALUES
(1, 1, 'A1'),
(4, 1, 'A2'),
(5, 1, 'A3'),
(6, 1, 'A4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietve`
--

CREATE TABLE `chitietve` (
  `idVe` int(10) UNSIGNED NOT NULL,
  `idGhe` int(10) UNSIGNED NOT NULL,
  `Gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaBiMat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietve`
--

INSERT INTO `chitietve` (`idVe`, `idGhe`, `Gia`, `SoLuong`, `MaBiMat`, `id`) VALUES
(2, 1, '220000', '1', 'gVdnP617eSihyZ4v0c3iSA7M7ttQbLu1', 1),
(11, 1, '220000', '1', '11_6noCpuRx5LQBkmfh6buJPC6TvRan4CDZ_', 3),
(12, 1, '220000', '1', '12$pdCx6bW1jMGuDy26lZHwjnSl14Bse7fb_', 4),
(13, 5, '220000', '1', '13$ncaOZEE3oiYgBuEOWNMkafAakqh5GxyW_', 5),
(14, 5, '220000', '1', '14$H60hM6qZ6CfGjX2bYcf0P2rZOlszk6DJ_', 6),
(15, 5, '250000', '1', '15$C5xOHT2ain236Pw1Yi8uiiz7aW8yxV3c_', 7),
(16, 5, '250000', '1', '16$n3AR8VFKjGIz50tngArGMqgvuCCqX48S_', 8),
(19, 5, '220000', '1', '19$AI1CyKotno77qWR1v7T1GhZAiZahdlee_', 9),
(20, 4, '220000', '1', '20$_zuxkhPeCSVsqgKbIn5V8XgO0qoB2VXmz', 10),
(21, 4, '220000', '1', '21$_ax47c3D0jS6bFkQq0jcrnk4FelGhEE8E', 11),
(22, 4, '220000', '1', '22$_DQgnzMpPjRpoAWz5UyJMYSqot7kMvzgV', 12),
(23, 4, '220000', '1', '23$_skArYTJiDWa373ZRycMVseZrn3e31aNo', 13),
(24, 4, '220000', '1', '24$_dqjtvj1WlEYeIE5kK2OXNz7Yh7zA2YMo', 14),
(28, 4, '220000', '1', '28$_ZPivb0kEyrjqAZqEPNR2x1PlBZZeNr9w', 15),
(29, 4, '220000', '1', '29$_4bgUzgeImJJUcFkf7a6VNuhhuUx7DdRt', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenCV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `TenCV`) VALUES
(1, 'Nhân viên bán vé'),
(2, 'Nhân viên soát vé');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hoadon` int(10) UNSIGNED NOT NULL,
  `idVe` int(10) UNSIGNED NOT NULL,
  `SoLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id`, `id_hoadon`, `idVe`, `SoLuong`) VALUES
(1, 29, 28, '1'),
(2, 30, 29, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenHTTT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`id`, `TenHTTT`) VALUES
(1, 'Chuyển khoản ngân hàng'),
(2, 'Thanh toán qua ví MOMO'),
(3, 'Thanh toán thẻ ngân hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayDatVe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idKH` int(10) UNSIGNED NOT NULL,
  `idHTTT` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `NgayDatVe`, `TongTien`, `GhiChu`, `idKH`, `idHTTT`) VALUES
(1, '02-10-2019', '220000', 'cho tao ghe dau tien', 1, 1),
(2, '2019-11-13 11:23:01', '250000', 'test', 20, 1),
(3, '2019-11-13 11:23:31', '250000', 'test', 21, 1),
(4, '2019-11-13 11:23:58', '250000', 'test', 22, 1),
(5, '2019-11-13 11:27:54', '1250000', 'test', 23, 1),
(6, '2019-11-14 02:16:41', '220000', 'test', 24, 1),
(7, '2019-11-14 02:45:48', '220000', 'test', 26, 1),
(8, '2019-11-14 07:49:17', '220000', 'test', 27, 1),
(9, '2019-11-15 01:44:39', '220000', 'test', 28, 1),
(10, '2019-11-15 01:45:57', '220000', 'test', 29, 1),
(11, '2019-11-15 01:47:49', '220000', 'test', 30, 1),
(12, '2019-11-15 01:50:07', '220000', 'test', 31, 1),
(13, '2019-11-15 01:51:05', '220000', 'test', 32, 1),
(14, '2019-11-15 02:17:25', '220000', 'test', 186, 1),
(15, '2019-11-15 02:23:47', '220000', 'test', 188, 1),
(16, '2019-11-15 11:42:55', '250000', 'test', 189, 1),
(17, '2019-11-15 11:49:00', '250000', 'test', 190, 3),
(18, '2019-11-15 13:10:36', '220000', 'test', 191, 2),
(19, '2019-11-15 13:29:36', '220000', 'test', 192, 2),
(20, '2019-11-15 13:43:51', '220000', 'test', 195, 2),
(21, '2019-11-15 13:49:49', '220000', 'test', 196, 2),
(22, '2019-11-15 13:56:21', '220000', 'test', 197, 2),
(23, '2019-11-15 13:58:40', '220000', 'test', 198, 1),
(24, '2019-11-17 02:30:42', '220000', 'test', 199, 2),
(25, '2019-11-22 07:41:48', '220000', 'test', 200, 1),
(26, '2019-11-22 08:03:51', '220000', 'test', 201, 1),
(27, '2019-11-22 08:04:33', '220000', 'test', 202, 1),
(28, '2019-11-22 08:07:46', '220000', 'test', 203, 1),
(29, '2019-11-22 08:09:40', '220000', 'test', 204, 2),
(30, '2019-11-22 08:39:01', '220000', 'test', 205, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Dương Tấn Lợi', '0774025807', 'loiduong0511', 'aaaa'),
(12, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(13, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(14, 'ABCD XYZ', '012345678', 'abc@gmail.com', 'Khong co'),
(15, 'XYZ ABC', '087654321', 'xyz@gmail.com', 'Khong dau'),
(16, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(17, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(18, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12'),
(19, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12'),
(20, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12'),
(21, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12'),
(22, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12'),
(23, 'Tuấn mập', '0902525148', 'anhtoan@gmail.com', 'Phú nhuận'),
(24, 'Dương Tấn Lợi', '0774025807', 'anhtoan@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(25, 'Nguyễn Anh toàn', '0123456789', 'anhtoan@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(26, 'Dương Tấn Lợi', '0123456789', 'loi1@gmail.com', 'Quận 12'),
(27, 'Dương Tấn Lợi', '0774025807', 'loi1@gmail.com', 'q7'),
(28, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(29, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(30, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(31, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(32, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(33, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(34, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(35, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(36, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(37, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(38, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(39, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(40, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(41, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(42, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(43, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(44, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(45, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(46, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(47, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(48, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(49, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(50, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(51, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(52, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(53, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(54, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(55, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(56, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(57, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(58, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(59, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(60, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(61, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(62, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(63, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(64, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(65, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(66, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(67, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(68, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(69, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(70, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(71, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(72, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(73, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(74, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(75, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(76, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(77, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(78, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(79, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(80, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(81, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(82, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(83, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(84, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(85, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(86, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(87, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(88, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(89, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(90, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(91, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(92, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(93, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(94, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(95, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(96, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(97, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(98, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(99, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(100, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(101, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(102, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(103, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(104, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(105, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(106, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(107, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(108, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(109, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(110, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(111, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(112, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(113, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(114, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(115, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(116, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(117, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(118, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(119, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(120, 'Tuấn mập', '0774025809', 'duchuy21@gmail.com', '89 Nguyễn Oanh, Quận phú nhuận'),
(121, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(122, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(123, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(124, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(125, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(126, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(127, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(128, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(129, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(130, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(131, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(132, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(133, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(134, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(135, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(136, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(137, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(138, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(139, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(140, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(141, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(142, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(143, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(144, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(145, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(146, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(147, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(148, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(149, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(150, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(151, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(152, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(153, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(154, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(155, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(156, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(157, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(158, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(159, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(160, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(161, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(162, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(163, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(164, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(165, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(166, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(167, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(168, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(169, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(170, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(171, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(172, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(173, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(174, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(175, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(176, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(177, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(178, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(179, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(180, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(181, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(182, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(183, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(184, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(185, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(186, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(187, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(188, 'Tuấn mập', '0774025809', 'duchuy11@gmail.com', 'q7'),
(189, 'ABC', '0123789456', 'abc@gmail.com', 'abc 2798'),
(190, 'ABC1111', '0123789456', 'abc@gmail.com', 'abc 2798'),
(191, 'Dương Tấn Lợi ag', '0774025800', 'loi1@gmail.com', 'Quận phú nhuận'),
(192, 'Dương Tấn Lợi ag', '0774025809', 'loi1@gmail.com', 'Phú nhuận'),
(193, 'Dương Tấn Lợi', '0123456789', 'loi1@gmail.com', 'Quận 12'),
(194, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(195, 'Nguyễn Anh toàn', '0774025807', 'loi@gmail.com', 'q7'),
(196, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(197, 'Dương Tấn Lợi', '0774025807', 'loi@gmail.com', 'q7'),
(198, 'Dương Huy Lĩnh', '0774025858', 'huylinh@gmail.com', 'Belleza Q7'),
(199, 'Lê minh nhơn', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(200, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(201, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(202, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(203, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(204, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12'),
(205, 'Dương Tấn Lợi', '0774025807', 'loi2@gmail.com', 'Quận 12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichchay`
--

CREATE TABLE `lichchay` (
  `id` int(10) UNSIGNED NOT NULL,
  `Gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTuyen` int(10) UNSIGNED NOT NULL,
  `idXe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichchay`
--

INSERT INTO `lichchay` (`id`, `Gia`, `idTuyen`, `idXe`) VALUES
(1, '220000', 1, 1),
(2, '250000', 5, 1),
(3, '220000', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuve`
--

CREATE TABLE `lichsuve` (
  `id` int(10) UNSIGNED NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNV` int(10) UNSIGNED NOT NULL,
  `idVe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_10_02_003623_ben', 1),
(21, '2019_10_02_003635_tuyen', 1),
(22, '2019_10_02_003636_sodoghe', 1),
(23, '2019_10_02_003637_xe', 1),
(24, '2019_10_02_003638_lichchay', 1),
(25, '2019_10_02_003639_chitietghe', 1),
(26, '2019_10_02_003640_khachhang', 1),
(27, '2019_10_02_003641_hinhthucthanhtoan', 1),
(28, '2019_10_02_003642_hoadon', 1),
(29, '2019_10_02_003643_ve', 1),
(30, '2019_10_02_003644_chucvu', 1),
(31, '2019_10_02_003645_nhanvien', 1),
(32, '2019_10_02_003646_lichsuve', 1),
(33, '2019_10_02_003722_chitietve', 1),
(34, '2019_10_02_003948_nv_tuyen', 1),
(35, '2019_10_30_153236_ct_hoadon', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCV` int(10) UNSIGNED NOT NULL,
  `idUsers` int(10) UNSIGNED NOT NULL,
  `GioiTinh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TinhTrang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `HoTen`, `SDT`, `Email`, `DiaChi`, `NgaySinh`, `idCV`, `idUsers`, `GioiTinh`, `TinhTrang`) VALUES
(1, 'Trần Minh Tuấn', '0774025555', 'aaa@gmail.com', 'aaa', '1', 1, 2, 'Nam', NULL),
(2, 'Đức Huy', '0774201515', 'duchuy11@gmail.com', 'Quận phú nhuận', '1998-02-07', 2, 3, 'Nam', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nv_tuyen`
--

CREATE TABLE `nv_tuyen` (
  `idNV` int(10) UNSIGNED NOT NULL,
  `idTuyen` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sodoghe`
--

CREATE TABLE `sodoghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenSoDo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDong` int(11) NOT NULL,
  `SoCot` int(11) NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sodoghe`
--

INSERT INTO `sodoghe` (`id`, `TenSoDo`, `SoDong`, `SoCot`, `UrlHinh`) VALUES
(1, 'Xe Limousine', 15, 2, 'KQQx_giuongnam.png'),
(2, 'Xe giường nằm', 15, 2, 'Ntcw_giuongnam.png'),
(3, 'Xe phòng vip', 7, 2, 'X1wd_xephong.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `urlHinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `TieuDe`, `NoiDung`, `urlHinh`) VALUES
(1, 'Sạt lỡ đèo bảo  lộc', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'zwN9_blackberry-key2-4-600x600.jpg'),
(2, 'Sạt lỡ đèo bảo  lộc', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'MjMw_dell-inspiron-3576-c5i3132w-vv-ch-1-1-600x600.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen`
--

CREATE TABLE `tuyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenTuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBenDi` int(10) UNSIGNED NOT NULL,
  `idBenDen` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyen`
--

INSERT INTO `tuyen` (`id`, `TenTuyen`, `idBenDi`, `idBenDen`) VALUES
(1, 'TPHCM - DL', 1, 2),
(3, 'TPHCM - PT', 1, 3),
(4, 'TPHCM - CT', 1, 4),
(5, 'DL - TPHCM', 2, 1),
(6, 'DL - CT', 2, 4),
(7, 'PT - DL', 3, 2),
(8, 'PT - TPHCM', 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idGroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlHinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `idGroup`, `urlHinh`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'loiduong', '1', 'Admin', 'hutA_IMG_3357.png', NULL, NULL, '2019-10-03 19:03:53'),
(2, 'tung', '$2y$10$sVabARZCwIxadrNAyvsHdejutXYhYV336iSKUqHeYI6aDMmSpRBv6', 'Users', 'eBVA_70386599_2136513466458467_4425911876668358656_n.jpg', '', '2019-10-01 23:20:32', '2019-10-03 19:04:41'),
(3, 'tuanmap2', '$2y$10$ydBI1OwjSvM50PPwhrfrW.w1nZUwIjZ/mjgEnU52.Xt6ydE/z8p52', 'Users', 'skbR_70386599_2136513466458467_4425911876668358656_n.jpg', '', '2019-10-01 23:20:32', '2019-10-03 19:09:00'),
(13, 'alicenga1', '$2y$10$2myyMySfI754greFpopq5OyJBHC5p0iDzmC6weEFtNMvrgomeMyfm', 'Users', '0BZS_70013352_10158192325918974_3902618163744866304_n.png', NULL, '2019-10-03 18:52:00', '2019-10-21 08:11:15'),
(14, 'tuanmap1', '$2y$10$tDxem8gJ/QmTew0ZewrImO7nsauUxg5D8l1xuJrLCuBJPRPNQSdXq', 'Users', 'GCD3_70008466_2308742956045479_4209133319482245120_n.jpg', NULL, '2019-10-03 19:08:44', '2019-10-03 19:08:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayDatVe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKH` int(10) UNSIGNED NOT NULL,
  `idLC` int(10) UNSIGNED NOT NULL,
  `idHD` int(10) UNSIGNED NOT NULL,
  `NgayKhoiHanh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GioKhoiHanh` time(6) DEFAULT NULL,
  `CREATE_AT` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `NgayDatVe`, `idKH`, `idLC`, `idHD`, `NgayKhoiHanh`, `GioKhoiHanh`, `CREATE_AT`) VALUES
(4, '2019-11-13 11:27:54', 23, 2, 5, '2020-12-20', NULL, NULL),
(5, '2019-11-14 02:16:41', 24, 3, 6, '2019-11-14', NULL, NULL),
(6, '2019-11-14 02:45:48', 26, 3, 7, '2019-11-14', NULL, NULL),
(7, '2019-11-14 07:49:17', 27, 3, 8, '2019-11-14', NULL, NULL),
(8, '2019-11-15 01:44:39', 28, 3, 9, '2019-11-15', NULL, NULL),
(9, '2019-11-15 01:45:57', 29, 3, 10, '2019-11-15', NULL, NULL),
(10, '2019-11-15 01:47:49', 30, 3, 11, '2019-11-15', NULL, NULL),
(11, '2019-11-15 01:50:07', 31, 3, 12, '2019-11-15', NULL, NULL),
(12, '2019-11-15 01:51:05', 32, 3, 13, '2019-11-15', NULL, NULL),
(13, '2019-11-15 02:17:25', 186, 3, 14, '2019-11-15', NULL, NULL),
(14, '2019-11-15 02:23:47', 188, 3, 15, '2019-11-15', NULL, NULL),
(15, '2019-11-15 11:42:55', 189, 2, 16, '2019-11-25', NULL, NULL),
(16, '2019-11-15 11:49:00', 190, 2, 17, '2019-11-25', NULL, NULL),
(17, '2019-11-15 13:10:36', 191, 3, 18, '2019-11-15', NULL, NULL),
(18, '2019-11-15 13:29:36', 192, 3, 19, '2019-11-15', NULL, NULL),
(19, '2019-11-15 13:43:51', 195, 3, 20, '2019-11-15', NULL, NULL),
(20, '2019-11-15 13:49:49', 196, 3, 21, '2019-11-15', NULL, NULL),
(21, '2019-11-15 13:56:21', 197, 3, 22, '2019-11-15', NULL, NULL),
(22, '2019-11-15 13:58:40', 198, 3, 23, '2019-11-15', NULL, NULL),
(23, '2019-11-17 02:30:42', 199, 3, 24, '2019-11-17', NULL, NULL),
(24, '2019-11-22 07:41:48', 200, 3, 25, '2019-11-22', NULL, NULL),
(25, '2019-11-22 08:03:51', 201, 3, 26, '2019-11-22', NULL, NULL),
(26, '2019-11-22 08:04:33', 202, 3, 27, '2019-11-22', NULL, NULL),
(27, '2019-11-22 08:07:46', 203, 3, 28, '2019-11-22', NULL, NULL),
(28, '2019-11-22 08:09:40', 204, 3, 29, '2019-11-22', NULL, NULL),
(29, '2019-11-22 08:39:01', 205, 3, 30, '2019-11-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id` int(10) UNSIGNED NOT NULL,
  `BSXe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSoDoGhe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`id`, `BSXe`, `idSoDoGhe`) VALUES
(1, '51F - 151.55', 1),
(2, '51F - 999.99', 2),
(3, '51F - 612.45', 1),
(4, '51F - 777.77', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ben`
--
ALTER TABLE `ben`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietghe_idsodoghe_foreign` (`idSoDoGhe`);

--
-- Chỉ mục cho bảng `chitietve`
--
ALTER TABLE `chitietve`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ct_hoadon_id_hoadon_foreign` (`id_hoadon`),
  ADD KEY `ct_hoadon_idve_foreign` (`idVe`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_idkh_foreign` (`idKH`),
  ADD KEY `hoadon_idhttt_foreign` (`idHTTT`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichchay`
--
ALTER TABLE `lichchay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lichchay_idtuyen_foreign` (`idTuyen`),
  ADD KEY `lichchay_idxe_foreign` (`idXe`);

--
-- Chỉ mục cho bảng `lichsuve`
--
ALTER TABLE `lichsuve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lichsuve_idnv_foreign` (`idNV`),
  ADD KEY `lichsuve_idve_foreign` (`idVe`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhanvien_idcv_foreign` (`idCV`),
  ADD KEY `nhanvien_idusers_foreign` (`idUsers`);

--
-- Chỉ mục cho bảng `nv_tuyen`
--
ALTER TABLE `nv_tuyen`
  ADD PRIMARY KEY (`idNV`,`idTuyen`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`Email`);

--
-- Chỉ mục cho bảng `sodoghe`
--
ALTER TABLE `sodoghe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tuyen_idbendi_foreign` (`idBenDi`),
  ADD KEY `tuyen_idbenden_foreign` (`idBenDen`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ve_idkh_foreign` (`idKH`),
  ADD KEY `ve_idlc_foreign` (`idLC`),
  ADD KEY `ve_idhd_foreign` (`idHD`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xe_idsodoghe_foreign` (`idSoDoGhe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ben`
--
ALTER TABLE `ben`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chitietghe`
--
ALTER TABLE `chitietghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chitietve`
--
ALTER TABLE `chitietve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT cho bảng `lichchay`
--
ALTER TABLE `lichchay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lichsuve`
--
ALTER TABLE `lichsuve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sodoghe`
--
ALTER TABLE `sodoghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD CONSTRAINT `chitietghe_idsodoghe_foreign` FOREIGN KEY (`idSoDoGhe`) REFERENCES `sodoghe` (`id`);

--
-- Các ràng buộc cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_id_hoadon_foreign` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `ct_hoadon_idve_foreign` FOREIGN KEY (`idVe`) REFERENCES `ve` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_idhttt_foreign` FOREIGN KEY (`idHTTT`) REFERENCES `hinhthucthanhtoan` (`id`),
  ADD CONSTRAINT `hoadon_idkh_foreign` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `lichchay`
--
ALTER TABLE `lichchay`
  ADD CONSTRAINT `lichchay_idtuyen_foreign` FOREIGN KEY (`idTuyen`) REFERENCES `tuyen` (`id`),
  ADD CONSTRAINT `lichchay_idxe_foreign` FOREIGN KEY (`idXe`) REFERENCES `xe` (`id`);

--
-- Các ràng buộc cho bảng `lichsuve`
--
ALTER TABLE `lichsuve`
  ADD CONSTRAINT `lichsuve_idnv_foreign` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `lichsuve_idve_foreign` FOREIGN KEY (`idVe`) REFERENCES `ve` (`id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_idcv_foreign` FOREIGN KEY (`idCV`) REFERENCES `chucvu` (`id`),
  ADD CONSTRAINT `nhanvien_idusers_foreign` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD CONSTRAINT `tuyen_idbenden_foreign` FOREIGN KEY (`idBenDen`) REFERENCES `ben` (`id`),
  ADD CONSTRAINT `tuyen_idbendi_foreign` FOREIGN KEY (`idBenDi`) REFERENCES `ben` (`id`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_idhd_foreign` FOREIGN KEY (`idHD`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `ve_idkh_foreign` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `ve_idlc_foreign` FOREIGN KEY (`idLC`) REFERENCES `lichchay` (`id`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_idsodoghe_foreign` FOREIGN KEY (`idSoDoGhe`) REFERENCES `sodoghe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
