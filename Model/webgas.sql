-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 03:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgas`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanphamga`
--

CREATE TABLE `chitietsanphamga` (
  `ma` int(155) NOT NULL,
  `hinh` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dongia` int(155) NOT NULL,
  `giamgia` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietsanphamga`
--

INSERT INTO `chitietsanphamga` (`ma`, `hinh`, `dongia`, `giamgia`) VALUES
(1, '1.jpg', 435000, 400000),
(2, '2.jpg', 455000, 0),
(3, '3.jpg', 425000, 410000),
(4, '4.jpg', 415000, 0),
(5, '5.jpg', 435000, 390000),
(6, '6.jpg', 355000, 0),
(7, '7.jpg', 445000, 420000),
(8, '8.jpg', 455000, 0),
(9, '9.jpg', 415000, 400000),
(10, '10.jpg', 455000, 0),
(11, '11.jpg', 425000, 400000),
(12, '12.jpg', 455000, 0),
(13, '13.jpg', 1673000, 0),
(14, '14.jpg', 1673000, 0),
(15, '15.jpg', 1673000, 0),
(16, '16.jpg', 1673000, 0),
(17, '17.jpg', 1673000, 0),
(18, '18.jpg', 1673000, 0),
(19, '19.jpg', 25000, 0),
(20, '20.jpg', 20000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(3, 4, 3, 1245000, 0),
(4, 3, 1, 410000, 0),
(4, 4, 5, 2075000, 0),
(5, 3, 1, 410000, 0),
(5, 4, 5, 2075000, 0),
(6, 3, 1, 410000, 0),
(6, 4, 5, 2075000, 0),
(7, 3, 1, 410000, 0),
(7, 4, 5, 2075000, 0),
(8, 3, 1, 410000, 0),
(8, 4, 5, 2075000, 0),
(9, 3, 1, 410000, 0),
(9, 4, 5, 2075000, 0),
(10, 3, 1, 410000, 0),
(10, 4, 5, 2075000, 0),
(11, 3, 1, 410000, 0),
(11, 4, 5, 2075000, 0),
(12, 4, 12, 4980000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 1, '2024-01-15', 0),
(2, 1, '2024-01-15', 0),
(3, 1, '2024-01-15', 1245000),
(4, 1, '2024-01-15', 2485000),
(5, 1, '2024-01-15', 2485000),
(6, 1, '2024-01-15', 2485000),
(7, 1, '2024-01-15', 2485000),
(8, 1, '2024-01-15', 2485000),
(9, 1, '2024-01-15', 2485000),
(10, 1, '2024-01-15', 2485000),
(11, 1, '2024-01-15', 2485000),
(12, 1, '2024-01-15', 4980000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sodienthoai` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'hoangquan', 'hoangquan', '24f929c6ee111af13378f71e231099f6', 'quantruong4185@gmail.com', 'Ho Chi Minh', 784991264);

-- --------------------------------------------------------

--
-- Table structure for table `loaiga`
--

CREATE TABLE `loaiga` (
  `maloai` int(155) NOT NULL,
  `tenloai` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaiga`
--

INSERT INTO `loaiga` (`maloai`, `tenloai`) VALUES
(1, 'Bình Gas12kg'),
(2, 'Bình Gas 45kg'),
(3, 'Bình Gas mini');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamga`
--

CREATE TABLE `sanphamga` (
  `ma` int(155) NOT NULL,
  `ten` varchar(155) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maloai` int(155) NOT NULL,
  `mota` varchar(750) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanphamga`
--

INSERT INTO `sanphamga` (`ma`, `ten`, `maloai`, `mota`) VALUES
(1, 'GAS SIAM VAN NGANG 12KG', 1, 'Bình Siamgas van ngang 12kg là sản phẩm của Công ty TNHH Super Gas, doanh nghiệp 100% vốn đầu tư nước ngoài thuộc sở hữu của Tập đoàn Siamgas Thái Lan. Super Gas là một trong những doanh nghiệp uy tín chuyên cung cấp khí dầu mỏ hóa lỏng LPG công nghiệp và dân dụng tại thị trường Việt Nam.'),
(2, 'GAS ARIGATO XANH 12KG', 1, 'Arigato xanh 12kg là sản phẩm bình gas dân dụng mang thương hiệu Nhật của Công ty Dầu khí Thái Bình Dương, chính thức ra mắt từ tháng 7/2023. '),
(3, 'GAS ARIGATO HỒNG 12KG', 1, 'Arigato hồng 12kg là sản phẩm bình gas dân dụng mang thương hiệu Nhật của Công ty Dầu khí Thái Bình Dương, chính thức ra mắt từ tháng 7/2023.'),
(4, 'GAS SIAM VAN ĐỨNG 12KG', 1, '​​​​​​Tương tự Siamgas 12kg van ngang, Siamgas van đứng là sản phẩm của Công ty Super Gas thuộc Tập đoàn Siamgas Thái Lan. Đây là một trong những doanh nghiệp uy tín trên thế giới hoạt động trong lĩnh vực khí dầu mỏ hóa lỏng.'),
(5, 'GAS SUPER XÁM 12KG', 1, 'Super Gas là một trong những thương hiệu của Công ty TNHH Super Gas, doanh nghiệp 100% vốn đầu tư nước ngoài thuộc sở hữu của Tập đoàn Siamgas Thái Lan với hơn 40 năm kinh nghiệm trong ngành khí dầu mỏ hóa lỏng tại nhiều quốc gia. Bình gas Super 12kg xám là một trong những sản phẩm chất lượng, được người dùng tại TP.HCM và các tỉnh miền Nam tin dùn'),
(6, 'GAS PHOENIX XÁM 12KG', 1, 'Bình gas Phoenix xám 12kg là sản phẩm gas dân dụng thuộc Công ty TNHH Gas Phoenix (PHOENIX GAS). Doanh nghiệp này là sự hợp tác giữa Công ty Công nghiệp Việt Nam và Phoenix LPG Philippines, Inc. – Tiền thân là công ty gas thuộc Tập đoàn Origin, Úc với hơn 10 năm kinh nghiệm trong ngành gas tại thị trường Việt Nam.'),
(7, 'GAS PHOENIX VÀNG 12KG', 1, 'Bình gas Phoenix 12kg màu vàng là sản phẩm gas dân dụng thuộc Công ty TNHH Gas Phoenix (PHOENIX GAS). Doanh nghiệp này là sự hợp tác giữa Công ty Công nghiệp Việt Nam và Phoenix LPG Philippines, Inc. – Tiền thân là công ty gas thuộc Tập đoàn Origin, Úc với hơn 10 năm kinh nghiệm trong ngành gas tại thị trường Việt Nam.​​​​​'),
(8, 'GAS PHOENIX XANH VT 12KG', 1, 'Bình gas Phoenix xanh VT 12kg là sản phẩm gas dân dụng thuộc Công ty TNHH Gas Phoenix (PHOENIX GAS). Doanh nghiệp này là sự hợp tác giữa Công ty Công nghiệp Việt Nam và Phoenix LPG Philippines, Inc. – Tiền thân là công ty gas thuộc Tập đoàn Origin, Úc với hơn 10 năm kinh nghiệm trong ngành gas tại thị trường Việt Nam.'),
(9, 'GAS PETROVIETNAM XANH PL 12KG', 1, 'Cùng với Petrolimex và Saigon Petro, PetroVietnam thuộc Công ty CP Kinh doanh LPG Việt Nam (PV GAS LPG) là một trong 3 thương hiệu gas lớn nhất Việt Nam hiện nay. Theo ước tính đến năm 2021, gas PetroVitenam chiếm lĩnh phần lớn thị phần ở khu vực phía Bắc và khoảng 20% thị phần khu vực phía Nam. '),
(10, 'GAS PETROVIETNAM XANH SH 12KG', 1, 'Cùng với Petrolimex và Saigon Petro, PetroVietnam thuộc Công ty CP Kinh doanh LPG Việt Nam (PV GAS LPG) là một trong 3 thương hiệu gas lớn nhất Việt Nam hiện nay. Theo ước tính đến năm 2021, gas PetroVitenam chiếm lĩnh phần lớn thị phần ở khu vực phía Bắc và khoảng 20% thị phần khu vực phía Nam. '),
(11, 'GAS SAIGON PETRO XÁM 12KG', 1, '​​​Cùng với Petrolimex và PetroVietnam, Saigon Petro hiện là một trong 3 thương hiệu gas trong nước có sản lượng và thị phần lớn nhất Việt Nam với sản lượng trên 6.500 tấn/tháng, chiếm 15% thị phần gas dân dụng cả nước và 20% thị phần gas dân dụng phía Nam. \r\n\r\n25 năm hình thành và phát triển mạnh mẽ, đến nay, Saigon Petro đã cung cấp cho thị trường trên 1 triệu vỏ bình gas các loại. Cùng với đó là hệ thống phân phối ngày càng mở rộng với 70 nhà phân phối, gần 5.000 đại lý từ Đà Nẵng trở vào.\r\n\r\nCông ty hiện có 5 trạm chiết nạp gas tại TP.HCM, Đồng Nai, Bình Phước, Tiền Giang, Cần Thơ với công suất chiết nạp lên đến 12.000 tấn/năm.'),
(12, 'GAS ELF 12.5KG', 1, 'Totalgaz Việt Nam là một thành viên thuộc Tập đoàn TotalEnergies (Pháp) - 1 trong 4 tập đoàn năng lượng lớn nhất toàn cầu với hơn gần 100 năm bề dày lịch sử. Đến nay, các sản phẩm của TotalEnergies đã có mặt tại hơn 130 quốc gia trên toàn thế giới, trong đó có Việt Nam.\r\n\r\nBước chân vào thị trường Việt Nam từ những năm đầu thập niên 90, Totalgaz nhanh chóng được người tiêu dùng trong nước đón nhận và trở thành 1 trong 5 doanh nghiệp đầu mối gas hàng đầu với 2 thương hiệu Total và Elf gaz.'),
(13, 'GAS GAS4.0 45KG', 2, 'Gas4.0 Đỏ 45kg là sản phẩm bình gas công nghiệp thuộc Công ty Gas Tấn Tài - một trong những doanh nghiệp chiết nạp, kinh doanh khí dầu mỏ hóa lỏng uy tín tại khu vực phía Nam.'),
(14, 'GAS GAS4.0 XANH 45KG', 2, 'Gas4.0 Xanh 45kg là sản phẩm bình gas công nghiệp thuộc Công ty Gas Tấn Tài - một trong những doanh nghiệp chiết nạp, kinh doanh khí dầu mỏ hóa lỏng uy tín tại khu vực phía Nam.'),
(15, 'GAS GAS4.0 XÁM 1 VAN 45KG', 2, '​​​​​​​​​​Gas4.0 Xám 45kg là sản phẩm thuộc Công ty Gas Tấn Tài - một trong những doanh nghiệp chiết nạp, kinh doanh khí dầu mỏ hóa lỏng uy tín tại khu vực phía Nam.'),
(16, 'GAS SIAM 45KG', 2, 'Siamgas 45kg (thương hiệu cũ là gas Shell) là sản phẩm bình gas công nghiệp được sản xuất bởi Công ty TNHH Super Gas -  doanh nghiệp 100% vốn đầu tư nước ngoài thuộc sở hữu của Tập đoàn Siamgas Thái Lan. Siamgas là một trong những thương hiệu uy tín, chuyên cung cấp khí dầu mỏ hóa lỏng LPG công nghiệp và dân dụng tại thị trường Việt Nam.'),
(17, 'GAS PHOENIX 45KG', 2, 'Bình gas Phoenix 45kg là sản phẩm gas công nghiệp thuộc Phoenix Gas - một trong 10 thương hiệu gas uy tín tại Việt Nam hiện nay'),
(18, 'GAS GIA ĐÌNH 45KG', 2, 'Gas Gia Đình 45kg là sản phẩm bình gas công nghiệp của Gia Đình Gas - một trong 10 thương hiệu gas uy tín tại thị trường Việt Nam hiện nay. '),
(19, 'GAS LON NAMILUX', 3, 'Lon gas Namilux là sản phẩm của TAEYANG CORPORATION (KOREA), được Namilux nhập khẩu trực tiếp và phân phối tại Việt Nam. Đây là dòng sản phẩm chuyên dụng cho các bếp gas mini, đèn khò mini, được sử dụng rộng rãi tại quán ăn, nhà hàng, gia đình ở nhiều quốc gia trên thế giới.'),
(20, 'GAS LON IKURA', 3, 'Lon gas Ikura là loại bình gas mini cao cấp được nhập khẩu từ Hàn Quốc, chuyên sử dụng cho các dòng bếp gas mini, đèn khò mini. Sản phẩm được sử dụng rộng rãi tại các nhà hàng, quán ăn tại Việt Nam, chuyên dùng để chế biến các món lẩu, nướng, hấp,... hoặc sử dụng trong gia đình, người độc thân có nhu cầu nấu nướng ít muốn tiết kiệm chi phí.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsanphamga`
--
ALTER TABLE `chitietsanphamga`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaiga`
--
ALTER TABLE `loaiga`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanphamga`
--
ALTER TABLE `sanphamga`
  ADD PRIMARY KEY (`ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsanphamga`
--
ALTER TABLE `chitietsanphamga`
  MODIFY `ma` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaiga`
--
ALTER TABLE `loaiga`
  MODIFY `maloai` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanphamga`
--
ALTER TABLE `sanphamga`
  MODIFY `ma` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
