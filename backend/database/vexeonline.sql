-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 05:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vexeonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `ben`
--

CREATE TABLE `ben` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenBen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ben`
--

INSERT INTO `ben` (`id`, `TenBen`) VALUES
(1, 'Thành phố Hồ Chí Minh'),
(2, 'Đà Lạt'),
(3, 'Phan Thiết'),
(4, 'Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `chitietghe`
--

CREATE TABLE `chitietghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `idSoDoGhe` int(10) UNSIGNED NOT NULL,
  `TenGhe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietghe`
--

INSERT INTO `chitietghe` (`id`, `idSoDoGhe`, `TenGhe`) VALUES
(1, 1, 'A1'),
(4, 1, 'A2'),
(5, 1, 'A3'),
(6, 1, 'A4');

-- --------------------------------------------------------

--
-- Table structure for table `chitietve`
--

CREATE TABLE `chitietve` (
  `idVe` int(10) UNSIGNED NOT NULL,
  `idGhe` int(10) UNSIGNED NOT NULL,
  `Gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenCV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `TenCV`) VALUES
(1, 'Nhân viên bán vé'),
(2, 'Nhân viên soát vé');

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenHTTT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`id`, `TenHTTT`) VALUES
(1, 'Chuyển khoản'),
(2, 'Thanh toán qua ví MOMO'),
(3, 'Thanh toán thẻ ngân hàng');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayDatVe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKH` int(10) UNSIGNED NOT NULL,
  `idHTTT` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `NgayDatVe`, `TongTien`, `GhiChu`, `idKH`, `idHTTT`) VALUES
(1, '02-10-2019', '220000', 'cho tao ghe dau tien', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Dương Tấn Lợi', '0774025807', 'loiduong0511', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `lichchay`
--

CREATE TABLE `lichchay` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayKhoiHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioKhoiHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTuyen` int(10) UNSIGNED NOT NULL,
  `idXe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lichchay`
--

INSERT INTO `lichchay` (`id`, `NgayKhoiHanh`, `GioKhoiHanh`, `Gia`, `idTuyen`, `idXe`) VALUES
(1, '02-10-2019', '8:00', '220000', 1, 1),
(2, '02-10-2019', '9:00', '220000', 1, 1),
(3, '2019-10-04', '01:00', '220000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lichsuve`
--

CREATE TABLE `lichsuve` (
  `id` int(10) UNSIGNED NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNV` int(10) UNSIGNED NOT NULL,
  `idVe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
(34, '2019_10_02_003948_nv_tuyen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
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
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `HoTen`, `SDT`, `Email`, `DiaChi`, `NgaySinh`, `idCV`, `idUsers`, `GioiTinh`, `TinhTrang`) VALUES
(1, 'Trần Minh Tuấn', '0774025555', 'aaa@gmail.com', 'aaa', '1', 1, 2, 'Nam', NULL),
(2, 'Đức Huy', '0774201515', 'duchuy11@gmail.com', 'Quận phú nhuận', '1998-02-07', 2, 3, 'Nam', NULL),
(3, 'Phạm Trần Phú', '0123456789', 'kelbinpham@gmail.com', 'Quận 12', '1998-02-07', 1, 13, 'Nam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nv_tuyen`
--

CREATE TABLE `nv_tuyen` (
  `idNV` int(10) UNSIGNED NOT NULL,
  `idTuyen` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sodoghe`
--

CREATE TABLE `sodoghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenSoDo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDong` int(11) NOT NULL,
  `SoCot` int(11) NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sodoghe`
--

INSERT INTO `sodoghe` (`id`, `TenSoDo`, `SoDong`, `SoCot`, `UrlHinh`) VALUES
(1, 'Xe Limousine', 15, 2, 'KQQx_giuongnam.png'),
(2, 'Xe giường nằm', 15, 2, 'Ntcw_giuongnam.png'),
(3, 'Xe phòng vip', 7, 2, 'X1wd_xephong.png');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `urlHinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `TieuDe`, `NoiDung`, `urlHinh`) VALUES
(1, 'Sạt lỡ đèo bảo  lộc', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'zwN9_blackberry-key2-4-600x600.jpg'),
(2, 'Sạt lỡ đèo bảo  lộc', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'MjMw_dell-inspiron-3576-c5i3132w-vv-ch-1-1-600x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tuyen`
--

CREATE TABLE `tuyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenTuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBenDi` int(10) UNSIGNED NOT NULL,
  `idBenDen` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuyen`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `idGroup`, `urlHinh`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'loiduong', '$2y$10$QyD5TL92NBqq6UIjuNL.NOHOdPFW8vjXTK2O4ndIPSPH2Q5p5cJmK', 'Admin', 'hutA_IMG_3357.png', NULL, NULL, '2019-10-03 19:03:53'),
(2, 'tung', '$2y$10$sVabARZCwIxadrNAyvsHdejutXYhYV336iSKUqHeYI6aDMmSpRBv6', 'Users', 'eBVA_70386599_2136513466458467_4425911876668358656_n.jpg', '', '2019-10-01 23:20:32', '2019-10-03 19:04:41'),
(3, 'tuanmap2', '$2y$10$ydBI1OwjSvM50PPwhrfrW.w1nZUwIjZ/mjgEnU52.Xt6ydE/z8p52', 'Users', 'skbR_70386599_2136513466458467_4425911876668358656_n.jpg', '', '2019-10-01 23:20:32', '2019-10-03 19:09:00'),
(13, 'alicenga1', '$2y$10$2myyMySfI754greFpopq5OyJBHC5p0iDzmC6weEFtNMvrgomeMyfm', 'Users', '0BZS_70013352_10158192325918974_3902618163744866304_n.png', NULL, '2019-10-03 18:52:00', '2019-10-21 08:11:15'),
(14, 'tuanmap1', '$2y$10$tDxem8gJ/QmTew0ZewrImO7nsauUxg5D8l1xuJrLCuBJPRPNQSdXq', 'Users', 'GCD3_70008466_2308742956045479_4209133319482245120_n.jpg', NULL, '2019-10-03 19:08:44', '2019-10-03 19:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayDatVe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKH` int(10) UNSIGNED NOT NULL,
  `idLC` int(10) UNSIGNED NOT NULL,
  `idHD` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`id`, `NgayDatVe`, `idKH`, `idLC`, `idHD`) VALUES
(2, '2019-10-04', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `id` int(10) UNSIGNED NOT NULL,
  `BSXe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSoDoGhe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`id`, `BSXe`, `idSoDoGhe`) VALUES
(1, '51F - 151.55', 1),
(2, '51F - 999.99', 2),
(3, '51F - 612.45', 1),
(4, '51F - 777.77', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ben`
--
ALTER TABLE `ben`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietghe_idsodoghe_foreign` (`idSoDoGhe`);

--
-- Indexes for table `chitietve`
--
ALTER TABLE `chitietve`
  ADD PRIMARY KEY (`idVe`,`idGhe`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_idkh_foreign` (`idKH`),
  ADD KEY `hoadon_idhttt_foreign` (`idHTTT`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichchay`
--
ALTER TABLE `lichchay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lichchay_idtuyen_foreign` (`idTuyen`),
  ADD KEY `lichchay_idxe_foreign` (`idXe`);

--
-- Indexes for table `lichsuve`
--
ALTER TABLE `lichsuve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lichsuve_idnv_foreign` (`idNV`),
  ADD KEY `lichsuve_idve_foreign` (`idVe`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhanvien_idcv_foreign` (`idCV`),
  ADD KEY `nhanvien_idusers_foreign` (`idUsers`);

--
-- Indexes for table `nv_tuyen`
--
ALTER TABLE `nv_tuyen`
  ADD PRIMARY KEY (`idNV`,`idTuyen`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`Email`);

--
-- Indexes for table `sodoghe`
--
ALTER TABLE `sodoghe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tuyen_idbendi_foreign` (`idBenDi`),
  ADD KEY `tuyen_idbenden_foreign` (`idBenDen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ve_idkh_foreign` (`idKH`),
  ADD KEY `ve_idlc_foreign` (`idLC`),
  ADD KEY `ve_idhd_foreign` (`idHD`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xe_idsodoghe_foreign` (`idSoDoGhe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ben`
--
ALTER TABLE `ben`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chitietghe`
--
ALTER TABLE `chitietghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lichchay`
--
ALTER TABLE `lichchay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lichsuve`
--
ALTER TABLE `lichsuve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sodoghe`
--
ALTER TABLE `sodoghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tuyen`
--
ALTER TABLE `tuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietghe`
--
ALTER TABLE `chitietghe`
  ADD CONSTRAINT `chitietghe_idsodoghe_foreign` FOREIGN KEY (`idSoDoGhe`) REFERENCES `sodoghe` (`id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_idhttt_foreign` FOREIGN KEY (`idHTTT`) REFERENCES `hinhthucthanhtoan` (`id`),
  ADD CONSTRAINT `hoadon_idkh_foreign` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`);

--
-- Constraints for table `lichchay`
--
ALTER TABLE `lichchay`
  ADD CONSTRAINT `lichchay_idtuyen_foreign` FOREIGN KEY (`idTuyen`) REFERENCES `tuyen` (`id`),
  ADD CONSTRAINT `lichchay_idxe_foreign` FOREIGN KEY (`idXe`) REFERENCES `xe` (`id`);

--
-- Constraints for table `lichsuve`
--
ALTER TABLE `lichsuve`
  ADD CONSTRAINT `lichsuve_idnv_foreign` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `lichsuve_idve_foreign` FOREIGN KEY (`idVe`) REFERENCES `ve` (`id`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_idcv_foreign` FOREIGN KEY (`idCV`) REFERENCES `chucvu` (`id`),
  ADD CONSTRAINT `nhanvien_idusers_foreign` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`);

--
-- Constraints for table `tuyen`
--
ALTER TABLE `tuyen`
  ADD CONSTRAINT `tuyen_idbenden_foreign` FOREIGN KEY (`idBenDen`) REFERENCES `ben` (`id`),
  ADD CONSTRAINT `tuyen_idbendi_foreign` FOREIGN KEY (`idBenDi`) REFERENCES `ben` (`id`);

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_idhd_foreign` FOREIGN KEY (`idHD`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `ve_idkh_foreign` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `ve_idlc_foreign` FOREIGN KEY (`idLC`) REFERENCES `lichchay` (`id`);

--
-- Constraints for table `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_idsodoghe_foreign` FOREIGN KEY (`idSoDoGhe`) REFERENCES `sodoghe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
