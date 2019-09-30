-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 29, 2019 lúc 09:55 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tocotoco`
CREATE DATABASE IF NOT EXISTS `tocotoco` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tocotoco`;
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chudegopy`
--

CREATE TABLE `chudegopy` (
  `cdgy_ma` int(11) NOT NULL,
  `cdgy_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `dh_ma` int(11) NOT NULL,
  `dh_ngaylap` datetime NOT NULL,
  `dh_noigiao` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_trangthaithanhtoan` int(11) NOT NULL,
  `httt_ma` int(11) NOT NULL,
  `kh_tendangnhap` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`dh_ma`, `dh_ngaylap`, `dh_noigiao`, `dh_trangthaithanhtoan`, `httt_ma`, `kh_tendangnhap`) VALUES
(1, '2019-09-27 22:28:16', '12, đ.3/2, Q.Ninh Kiều, TPCT', 0, 1, 'admin'),
(2, '2019-09-27 22:30:21', '33, Xô Viết Nghệ Tĩnh, TPCT', 0, 1, 'admin'),
(11, '2019-09-29 20:09:37', NULL, 0, 1, 'meomeomeo'),
(12, '2019-09-29 21:09:48', NULL, 0, 1, 'meomeomeo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `gy_ma` int(11) NOT NULL,
  `gy_hoten` varchar(45) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_email` varchar(45) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_diachi` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_dienthoai` varchar(45) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_tieude` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_noidung` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gy_ngaygopy` datetime DEFAULT NULL,
  `cdgy_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhsanpham`
--

CREATE TABLE `hinhsanpham` (
  `hsp_ma` int(11) NOT NULL,
  `hsp_tentaptin` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sp_ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhsanpham`
--

INSERT INTO `hinhsanpham` (`hsp_ma`, `hsp_tentaptin`, `sp_ma`) VALUES
(48, 'ts_toco.jpg', 1),
(49, 'ts_panda.jpg', 2),
(50, 'ts_raucau.jpg', 7),
(51, 'ts_baanhem.jpg', 3),
(52, 'ts_bacha.jpg', 8),
(53, 'ts_matcha.jpg', 9),
(54, 'ts_nhatdaudo.jpg', 4),
(55, 'ts_olong.jpg', 5),
(56, 'ts_tranchauhoanggia.jpg', 6),
(57, 'che_1.jpg', 10),
(58, 'che_2.jpg', 11),
(59, 'che_5.jpg', 12),
(60, 'che_12.jpg', 13),
(61, 'che_13.jpg', 14),
(63, 'fft_hongtravietquoc.jpg', 15),
(64, 'fft_sakurangannhi.jpg', 16),
(65, 'fft_tradautamphaletuyet.jpg', 17),
(66, 'fft_traduahonghac.jpg', 18),
(67, 'fft_traduanhietdoi.jpg', 19),
(68, 'fft_traxanh.jpg', 20),
(69, 'fft_traxanhchanhleo.jpg', 21),
(70, 'fft_traxanhkiwichanhleo.jpg', 22),
(71, 'fft_traxanhxoai.jpg', 23),
(72, 'm_dautamkemphomai.jpg', 24),
(73, 'm_hongtrakemphomai.jpg', 27),
(74, 'm_matchakemphomai.jpg', 26),
(75, 'm_olongkemphomai.jpg', 29),
(76, 'm_socolakemphomai.jpg', 25),
(77, 'm_traxanhkemphomai.jpg', 28),
(78, 'db_chanhleo.jpg', 30),
(79, 'db_hongtralatte.jpg', 34),
(80, 'db_olongthaicuc.jpg', 36),
(81, 'db_suatuoitranchauduongho.jpg', 33),
(82, 'db_traxanh.jpg', 31),
(83, 'db_traxanhsuavinhai.jpg', 35),
(84, 'db_xoai.jpg', 32);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `httt_ma` int(11) NOT NULL,
  `httt_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthucthanhtoan`
--

INSERT INTO `hinhthucthanhtoan` (`httt_ma`, `httt_ten`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Chuyển khoản'),
(3, 'Momo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_tendangnhap` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_matkhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_diachi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_dienthoai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_makichhoat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kh_trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`kh_tendangnhap`, `kh_matkhau`, `kh_ten`, `kh_diachi`, `kh_dienthoai`, `kh_email`, `kh_makichhoat`, `kh_trangthai`) VALUES
('aaa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'aaa', 'aaa', '123', 'minhb1606911@student.ctu.edu.vn', 'e30998ef9d8076377b612860641066fccb108a8c', 0),
('admin', '123', 'Quản trị', 'Số 4-Lý Tự Trọng-Cần Thơ', '0912.123.567', 'admin@salomon.vn', NULL, 0),
('dara', 'dara', 'dara', '3/2 TPCT', '0987999999', 'dara@gmail.com', NULL, 0),
('meomeomeo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'meomeomeo', 'aaaaaaaa', '222', 'minhb1606911@student.ctu.edu.vn', 'cba0397b976868c35556796b7315a78932fda670', 1),
('minhminh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'minhminh', 'aaa', '123', 'minhb1606911@student.ctu.edu.vn', '', 0),
('socola', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'socola', 'aaa', '123', 'minhb1606911@student.ctu.edu.vn', '79235089af386376598af81f33291c225159feaa', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_ma` int(11) NOT NULL,
  `km_ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `km_noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `km_tungay` date DEFAULT NULL,
  `km_denngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`km_ma`, `km_ten`, `km_noidung`, `km_tungay`, `km_denngay`) VALUES
(1, 'Nhân dịp tựu trường', '30%', '2019-08-02', '2019-09-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `lsp_ma` int(11) NOT NULL,
  `lsp_ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lsp_mota` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`lsp_ma`, `lsp_ten`, `lsp_mota`) VALUES
(1, 'Trà sữa', NULL),
(2, 'Chè', NULL),
(3, 'Fresh Fruit Tea', NULL),
(4, 'Macchiato', NULL),
(5, 'Special Drink', ''),
(6, 'kem', NULL),
(13, 'binsu', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_ma` int(11) NOT NULL,
  `sp_ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` decimal(12,2) DEFAULT 0.00,
  `sp_mota` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `lsp_ma` int(11) NOT NULL,
  `km_ma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_ma`, `sp_ten`, `sp_gia`, `sp_mota`, `lsp_ma`, `km_ma`) VALUES
(1, 'Trà Sữa ToCo', '46000.00', 'Sản phẩm là sự kết hợp hài hòa giữa hương thơm của hồng trà, vị bùi bùi của đậu đỏ, giòn sần sật của thạch kim cương và dẻo dai của trân châu.', 1, NULL),
(2, 'Trà Sữa Panda', '46000.00', 'Khi thưởng thức trà sữa Panda, khách hàng có thể cảm nhận rõ hương trà nhài thơm mát cùng vị ngọt ngậy béo của trà và sữa kết hợp cùng sợi trân châu dẻo dai.', 1, NULL),
(3, 'Trà Sữa Ba Anh Em', '48000.00', 'Bộ 3 “bằng hữu” trong đồ uống này chính là các loại topping đặc biệt: trân châu đen dẻo bùi đượm vị mật ong, thạch sương sáo mềm mịn thanh mát và pudding béo ngậy, thơm ngon.', 1, NULL),
(4, 'Trà Nhật Đậu Đỏ', '49000.00', 'Từng hạt đậu đỏ tươi được chế biến công phu, thơm mùi đậu, vị bùi bùi kết hợp với hương vị trà nổi tiếng của Nhật chiều lòng được cả những vị khách khó tính nhất.', 1, NULL),
(5, 'Trà Sữa Ô Long', '45000.00', 'Hương trà Ô long thơm mát, kết hợp vị sữa ngậy, độ ngọt vừa phải, hậu vị trà chát ngọt.', 1, NULL),
(6, 'Trà Sữa Trân Châu Hoàng Gia', '45000.00', 'Rất khó để cưỡng lại vị nồng từ hồng trà, vị sữa ngậy, không quá chát, không quá ngọt, cứ hòa quyện, hài hòa.Thêm trân châu dai dai, giòn giòn, ngon khó tả.', 1, NULL),
(7, 'Trà Sữa Rau Câu', '42000.00', 'Trà sữa rau câu đậm vị trà, thơm vị sữa kết hợp với sự thanh mát của sương sáo.', 1, NULL),
(8, 'Trà Sữa Bạc Hà', '40000.00', 'Vị bạc hà thanh mát, cay dịu vừa đủ, thêm vị sữa ngậy ngậy, tất cả như hòa quyện, đọng lại đầu lưỡi, thật khó một từ ngữ nào có thể diễn tả, chỉ biết hương vị ấy quyến rũ một cách lạ kì.', 1, NULL),
(9, 'Trà Sữa Matcha', '40000.00', 'Đậm hương vị Matcha kết hợp vị sữa ngậy béo để lại hậu vị chát ngọt đặc trưng.', 1, NULL),
(10, 'Xueshan1', '38000.00', 'Sản phẩm là sự kết hợp hài hòa giữa các thành phần cho cảm nhận mùi vị rất thật cửa khoai môn, khoai lang nhưng lại mang đến trải nghiệm trạng thái dẻo dai như trân châu khi nhai cùng hạt sen bùi thơm, vị thanh, ngọt mát của sương sáo và đá bào thảo mộc, quyện với creamer ngọt thơm béo ngậy.', 2, NULL),
(11, 'Xueshan2', '38000.00', 'Sản phẩm là sự kết hợp hài hòa giữa các thành phần ho cảm nhận mùi vị thơm đặc trưng của khoai viên, trân châu, vị thanh, ngọt mát của sương sáo và đá bào thảo mộc, ý dĩ, đậu đỏ thơm, bùi quyện với creamer ngọt thơm béo ngậy.', 2, NULL),
(12, 'Xueshan5', '35000.00', 'Sản phẩm là sự kết hợp hài hòa giữa các thành phần cho cảm nhận mùi thơm đặc trưng của khoai viên, trân châu, vị thanh mát của sương sáo, giòn sần sật của thạch conjac okinawa, bùi của ý dĩ và đậm vị matcha của matcha viên quyện với nước creamer ngọt thơm béo ngậy.', 2, NULL),
(13, 'Xueshan12', '38000.00', 'Sản phẩm là sự kết hợp hài hòa giữa các thành phần cho cảm nhận mùi thơm đặc trưng khoai viên, nếp viên và trân châu. Vị thanh ngọt mát của sương sáo đá bào thảo mộc, pudding thơm ngậy quyện với nước creamer ngọt thơm béo ngậy.', 2, NULL),
(14, 'Xueshan13', '35000.00', 'Sản phẩm là sự kết hợp hài hòa giữa các thành phần cho cảm nhận mùi thơm đặc trưng của khoai viên, vị thanh mát của sương sáo và đá bào thảo mộc, pudding thơm mềm, thạch okinawa giòn sần sật và đậm vị chát của matcha viên quyện với creamer ngọt thơm béo ngậy.', 2, NULL),
(15, 'Hồng Trà Việt Quất', '38000.00', 'Chút chát rất nhẹ từ hồng trà, thêm vị chua dịu, ngọt, thơm của việt quất và rau câu dừa mềm mềm, thanh mát, quả là 1 sự kết hợp vô cùng ăn ý.', 3, NULL),
(16, 'Sakura Ngân Nhĩ', '46000.00', 'Hương thơm hoa anh đào hòa quyện cùng hương chanh vàng đem lại cảm giác thanh mát. Vị chua ngọt của sản phẩm kết hợp với nhân ngân nhĩ đường phèn giòn sần sật đem lại trải nghiệm mới lạ.', 3, NULL),
(17, 'Trà Dâu Tằm Pha Lê Tuyết', '42000.00', 'Mứt dâu khi được hòa quyện cùng nước trà xanh tưởng chừng đối nghịch giữa ngọt – chát nhưng hóa ra lại bổ trợ tương hỗ cho nhau không ngờ, tạo nên một thức uống vừa quen vừa lạ.', 3, NULL),
(18, 'Trà Dứa Hồng Hạc', '38000.00', 'Khi thưởng thức “cô nàng” này bạn sẽ cảm nhận được hương vị đậm đà, tươi mát được tạo nên từ sự kết hợp của vị chua của dứa, dâu tây quyện cùng thạch băng tuyệt ngọt ngào.', 3, NULL),
(19, 'Trà Dứa Nhiệt Đới', '38000.00', 'Vị ngọt thanh chua chua ở đầu lưỡi mang lại sự pha trộn hài hòa giữa vị chua và ngọt, kết hợp với thạch băng tuyết ngọt ngào tạo nên cơn lốc thổi bat nóng nực.', 3, NULL),
(20, 'Trà Xanh', '29000.00', '', 3, 1),
(21, 'Trà Xanh Chanh Leo', '36000.00', 'Hành trình đầy đam mê và tâm huyết này sẽ tiếp tục nhân rộng để lan tỏa những ly trà thuần khiết nông sản Việt đến mọi miền trên Việt Nam và thế giới.', 3, NULL),
(22, 'Trà Xanh Kiwi Chanh Leo', '44000.00', 'Sản phẩm là sự kết hợp tuyệt hảo giữa vị chua dịu của chanh leo, ngọt thanh mát của kiwi và vị chát nhẹ đặc trưng của trà xanh nhài, thêm rau câu dừa mềm mềm, hương kiwi đọng mãi về sau.', 3, NULL),
(23, 'Trà Xanh Xoài', '36000.00', 'Mùi vị thơm lừng của xoài chín kết hợp với vị chát ngọt của trà xanh cùng cảm giác rau câu mát mượt tan chảy trong miệng.', 3, NULL),
(24, 'Dâu Tằm Kem Phô Mai', '48000.00', 'Vị chát ngọt của trà kết hợp với vị chua ngọt từ mứt dâu tằm, hoà quyện cùng một chút ngậy ngậy của kem phô mai chắc chắn sẽ mang đến một hành trình trải nghiệm hoàn toàn mới lạ cho vị giác của bạn.', 4, NULL),
(25, 'Socola Kem Phô Mai', '49000.00', 'Lớp kem phô mai trắng bông, tương phản lớp socola phía dưới, nhìn cực \" kích thích\". Uống một ngụm, vị kem béo ngậy, mằn mặn, nồng nồng vị phô mai hòa quyện vị socola ngọt ngào, thoảng thoảng đắng nhẹ, cứ đọng mãi đầu lưỡi cái hương vị khó quên ấy.', 4, NULL),
(26, 'Matcha Kem Phô Mai', '49000.00', 'Lớp kem sữa phô mai đánh bông phía trên mềm mịn, béo ngậy, mằn mặn, ngọt dịu. Thêm vị matcha thơm nồng, chát nhẹ. Cả vị ngọt của kem, vị mặn, thơm nồng của phô mai và vị chát của trà tan ra nơi đầu lưỡi.', 4, NULL),
(27, 'Hồng Trà Kem Phô Mai', '45000.00', 'Hồng trà kem phô mai được lòng fan nhờ sự kết hợp ăn ý giữ vị hồng trà truyền thống chát nhẹ và kem phô mai mằn mặn, sóng sánh, ngọt dịu.', 4, NULL),
(28, 'Trà Xanh Kem Phô Mai', '45000.00', 'Vị ban đầu là kem phô mai mặn ngậy béo khi uống lẫn hỗn hợp phô mai và trà xanh có vị ngậy hài hòa cùng hương thơm đặc trưng thanh mát của trà xanh.', 4, NULL),
(29, 'Ô Long Kem Phô Mai', '49000.00', NULL, 4, NULL),
(30, 'Yakult Chanh leo', '42000.00', 'Với 2 thành phần chính là sữa chua uống Yakult thần thánh của Nhật Bản và nước cốt chanh leo tươi giàu vitamin C, tốt cho sức khỏe.', 5, NULL),
(31, 'Yakult Trà Xanh', '42000.00', 'Thoang thoảng vị nhài và chút chát đặc trưng của những búp trà xanh ướp hương nhài, vị chua dịu của yakult cùng rau câu dừa mềm mềm, thanh mát, Yakult Trà xanh như mang trong mình cái dư vị thanh tao của đồng nội, như làm dịu lại cái nắng oi ả của những ngày hè.', 5, NULL),
(32, 'Yakult Xoài', '42000.00', 'Vị xoài thơm thật thơm, ngọt vừa phải, kết hợp với yakult chua dịu dịu, cùng rau câu dừa mềm mát, đảm bảo thử 1 lần sẽ nghiện.', 5, NULL),
(33, 'Sữa Tươi Trân Châu Đường Hổ', '49000.00', 'Tiger Sugar là sự kết hợp hoàn hảo giữa vị ngọt đặc trưng của siro đường hổ quyện với vị ngậy béo của sữa tươi cùng trân châu dẻo dai uống rồi lại muốn thêm ly nữa.', 5, NULL),
(34, 'Hồng Trà Latte', '48000.00', 'Hồng trà Latte của TocoToco được cải tiến từ Latte truyền thống vốn được làm từ cà phê, sữa tươi và bọt sữa.', 5, NULL),
(35, 'Trà Xanh Sữa Vị Nhài', '38000.00', 'Vị thanh mát hơi chát đặc trưng của lá trà quyện trong hương thơm nhẹ của hoa nhài. Vị trà sữa ngọt mát ngậy béo cùng hương thơm đặc trưng của trà cùng những hạt trân châu dẻo ngọt mang lại trải nghiệm ngon miệng hấp dẫn khó cưỡng.', 5, NULL),
(36, 'Ô Long Thái Cực', '45000.00', 'Sản phẩm là sự kết hợp giữa trà ô long cùng 2 loại topping: trân châu đen và kim cương trắng. Ô long thái cực có vị chát nhẹ đặc trưng của trà ô long, chứa nhiều chất dinh dưỡng tốt cho sức khoẻ.', 5, NULL),
(38, 'meomeo', '30000.00', '', 6, 1),
(39, 'gaugau', '30000.00', '', 13, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_dondathang`
--

CREATE TABLE `sanpham_dondathang` (
  `sp_ma` int(11) NOT NULL,
  `dh_ma` int(11) NOT NULL,
  `sp_dh_soluong` int(11) NOT NULL,
  `sp_dh_dongia` decimal(12,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_dondathang`
--

INSERT INTO `sanpham_dondathang` (`sp_ma`, `dh_ma`, `sp_dh_soluong`, `sp_dh_dongia`) VALUES
(3, 11, 2, '48000.00'),
(5, 11, 2, '45000.00'),
(14, 12, 5, '35000.00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chudegopy`
--
ALTER TABLE `chudegopy`
  ADD PRIMARY KEY (`cdgy_ma`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`dh_ma`),
  ADD KEY `httt_ma` (`httt_ma`),
  ADD KEY `kh_tendangnhap` (`kh_tendangnhap`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`gy_ma`),
  ADD KEY `gopy_chudegopy_idx` (`cdgy_ma`);

--
-- Chỉ mục cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD PRIMARY KEY (`hsp_ma`),
  ADD KEY `fk_hinhsanpham` (`sp_ma`);

--
-- Chỉ mục cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`httt_ma`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_tendangnhap`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_ma`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`lsp_ma`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_ma`),
  ADD KEY `sanpham_loaisanpham_idx` (`lsp_ma`),
  ADD KEY `sanpham_khuyenmai_idx` (`km_ma`);

--
-- Chỉ mục cho bảng `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD PRIMARY KEY (`sp_ma`,`dh_ma`),
  ADD KEY `sanpham_donhang_sanpham_idx` (`sp_ma`),
  ADD KEY `sanpham_donhang_dondathang_idx` (`dh_ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `dh_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  MODIFY `hsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `httt_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `km_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `lsp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `FK_dondathang_hinhthucthanhtoan` FOREIGN KEY (`httt_ma`) REFERENCES `hinhthucthanhtoan` (`httt_ma`),
  ADD CONSTRAINT `FK_dondathang_khachhang` FOREIGN KEY (`kh_tendangnhap`) REFERENCES `khachhang` (`kh_tendangnhap`);

--
-- Các ràng buộc cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `FK_gopy_chudegopy` FOREIGN KEY (`cdgy_ma`) REFERENCES `chudegopy` (`cdgy_ma`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD CONSTRAINT `FK_hinhsanpham_sanpham` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sanpham_khuyenmai` FOREIGN KEY (`km_ma`) REFERENCES `khuyenmai` (`km_ma`),
  ADD CONSTRAINT `FK_sanpham_loaisanpham` FOREIGN KEY (`lsp_ma`) REFERENCES `loaisanpham` (`lsp_ma`);

--
-- Các ràng buộc cho bảng `sanpham_dondathang`
--
ALTER TABLE `sanpham_dondathang`
  ADD CONSTRAINT `FK__dondathang` FOREIGN KEY (`dh_ma`) REFERENCES `dondathang` (`dh_ma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK__sanpham` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
