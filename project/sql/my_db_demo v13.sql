-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 06:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Ma_bn` int(11) NOT NULL,
  `Ten_bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link_bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `Ma_dm` int(11) NOT NULL,
  `Ten_dm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_dm_cha` int(11) DEFAULT '0',
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`Ma_dm`, `Ten_dm`, `Ma_dm_cha`, `Trang_thai`) VALUES
(1, 'Laptop SAMSUNG', 0, 1),
(2, 'Laptop DELL', 0, 1),
(3, 'Iphone 10', 0, 1),
(4, 'ewewew', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `Ma_hd` int(11) NOT NULL,
  `Ma_kh` int(11) DEFAULT NULL,
  `Tong_tien` decimal(10,2) DEFAULT NULL,
  `Tong_so_luong` int(11) DEFAULT NULL,
  `Ngay_tao` date DEFAULT NULL,
  `Phuong_TT` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phuong_GH` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ten_nhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email_nhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai_nhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ghi_chu` text COLLATE utf8_unicode_ci,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`Ma_hd`, `Ma_kh`, `Tong_tien`, `Tong_so_luong`, `Ngay_tao`, `Phuong_TT`, `Phuong_GH`, `Ten_nhan`, `Email_nhan`, `Dien_thoai_nhan`, `Dia_chi_nhan`, `Ghi_chu`, `Trang_thai`) VALUES
(1, 1, '30000.00', 3, '2017-08-18', 'Thanh toÃ¡n táº¡i cá»§a hÃ ng', 'Nháº­n hÃ ng táº¡i cá»§a hÃ ng', 'Nguyá»…n VÄƒn Huy', 'huy@gmail.com', '0165457644', 'ChÆ°a biáº¿t á»Ÿ Ä‘Ã¢u', 'Ghi chÃº cho vui', 1),
(2, 1, '10000.00', 4, '2017-08-18', 'Thanh toÃ¡n táº¡i cá»§a hÃ ng', 'Nháº­n hÃ ng táº¡i cá»§a hÃ ng', 'Nguyá»…n VÄƒn Huy', 'huy@gmail.com', '0165457644', 'ChÆ°a biáº¿t á»Ÿ Ä‘Ã¢u', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minima', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_ct`
--

CREATE TABLE `hoa_don_ct` (
  `Ma_hd` int(11) DEFAULT NULL,
  `Ma_sp` int(11) DEFAULT NULL,
  `So_luong` int(11) DEFAULT NULL,
  `Gia_sp` decimal(10,2) DEFAULT NULL,
  `Gia_km` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don_ct`
--

INSERT INTO `hoa_don_ct` (`Ma_hd`, `Ma_sp`, `So_luong`, `Gia_sp`, `Gia_km`) VALUES
(1, 14, 1, '25000.00', '0.00'),
(1, 13, 1, '4000.00', '0.00'),
(1, 12, 1, '7000.00', '1000.00'),
(2, 13, 2, '4000.00', '0.00'),
(2, 12, 2, '7000.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Ma_kh` int(11) NOT NULL,
  `Ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngay_tao` date DEFAULT NULL,
  `Mat_khau` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_kh`, `Ten_kh`, `Email`, `Dien_thoai`, `Dia_chi`, `Facebook`, `Ngay_tao`, `Mat_khau`, `Trang_thai`) VALUES
(1, 'Nguyá»…n VÄƒn Huy', 'huy@gmail.com', '0165457644', 'ChÆ°a biáº¿t á»Ÿ Ä‘Ã¢u', 'http://facebook.com/itvnaost', '2017-08-17', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'Nguyá»…n Huy HoÃ ng', 'hoang@gmail.com', '22179465', 'ChÆ° cÃ³ chá»— á»Ÿ nÃ o', 'http://facebook.com/itvnaost', '2017-08-17', '96e79218965eb72c92a549dd5a330112', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quan_tri`
--

CREATE TABLE `quan_tri` (
  `Ma_qt` int(11) NOT NULL,
  `Ten_dang_nhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Quyen_han` smallint(1) DEFAULT '3',
  `Ngay_tao` date DEFAULT NULL,
  `Mat_khau` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quan_tri`
--

INSERT INTO `quan_tri` (`Ma_qt`, `Ten_dang_nhap`, `Email`, `Dien_thoai`, `Quyen_han`, `Ngay_tao`, `Mat_khau`, `Trang_thai`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567890', 1, '2017-08-08', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `Ma_sp` int(11) NOT NULL,
  `Ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_dm` int(11) NOT NULL,
  `Anh_ap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mo_ta` text COLLATE utf8_unicode_ci,
  `Gia_sp` decimal(10,2) DEFAULT NULL,
  `Gia_km` decimal(10,2) DEFAULT NULL,
  `Ngay_tao` date DEFAULT NULL,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`Ma_sp`, `Ten_sp`, `Ma_dm`, `Anh_ap`, `Mo_ta`, `Gia_sp`, `Gia_km`, `Ngay_tao`, `Trang_thai`) VALUES
(2, 'Galaxy note 10', 4, 'index3banner.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '10000000.00', '0.00', '2017-07-28', 1),
(7, 'dfdfdfdf', 4, 'index3banner2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '11.00', '1.00', '0000-00-00', 0),
(10, 'dfdfdfdf dfdfdf', 4, 'index3banner2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '111.00', '11.00', '0000-00-00', 1),
(11, 'Tata-Salt', 3, '1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '5000.00', '3000.00', '0000-00-00', 1),
(12, 'Parryss-Sugar', 4, '4.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '7000.00', '1000.00', '0000-00-00', 0),
(13, 'Aashirvaad-Atta', 2, '1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo reiciendis voluptatem asperiores, accusantium beatae explicabo officia quaerat minus quam minima perferendis aliquam, est quisquam magnam, consequatur quibusdam dolor dolorem. Impedit!', '4000.00', '0.00', '0000-00-00', 1),
(14, 'Báº¡n Ä‘Ã£ chuyá»ƒn sang cháº¿ Ä‘á»™ áº©n danh', 3, '5.png', 'Giá» Ä‘Ã¢y, báº¡n cÃ³ thá»ƒ duyá»‡t web riÃªng tÆ° vÃ  ngÆ°á»i khÃ¡c sá»­ dá»¥ng thiáº¿t bá»‹ nÃ y sáº½ khÃ´ng tháº¥y hoáº¡t Ä‘á»™ng cá»§a báº¡n. Tuy nhiÃªn, tÃ i nguyÃªn Ä‘Ã£ táº£i xuá»‘ng vÃ  dáº¥u trang sáº½ Ä‘Æ°á»£c lÆ°u. TÃ¬m hiá»ƒu thÃªm', '25000.00', '0.00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `Ma_tt` int(11) NOT NULL,
  `Ten_tt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_tt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `No_dung` text COLLATE utf8_unicode_ci,
  `Trang_thai` smallint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Ma_bn`),
  ADD UNIQUE KEY `Ten_bn` (`Ten_bn`),
  ADD UNIQUE KEY `Anh_bn` (`Anh_bn`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`Ma_dm`),
  ADD UNIQUE KEY `Ten_dm` (`Ten_dm`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`Ma_hd`),
  ADD KEY `FK_hoa_don_ma_kh` (`Ma_kh`);

--
-- Indexes for table `hoa_don_ct`
--
ALTER TABLE `hoa_don_ct`
  ADD KEY `FK_hoa_don_ct_ma_hd` (`Ma_hd`),
  ADD KEY `FK_hoa_don_ct_ma_sp` (`Ma_sp`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_kh`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `quan_tri`
--
ALTER TABLE `quan_tri`
  ADD PRIMARY KEY (`Ma_qt`),
  ADD UNIQUE KEY `Ten_dang_nhap` (`Ten_dang_nhap`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`Ma_sp`),
  ADD UNIQUE KEY `Ten_sp` (`Ten_sp`),
  ADD KEY `FK_san_phan_ma_dm` (`Ma_dm`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`Ma_tt`),
  ADD UNIQUE KEY `Ten_tt` (`Ten_tt`),
  ADD UNIQUE KEY `Anh_tt` (`Anh_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Ma_bn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `Ma_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `Ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `Ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quan_tri`
--
ALTER TABLE `quan_tri`
  MODIFY `Ma_qt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `Ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `Ma_tt` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `FK_hoa_don_ma_kh` FOREIGN KEY (`Ma_kh`) REFERENCES `khach_hang` (`Ma_kh`);

--
-- Constraints for table `hoa_don_ct`
--
ALTER TABLE `hoa_don_ct`
  ADD CONSTRAINT `FK_hoa_don_ct_ma_hd` FOREIGN KEY (`Ma_hd`) REFERENCES `hoa_don` (`Ma_hd`),
  ADD CONSTRAINT `FK_hoa_don_ct_ma_sp` FOREIGN KEY (`Ma_sp`) REFERENCES `san_pham` (`Ma_sp`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_san_phan_ma_dm` FOREIGN KEY (`Ma_dm`) REFERENCES `danh_muc` (`Ma_dm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `links` (
  `Id_link` int(11) PRIMARY KEY DEFAULT NULL AUTO_INCREMENT,
  `Ten_link` int(11) DEFAULT NULL,
  `link` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `quan_tri_link` (
  `Id_link` int(11) DEFAULT NULL,
  `Ma_qt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
