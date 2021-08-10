-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2021 lúc 06:32 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dausach`
--

CREATE TABLE `dausach` (
  `MaDauSach` varchar(255) NOT NULL,
  `MaTuaSach` varchar(255) NOT NULL,
  `MaDDC` int(11) NOT NULL,
  `NgonNgu` varchar(255) NOT NULL,
  `DichGia` varchar(255) NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `MaNXB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `MaDocGia` varchar(255) NOT NULL,
  `Ho` varchar(255) NOT NULL,
  `TenLot` varchar(255) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SoNha` varchar(255) NOT NULL,
  `Duong` varchar(255) NOT NULL,
  `Quan` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL,
  `NgayDangKi` datetime NOT NULL,
  `NgayHetHan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon`
--

CREATE TABLE `muon` (
  `MaMuon` varchar(255) NOT NULL,
  `MaDocGia` varchar(255) NOT NULL,
  `MaSach` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NgayMuon` datetime NOT NULL,
  `NgayHenTra` datetime NOT NULL,
  `NgayTra` datetime NOT NULL,
  `GhiChu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNXB` varchar(255) NOT NULL,
  `TenNXB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` varchar(255) NOT NULL,
  `TenSach` varchar(255) NOT NULL,
  `MaDauSach` varchar(255) NOT NULL,
  `TinhTrang` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTacGia` varchar(255) NOT NULL,
  `TenTacGia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `MaTheLoai` varchar(255) NOT NULL,
  `TenLoaiSach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuasach`
--

CREATE TABLE `tuasach` (
  `MaTuaSach` varchar(255) NOT NULL,
  `TenTuaSach` varchar(255) NOT NULL,
  `MaTacGia` varchar(255) NOT NULL,
  `MaTheLoai` varchar(255) NOT NULL,
  `NoiDungTomTat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dausach`
--
ALTER TABLE `dausach`
  ADD PRIMARY KEY (`MaDauSach`),
  ADD KEY `MaTuaSach` (`MaTuaSach`),
  ADD KEY `MaNXB` (`MaNXB`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`MaDocGia`);

--
-- Chỉ mục cho bảng `muon`
--
ALTER TABLE `muon`
  ADD PRIMARY KEY (`MaMuon`),
  ADD KEY `MaDocGia` (`MaDocGia`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `MaDauSach` (`MaDauSach`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTacGia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaLoaiSach`);

--
-- Chỉ mục cho bảng `tuasach`
--
ALTER TABLE `tuasach`
  ADD PRIMARY KEY (`MaTuaSach`),
  ADD KEY `MaTacGia` (`MaTacGia`),
  ADD KEY `MaTheLoai` (`MaTheLoai`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dausach`
--
ALTER TABLE `dausach`
  ADD CONSTRAINT `dausach_ibfk_1` FOREIGN KEY (`MaTuaSach`) REFERENCES `tuasach` (`MaTuaSach`),
  ADD CONSTRAINT `dausach_ibfk_2` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`);

--
-- Các ràng buộc cho bảng `muon`
--
ALTER TABLE `muon`
  ADD CONSTRAINT `muon_ibfk_1` FOREIGN KEY (`MaDocGia`) REFERENCES `docgia` (`MaDocGia`),
  ADD CONSTRAINT `muon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`MaDauSach`) REFERENCES `dausach` (`MaDauSach`);

--
-- Các ràng buộc cho bảng `tuasach`
--
ALTER TABLE `tuasach`
  ADD CONSTRAINT `tuasach_ibfk_1` FOREIGN KEY (`MaTacGia`) REFERENCES `tacgia` (`MaTacGia`),
  ADD CONSTRAINT `tuasach_ibfk_2` FOREIGN KEY (`MaTheLoai`) REFERENCES `theloai` (`MaLoaiSach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
