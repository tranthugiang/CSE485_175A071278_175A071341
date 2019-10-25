-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2019 lúc 12:27 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `iddangnhap` int(11) NOT NULL,
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `hoten` int(11) NOT NULL,
  `diachi` int(11) NOT NULL,
  `staus` int(11) NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`iddangnhap`, `admin_user`, `admin_pass`, `hoten`, `diachi`, `staus`, `phanquyen`) VALUES
(1, 'admin', 'admin', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(10) NOT NULL,
  `tendanhmuc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `iddangnhap` int(1) NOT NULL,
  `ngaydang` date NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`, `mota`, `iddangnhap`, `ngaydang`, `idtinhtrang`) VALUES
(1, 'Tin Tức', 'Mục tin tức trong trang web', 1, '2019-10-20', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(20) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydathang` date NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `giagoc` int(100) NOT NULL,
  `soluong` int(20) NOT NULL,
  `thanhtien` int(100) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `dadathang` int(1) NOT NULL,
  `huydonhang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`iddonhang`, `hoten`, `ngaydathang`, `diachi`, `sodienthoai`, `email`, `tensanpham`, `giagoc`, `soluong`, `thanhtien`, `trangthai`, `dadathang`, `huydonhang`) VALUES
(1, 'Thái Bá Đạo', '2019-09-26', 'Hà Nội', '0987654432', 'daojupiter95@gmail.com', 'Máy Ageloc Lumispa xanh', 4460000, 2, 8660000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `idslide` int(11) NOT NULL,
  `idhinhanh` int(11) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `idsukien` int(30) NOT NULL,
  `tensukien` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `ngaytochucsk` date NOT NULL,
  `ngayketthucsk` date NOT NULL,
  `idhinhanh` int(30) NOT NULL,
  `iddangnhap` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_files`
--

CREATE TABLE `tbl_files` (
  `idhinhanh` int(7) NOT NULL,
  `tenanh` varchar(500) NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_files`
--

INSERT INTO `tbl_files` (`idhinhanh`, `tenanh`, `ngaydang`) VALUES
(32, 'uploads/congtychungkhoan.jpg', '2019-10-23'),
(33, 'uploads/1..5.png', '0000-00-00'),
(34, 'uploads/', '0000-00-00'),
(35, 'uploads/', '0000-00-00'),
(36, 'uploads/evaluation-for-capstone.docx', '2017-02-03'),
(37, 'uploads/[fmovies.to] The Flash 3 - 06.srt', '2017-02-03'),
(38, 'uploads/activity_sheet3 (1).docx', '2017-02-04'),
(39, 'uploads/amCharts (1).csv', '2017-02-04'),
(40, 'uploads/Penguins.jpg', '2017-02-04'),
(41, 'uploads/FlowchartApplication 2.docx', '2017-02-04'),
(42, 'uploads/evaluation-for-capstone.docx', '2017-02-04'),
(43, 'uploads/Koala.jpg', '2017-02-04'),
(44, 'uploads/Jellyfish.jpg', '2017-02-04'),
(100, 'uploads/Penguins.jpg', '2019-10-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuvien`
--

CREATE TABLE `thuvien` (
  `idhinhanh` int(10) NOT NULL,
  `tenhinhanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `duongdan` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `idtinhtrang` int(10) NOT NULL,
  `tentinhtrang` varchar(259) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`idtinhtrang`, `tentinhtrang`) VALUES
(1, 'Đã Xét Duyệt'),
(2, 'Chưa Xét Duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(30) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayviet` date NOT NULL,
  `iddanhmuc` int(30) NOT NULL,
  `idhinhanh` int(10) NOT NULL,
  `iddangnhap` int(30) NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tieude`, `noidung`, `ngayviet`, `iddanhmuc`, `idhinhanh`, `iddangnhap`, `idtinhtrang`) VALUES
(1, '\r\nHiệp hội đại học, cao đẳng Việt Nam thăm và làm việc với Đại học Tôn Đức Thắng Lần thứ 2', 'Chiều ngày 17/10/2019, Hiệp hội đại học, cao đẳng Việt Nam (Hiệp hội) cùng Lãnh đạo 20 trường đại học thành viên đã đến thăm và làm việc với Đại học Tôn Đức Thắng (TDTU). Đoàn do ông Phạm Ngọc Lan, Phó ban tổ chức và phát triển Hiệp hội làm Trưởng đoàn.\r\n\r\nĐoàn đã được hướng dẫn tham quan một số nơi tiêu biểu của TDTU như: Thư viện truyền cảm hứng, Nhà thi đấu đa năng, Ký túc xá và Trường quốc tế Việt Nam- Phần Lan (VFIS).\r\n\r\nSau khi tham quan thực tế, Đoàn có buổi làm việc với Lãnh đạo TDTU về mô hình cũng như những kinh nghiệm tự chủ đại học. Cô Trịnh Minh Huyền, Chủ tịch Công đoàn trường đã kể với Đoàn về câu chuyện tự chủ của TDTU: từ khởi đầu là những con số không; đến những mục tiêu cùng với chính sách quyết liệt để có thành tựu hôm nay; trong đó đầy rẫy gian nan và thách thức mà nếu không có sự nỗ lực và tinh thần phụng sự thì khó có thể vượt qua.\r\n\r\nGS Lê Vinh Danh, Hiệu trưởng TDTU trao đổi những kinh nghiệm, bí quyết giúp cho TDTU thành công; và cho biết sẵn sàng chia xẻ những kinh nghiệm này cho các đại học của Việt Nam, với mục đích cuối cùng là phát triển hệ thống giáo dục đại học bền vững.\r\n\r\nÔng Phạm Ngọc Lan cho biết Hiệp hội đã và sẽ tiếp tục ủng hộ TDTU về mọi mặt; vì thực tế đã chứng tỏ đây là mô hình ưu việt, là hướng đi đúng cho tất cả các đại học Việt Nam.\r\n\r\nLãnh đạo các đại học tham gia buổi làm việc đều thể hiện sự ngưỡng mộ đối với những thành tựu của TDTU và cho rằng buổi trao đổi đã tạo thêm nguồn cảm hứng và động lực để các trường đẩy nhanh tiến độ tự chủ.\r\n\r\nMột số hình ảnh Buổi làm việc\r\n\r\n1.jpg\r\nĐoàn đại biểu tham quan Thư viện truyền cảm hứng…\r\n \r\n\r\n2.jpg\r\n…và Trường quốc tế Việt Nam-Phần Lan (VFIS)\r\n \r\n\r\n3.jpg\r\nBuổi làm việc giữa Đoàn với Lãnh đạo TDTU\r\n \r\n\r\n4.jpg\r\nGS. Lê Vinh Danh chia xẻ những kinh nghiệm tự chủ của TDTU\r\n \r\n\r\n5.jpg\r\nÔng Phạm Ngọc Lan quan tâm đến những khó khăn về cơ chế mà TDTU đang đối mặt; và nhấn mạnh Hiệp hội sẽ luôn ủng hộ Nhà trường \r\n \r\n\r\n6.jpg\r\nĐoàn chụp hình lưu niệm với Lãnh đạo TDTU', '2019-10-20', 1, 1, 1, 1),
(2, 'Công ty chứng khoán Ngân hàng quân đội giao lưu với sinh viên về nghề chứng khoán', 'Chiều ngày 21/10/2019, Khoa tài chính ngân hàng (TCNH) Đại học Tôn Đức Thắng (TDTU) đã phối hợp với Công ty cổ phần chứng khoán Ngân hàng quân đội (MBS) tổ chức buổi giao lưu kết hợp tư vấn hướng nghiệp về Ngành chứng khoán cho sinh viên Khoa. \r\n\r\nCó hơn 400 sinh viên Khoa TCNH tham gia. Các diễn giả đến từ MBS đã cung cấp nhiều thông tin hữu ích về thị trường chứng khoán và các cơ hội nghề nghiệp tại MBS. Sinh viên cũng đã đặt câu hỏi cho diễn giả các vấn đề liên quan như: bắt đầu với nghề môi giới chứng khoán, kinh nghiệm để thành công trong nghề và các kỹ năng cần chuẩn bị.\r\n\r\nMBS là một trong 5 công ty chứng khoán có thị phần môi giới chứng khoán cơ sở lớn nhất Việt Nam. MBS là doanh nghiệp thân hữu đã ký thỏa thuận hợp tác với TDTU. ', '2019-10-08', 1, 100, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iddangnhap`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`idslide`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`idsukien`);

--
-- Chỉ mục cho bảng `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`idhinhanh`);

--
-- Chỉ mục cho bảng `thuvien`
--
ALTER TABLE `thuvien`
  ADD PRIMARY KEY (`idhinhanh`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`idtinhtrang`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `iddangnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `idhinhanh` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
