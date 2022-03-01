-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 07, 2021 lúc 02:01 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethdb`
--

DROP TABLE IF EXISTS `chitiethdb`;
CREATE TABLE IF NOT EXISTS `chitiethdb` (
  `id_hdb` int(11) UNSIGNED NOT NULL,
  `id_prod` int(11) UNSIGNED NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hdb`,`id_prod`),
  KEY `id_hdb` (`id_hdb`,`id_prod`),
  KEY `id_prod` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethdb`
--

INSERT INTO `chitiethdb` (`id_hdb`, `id_prod`, `tensp`, `gia`, `soluong`, `thanhtien`, `img`, `created_at`, `updated_at`) VALUES
(6, 4, 'Bộ Short Cho Bé', 285000, 1, 285000, '14.jpg¿v=1533207912.jpg', '2019-03-20 20:27:56', '2019-03-20 20:27:56'),
(14, 23, 'Váy Hoa Xinh Cho Bé ', 380000, 1, 380000, '10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg', '2019-03-21 03:24:59', '2019-03-21 03:24:59'),
(14, 27, 'Bộ Short Cá Voi', 210000, 1, 210000, '21.jpg¿v=1533208509.jpg', '2019-03-21 03:24:59', '2019-03-21 03:24:59'),
(15, 4, 'Bộ Short Cho Bé', 285000, 2, 570, '14.jpg¿v=1533207912.jpg', '2019-03-21 03:28:15', '2019-03-21 03:28:15'),
(16, 21, 'Váy Hai Dây Cột Nơ', 250000, 1, 250000, '07_3f690553-f80e-464a-be4b-8fd3104e079a.jpg¿v=1533207779.jpg', '2019-03-21 07:56:22', '2019-03-21 07:56:22'),
(19, 26, 'Váy Tầng Đính Ngọc', 200000, 1, 200000, '16.jpg¿v=1533208401.jpg', '2019-03-25 01:17:56', '2019-03-25 01:17:56'),
(20, 4, 'Bộ Short Cho Bé', 285000, 1, 285000, '14.jpg¿v=1533207912.jpg', '2019-04-04 08:50:20', '2019-04-04 08:50:20'),
(21, 20, 'Bộ PineApple Cho Bé ', 110000, 2, 220000, '06_5fec4508-a9d7-4aed-9700-a8c5323c99d7.jpg¿v=1533207789.jpg', '2019-04-05 08:14:16', '2019-04-05 08:14:16'),
(22, 23, 'Váy Hoa Xinh Cho Bé', 190000, 1, 190000, '10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg', '2019-04-17 01:07:10', '2019-04-17 01:07:10'),
(23, 3, 'Bộ Yếm Hoa ', 339000, 1, 339000, '02.jpg¿v=1533206884.jpg', '2019-04-21 07:01:18', '2019-04-21 07:01:18'),
(24, 46, 'Bộ Caro Trễ Vai', 200000, 2, 400000, '20.jpg', '2019-04-21 07:06:32', '2019-04-21 07:06:32'),
(25, 47, 'Áo Sơmi Thêu Hoa', 118000, 2, 236000, '25n.jpg', '2019-05-03 08:40:47', '2019-05-03 08:40:47'),
(26, 65, 'Bộ 2 dây quần caro', 120000, 1, 120000, '1n.PNG', '2019-05-05 18:29:21', '2019-05-05 18:29:21'),
(27, 47, 'Áo Sơmi Thêu Hoa', 118000, 1, 118000, '25n.jpg', '2019-05-05 18:32:41', '2019-05-05 18:32:41'),
(28, 66, 'Áoabc', 123456, 1, 123456, '2n.PNG', '2019-05-06 08:07:14', '2019-05-06 08:07:14'),
(29, 23, 'Váy Hoa Xinh Cho Bé', 190000, 1, 190000, '10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg', '2019-05-08 23:57:07', '2019-05-08 23:57:07'),
(29, 27, 'Bộ Short Cá Voi', 170000, 1, 170000, '21.jpg¿v=1533208509.jpg', '2019-05-08 23:57:07', '2019-05-08 23:57:07'),
(30, 23, 'Váy Hoa Xinh Cho Bé', 190000, 1, 190000, '10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg', '2021-01-06 03:35:24', '2021-01-06 03:35:24'),
(31, 26, 'Váy Tầng Đính Ngọc', 200000, 1, 200000, '16.jpg¿v=1533208401.jpg', '2021-01-06 09:38:44', '2021-01-06 09:38:44'),
(39, 26, 'Váy Tầng Đính Ngọc', 200000, 1, 200000, '16.jpg¿v=1533208401.jpg', '2021-01-06 09:58:48', '2021-01-06 09:58:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethdn`
--

DROP TABLE IF EXISTS `chitiethdn`;
CREATE TABLE IF NOT EXISTS `chitiethdn` (
  `id_hdn` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_hdn`,`id_prod`),
  KEY `id_hdn` (`id_hdn`,`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethdn`
--

INSERT INTO `chitiethdn` (`id_hdn`, `id_prod`, `soluong`, `gia`, `created_at`, `updated_at`) VALUES
(2, 30, 120, 150000, '2019-05-06 19:43:37', '2019-05-06 19:43:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_product_foreign` (`product`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `product`, `email`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 27, 'iyoona451@gmail.com', 'Đỗ Thùy Linh', 'Sản phẩm còn hàng không vậy?', '2019-03-06 01:05:13', '2019-03-06 01:05:13'),
(2, 27, 'thuylinh@gmail.com', 'Dư Phương Thảo', 'Sản phẩm đẹp, như hình, giá cả hợp lý.', '2019-03-06 01:34:42', '2019-03-06 01:34:42'),
(3, 23, 'thuylinh@gmail.com', 'Đỗ Thùy Linh', 'Sản phẩm đẹp, giá cả hợp lý !', '2019-03-07 19:40:57', '2019-03-07 19:40:57'),
(4, 23, 'duthao98@gmail.com', 'Dư Phương Thảo', 'Sản phẩm tốt, giao hàng nhanh chóng!', '2019-04-15 07:12:55', '2019-04-15 07:12:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

DROP TABLE IF EXISTS `danhgia`;
CREATE TABLE IF NOT EXISTS `danhgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nhanxet` text COLLATE utf8_unicode_ci,
  `sodiem` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `id_product`, `hoten`, `email`, `sodt`, `nhanxet`, `sodiem`, `created_at`, `updated_at`) VALUES
(1, 51, 'Đỗ Thùy Linh', 'dothuylinhhy1998@gmail.com', '0354499996', 'Sản phẩm đẹp, giá cả hợp lý!', 5, '2019-05-08 01:03:04', '2019-05-08 01:03:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

DROP TABLE IF EXISTS `hoadonban`;
CREATE TABLE IF NOT EXISTS `hoadonban` (
  `id_hdb` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` float NOT NULL,
  `trangthai` tinyint(1) DEFAULT NULL,
  `chuthich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hdb`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`id_hdb`, `hotenkh`, `diachi`, `email`, `sdt`, `ngayban`, `tongtien`, `trangthai`, `chuthich`, `created_at`, `updated_at`) VALUES
(14, 'Đỗ Thu Phương', 'Yên Mỹ- Hưng Yên', 'nguyenlanthcsltk@gmail.com', '0392513373', '2019-03-21', 590000, 1, NULL, '2019-03-21 03:24:59', '2019-04-17 07:44:04'),
(15, 'Dư Phương Thảo', 'Mỹ Hào- Hưng Yên', 'duthao98@gmail.com', '0878468976', '2019-03-21', 570000, 1, NULL, '2019-03-21 03:28:15', '2019-04-17 07:45:27'),
(16, 'Nguyễn Thị Lan', 'Yên Mỹ- Hưng Yên', 'nguyenlanthcsltk@gmail.com', '0392513373', '2019-03-21', 250000, 1, NULL, '2019-03-21 07:56:22', '2019-04-17 01:31:54'),
(19, 'Nguyễn Thị Thanh Tuyền', 'Yên Mỹ- Hưng Yên', 'duthao98@gmail.com', '0357196969', '2019-03-25', 200000, 1, NULL, '2019-03-25 01:17:56', '2019-03-25 01:17:56'),
(20, 'Đỗ Thùy Linh', 'Yên Mỹ- Hưng Yên', 'iyoona451@gmail.com', '0354499996', '2019-04-04', 285000, 1, NULL, '2019-04-04 08:50:20', '2019-05-03 08:24:53'),
(21, 'Đỗ Thị Lan Hương', 'TT Yên Mỹ- HƯng Yên', 'dolanhuong061095@gmail.com', '0978345944', '2019-04-05', 220000, 1, NULL, '2019-04-05 08:14:16', '2019-05-03 08:49:48'),
(22, 'Trương Thị Tường Vi', 'TT Yên Mỹ- Hưng Yên', 'truongthituongvi1806@gmail.com', '0356166566', '2019-04-17', 190000, 1, NULL, '2019-04-17 01:07:10', '2019-05-06 18:53:12'),
(23, 'Lê Thị Ngọc Thảo', 'Yên Mỹ- Hưng Yên', 'dolanhuong061095@gmail.com', '0354499996', '2019-04-21', 339000, 0, NULL, '2019-04-21 07:01:18', '2019-04-21 07:01:18'),
(24, 'Lê Thị Thảo', 'Khoái Châu - Hưng Yên', 'iyoona451@gmail.com', '012345678', '2019-04-21', 400000, 1, NULL, '2019-04-21 07:06:32', '2019-05-03 08:52:55'),
(25, 'Đỗ Thị Lan Hương', 'Yên Mỹ- Hưng Yên', 'dothuylinhhy1998@gmail.com', '0123456789', '2019-05-03', 236000, 0, NULL, '2019-05-03 08:40:47', '2019-05-03 08:40:47'),
(26, 'Nguyễn Thị Đào', 'Khoái Châu - Hưng Yên', 'dothuylinhhy1998@gmail.com', '0354499996', '2019-05-06', 120000, 0, NULL, '2019-05-05 18:29:21', '2019-05-05 18:29:21'),
(27, 'Trương', 'Yên Mỹ- Hưng Yên', 'truongthituongvi1806@gmail.com', '0356166566', '2019-05-06', 118000, 0, NULL, '2019-05-05 18:32:41', '2019-05-05 18:32:41'),
(28, 'Nguyễn Thị A', 'Yên Mỹ- Hưng Yên', 'iyoona451@gmail.com', '0354499996', '2019-05-06', 123456, 0, NULL, '2019-05-06 08:07:14', '2019-05-06 08:07:14'),
(29, 'Dư Phương Thảo', 'Mỹ Hào- Hưng Yên', 'duthao98@gmail.com', '0354499996', '2019-05-09', 360000, 0, NULL, '2019-05-08 23:57:07', '2019-05-08 23:57:07'),
(30, 'Nguyen Do Vinh Khang', '123', 'scodeweb2016@gmail.com', '0123456789', '2021-01-06', 190000, 1, 'dfdfe', '2021-01-06 03:35:24', '2021-01-06 04:01:37'),
(31, 'Nguyen Do Vinh Khang', '123', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 200000, 0, 'ddw', '2021-01-06 09:38:44', '2021-01-06 09:38:44'),
(32, 'Nguyen Do Vinh Khang', '123', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'ddw', '2021-01-06 09:45:50', '2021-01-06 09:45:50'),
(33, 'Nguyen Do Vinh Khang', '123', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'ddw', '2021-01-06 09:49:18', '2021-01-06 09:49:18'),
(34, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '0833264446', '2021-01-06', 0, 0, 'Mua đồ NTTU', '2021-01-06 09:50:58', '2021-01-06 09:50:58'),
(35, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '0833264446', '2021-01-06', 0, 0, 'Mua đồ NTTU', '2021-01-06 09:53:55', '2021-01-06 09:53:55'),
(36, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '0833264446', '2021-01-06', 0, 0, 'Mua đồ NTTU', '2021-01-06 09:54:36', '2021-01-06 09:54:36'),
(37, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'NTT', '2021-01-06 09:55:19', '2021-01-06 09:55:19'),
(38, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'NTT', '2021-01-06 09:55:36', '2021-01-06 09:55:36'),
(39, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 200000, 0, 'khangggg', '2021-01-06 09:58:48', '2021-01-06 09:58:48'),
(40, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:01:11', '2021-01-06 10:01:11'),
(41, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:05:37', '2021-01-06 10:05:37'),
(42, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:07:49', '2021-01-06 10:07:49'),
(43, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:08:01', '2021-01-06 10:08:01'),
(44, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:09:42', '2021-01-06 10:09:42'),
(45, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:10:17', '2021-01-06 10:10:17'),
(46, 'Nguyen Do Vinh Khang', '300A NTT', 'vinhkhang@gmail.com', '1234567890', '2021-01-06', 0, 0, 'khangggg', '2021-01-06 10:10:34', '2021-01-06 10:10:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

DROP TABLE IF EXISTS `hoadonnhap`;
CREATE TABLE IF NOT EXISTS `hoadonnhap` (
  `id_hdn` int(11) NOT NULL AUTO_INCREMENT,
  `id_nv` int(11) NOT NULL,
  `date` date NOT NULL,
  `tongtien` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_hdn`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`id_hdn`, `id_nv`, `date`, `tongtien`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-05-07', 27600000, '2019-05-06 19:32:28', '2019-05-06 19:32:28'),
(2, 1, '2019-05-05', 18000000, '2019-05-06 19:43:37', '2019-05-06 19:43:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_02_16_015220_vp_user', 1),
(2, '2019_02_16_135020_vp_categories', 2),
(3, '2019_02_17_152002_vp_products', 3),
(4, '2019_03_06_073131_comment', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `id_nv` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `hoten`, `ngaysinh`, `diachi`, `email`, `sodienthoai`, `user`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vinh Khang', '1998-10-08', 't', 'plvinhkhang@gmail.com', '0833264446', 'vinhkhang', '$2y$10$s25Tsmo05k.gbLUkYfzzpOA/21tgXH6MrGK94zN1cemLO/exQrZx2', 1, '2019-05-05 07:13:22', '2021-01-06 03:39:49'),
(4, 'Le Thanh Duy', '1998-10-01', 'nttu', 'lethanhduy@gmail.com', '0123456789', 'lethanhduy', '$2y$10$BmNsu4SichrHGXAuIo0xv.qJgAjSGJnNk0rfmKROCIt/xqdy5JwbO', 1, '2019-05-08 19:46:17', '2019-05-08 19:46:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_categories`
--

DROP TABLE IF EXISTS `vp_categories`;
CREATE TABLE IF NOT EXISTS `vp_categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_categories`
--

INSERT INTO `vp_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Đồ Bộ Bé Gái', 1, NULL, NULL),
(2, 'Váy Đầm Bé Gái', 1, NULL, NULL),
(3, 'Áo Bé Gái', 1, NULL, NULL),
(4, 'Đồ Bộ Bé Trai', 1, NULL, NULL),
(5, 'Quần Bé Trai', 1, NULL, NULL),
(6, 'Áo Bé Trai', 1, NULL, NULL),
(7, 'Áo  đây nè', 1, '2019-05-04 08:14:23', '2021-01-06 18:33:33'),
(8, 'Vay xinh xinh', 1, '2019-05-05 06:51:23', '2021-01-06 04:02:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_products`
--

DROP TABLE IF EXISTS `vp_products`;
CREATE TABLE IF NOT EXISTS `vp_products` (
  `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_type` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `mau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chatlieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `mota1` text COLLATE utf8mb4_unicode_ci,
  `noibat` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `best_sell` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `vp_products_id_type_foreign` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_products`
--

INSERT INTO `vp_products` (`id_sp`, `id_type`, `tensp`, `gia`, `soluong`, `mau`, `size`, `img`, `chatlieu`, `mota`, `mota1`, `noibat`, `status`, `best_sell`, `created_at`, `updated_at`) VALUES
(3, 1, 'Bộ Yếm Hoa', 139000, 209, 'Hồng', '9-11kg', '02.jpg¿v=1533206884.jpg', 'Linon', '<p>Set yếm cực xinh cho b&eacute; diện đi chơi, đi học đều đẹp. Yếm chất linon hoa cực xinh co gi&atilde;n thoải m&aacute;i.<br />\r\nSize: 9 - 11 kg&nbsp;<br />\r\nGi&aacute;: 139K</p>\r\n\r\n<p><img src=\"http://localhost:81/Do_An_4/public/frontend/img/02.jpg¿v=1533206884.jpg\" /></p>', 'Set yếm cực xinh cho bé diện đi chơi, đi học đều đẹp. Yếm chất \r\nlinon hoa cực xinh co giãn thoải mái.', 1, 1, NULL, NULL, '2019-05-08 06:33:44'),
(4, 1, 'Bộ Short Cho Bé', 285000, 146, 'Hồng', '13-15kg', '14.jpg¿v=1533207912.jpg', 'Cotton', '', NULL, 1, 1, NULL, NULL, '2019-04-04 08:50:20'),
(5, 1, 'Bộ caro croptop cột nơ', 125000, 300, 'Kẻ caro', '17-19kg', '5n.PNG', 'Cotton', '<p>Set bộ caro croptop cột nơ cực hot. br Chất vải kate caro nhập mềm mại, tho&aacute;ng m&aacute;t, quần phối lai ren cực xinh<br />\r\nSize (17-19kg)<br />\r\nGi&aacute;: 125K</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/croptop1.jpg\" style=\"margin-bottom:15px\" /> <img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/croptop2.jpg\" /></p>', 'Set bộ caro croptop cột nơ cực hot. Chất vải kate caro nhập \r\nmềm mại, thoáng mát, quần phối lai ren cực xinh', 0, 1, 1, NULL, '2019-05-08 06:37:02'),
(6, 1, 'Bộ carter hình gấu', 100000, 175, 'Hồng', '17-19kg', '17n.jpg', 'Cotton', '<p>Bộ bé gái, áo chất cotton, quần kate hình gấu <br>\r\n					   \r\n					Giá: 100K\r\n					</p>\r\n					<img src=\"img/gau1.jpg\" alt=\"\">', 'Bộ bé gái, áo chất cotton, quần kate hình gấu.', 0, 1, NULL, NULL, NULL),
(7, 1, 'Bộ short gấu khỉ', 125000, 210, 'Cam', '9-11kg', '18n.jpg', 'Polyester', '<p>\r\n						Trọn bộ thun cotton hình in không bong tróc <br>			\r\n						Giá: 120K\r\n					</p>\r\n					<img src=\"img/18n.1.jpg\" alt=\"\">\r\n					<img src=\"img/18n.2.jpg\">', NULL, 0, 1, NULL, NULL, NULL),
(8, 1, 'Bộ vest 3 món size đại', 250000, 75, '', '13-15kg', '19n.jpg', 'Silk', '', NULL, 0, 1, NULL, NULL, NULL),
(9, 1, 'Set KaKi hoa size đại', 170000, 85, '', '15-17kg', '20n.jpg', 'KaKi', '', NULL, 0, 1, NULL, NULL, NULL),
(10, 1, 'Set jean sơmi form dài', 230000, 210, '', '15-17kg', '21n.jpg', 'Polyester', '', NULL, 0, 1, NULL, NULL, NULL),
(11, 1, 'Set yếm kaki thun', 135000, 125, '', '13-15kg', '22n.jpg', 'KaKi', '', NULL, 0, 1, NULL, NULL, NULL),
(12, 2, 'Váy voan dập li lemon', 200000, 50, 'Vàng', '19-22kg', '2n.PNG', 'Voan', '<p>Set voan dập ly sang chảnh.&nbsp;<br />\r\nChất &aacute;o voal in 3D. Th&acirc;n sau xẻ t&agrave;.&nbsp;<br />\r\nSize 19-22 kg: 200K</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/do-bo-be-gai-bo-voan-dap-ly-lemon-den.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/do-bo-be-gai-bo-voan-dap-ly-lemon-trang.jpg\" /></p>', 'Set voan dập ly sang chảnh. Chất áo voal in 3D. Thân sau xẻ tà.', 0, 1, NULL, NULL, '2019-05-08 06:41:03'),
(13, 2, 'Bộ váy caro 2 dây', 100000, 75, 'Kẻ caro', '22-25kg', '3n.PNG', 'Polyester', '<p>BỘ &Aacute;O D&Acirc;Y V&Aacute;Y CARO &Aacute;o chất x&ocirc; thun, mềm mại, d&acirc;y &aacute;o vải kate caro.&nbsp;<br />\r\nV&aacute;y được l&agrave;m bằng chất kate, c&oacute; 1 lớp l&oacute;t kate d&agrave;y mịn b&ecirc;n trong.&nbsp;<br />\r\nĐiểm nhấn: &Aacute;o form x&ograve;e rộng, lai &aacute;o được tạo th&agrave;nh đu&ocirc;i nhẹ.&nbsp;<br />\r\nKết hợp với ch&acirc;n v&aacute;y được nh&uacute;n nhiều tạo độ phồng bung.&nbsp;<br />\r\nGi&aacute;: 100,000</p>\r\n\r\n<p><img alt=\"\" src=\"img/do-bo-be-gai-bo-vay-caro-2-day-hong.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/do-bo-be-gai-bo-vay-caro-2-day-vang.jpg\" /></p>', 'Áo chất xô thun, mềm mại, dây áo vải kate caro. Váy được làm \r\nbằng chất kate, có 1 lớp lót kate dày mịn bên trong.', 0, 1, NULL, NULL, '2019-04-21 19:14:16'),
(14, 2, 'Bộ váy yếm hoa cho bé', 160000, 120, 'Hồng', '22-25kg', '4n.PNG', 'KaKi', '<p>Set yếm cực xinh cho b&eacute; diện đi chơi, đi học đều đẹp. Yếm chất linon hoa cực xinh co gi&atilde;n thoải m&aacute;i, &aacute;o chất thun 4 chiều mịn m&aacute;t thấm h&uacute;t mồ h&ocirc;i.<br />\r\nSize: 22-25kg<br />\r\nGi&aacute;: 160K</p>\r\n<img src=\"http://localhost:81/Do_An_4/public/frontend/img/yem1.jpg\" style=\"margin-bottom:10px\"/>\r\n<img src=\"http://localhost:81/Do_An_4/public/frontend/img/yem2.jpg\" style=\"margin-bottom:10px\"/>\r\n<img src=\"http://localhost:81/Do_An_4/public/frontend/img/yem3.jpg\" style=\"margin-bottom:10px\"/>', 'Set yếm cực xinh cho bé diện đi chơi, đi học đều đẹp. Yếm chất \r\nlinon hoa cực xinh co giãn thoải mái, áo chất thun 4 chiều mịn mát.', 0, 1, 1, NULL, '2019-05-08 06:45:44'),
(15, 2, 'Đầm sơmi thêu Mickey', 130000, 200, 'Hồng', '11-13kg', '6n.jpg', 'Kate', '<p>Đầm sơ mi sọc b&ocirc;ng th&ecirc;u mickey k&egrave;m tặng 2 d&acirc;y buộc t&oacute;c nơ xinh xắn.&nbsp;<br />\r\nChất liệu kate thun c&oacute; độ co gi&atilde;n nhẹ, h&igrave;nh in nguy&ecirc;n c&acirc;y, thiết kế c&oacute; d&acirc;y r&uacute;t eo cho b&eacute; mặc thoải m&aacute;i.&nbsp;<br />\r\nSize 1-8 (8-25kg)&nbsp;<br />\r\nGi&aacute;: 130K</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/mic1.jpg\" style=\"margin-bottom:10px\" /><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/mic2.jpg\" style=\"margin-bottom:10px\" /><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/mic3.jpg\" /></p>', 'Đầm sơ mi sọc bông thêu mickey kèm tặng 2 dây buộc tóc nơ \r\nxinh xắn. Chất liệu kate thun có độ co giãn,thiết kế có dây \r\nrút eo cho bé mặc thoải mái.', 0, 1, NULL, NULL, '2019-05-08 06:48:59'),
(16, 2, 'Đầm sọc rớt vai+nón', 250000, 100, 'Hồng', '11-13kg', '15n.jpg', 'Cotton', '', NULL, 0, 1, NULL, NULL, NULL),
(17, 2, 'Đầm KATE SOC thắt nơ', 130000, 110, 'Hồng', '19-22kg', '13n.jpg', 'Kate', '', NULL, 0, 1, NULL, NULL, NULL),
(18, 2, 'Đầm yếm hoa hồng', 300000, 75, 'Hồng', '11-13kg', '14n.jpg', 'Cotton', '', NULL, 0, 1, NULL, NULL, NULL),
(20, 4, 'Bộ PineApple Cho Bé', 110000, 197, 'Vàng', '13-15kg', '06_5fec4508-a9d7-4aed-9700-a8c5323c99d7.jpg¿v=1533207789.jpg', 'Cotton', '<p>Bộ thun PineApple cho b&eacute; trai&nbsp;si&ecirc;u dẽ thương&nbsp;<br />\r\nNguy&ecirc;n bộ được may bằng chất thun 100% cotton 4 chiều mềm mịn, thấm h&uacute;t mồ h&ocirc;i cực m&aacute;t, thoải m&aacute;i cho b&eacute; diện đi học đi chơi.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"img/06_5fec4508-a9d7-4aed-9700-a8c5323c99d7.jpg¿v=1533207789.jpg\" /></p>', 'Bộ thun PineApple cho bé trai siêu dễ thương. Nguyên bộ được may bằng \r\nchất thun 100% cotton 4 chiều mềm mịn.', 1, 1, NULL, NULL, '2019-04-21 19:07:28'),
(21, 2, 'Váy Hai Dây Cột Nơ', 250000, 147, 'Xanh', '13-15kg', '07_3f690553-f80e-464a-be4b-8fd3104e079a.jpg¿v=1533207779.jpg', 'Silk', '', NULL, 1, 1, NULL, NULL, '2019-03-21 07:59:28'),
(22, 4, 'Bộ Short Hình Cá', 175000, 110, 'Cam', '11-13kg', '09_2ae6ba1a-4f83-482b-bb00-b7a27871543c.jpg¿v=1533207823.jpg', 'Cotton', '<p>M&ugrave;a h&egrave; đ&atilde; đến, Jadusona đ&atilde; về cho c&aacute;c b&eacute; trai năng động&nbsp;<strong>đồ bộ ngắn tay</strong>&nbsp;chất vải thun cotton gi&uacute;p b&eacute; thoải m&aacute;i vận động m&agrave; kh&ocirc;ng bị g&ograve; b&oacute;, chất vải tho&aacute;ng m&aacute;t gi&uacute;p b&eacute; tha hồ chạy nhảy m&agrave; kh&ocirc;ng lo ướt đẫm mồ h&ocirc;i.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/09_2ae6ba1a-4f83-482b-bb00-b7a27871543c.jpg¿v=1533207823.jpg\" /></p>', 'Sản phẩm được thiết kế rất đáng yêu dành cho bé trai với họa tiết hình cá mập. Chất liệu cotton mềm mát giúp cho bé thoải mái khi mặc.', 1, 1, NULL, NULL, '2019-05-08 06:27:53'),
(23, 2, 'Váy Hoa Xinh Cho Bé', 190000, 200, 'Xanh dương', '13-15kg', '10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg', 'Cotton', '<p><strong>Chất liệu:</strong>&nbsp;vải cotton 100% bền đẹp, an to&agrave;n tuyệt đối cho b&eacute; y&ecirc;u khi mặc</p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong>&nbsp;điệu đ&agrave;, nữ t&iacute;nh cho b&eacute; g&aacute;i.</p>\r\n\r\n<p><strong>Họa tiết</strong>: trang tr&iacute; họa tiết nền hoa xinh xắn, đ&aacute;ng y&ecirc;u.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://localhost:81/Do_An_4/public/frontend/img/10_4f713443-414e-4272-8d72-139c1575d17a.jpg¿v=1533207823.jpg\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p><strong>Size:</strong>&nbsp;3-5 tuổi (từ 13kg đến 15kg)<br />\r\n<strong>M&agrave;u sắc:</strong> như h&igrave;nh<br />\r\n<strong>Xuất xứ:</strong> Made in Vietnam. Sản phẩm đạt ti&ecirc;u chuẩn xuất khẩu v&agrave; đang được b&agrave;y b&aacute;n tại c&aacute;c nước Mỹ, H&agrave;n Quốc, Anh Quốc,<br />\r\nSingapore, Thụy Sỹ... Tutupetti c&oacute; kinh nghiệm xuất khẩu h&agrave;ng h&oacute;a đi nhiều nước tr&ecirc;n thế giới, li&ecirc;n hệ để biết phương<br />\r\nthức đặt h&agrave;ng xuất khẩu.<br />\r\n&nbsp;</p>', 'Chiếc đầm được thiết kế bởi những kỹ thuật nhiều kinh nghiệm và được chọn lọc rất kỹ về chất liệu cũng như form dáng. Chất liệu mềm mại, màu sắc tươi mới chắc chắn sẽ làm hài lòng các mẹ dù là khó tính nhất. Hãy đến cửa hàng của Jadusona để lựa chọn cho bé những chiếc đầm xinh xắn nhất các mẹ nhé.\r\n', 1, 1, NULL, NULL, '2021-01-06 03:35:24'),
(26, 2, 'Váy Tầng Đính Ngọc', 200000, 126, 'Vàng', '11-13kg', '16.jpg¿v=1533208401.jpg', 'Voan', '', NULL, 1, 1, NULL, NULL, '2021-01-06 09:58:48'),
(27, 4, 'Bộ Short Cá Voi', 170000, 198, 'Xanh', '13-15kg', '21.jpg¿v=1533208509.jpg', 'Cotton', '<p>M&ugrave;a h&egrave; đ&atilde; đến, Jadusona đ&atilde; về cho c&aacute;c b&eacute; trai năng động&nbsp;<strong>đồ bộ ngắn tay</strong>&nbsp;chất vải thun cotton gi&uacute;p b&eacute; thoải m&aacute;i vận động m&agrave; kh&ocirc;ng bị g&ograve; b&oacute;, chất vải tho&aacute;ng m&aacute;t gi&uacute;p b&eacute; tha hồ chạy nhảy m&agrave; kh&ocirc;ng lo ướt đẫm mồ h&ocirc;i.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/21.jpg¿v=1533208509.jpg\" /></p>', 'Sản phẩm được thiết kế rất đáng yêu dành cho bé trai với họa tiết hình cá mập. Chất liệu cotton mềm mát giúp cho bé thoải mái khi mặc.', 1, 1, 1, NULL, '2019-05-08 23:57:07'),
(28, 2, 'Váy Bò Đính Nơ', 160000, 110, 'Xanh', '13-15kg', '01.jpg¿v=1533206881.jpg', 'Polyester', '', NULL, 0, 1, 1, NULL, NULL),
(29, 6, 'Sơmi Xanh Kẻ Caro', 175000, 200, 'Xanh dương', '11-13kg', '03.jpg¿v=1533206890.jpg', 'Cotton', '<p>&Aacute;o sơmi b&eacute; trai, chất vải kate đặt dệt c&ocirc;ng ty bao đẹp. Form d&aacute;ng đ&uacute;ng chuẩn</p>\r\n\r\n<p><img alt=\"\" src=\"img/03.jpg¿v=1533206890.jpg\" /></p>', 'Áo sơmi bé trai, chất vải cotton đặt dệt công ty bao đẹp. \r\nForm dáng đúng chuẩn.', 0, 1, 1, NULL, '2019-04-21 19:03:15'),
(30, 4, 'Set Áo Kẻ Caro Hồng', 330000, 75, 'Hồng', '13-15kg', '08_00373d03-d2fb-44ba-92f8-97cee92c34b7.jpg¿v=1533207815.jpg', 'Cotton', '', NULL, 0, 1, NULL, NULL, NULL),
(36, 1, 'Bộ Mama\'s Girl', 250000, 90, 'Xám', '11-13kg', '20.jpg¿v=1533208408.jpg', 'Cotton', '', NULL, 0, 1, NULL, NULL, NULL),
(37, 2, 'Váy Tầng Công Chúa', 310000, 200, 'Xanh ', '9-11kg', '22.jpg¿v=1533208511.jpg', 'Lace', '', NULL, 0, 1, NULL, NULL, NULL),
(43, 4, 'Bộ Dài Tay Cho Bé', 200000, 120, 'Xanh Dương', '15-17kg', '26.jpg¿v=1533208612.jpg', 'Wool', '', NULL, 0, 1, NULL, NULL, NULL),
(46, 1, 'Bộ Caro Trễ Vai', 200000, 118, 'Kẻ caro', '15-17kg', '20.jpg', 'Cotton', NULL, NULL, NULL, 1, NULL, '2019-04-11 08:32:01', '2019-04-21 07:06:32'),
(47, 3, 'Áo Sơmi Thêu Hoa', 118000, 198, 'Xanh', '11-13kg', '25n.jpg', 'Cotton', '<p>Xu hướng &aacute;o sơ mi th&ecirc;u hoa cho b&eacute; g&aacute;i đang&quot;l&agrave;m mưa l&agrave;m gi&oacute;&quot; m&ugrave;a thời trang trẻ em năm nay, m&agrave;u sắc tinh tế: &aacute;o trắng tr&ecirc;n nền vải cotton 100% g&acirc;n c&oacute; sớ bao đẹp; &aacute;o kẻ sọc tr&ecirc;n nền vải kate sọc 100% cotton cực sang.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/25n.jpg\" style=\"margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/25n.1.jpg\" style=\"margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/25n.2.jpg\" style=\"margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/25n.3.jpg\" style=\"margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/25n.4.jpg\" /></p>', 'Áo sơ mi bé gái cực đẹp - Họa tiết thêu hoa luôn mang đến cho bé một \r\nvẻ ngoài nhã nhặn, đáng yêu. Sản phẩm dành cho bé từ 3 đến 5 tuổi!', NULL, 1, 1, '2019-04-11 08:32:01', '2019-05-05 18:45:02'),
(48, 3, 'Áo Kate tầng cho bé', 200000, 120, 'Xanh', '13-15kg', '12n.jpg', 'Kate', '<p>Xuất xứ :VN&nbsp;<br />\r\n&Aacute;o kate tầng, form rộng x&ograve;e, tay &aacute;o loe v&agrave; phối tầng, thật lạ mắt v&agrave; đ&aacute;ng y&ecirc;u</p>\r\n\r\n<p><img alt=\"\" src=\"img/KateTang1.jpg\" style=\"width: 600px;margin-bottom:5px; margin-left:60px\" /><br />\r\n<img alt=\"\" src=\"img/KateTang2.jpg\" style=\"width: 600px;border: 1px solid;margin-bottom: 5px; margin-left: 60px;\" /></p>', NULL, NULL, 1, NULL, '2019-04-11 08:41:54', '2019-04-11 09:02:41'),
(49, 3, 'Áo Nỉ Form Hàn Quốc', 210000, 210, 'Nâu nhạt', '9-11kg', '51966236_2129647567072409_6990202077607624704_n.jpg', 'Wool', '<p>- H&agrave;ng nhập khẩu trực tiếp ch&iacute;nh h&atilde;ng từ H&agrave;n Quốc.<br />\r\n- Thiết kế đẹp mắt hợp thời trang, kiểu d&aacute;ng trẻ trung.<br />\r\n- Chất liệu cao cấp, bền đẹp, đường may chắc chắn, tỉ mỉ.</p>\r\n\r\n<p>&nbsp;</p>\r\n<img src=\"img/51966236_2129647567072409_6990202077607624704_n.jpg\"/>', NULL, NULL, 1, NULL, '2019-04-11 08:51:03', '2019-04-11 08:51:03'),
(50, 3, 'Áo Voan Tầng 2 Dây', 108000, 150, 'Trắng', '13-15kg', '26n.jpg', 'Voan', '<p>&Aacute;o hai d&acirc;y cho b&eacute; g&aacute;i xinh qu&aacute; với chất liệu voan nhẹ nh&agrave;ng thoải m&aacute;i, thiết kế &aacute;o d&acirc;y tinh tế họa tiết in hoa cực đẹp cho trẻ nhỏ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"img/26n.jpg\" style=\"width:600px; margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"img/26.1.jpg\" style=\"width:600px; margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"img/26.2.jpg\" style=\"width:600px; margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"img/26.3.jpg\" style=\"width:600px; margin-bottom:5px\" /><br />\r\n<img alt=\"\" src=\"img/26.4.jpg\" style=\"width:600px\" /></p>', 'Áo voan tầng hai dây cho bé gái tha hồ làm duyên và điệu đà - Chất voan mềm mượt,\r\nnền in hoa sắc nét rất đẹp cho bé dễ phối với các kiểu quần đi chơi, đi tiệc.', NULL, 1, NULL, '2019-04-11 08:54:43', '2019-04-11 09:07:27'),
(51, 3, 'Áo sơ mi kẻ sọc', 135000, 300, 'Hồng', '13-15kg', '27.jpg', 'Kate', '<p>Với kiểu &aacute;o sơ mi cho b&eacute; g&aacute;i đơn giản v&agrave; tinh tế.<br />\r\nKết hợp c&ugrave;ng họa tiết kẻ sọc năng động sẽ tạo n&ecirc;n một chiếc &aacute;o ho&agrave;n to&agrave;n mới mẻ cho b&eacute; đi chơi đi học.</p>\r\n\r\n<p><img alt=\"\" src=\"img/27.jpg\" style=\"margin-bottom:15px; width:750px\" /> <img alt=\"\" src=\"img/27.3.jpg\" style=\"margin-bottom:15px; width:750px\" /></p>', 'Áo sơ mi kiểu dành cho bé gái được may từ chất liệu vải kate cao cấp, mềm mại \r\ncùng thiết kế kiểu dáng hở vai mang đến cho bé sự thoải mái và dễ thương khi mặc.', NULL, 1, 1, '2019-04-21 17:53:32', '2019-04-21 18:07:38'),
(52, 3, 'Áo sơmi KATE Form dài', 125000, 120, 'Kẻ sọc đen trắng', '15-17kg', '10n.jpg', 'Kate', '<p>Chất &aacute;o sơmi kate xịn 100% cotton mềm m&aacute;t.<br />\r\nSize 15- 17kg: 125,000<br />\r\nC&oacute; 2 m&agrave;u: Đỏ cam v&agrave; Đen</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"img/kate1.jpg\" style=\"margin-bottom:15px\" /> <img alt=\"\" src=\"img/21n.jpg\" /></p>', 'Chất áo sơmi kate xịn 100% cotton mềm mát.', NULL, 1, NULL, '2019-04-21 18:03:02', '2019-04-21 18:24:53'),
(53, 3, 'Áo Sơmi Kate Topi', 150000, 75, 'Hồng', '17-19kg', '23n.jpg', 'Kate', '<p>Chất liệu: Kate<br />\r\nGi&aacute;: 125K</p>\r\n\r\n<p><img alt=\"\" src=\"img/23n.jpg\" style=\"margin-bottom:15px\" /> <img alt=\"\" src=\"img/23.1n.jpg\" style=\"width: 730px;\r\n    margin-left: 40px;\" /></p>', NULL, NULL, 1, NULL, '2019-04-21 18:16:29', '2019-04-21 18:18:35'),
(54, 3, 'Áo cộc tay  hình thỏ', 80000, 210, 'Hồng', '15-17kg', '24n.jpg', 'Cotton', '<p>\r\n						Xuất xứ :VN <br>\r\n						Áo thun cotton 4c, hình thỏ và cá dễ thương, màu sắc tươi sáng\r\n					</p>\r\n					<img src=\"img/24n.jpg\" alt=\"\" style=\"margin-bottom: 15px\">\r\n					<img src=\"img/24n.1.jpg\" alt=\"\">', 'Áo thun cotton 4c, hình thỏ và cá dễ thương, màu sắc tươi \r\nsáng', NULL, 1, NULL, '2019-04-21 18:21:04', '2019-04-21 18:21:04'),
(55, 4, 'Bộ Jean cổ trụ', 210000, 300, 'Vàng', '15-17kg', '31.jpg', 'Cotton', '<p>Set jean cổ trụ cực ngầu cho bé diện Tết \r\n						(KHÔNG KÈM PHỤ KIỆN) <br>\r\n						Chất áo thun cotton 100% 4 chiều mịn đẹp, sọc in và phun sơn màu sắc nổi bật. Logo in 3D chiếc tàu cổ xưa được may đắp lên áo. <br>\r\n						Kết hợp quần jean cotton in chữ, lai lật tua rua phối sọc nổi, wash thời trang 2 màu đặc biệt. <br>	\r\n						Có 3 màu: Đỏ - Vàng - Rêu\r\n					</p>\r\n					<img src=\"img/31.jpg\" alt=\"\" style=\"margin-bottom: 15px\">\r\n					<img src=\"img/31.1.jpg\" alt=\"\" style=\"margin-bottom: 15px\">\r\n					<img src=\"img/31.2.jpg\" alt=\"\">', 'Chất áo thun cotton 100% 4 chiều mịn đẹp, sọc in và phun sơn \r\nmàu sắc nổi bật. Kết hợp quần jean cotton in chữ.', NULL, 1, 1, '2019-04-21 18:27:20', '2019-04-21 18:27:20'),
(56, 4, 'Set Jean Ôtô Size đại', 185000, 135, 'Đen', '17-19kg', '32.jpg', 'Cotton', '<p>Set jean xe ô tô cá tính (không gồm phụ kiện) <br>\r\n						Chất áo thun cotton 100% 4 chiều mịn đẹp. <br>\r\n						Kết hợp quần jean wash thời trang 2 màu lạ mắt, đóng nút kiểu cầu kỳ, logo và sọc thêu. <br>		\r\n						Có 4 màu: Trắng - Đen - Đỏ - Vàng\r\n					</p>\r\n					<img src=\"img/32.jpg\" alt=\"\" style=\"margin-bottom: 15px\">\r\n					<img src=\"img/32.1.jpg\" alt=\"\" style=\"margin-bottom: 15px\">\r\n					<img src=\"img/32.2.jpg\" alt=\"\">', 'Set jean xe ô tô cá tính (không gồm phụ kiện). Chất áo thun cotton \r\n100% 4 chiều mịn đẹp. Kết hợp quần jean wash thời trang 2 màu lạ mắt.', NULL, 1, NULL, '2019-04-21 18:30:29', '2019-04-21 18:30:29'),
(57, 4, 'Bộ thun GUCCI Size đại', 125000, 250, 'Đỏ', '15-17kg', '29.jpg', 'Cotton', '<p>Bộ thun Gucci b&eacute; trai cực ngầu&nbsp;<br />\r\nNguy&ecirc;n bộ được may bằng chất thun 100% cotton 4 chiều mềm mịn, thấm h&uacute;t mồ h&ocirc;i cực m&aacute;t, thoải m&aacute;i cho b&eacute; diện đi học đi chơi.&nbsp;<br />\r\n&Aacute;o v&agrave; quần chạy sọc gucci, &aacute;o đ&iacute;nh logo da sang chảnh&nbsp;<br />\r\nC&oacute; 2 m&agrave;u: đỏ v&agrave; trắng</p>\r\n\r\n<p><img alt=\"\" src=\"img/29.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/29.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/29.2.jpg\" /></p>', 'Bộ thun Gucci bé trai cực ngầu. Nguyên bộ được may bằng \r\nchất thun 100% cotton 4 chiều mềm mịn.', NULL, 1, NULL, '2019-04-21 18:33:27', '2019-04-21 18:33:27'),
(58, 5, 'Quần Zara ghép cào rách', 185000, 120, 'Xanh', '15-17kg', '42.jpg', 'Jean', '<p>Xuất xứ :VN&nbsp;<br />\r\nQuần jean mềm, c&agrave;o r&aacute;ch form rộng r&atilde;i tạo cảm gi&aacute;c thoải m&aacute;i, c&aacute; t&iacute;nh cho b&eacute; đi học hoặc đi chơi</p>\r\n\r\n<p><img alt=\"\" src=\"img/42.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/42.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/42.2.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/42.3.jpg\" /></p>', 'Quần jean mềm, cào rách form rộng rãi tạo cảm giác thoải mái, cá tính \r\ncho bé đi học hoặc đi chơi.', NULL, 1, NULL, '2019-04-21 18:38:05', '2019-04-21 18:38:05'),
(59, 5, 'Quần jean lửng thêu', 225000, 175, 'Xanh', '17-19kg', '43.jpg', 'Jean', '<p>Xuất xứ :VN&nbsp;<br />\r\nQuần jan lửng c&agrave;o r&aacute;ch , phong c&aacute;ch c&aacute; t&iacute;nh</p>\r\n\r\n<p><img alt=\"\" src=\"img/43.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/43.1.jpg\" /></p>', 'Quần jan lửng cào rách , phong cách cá tính.', NULL, 1, NULL, '2019-04-21 18:40:31', '2019-04-21 18:46:51'),
(60, 5, 'Quần kaki cho bé trai', 130000, 210, 'Đỏ', '15-17kg', '44.jpg', 'Kaki', '<p>Với kiểu quần ngắn, phối t&uacute;i v&agrave; lật lai thời trang, c&oacute; d&acirc;y r&uacute;t thu k&iacute;ch cỡ ph&ugrave; hợp rất tiện lợi khi b&eacute; lớn hơn một t&iacute;, quần c&agrave;i n&uacute;t v&agrave; c&oacute; d&acirc;y k&eacute;o. Điểm nhấn của chiếc quần kaki cho b&eacute; trai ở kiểu lật lai sọc, b&eacute; mặc phối với nhiều kiểu &aacute;o kh&aacute;c nhau nhằm đa dạng sắc m&agrave;u thời trang cho b&eacute;. Trong chuyến đi chơi sắp tới, mẹ đ&atilde; nghĩ được cho b&eacute; mặc g&igrave; chưa ạ? Một chiếc quần kaki lửng phối với &aacute;o thun l&agrave; một gợi &yacute; cho mẹ.</p>\r\n\r\n<p><img alt=\"\" src=\"img/44.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/44.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/44.2.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/44.3.jpg\" /></p>', 'Quần kaki cho bé trai từ 2 tuổi đến 6 tuổi lật lai sọc (size nhí), \r\n4 màu cho mẹ lựa chọn để phối với áo đem đến phong cách \r\nthời trang năng động cho bé.', NULL, 1, NULL, '2019-04-21 18:43:09', '2019-04-21 18:43:09'),
(61, 5, 'Quần jeans dài cho bé', 150000, 75, 'Xanh', '15-17kg', '45.jpg', 'Jean', '<p>Mặc quần jeans cho b&eacute; trai, mẹ ngại nhất l&agrave; lưng quần v&agrave; d&acirc;y k&eacute;o g&acirc;y g&ograve; b&oacute;, vướng kẹp nếu b&eacute; k&eacute;o kh&ocirc;ng cẩn thận. Với chiếc quần jeans d&agrave;i lưng thun, giả d&acirc;y k&eacute;o m&agrave; Babi giới thiệu dưới đ&acirc;y mẹ ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m b&eacute; mặc rất thoải m&aacute;i, m&agrave;u xanh jeans duy nhất mẹ dễ d&agrave;ng phối với &aacute;o ph&ocirc;ng, &aacute;o sơ mi để b&eacute; mặc thật phong c&aacute;ch, thoải m&aacute;i v&agrave; năng động.</p>\r\n\r\n<p><img alt=\"\" src=\"img/45.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/45.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/45.2.jpg\" style=\"margin-bottom:15px\" /></p>', 'Quần jeans dài cho bé trai từ 9 tháng đến 5 tuổi lưng thun wax nhẹ, bé mặc vừa \r\nthoải mái vừa thời trang.', NULL, 1, NULL, '2019-04-21 18:45:54', '2019-04-21 18:45:54'),
(62, 6, 'Áo sơ mi thêu đắp hình', 185000, 123, 'Xanh dương', '15-17kg', '41.2.jpg', 'Cotton', '<p>Ph&aacute; c&aacute;ch từ chiếc &aacute;o sơ mi cổ điển, &aacute;o sơ mi cho b&eacute; trai t&ocirc; th&ecirc;m phần họa tiết gồm những h&igrave;nh th&ecirc;u v&agrave; đắp vui nhộn. Chất liệu vải kate bền, đẹp, mặc thoải m&aacute;i, nhiều m&agrave;u sắc đỏ, hồng, xanh da trời, xanh dương cho c&aacute;c mẹ lựa chọn theo sơ th&iacute;ch v&agrave; để t&ocirc;n l&agrave;n da của b&eacute;. &Aacute;o sơ mi ph&ugrave; hợp cho b&eacute; trai từ 3 tuổi - 9 tuổi cho b&eacute; mặc đi tiệc, đi chơi hay đi học.</p>\r\n\r\n<p><img alt=\"\" src=\"img/39.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/39.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"img/39.2.jpg\" /></p>', 'Áo sơ mi cho bé trai thêu đắp hình cực dễ thương cho bé từ 3 tuổi đến 9 tuổi \r\nmặc với quần tây, quần jeans hay kaki lịch sự, đáng yêu.', NULL, 1, NULL, '2019-04-21 18:52:42', '2019-04-21 18:52:42'),
(63, 6, 'Áo sơ mi bé trai', 138000, 200, 'Xám', '13-15kg', '40.jpg', 'Cotton', '<p>&Aacute;o sơ mi l&agrave; sự lựa chọn tuyệt vời nhất cho c&aacute;c b&eacute; trai mỗi khi đi dự tiệc hoặc đi đến những nơi sang trọng. Nhưng kh&ocirc;ng chỉ vậy đ&acirc;u nh&eacute;! V&igrave; &aacute;o sơ mi th&ecirc;u h&igrave;nh chim k&eacute;t đ&aacute;ng y&ecirc;u cho b&eacute; tại Babi được may từ chất liệu vải th&ocirc; tho&aacute;ng m&aacute;t, n&ecirc;n c&ograve;n rất ph&ugrave; hợp để b&eacute; y&ecirc;u mặc đi học hay đi chơi b&igrave;nh thường. Babi c&oacute; dịch vụ giao h&agrave;ng to&agrave;n quốc để đ&aacute;p ứng được mọi nhu cầu của c&aacute;c mẹ.</p>\r\n\r\n<p>\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/40.jpg\" style=\"margin-bottom:15px\" />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/40.1.jpg\" style=\"margin-bottom:15px\" />\r\n<img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/40.2.jpg\" />\r\n</p>', 'Áo sơ mi tay dài cho bé trai có hình thêu chim két ngộ nghĩnh ở trên ngực túi. \r\nÁo có chất liệu vải thô - ưu điểm là thoáng mát và thấm hút mồ hôi cực tốt.', NULL, 1, NULL, '2019-04-21 18:56:06', '2019-05-05 23:41:17'),
(64, 6, 'Sơ mi cổ trụ đẹp', 122000, 100, 'Xanh', '13-15kg', '41.1.jpg', 'Kate', '<p>Những chiếc &aacute;o sơ mi cổ trụ cho b&eacute; trai được thiết kế cực đẹp v&agrave; thời trang, mang đến cho c&aacute;c b&eacute; y&ecirc;u vẻ ngo&agrave;i vừa lịch l&atilde;m d&ugrave; l&agrave; đi chơi hay đi tiệc, vừa tinh nghịch với c&aacute;c h&igrave;nh in si&ecirc;u nh&acirc;n m&agrave; b&eacute; y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/41.2.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/41.1.jpg\" style=\"margin-bottom:15px\" /><img alt=\"\" src=\"http://localhost:81/Do_An_4/public/frontend/img/41.2.jpg\" /></p>', 'Sơ mi cổ trụ đẹp cho bé trai - Chất liệu vải kate siêu đẹp, hình in các siêu nhân \r\nBatman, Captain, Superman sống động và đầy cá tính cho các nhóc nhỏ.', NULL, 1, NULL, '2019-04-21 18:59:46', '2019-05-03 10:56:03'),
(65, 1, 'Bộ 2 dây quần caro', 120000, 309, 'Xanh', '9-11kg', '1n.PNG', 'Cotton', NULL, 'Áo được may bằng chất cotton chính phẩm, co giãn 4 chiều,\r\nmịn đẹp. Quần vải kate cotton, không nhăn, mềm mịn.', NULL, 1, 1, '2019-04-21 19:29:06', '2019-05-05 18:29:21'),
(66, 1, 'Áoabc', 123456, 11, 'hồng', '13-15kg', '2n.PNG', 'Cotton', NULL, NULL, NULL, 0, NULL, '2019-05-03 23:16:59', '2019-05-08 19:31:10'),
(67, 8, 'Áo', 123456, 12, 'hồng', '13-15kg', '01.jpg¿v=1533206881.jpg', 'Cotton', '<p><gwmw class=\"ginger-module-highlighter-mistake-type-1\" id=\"gwmw-15571576757548994335990\">mkmxxml</gwmw><img alt=\"\" src=\"files/01_jpg%C2%BFv%3D1533206881.jpg\" /></p>', NULL, NULL, 1, NULL, '2019-05-06 08:48:13', '2019-05-06 08:48:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_users`
--

DROP TABLE IF EXISTS `vp_users`;
CREATE TABLE IF NOT EXISTS `vp_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_users`
--

INSERT INTO `vp_users` (`id`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thuylinh@gmail.com', '$2y$10$VZQ8/12sflrxvK1rr5U7BecqLonZFrVPZDzvDRTB3EJMM/sUpj/6u', 1, NULL, NULL, NULL),
(2, 'admin@gmail.com', '$2y$10$12UPW1.uj.XvHvZIvXRHS..aIh0UymJuApg0KtD6LbgHTST2BlDBC', 1, 'YVoCuVgY8oXp0Qzt2LB3WpNoe0phNddmdnEVuAcyeWRNlhPFLdiAmzPxJQsC', NULL, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethdb`
--
ALTER TABLE `chitiethdb`
  ADD CONSTRAINT `chitiethdb_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `vp_products` (`id_sp`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_product_foreign` FOREIGN KEY (`product`) REFERENCES `vp_products` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `vp_products` (`id_sp`);

--
-- Các ràng buộc cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  ADD CONSTRAINT `vp_products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `vp_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
