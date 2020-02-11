-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 05:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devfithou_quanlychamcong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `iMa_canbo` int(11) NOT NULL,
  `iMa_DTC` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_DTM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTen_Canbo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sNgaySinh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sGioiTinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMa_ngach` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sChucDanh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sNgayVeTrg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sNgayveTrgThuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_loai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`iMa_canbo`, `iMa_DTC`, `iMa_DTM`, `sTen_Canbo`, `sNgaySinh`, `sGioiTinh`, `sMa_ngach`, `sChucDanh`, `sNgayVeTrg`, `sNgayveTrgThuc`, `iMa_loai`) VALUES
(1, '1', '1', 'Nguyễn Văn Trung', '04/06/1998', 'Nam', '', '', '', '', ''),
(2, '', '', 'Mạnh Hùng', '05/06/1998', 'Nam', '', '', '', '', ''),
(3, '', '', 'Trần Mai Hiền', '04/07/1998', 'Nữ', '', '', '', '', ''),
(4, '', '', 'Nguyễn Minh Cường', '04/06/1999', 'Nam', '', '', '', '', ''),
(5, '', '', 'Vũ Đức Anh', '04/06/1998', 'Nam', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_chucvu`
--

CREATE TABLE `tbl_canbo_chucvu` (
  `iMa_canbo` int(11) NOT NULL,
  `iMa_donvi` int(11) NOT NULL,
  `iMa_donvi_quanly` int(11) DEFAULT NULL,
  `iMa_chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_canbo_chucvu`
--

INSERT INTO `tbl_canbo_chucvu` (`iMa_canbo`, `iMa_donvi`, `iMa_donvi_quanly`, `iMa_chucvu`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 2, NULL, 1),
(4, 1, NULL, 1),
(5, 2, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chucnang`
--

CREATE TABLE `tbl_chucnang` (
  `ma_chucnang` int(10) NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maquyen` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chucnang`
--

INSERT INTO `tbl_chucnang` (`ma_chucnang`, `route`, `maquyen`) VALUES
(9, 'Welcome', 2),
(10, 'danhsachsukien', 2),
(11, 'xacnhan', 2),
(12, 'chamcongdonvi', 2),
(13, 'chamcongdonvi/chitiet', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chucvu`
--

CREATE TABLE `tbl_chucvu` (
  `iMa_chucvu` int(11) NOT NULL,
  `sTen_chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTen_chucvu_vt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chucvu`
--

INSERT INTO `tbl_chucvu` (`iMa_chucvu`, `sTen_chucvu`, `sTen_chucvu_vt`) VALUES
(1, 'A', ''),
(2, 'B', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dkngay`
--

CREATE TABLE `tbl_dkngay` (
  `iMa_canbo` int(11) NOT NULL,
  `sNgayDK` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMa_HinhThuc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donvi`
--

CREATE TABLE `tbl_donvi` (
  `iMa_donvi` int(11) NOT NULL,
  `sTen_donvi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTen_donvi_vt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_donvi`
--

INSERT INTO `tbl_donvi` (`iMa_donvi`, `sTen_donvi`, `sTen_donvi_vt`) VALUES
(1, 'Công nghệ thông tin', ''),
(2, 'Công nghệ sinh học', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hinhthuc`
--

CREATE TABLE `tbl_hinhthuc` (
  `sMa_HinhThuc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTen_HT` int(11) NOT NULL,
  `iMa_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaibienche`
--

CREATE TABLE `tbl_loaibienche` (
  `iMa_loai` int(11) NOT NULL,
  `sTen_loai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_loaibienche`
--

INSERT INTO `tbl_loaibienche` (`iMa_loai`, `sTen_loai`) VALUES
(1581349841, 'Biên chế 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngaynghi_nam`
--

CREATE TABLE `tbl_ngaynghi_nam` (
  `iMa_canbo` int(11) NOT NULL,
  `sNam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iNgayPhep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `iMa_Quyen` int(11) NOT NULL,
  `sTen_Quyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`iMa_Quyen`, `sTen_Quyen`) VALUES
(1, 'admin'),
(2, 'Cán bộ khoa'),
(3, 'Công nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sukien`
--

CREATE TABLE `tbl_sukien` (
  `iMa_SuKien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_Taikhoan` int(11) NOT NULL,
  `sTen_Sukien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTG_BatDau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTG_KetThuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sukien`
--

INSERT INTO `tbl_sukien` (`iMa_SuKien`, `iMa_Taikhoan`, `sTen_Sukien`, `sTG_BatDau`, `sTG_KetThuc`) VALUES
('1580869328201', 1, 'Trần Mạnh Hùng chiếm thế giới', '05/02/2020', '05/02/2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sukien_canbo`
--

CREATE TABLE `tbl_sukien_canbo` (
  `iMa_sukien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_canbo` int(11) NOT NULL,
  `sTrangThai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sukien_canbo`
--

INSERT INTO `tbl_sukien_canbo` (`iMa_sukien`, `iMa_canbo`, `sTrangThai`) VALUES
('1580869328201', 1, 'Chờ xác nhận'),
('1580869328201', 4, 'Chờ xác nhận');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `iMa_TK` int(11) NOT NULL,
  `sTen_TK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMatKhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_Quyen` int(11) NOT NULL,
  `iMa_canbo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`iMa_TK`, `sTen_TK`, `sMatKhau`, `iMa_Quyen`, `iMa_canbo`) VALUES
(1, 'Admin', '356a192b7913b04c54574d18c28d46e6395428ab', 1, 0),
(2, 'Hung', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 0),
(3, 'Hien', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 0),
(4, 'Cuong', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 2),
(5, 'Duc Anh', '356a192b7913b04c54574d18c28d46e6395428ab', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`iMa_canbo`);

--
-- Indexes for table `tbl_canbo_chucvu`
--
ALTER TABLE `tbl_canbo_chucvu`
  ADD PRIMARY KEY (`iMa_canbo`,`iMa_donvi`,`iMa_chucvu`),
  ADD KEY `iMa_donvi` (`iMa_donvi`),
  ADD KEY `iMa_chucvu` (`iMa_chucvu`);

--
-- Indexes for table `tbl_chucnang`
--
ALTER TABLE `tbl_chucnang`
  ADD PRIMARY KEY (`ma_chucnang`),
  ADD KEY `maquyen` (`maquyen`);

--
-- Indexes for table `tbl_chucvu`
--
ALTER TABLE `tbl_chucvu`
  ADD PRIMARY KEY (`iMa_chucvu`);

--
-- Indexes for table `tbl_dkngay`
--
ALTER TABLE `tbl_dkngay`
  ADD PRIMARY KEY (`iMa_canbo`),
  ADD KEY `iMa_HinhThuc` (`sMa_HinhThuc`);

--
-- Indexes for table `tbl_donvi`
--
ALTER TABLE `tbl_donvi`
  ADD PRIMARY KEY (`iMa_donvi`);

--
-- Indexes for table `tbl_hinhthuc`
--
ALTER TABLE `tbl_hinhthuc`
  ADD PRIMARY KEY (`sMa_HinhThuc`),
  ADD KEY `iMa_loai` (`iMa_loai`);

--
-- Indexes for table `tbl_loaibienche`
--
ALTER TABLE `tbl_loaibienche`
  ADD PRIMARY KEY (`iMa_loai`);

--
-- Indexes for table `tbl_ngaynghi_nam`
--
ALTER TABLE `tbl_ngaynghi_nam`
  ADD PRIMARY KEY (`iMa_canbo`,`sNam`);

--
-- Indexes for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`iMa_Quyen`);

--
-- Indexes for table `tbl_sukien`
--
ALTER TABLE `tbl_sukien`
  ADD PRIMARY KEY (`iMa_SuKien`),
  ADD KEY `iMa_Taikhoan` (`iMa_Taikhoan`);

--
-- Indexes for table `tbl_sukien_canbo`
--
ALTER TABLE `tbl_sukien_canbo`
  ADD PRIMARY KEY (`iMa_sukien`,`iMa_canbo`),
  ADD KEY `iMa_canbo` (`iMa_canbo`);

--
-- Indexes for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`iMa_TK`),
  ADD KEY `iMa_Quyen` (`iMa_Quyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  MODIFY `iMa_canbo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_chucnang`
--
ALTER TABLE `tbl_chucnang`
  MODIFY `ma_chucnang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `iMa_Quyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `iMa_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_canbo_chucvu`
--
ALTER TABLE `tbl_canbo_chucvu`
  ADD CONSTRAINT `tbl_canbo_chucvu_ibfk_1` FOREIGN KEY (`iMa_canbo`) REFERENCES `tbl_canbo` (`iMa_canbo`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chucvu_ibfk_2` FOREIGN KEY (`iMa_donvi`) REFERENCES `tbl_donvi` (`iMa_donvi`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chucvu_ibfk_3` FOREIGN KEY (`iMa_chucvu`) REFERENCES `tbl_chucvu` (`iMa_chucvu`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_chucnang`
--
ALTER TABLE `tbl_chucnang`
  ADD CONSTRAINT `tbl_chucnang_ibfk_1` FOREIGN KEY (`maquyen`) REFERENCES `tbl_quyen` (`iMa_Quyen`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_dkngay`
--
ALTER TABLE `tbl_dkngay`
  ADD CONSTRAINT `tbl_dkngay_ibfk_1` FOREIGN KEY (`iMa_canbo`) REFERENCES `tbl_canbo` (`iMa_canbo`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_dkngay_ibfk_2` FOREIGN KEY (`sMa_HinhThuc`) REFERENCES `tbl_hinhthuc` (`sMa_HinhThuc`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_hinhthuc`
--
ALTER TABLE `tbl_hinhthuc`
  ADD CONSTRAINT `tbl_hinhthuc_ibfk_1` FOREIGN KEY (`iMa_loai`) REFERENCES `tbl_loaibienche` (`iMa_loai`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_ngaynghi_nam`
--
ALTER TABLE `tbl_ngaynghi_nam`
  ADD CONSTRAINT `tbl_ngaynghi_nam_ibfk_1` FOREIGN KEY (`iMa_canbo`) REFERENCES `tbl_canbo` (`iMa_canbo`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_sukien`
--
ALTER TABLE `tbl_sukien`
  ADD CONSTRAINT `tbl_sukien_ibfk_1` FOREIGN KEY (`iMa_Taikhoan`) REFERENCES `tbl_taikhoan` (`iMa_TK`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_sukien_canbo`
--
ALTER TABLE `tbl_sukien_canbo`
  ADD CONSTRAINT `tbl_sukien_canbo_ibfk_1` FOREIGN KEY (`iMa_canbo`) REFERENCES `tbl_canbo` (`iMa_canbo`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_sukien_canbo_ibfk_2` FOREIGN KEY (`iMa_sukien`) REFERENCES `tbl_sukien` (`iMa_SuKien`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD CONSTRAINT `tbl_taikhoan_ibfk_1` FOREIGN KEY (`iMa_Quyen`) REFERENCES `tbl_quyen` (`iMa_Quyen`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
