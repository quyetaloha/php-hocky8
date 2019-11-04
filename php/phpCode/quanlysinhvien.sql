-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 01:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `ID` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`ID`, `HoTen`, `NgaySinh`, `DiaChi`, `ChucVu`) VALUES
(100, 'Chu Nguyên Chương', '17/5/1990', 'Hà Nội', 'Trưởng phòng nhân sự'),
(101, 'Võ Tắc Thiên', '12/9/1993', 'Hà Nội', 'Phó trưởng phòng nhân sự'),
(102, 'Hoàng Xuân Quyết', '17/6/1997', 'Phủ Lý - Hà Nam', 'Giám đốc nhân sự');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `IDSinhVien` int(11) NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci,
  `Truong` text COLLATE utf8_unicode_ci,
  `ChuyenNganh` text COLLATE utf8_unicode_ci,
  `NamTotNghiep` text COLLATE utf8_unicode_ci,
  `ChungChi` text COLLATE utf8_unicode_ci,
  `Email` text COLLATE utf8_unicode_ci,
  `Diem` int(11) DEFAULT NULL,
  `ViTriUngTuyen` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`IDSinhVien`, `HoTen`, `Truong`, `ChuyenNganh`, `NamTotNghiep`, `ChungChi`, `Email`, `Diem`, `ViTriUngTuyen`) VALUES
(12, 'Trúc Anh Đài', 'Học viện công nghệ bưu chính viễn thông', 'Khoa học máy tính', '2013', 'Chứng chỉ PM', 'hayquaw1@gmail.com', 85, 'Project manager'),
(13, 'Trương Ngũ Hiệp', 'Đại học kỹ thuật mật mã', 'Kế Toán', '2016', 'Quản lý kế toán', 'hayquaw2@gmail.com', 98, 'Lập trình viên'),
(14, 'Lương Sơn Bá', 'Đại học kỹ thuật mật mã', 'Công nghệ thông tin', '2017', 'Công nghệ thông tin', 'ba123@gmail.com', 95, 'Kế toán'),
(15, 'Châu Dương Phong', 'Đại học bách khoa hà nội', 'Kế Toán', '2014', 'Quản lý kế toán', 'phog123@gmail.com', 70, 'Tester'),
(16, 'Quách Tĩnh', 'Đại học kỹ thuật mật mã', 'Công nghệ đa phương tiện', '2016', 'Quản lý kế toán', 'tinh123@gmail.com', 95, 'Kỹ sư đồ họa'),
(18, 'Hoàng Dung', 'Đại học kỹ thuật mật mã', 'Công nghệ thông tin', '2015', 'Quản lý kế toán', 'dung123@gmail.com', 80, 'Lập trình viên'),
(19, 'Dương Quá', 'Đại học Hà Nội', 'Công nghệ thông tin', '2016', 'Quản lý kế toán', 'qua123@gmail.com', 75, 'Lập trình viên'),
(20, 'Vương Trùng Dương', 'Đại học bách khoa hà nội', 'Kế Toán', '2016', 'Quản lý kế toán', 'duong123@gmail.com', 70, 'Kỹ sư đồ họa'),
(21, 'Doãn Chí Bình', 'Học viện công nghệ bưu chính viễn thông', 'Công nghệ thông tin', '2017', 'Quản lý kế toán', 'binh123@gmail.com', 80, 'Lập trình viên'),
(22, 'Tiểu Long Nữ', 'Đại học kỹ thuật mật mã', 'Kế Toán', '2016', 'Quản lý kế toán', 'nu123@gmail.com', 75, 'Lập trình viên'),
(23, 'Lý Mạc Sầu', 'Đại học kỹ thuật mật mã', 'Công nghệ đa phương tiện', '2014', 'Quản lý kế toán', 'sau123@gmail.com', 70, 'Kỹ sư đồ họa'),
(24, 'Quách Tương', 'Đại học Hà Nội', 'Kế Toán', '2016', 'Quản lý kế toán', 'tuong123@gmail.com', 6, 'Lập trình viên'),
(26, 'Nhạc Bất Quần', 'Đại học quốc gia hà nội', 'Hệ thống thông tin', '2018', 'TOEIC 700', 'quan123@gmail.com', 70, 'Kế toán'),
(27, 'Lệnh Hồ Xung', 'Đại học Hà Nội', 'Công nghệ thông tin', '2016', 'Chứng chỉ quản lý', 'hoxung@gmail.com', 65, 'Project manager'),
(28, 'Lâm Bình Chi', 'Học viện công nghệ bưu chính viễn thông', 'Kế toán', '2015', 'Chứng chỉ quản lý', 'binhchi@gmail.com', 65, 'Lập trình viên'),
(29, 'Nhậm Doanh Doanh', 'Đại học thương mại', 'Công nghệ đa phương tiện', '2014', 'Chứng chỉ quản lý', 'doanhdoanh@gmail.com', 70, 'Tester'),
(30, 'Nhậm Ngã   Hành', 'Đại học thương mại', 'Công nghệ thông tin', '2016', 'Chứng chỉ quản lý', 'ngahanh@gmail.com', 80, 'Lập trình viên'),
(31, 'Tả Lãnh Thiền', 'Đại học thương mại', 'Kế toán', '2014', 'Chứng chỉ quản lý', 'lanhthien@gmail.com', 65, 'Tester'),
(32, 'Điền Bá Quan', 'Đại học bách khoa hà nội', 'Kế toán', '2016', 'Chứng chỉ quản lý', 'baquan@gmail.com', 80, 'Project manager'),
(33, 'Nhạc Linh San', 'Đại học Hà Nội', 'Công nghệ đa phương tiện', '2017', 'Chứng chỉ quản lý', 'sansan@gmail.com', 65, 'Project analysis'),
(34, 'Chương Vô Kỵ', 'Đại học thương mại', 'Kế toán', '2014', 'Chứng chỉ quản lý', 'kyky@gmail.com', 95, 'Project analysis'),
(35, 'Kim Mao Sư Vương', 'Học viện công nghệ bưu chính viễn thông', 'Công nghệ thông tin', '2016', 'Chứng chỉ quản lý', 'vuong@gmail.com', 65, 'Project manager'),
(36, 'Triệu Mẫn', 'Đại học thương mại', 'Kế toán', '2015', 'Chứng chỉ quản lý', 'voky@gmail.com', 65, 'Project analysis'),
(37, 'Chu Chỉ Nhược', 'Đại học thương mại', 'Kế toán', '2016', 'Chứng chỉ quản lý', 'chinhuoc@gmail.com', 95, 'Kế toán'),
(38, 'Chương Thúy Sơn', 'Học viện bưu chính viễn thông', 'Công nghệ thông tin', '2013', 'Toeic 600', 'voky@gmail.com', 80, 'Tester'),
(50, 'Đông Phương Bất Bại', 'Học viện tài chính', 'Công nghệ thông tin', '2011', 'chứng chỉ ielt', 'bai123@gmail.com', 70, 'Kỹ sư đồ họa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `quyen` text COLLATE utf8_unicode_ci NOT NULL,
  `IDSoHuu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `quyen`, `IDSoHuu`) VALUES
(10, 'quyetdaik', '12345', 'admin', 102),
(11, 'hoangxuanquyet', '12345', 'sinhvien', 14),
(12, 'ptit2018', '12345678', 'sinhvien', 13),
(13, 'ptit2019', '12345678', 'sinhvien', 12),
(14, 'lythaito', 'to123', 'admin', 101),
(15, 'chunguyenchuong', 'chuong123', 'admin', 100),
(19, 'iloveyou', '123', 'sinhvien', 50),
(21, 'helllo', '111', 'sinhvien', 51);

-- --------------------------------------------------------

--
-- Table structure for table `vitri`
--

CREATE TABLE `vitri` (
  `IDViTri` int(11) NOT NULL,
  `ten` text COLLATE utf8_unicode_ci,
  `NoiLamViec` text COLLATE utf8_unicode_ci,
  `MoTa` text COLLATE utf8_unicode_ci,
  `SoLuongChiTieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vitri`
--

INSERT INTO `vitri` (`IDViTri`, `ten`, `NoiLamViec`, `MoTa`, `SoLuongChiTieu`) VALUES
(10, 'Lập trình viên', 'Bắc Kinh-Trung Quốc', 'Lập trình phần mềm', 4),
(11, 'Kế toán', 'London-Anh Quốc', 'Tính toán sổ sách cho công ty', 2),
(12, 'Project manager', 'Cầu Giấy - Hà Nội', 'Quản lý,điều tiết dự án phần mềm', 2),
(13, 'Tester', 'NewYork - United America', 'Kiểm tra chất lượng phần mềm', 3),
(14, 'Kỹ sư đồ họa', 'Hà Nội - Việt Nam', 'Thiết kế chỉnh sửa video', 2),
(20, 'Project analysis', 'Paris-Pháp', 'Phân tích dự án phần mềm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`IDSinhVien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`IDViTri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quanly`
--
ALTER TABLE `quanly`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `IDSinhVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vitri`
--
ALTER TABLE `vitri`
  MODIFY `IDViTri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
