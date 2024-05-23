-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2024 lúc 06:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldogiadung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `CategoryID` int(11) NOT NULL,
  `Catename` varchar(45) NOT NULL,
  `Status` bit(5) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`CategoryID`, `Catename`, `Status`, `TypeID`, `Description`) VALUES
(1, 'Đồ nấu ăn', b'00000', 1, 'Cate_lon'),
(2, 'Đồ lưu trữ thực phẩm', b'00000', 1, '<p>Đồ lưu trữ thực phẩm</p>'),
(3, 'Đồ rửa chén và bát', b'00000', 1, 'cate_lon'),
(4, 'Đồ dùng nhà bếp', b'00000', 1, 'cate_lon'),
(5, 'Đồ điện tử các loại', b'00000', 1, '<p>test</p>'),
(6, 'Máy xay và máy ép ', b'00000', 1, 'Máy xay '),
(7, 'Đèn các Loại', b'00000', 1, 'Đèn ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Conten` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Conten`, `Message`, `Creat_at`) VALUES
(3, 'Nguyễn Minh Phương', 'phuong23@gmail.com', 'Mua hàng bị lỗi ', ' Tôi có mua 1 đơn hàng vào ngày 23/11 nhưng bị lỗi xin shop hãy phản hồi lại cho tôi qua email', '2023-11-28 19:54:37'),
(4, 'Hoàng Thùy Dương', 'duongk12@gmail.com', 'Mua sản phẩm', ' Tôi muốn mua sản phẩm máy xay g109 nhưng không mua được shop giúp tôi nhé', '2023-11-28 19:56:58'),
(5, 'Phuong  Nguyen', 'phuong@gmail.com', 'khong', ' khong', '2023-12-02 07:38:38'),
(6, 'Phuong  Nguyen', 'phuong@gmail.com', 'khong', ' khong', '2023-12-02 07:38:58'),
(7, 'Phuong   Nguyen', 'phuong@gmail.com', 'khong', 'khong', '2023-12-02 07:39:35'),
(8, 'Nguyen   Phuong', 'nam@gmail.com', 'không', ' không', '2023-12-02 07:43:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_product`
--

CREATE TABLE `image_product` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Img_path` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Creatat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_product`
--

INSERT INTO `image_product` (`ID`, `ProductID`, `Img_path`, `Description`, `Creatat`) VALUES
(2, 1, 'noi-ap-suat-da-nang-kochi-anh-4-1.jpg', '', '2023-11-09 11:49:54'),
(3, 1, 'noi-ap-suat-da-nang-kochi-anh-9-1.jpg', '', '2023-11-09 11:50:23'),
(4, 1, 'noi-ap-suat-da-nang-kochi-anh-10-1.jpg', 'test', '2023-11-09 11:51:01'),
(5, 2, 'sp160-1.jpg', '', '2023-11-09 13:05:03'),
(6, 2, 'sp160-2.jpg', '', '2023-11-09 13:05:36'),
(8, 2, 'sp160-3.jpg', '', '2023-11-09 13:06:55'),
(9, 2, '6.-Fissler-Luno-4-nồi-600x600.jpg', '', '2023-11-09 13:07:56'),
(10, 2, 'anh2.jpg', '', '2023-11-09 13:09:29'),
(11, 32, 'bong-den-tru-boc_con.jpg', '', '2023-11-13 16:48:55'),
(12, 32, 'bong-den-tru-boc_con2.jpg', '', '2023-11-13 16:48:55'),
(13, 32, 'con3.jpg', '', '2023-11-13 16:48:55'),
(14, 33, 'den-pin-cam-tay-con.jpg', '', '2023-11-13 17:02:09'),
(15, 33, 'den-pin-cam-tay-l832-1.jpg', '', '2023-11-13 17:02:09'),
(16, 34, 'anh3con.jpg', '', '2023-11-13 17:14:01'),
(17, 34, 'anh4con.jpg', '', '2023-11-13 17:14:01'),
(18, 34, 'den-trang-tri-giang-sinh-co-dien-cam-tay.jpg', '', '2023-11-13 17:14:01'),
(19, 35, 'chao-to-ong-28cm_con.jpg', '', '2023-11-13 17:20:45'),
(20, 35, 'chao-to-ong-28cm-day-bang.jpg', '', '2023-11-13 17:20:45'),
(21, 36, 'dao_con.jpg', '', '2023-11-13 17:25:15'),
(22, 36, 'dao-nho-got-trai-cay-nhat-ban-513-1.jpg', '', '2023-11-13 17:25:15'),
(23, 37, 'may-xay-cam-tay-sokany-1708.jpg', '', '2023-11-22 14:14:50'),
(24, 38, '12_0345-ma-y-xay-sinh-to-sokany-sk-146s-1.jpg', '', '2023-11-22 14:21:18'),
(25, 38, 'con1.jpg', '', '2023-11-22 14:21:18'),
(26, 38, 'con2.jpg', '', '2023-11-22 14:21:18'),
(27, 38, 'con3.jpg', '', '2023-11-22 14:21:18'),
(28, 38, 'con4.jpg', '', '2023-11-22 14:21:18'),
(29, 39, 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm.jpg', '', '2023-11-22 14:25:50'),
(30, 39, 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm-1_con1.jpg', '', '2023-11-22 14:25:50'),
(31, 39, 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm-2_con2.jpg', '', '2023-11-22 14:25:50'),
(32, 39, 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm-3_con3.jpg', '', '2023-11-22 14:25:50'),
(33, 39, 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm-4_con4.jpg', '', '2023-11-22 14:25:50'),
(34, 40, '12_0135-may-ep-hoa-qua-sokany-4000-1.jpg', '', '2023-11-22 14:32:01'),
(35, 40, '0150-may-ep-hoa-qua-sokany-4000_con1.jpg', '', '2023-11-22 14:32:01'),
(36, 40, '0153-may-ep-hoa-qua-sokany-4000_con2.jpg', '', '2023-11-22 14:32:01'),
(37, 40, '0156-may-ep-hoa-qua-sokany-4000_con3.jpg', '', '2023-11-22 14:32:01'),
(38, 41, 'chao-chien-trung-nhieu-hinh-4-lo-1_con1.jpg', '', '2023-11-22 14:37:52'),
(39, 41, 'chao-chien-trung-nhieu-hinh-4-lo-2_con2.jpg', '', '2023-11-22 14:37:52'),
(40, 41, 'chao-chien-trung-nhieu-hinh-4-lo-3_con3.jpg', '', '2023-11-22 14:37:52'),
(41, 41, 'chao-chien-trung-nhieu-hinh-4-lo-4_con4.jpg', '', '2023-11-22 14:37:52'),
(42, 41, 'chao-chien-trung-nhieu-hinh-4-lo-6-con5.jpg', '', '2023-11-22 14:37:52'),
(43, 41, 'chao-chien-trung-nhieu-hinh-4-lo-7.jpg', '', '2023-11-22 14:37:52'),
(44, 42, '46d4473aab9aa0b5135426a53d4f69a3.jpg', '', '2023-11-22 14:45:05'),
(45, 42, '56cc7567f38cb6c7330613a5632a8f8d_con.jpg', '', '2023-11-22 14:45:05'),
(46, 42, '0156-may-ep-hoa-qua-sokany-4000_con3.jpg', '', '2023-11-22 14:45:05'),
(47, 42, 'a0b9f5391499fc3d00d8f61cbf7bd2ea_con2.jpg', '', '2023-11-22 14:45:05'),
(48, 43, 'anh1.jpg', '', '2023-11-22 14:50:01'),
(49, 43, 'anh1_con.jpg', '', '2023-11-22 14:50:01'),
(50, 43, 'anh1_con2.jpg', '', '2023-11-22 14:50:01'),
(51, 44, 'myst-k86s_con1.jpg', '', '2023-11-22 15:02:53'),
(52, 44, 'myst-k86s_con2.jpg', '', '2023-11-22 15:02:53'),
(53, 44, 'myst-k86s_con3.jpg', '', '2023-11-22 15:02:53'),
(54, 46, 'dao_con.jpg', '', '2023-11-22 15:16:38'),
(55, 46, 'dao_con2.jpg', '', '2023-11-22 15:16:38'),
(56, 47, '2.1.jpg', '', '2023-11-22 15:19:46'),
(57, 47, '2.2.jpg', '', '2023-11-22 15:19:46'),
(58, 47, '2.3.jpg', '', '2023-11-22 15:19:46'),
(59, 49, 'camera-wifi-yoosee-ptz-6m-3515.jpg', '', '2023-11-22 15:28:26'),
(60, 49, 'camera-wifi-yoosee-ptz-6m-3515-1.jpg', '', '2023-11-22 15:28:26'),
(61, 49, 'camera-wifi-yoosee-ptz-6m-3515-2.jpg', '', '2023-11-22 15:28:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Email` varchar(36) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Status` bit(10) NOT NULL,
  `total` float NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`ID`, `Name`, `Adress`, `Email`, `Phone`, `Status`, `total`, `Time`, `Description`) VALUES
(1, 'Đoàn Trọng Nhất', '236 Khương Đình, Thanh Xuân,Hà Nội', 'nhatdz22222@gmail.com', 372583407, b'0000000000', 23670000, '2023-10-26 08:13:07', 'Test đặt hàng'),
(2, 'Nguyễn Văn A', '236 Hàng Bài,Hoàn Kiếm,Hà Nội', 'hoangkha1287p@gmail.com', 372599999, b'0000000000', 28780000, '2023-10-26 08:26:27', 'Anh giao đến bác Hòa 236 hàng bài nhé'),
(3, 'Hoàng Thị Ánh', '15 Phố Bạch Mai Hai Bà Trưng Hà Nội', 'anhtran1237@gmail.com', 987891021, b'0000000000', 14820000, '2023-10-26 16:50:31', 'Shop đóng gói cẩn thận nhé'),
(13, 'Nguyễn Thị Thảo', '86 Láng Hạ, Đống Đa, Hà Nội', 'thaonguyen23@gmail.com', 793394951, b'0000000000', 1800000, '2023-11-13 17:40:35', 'Ngõ bên cạnh tòa 88 láng hạ shop nhé '),
(14, 'Trần Quang Mạnh', '218 Lĩnh nam, hoàng mai,Hà nội', 'manhdom13@gmail.com', 98573333, b'0000000000', 3811500, '2023-11-13 17:47:04', 'ok test'),
(16, 'Hoàng Thị Trinh', '217 Phố Huế ', 'trinhtho189@gmail.com', 372599995, b'0000000000', 4870700, '2023-11-13 17:52:33', 'test'),
(17, 'Đoàn Văn hào', '72 Nguyễn Tuân, Thanh xuân hà Nội', 'haotran278@gmail.com', 98789122, b'0000000000', 4500000, '2023-11-13 17:56:00', 'ok '),
(18, 'Nguyễn Văn Hùng', '218 Hoàng văn,Hà nội', 'hungshin12@gmail.com', 372599333, b'0000000000', 8350000, '2023-11-13 18:01:52', 'Nhất test'),
(19, 'Nguyễn Minh Phương', '113  Hoàng Mai', 'phuong114@gmail.com', 2147483647, b'0000000000', 297700, '2023-11-14 06:19:04', 'Ok shop '),
(20, 'hung', '113  Lĩnh NAm', 'hoangkha1287p@gmail.com', 0, b'0000000000', 5915000, '2023-11-23 04:14:56', ''),
(21, 'Nguyễn Văn Hòa', '113  Phố Huế, Hà Nội', 'hoanguyen23@gmail.com', 567891291, b'0000000000', 43000, '2023-11-25 02:39:35', 'test'),
(22, 'Đoàn Trọng Nhất', 'Hà Nội', 'nhatdz22222@gmail.com', 372583407, b'0000000000', 2189000, '2023-11-25 08:27:36', 'Test '),
(23, 'Nguyen Van Anh', 'Hà Nội', 'nhatdz22222@gmail.com', 372583407, b'0000000000', 156000, '2023-11-28 09:37:08', 'xc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_deltail`
--

CREATE TABLE `oder_deltail` (
  `ID` int(11) NOT NULL,
  `oderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder_deltail`
--

INSERT INTO `oder_deltail` (`ID`, `oderID`, `productID`, `quantity`, `price`, `Time`, `Description`) VALUES
(1, 1, 12, 3, 7890000, '2023-10-26 08:13:07', ''),
(2, 2, 12, 2, 7890000, '2023-10-26 08:26:27', ''),
(3, 2, 4, 1, 13000000, '2023-10-26 08:26:28', ''),
(4, 3, 4, 1, 13000000, '2023-10-26 16:50:31', ''),
(5, 3, 5, 1, 470000, '2023-10-26 16:50:31', ''),
(6, 3, 1, 1, 1350000, '2023-10-26 16:50:31', ''),
(17, 13, 36, 2, 10000, '2023-11-13 17:40:35', ''),
(18, 13, 34, 1, 30000, '2023-11-13 17:40:35', ''),
(19, 13, 21, 1, 1750000, '2023-11-13 17:40:35', ''),
(20, 14, 10, 1, 3740000, '2023-11-13 17:47:04', ''),
(21, 14, 33, 1, 71500, '2023-11-13 17:47:04', ''),
(22, 16, 25, 1, 50700, '2023-11-13 17:52:33', ''),
(23, 16, 7, 5, 964000, '2023-11-13 17:52:33', ''),
(24, 17, 11, 1, 4500000, '2023-11-13 17:56:00', ''),
(25, 18, 19, 1, 1650000, '2023-11-13 18:01:52', ''),
(26, 18, 20, 1, 6700000, '2023-11-13 18:01:52', ''),
(27, 19, 32, 4, 55900, '2023-11-14 06:19:04', ''),
(28, 19, 24, 1, 74100, '2023-11-14 06:19:04', ''),
(29, 20, 6, 1, 4951000, '2023-11-23 04:14:56', ''),
(30, 20, 7, 1, 964000, '2023-11-23 04:14:56', ''),
(31, 21, 50, 1, 43000, '2023-11-25 02:39:35', ''),
(32, 22, 52, 1, 39000, '2023-11-25 08:27:36', ''),
(33, 22, 47, 1, 2150000, '2023-11-25 08:27:36', ''),
(34, 23, 48, 1, 78000, '2023-11-28 09:37:08', ''),
(35, 23, 52, 2, 39000, '2023-11-28 09:37:08', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `Titles` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Descrption` varchar(1000) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `conten` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`ID`, `Titles`, `Image`, `Descrption`, `creat_at`, `conten`) VALUES
(2, 'CÔNG THỨC SINH TỐ ĐẸP DA TRỊ MỤN HIỆU QUẢ TRONG NGÀY HÈ OI BỨC', 'detox-600x337.jpg', 'Post 3', '2023-11-11 07:58:50', '<p>Sắp vào hè, thời tiết trở nên nắng nóng khiến cho làn da của nhiều chị em nổi nhiều mụn hoặc làm cho da trở nên đen xạm. Đây chắc hẳn là nỗi lo của rất nhiều chị em phụ nữ, vì thế Gia dụng Gertech sẽ bật mí cho bạn bí quyết để sở hữu làn da trắng sáng, những cách dưới đây đều rất thân quen với nhiều người và trở thành công cụ làm đẹp hữu hiệu thay vì sử dụng những loại kem dưỡng, vừa tốn kém lại không đảm bảo độ an toàn. Hãy theo dõi bài viết dưới đây để nắm trong tay những Công thức sinh tố đẹp da, ngừa mụn hiệu quả bạn nhé.</p><h2><strong>1. Sinh tố đu đủ chanh</strong></h2><p>Sinh tố chanh đu đủ là món thức uống không những tốt cho sức khỏe mà còn là Công thức sinh tố đẹp da. Đu đủ ngon, ngọt kết hợp cùng vị chua và thơm của chanh tạo nên ly thức uống thơm mát giúp bạn khởi động một ngày mới tràn đầy năng lượng.</p><h3><strong>Nguyên liệu&nbsp;</strong></h3><ul><li>Đủ đủ chín: 1/4 quả</li><li>Chanh: 1/2 quả</li><li>Nước: 100ml</li></ul><h3><strong>Cách chế biến Sinh tố chanh đu đủ</strong></h3><ul><li>Đu đủ gọt vỏ bỏ hạt. Chanh vắt lấy nước cốt bỏ hạt.</li><li>Cho tất cả nguyên liệu vào máy xay sinh tố xay nhuyễn.</li></ul><p><strong>Mẹo</strong>: Bạn nên chọn đu đủ chín để thức uống thơm ngon hơn.</p><h3><strong>Thành phẩm</strong></h3><p>Với món sinh tố chanh đu đủ sẽ giúp giảm tiết dầu thừa trên mặt, tiêu viêm trị sẹo thâm sau mụn, thải độc và lợi tiểu.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/harper-bazaar-sinh-to-du-du-giam-can-how-daily.jpeg\" alt=\"Công thức sinh tố đẹp da\" width=\"500\" height=\"750\"></p><h2><strong>2. Sinh tố kiwi sữa chua</strong></h2><p>Sữa chua được xem là thần dược của hệ miễn dịch hàng ngàn năm nay cũng là Công thức sinh tố đẹp da, ngăn ngừa mụn . Khi kết hợp sữa chua cùng các loại trái cây sẽ tạo nên vô vàn các món ăn, thức uống bổ dưỡng. Và trong các loại trái cây thì kiwi chính là nguồn cung cấp dồi dào vitamin C và vitamin E. Nói đến đây thì bạn cũng biết Gia dụng Gertech sẽ chia sẻ với bạn món nước nào rồi đúng không! Đó chính là sinh tố kiwi sữa chua.</p><h3><strong>Công thức sinh tố đẹp da – Nguyên liệu</strong></h3><ul><li>Kiwi: 4 trái&nbsp;</li><li>Sữa chua: 50gr</li><li>Mật ong: 2 muỗng cafe</li><li>Đá viên: 50gr</li></ul><h3><strong>Cách chế biến</strong></h3><ul><li>Kiwi gọt vỏ cắt nhỏ rồi cho vào máy xay</li><li>Xay sinh tố kiwi sữa chua</li><li>Thêm sữa chua, mật ong và 1 ít đá viên (số lượng đá cho tuỳ thích) rồi xay mịn nhuyễn các nguyên liệu.</li></ul><h3><strong>Thành phẩm</strong></h3><p>Trong kiwi có chứa rất nhiều vitamin, khoáng chất, protein,… có tác dụng giảm mỡ, làm đẹp da,chống lão hóa, tăng cường hệ miễn dịch và ngừa mụn hiệu quả</p><p>Ly thức uống không những bổ dưỡng mà còn vô cùng thơm ngon với vị chua của kiwi kết hợp cùng sữa chua chua nhẹ, beo béo và sánh mịn thật tuyệt vời!</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/sinh-to-kiwi.jpg\" alt=\"sinh-to-kiwi-sua-chua\" width=\"500\" height=\"333\"></p><h2><strong>3. Công thức sinh tố đẹp da – Sinh tố rau má đậu xanh</strong></h2><p>Rau má &amp; đậu xanh là 2 thực phẩm mát gan, giúp giải nhiệt tốt trong những ngày thời tiết oi ả, nóng bức. Sinh tố rau má đậu xanh với đậu xanh béo, bùi, ngọt cùng rau má thanh mát rất bổ dưỡng và cách thực hiện cũng vô cùng đơn giản. Cùng bắt tay vào làm ngay nhé!</p><h3><strong>Nguyên liệu</strong></h3><ul><li>Rau má: 500gr&nbsp;</li><li>Đậu xanh cà vỏ: 150gr</li><li>Sữa đặc: 200ml&nbsp;</li><li>Nước lọc: 1l</li></ul><h3><strong>Công thức sinh tố đẹp da – Cách chế biến</strong></h3><ul><li>Đậu xanh sau khi ngâm khoảng 4 – 5 tiếng cho vào nồi hấp hấp chín trong 30 phút.</li><li>Xay và lọc lấy nước rau má</li><li>Rau má mua về ngắt bỏ bớt phần thân rau má và nhặt những cọng rau bị vàng, rửa sạch rồi để ráo.</li><li>Cho 500gr rau má vào trong máy xay sinh tố thêm 1 lít nước lọc và xay nhuyễn hỗn hợp.</li><li>Cho rau má đã xay qua rây hoặc ra túi vắt và lọc bỏ phần bã.</li></ul><p><strong>Lưu ý</strong>: Để công đoạn được tiến hành dễ dàng hơn có thể chia ra xay 250gr rau má và 500ml nước trước sau đó xay tiếp phần còn lại.</p><ul><li>Xay hỗn hợp với nhau</li><li>Cho vào máy xay đậu xanh đã hấp chín, 200ml sữa đặc và phần nước rau má đã được lọc ấn nút và xay cho đến khi các nguyên liệu hòa trộn đều với nhau.</li></ul><h3><strong>Thành phẩm</strong></h3><p>Đậu xanh rau má mang đến cho bạn một cảm giác thanh mát vào những ngày hè. Vị béo bùi của đậu kết hợp với rau má tươi mát một sự kết hợp tuyệt vời ngon không cưỡng nổi.</p><p>Đậu xanh rau má nên được sử dụng ngay khi xay xong, nếu không dùng hết thì có thể bảo quản trong tủ lạnh và dùng trong ngày.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/dau-xanh-rau-ma-scaled.jpg\" alt=\"Công thức sinh tố đẹp da - Sinh tố rau má đậu xanh\" width=\"500\" height=\"375\"></p><h2><strong>4. Công thức sinh tố đẹp da – Sinh tố diếp cá</strong></h2><p>Nhắc đến cứu tinh của làn da khi bị mụn thâm chúng ta sẽ nghĩ ngay đến rau diếp cá, loại rau chứa nhiều chất kháng viêm và tăng sức đề kháng. Bên cạnh đó, để sở hữu một làn da khỏe đẹp thì uống sinh tố diếp cá sẽ giúp bạn thấy được sự cải thiện rõ rệt. Rau diếp cá được xay nhuyễn với nước đun sôi để nguội cùng đậu xanh béo bùi và 1 ít đường tùy khẩu vị rất dễ uống.</p><h3><strong>Công thức sinh tố đẹp da- Nguyên liệu</strong></h3><ul><li>Rau diếp cá: 150gr</li><li>Muối: 1 ít</li></ul><h3><strong>Cách chế biến Nước ép diếp cá</strong></h3><ul><li>Đầu tiên, bạn nhặt rau diếp cá, rửa sơ qua một lần nước sạch.</li><li>Sau đó, bạn hòa tan nước muối loãng và ngâm rau diếp cá trong khoảng 30 phút để loại bỏ hoàn toàn bụi bẩn cũng như thuốc trừ sâu trong quá trình trồng trọt. Vớt ra để ráo.</li><li>Xay rau diếp cá</li><li>Bạn cho hết toàn bộ rau diếp cá đã được làm sạch vào cối xay sinh tố.</li><li>Tiếp đó, cho thêm 500ml nước vào cối, đậy nắp và nhấn nút xay cho đến khi hỗn hợp nhuyễn hoàn toàn.</li><li>Cuối cùng, lọc hỗn hợp qua rây để loại bỏ cặn, lấy phần nước cốt rau diếp cá.</li></ul><h3><strong>Thành phẩm</strong></h3><p>Nước rau diếp cá nguyên chất có màu xanh đậm, cùng vị chua nhẹ cùng mùi đặc trưng của loại rau này. Đối với những ai không quen mùi của rau diếp cá bạn có thể ướp lạnh một chút trong ngăn mát tủ lạnh và khuấy thêm đường để uống chung nhé!</p><p>Sinh tố rau diếp cá nên được uống ngay sau khi bạn vừa xay xong hoặc để&nbsp;tủ lạnh&nbsp;5 phút rồi mới thưởng thức để giảm bớt vị tanh và hăng của loại rau này.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/nuoc-rau-diep-ca-16x9.jpg\" alt=\"Công thức sinh tố đẹp da - Sinh tố diếp cá\" width=\"500\" height=\"281\"></p><h2><strong>5. Công thức sinh tố đẹp da – Sinh tố dưa leo cần tây cải bó xôi</strong></h2><p>Còn gì tuyệt vời hơn khi được tận hưởng ly sinh tố thơm mát, giải nhiệt từ các loại rau xanh trong những ngày hè nóng bức. Sinh tố dưa leo cần tây cải bó xôi với vị thanh mát của dưa leo hòa cùng vị chát của cải bó xôi và một chút đắng nhưng ngọt nhẹ của cần tây tạo nên một ly thức uống khiến bạn cứ muốn thưởng thức mãi thôi! Chần chờ gì nữa mà không vào bếp ngay nào!</p><h3><strong>Nguyên liệu</strong></h3><ul><li>Cải bó xôi: 1 bó</li><li>Cải xoăn: 1 bó</li><li>Cần tây: 1 nhánh</li><li>Dưa leo: 1 trái</li><li>Gừng: 1 lát&nbsp;</li><li>Chanh: 1 trái</li><li>Đá: 1 chén</li></ul><h3><strong>&nbsp;Công thức sinh tố đẹp da- Cách chế biến</strong></h3><ul><li>Cải bó xôi và cải xoăn rửa sạch, cắt bỏ phần cuống, giữ phần lá.</li><li>Cần tây rửa sạch, cắt khúc khoảng 4cm.</li><li>Dưa leo rửa sạch, cắt thành các khoanh khoảng 2 – 3cm.</li><li>Cho hết rau quả vào trong máy xay sinh tố. Bỏ thêm vào máy xay 1 lát gừng, nước cốt chanh. Tiếp đến xay nhuyễn tất cả các nguyên liệu với nhau.</li><li>Cuối cùng bạn cho thêm đá, rồi xay thêm một lần nữa đến khi hỗn hợp mịn thì tắt máy. Rót ra ly để thưởng thức.</li></ul><h3><strong>Thành phẩm</strong></h3><p>Ly sinh tố với các loại rau xanh nhưng lại cực thơm ngon, dễ uống. Kết hợp thêm chút chua nhẹ cân bằng lại hương vị. Ly sinh tố với vẻ ngoài mát mắt còn giúp thanh lọc cho cơ thể bên trong nữa đấy nhé.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/sinh-to-dua-leo-can-tay-cai-bo-xoi-thumbnail-2.jpg\" alt=\" Sinh tố dưa leo cần tây cải bó xôi\" width=\"500\" height=\"282\"></p><h2><strong>6. Công thức sinh tố đẹp da- Sinh tố cà rốt bí đỏ</strong></h2><p>Là một “fan cứng” của bí đỏ thì chắc hẳn bạn sẽ không thể bỏ qua món sinh tố cà rốt bí đỏ cực thơm ngon và bổ dưỡng này đâu. Bí đỏ bùi, béo kết hợp cùng cà rốt thơm, ngọt, giàu dinh dưỡng đảm bảo sẽ khiến bạn cứ muốn uống mãi thôi! Ngoài ra, món sinh tố này còn cực kỳ tốt cho làn da của bạn đó. Vào bếp ngay với Thế giới gia dụng online nhé</p><h3><strong>Công thức sinh tố đẹp da – Nguyên liệu</strong></h3><ul><li>Bí đỏ: 250 gr&nbsp;</li><li>Cà rốt: 1 củ</li><li>Sữa đặc: 2 muỗng canh</li></ul><h3><strong>Cách chế biến</strong></h3><ul><li>Bí đỏ gọt vỏ, bỏ hạt, cắt thành các khúc nhỏ.</li><li>Tương tự với cà rốt, bạn rửa sạch, bào vỏ, thái hạt lựu.</li><li>Bắc nồi lên bếp, hấp cách thủy cà rốt và bí đỏ trong khoảng 15 – 20 phút cho bí đỏ và cà rốt chín mềm. Cho 2 muỗng canh sữa đặc vào ly nước ấm, khuấy tan.</li><li>Cho bí đỏ và cà rốt đã hấp chín vào máy xay, đổ luôn sữa đặc đã pha vào cùng. Xay nhuyễn tất cả nguyên liệu lại với nhau đến khi hỗn hợp sệt, mịn thì tắt máy.</li></ul><h3><strong>Thành phẩm</strong></h3><p>Sinh tố thơm béo đặc trưng của bí đỏ kết hợp cà rốt khiến món sinh tố vừa lạ miệng vừa hấp dẫn ngay lần uống đầu tiên. Không những thơm ngon mà món sinh tố này còn giúp làm đẹp da lắm đấy nhé.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/nuoc-ep-bi-do-4.jpg\" alt=\"Công thức sinh tố đẹp da- Sinh tố cà rốt bí đỏ\" width=\"500\" height=\"333\"></p><h2><strong>7. Công thức sinh tố đẹp da – Sinh tố dâu tây + dưa leo</strong></h2><p>Dâu tây và dưa lê đều là những loại quả rất thơm ngon, dễ tìm. Với món sinh tố kết hợp hai loại quả này sẽ cho hương vị vô cùng đặc biệt và chắc chắn sẽ khiến bạn muốn thưởng thức ngay. Với thành phần giàu vitamin, đặc biệt là vitamin C, sinh tố dâu tây dưa lê có công dụng làm tăng tính đàn hồi và giúp săn chắc da. Bên cạnh đó, món sinh tố này còn đặc biệt thích hợp cho da mụn bởi trong thành phần có tính sát khuẩn và thanh lọc da cực kì hiệu quả đấy nhé.</p><h3><strong>Nguyên liệu</strong></h3><ul><li>Dâu tây: 400gr</li><li>Dưa leo: 1/2 trái</li><li>Sữa hạnh nhân: 240ml</li><li>Đá viên: 10gr</li></ul><h3><strong>Công thức sinh tố đẹp da – Cách chế biến</strong></h3><ul><li>Rửa sạch và cắt nhỏ dâu tây. Dưa leo bỏ ruột cắt nhỏ.</li><li>Xay nhuyễn các nguyên liệu cùng mật ong và đá viên (số lượng đá cho vào tuỳ thích).</li></ul><h3><strong>Thành phẩm</strong></h3><p>Dâu tây có công dụng làm dịu da, cho làn da trắng hồng khi kết hợp với dưa leo có tác dụng mát da, giảm nếp nhăn, mật ong có công dụng trị vết thâm hiệu quả, sẹo mụn. Uống loại sinh tố này thường xuyên bạn vừa có vóc dáng cân đối lại ngừa mụn hiệu quả đấy.</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/cach-lam-sinh-to-dau-tay-1.jpg\" alt=\"Sinh tố dâu tây + dưa leo\" width=\"500\" height=\"333\"></p><h2><strong>8. Công thức sinh tố đẹp da- Sinh tố cam</strong></h2><p>Cam là một loại trái cây rất giàu chất dinh dưỡng, đặc biệt có nguồn vitamin C dồi dào cùng các chất chống oxy. Do đó mà cam đã trở thành một trong những loại trái cây quen thuộc trong mỗi gia đình Việt. Ngoài dùng để ăn trực tiếp, chúng ta có thể vắt cam lấy nước uống hoặc chế biến thành món sinh tố cam bổ dưỡng.</p><p>Uống sinh tố cam có thể ngăn ngừa nhiều bệnh như ung thư, xơ cứng động mạch, giảm nguy cơ đâu tim hay lượng cholesterol, hỗ trợ tiêu hóa… Ngoài ra, sinh tố cam giúp cho làn da trắng sáng, bổ sung lượng ẩm cần thiết cho da và giúp da được khỏe mạnh hơn. Hơn thế nữa, sinh tố cam còn còn có tác dụng trong việc làm sạch da, se khít lỗ chân lông và ngăn ngừa nếp nhăn cho làn da của bạn.</p><h2><strong>9. Sinh tố dưa leo</strong></h2><p>Dưa leo từ lâu vẫn luôn được biết đến với công dụng làm đẹp và dĩ nhiên, sinh tố dưa leo cũng không ngoại lệ. Với thành phần giàu vitamin và các axit amin, dưa leo không chỉ ngăn ngừa mụn hiệu quả mà còn giúp làm sáng da, se khít lỗ chân lông. Bạn có thể chọn vài quả dưa leo cỡ vừa, ngâm chúng trong nước sạch để loại bỏ các độc tố còn sót lại do các tác nhân bên ngoài, sau đó bạn chỉ việc xay sinh tố lấy nước và thưởng thức thôi, thật đơn giản và tuyệt vời phải không nào?</p><p><img src=\"https://gertech.vn/wp-content/uploads/2023/03/sinh-to-cam.jpg\" alt=\"sinh-to-cam\" width=\"500\" height=\"333\"></p>'),
(3, 'GIÁ MÁY HÚT MÙI – MÁY HÚT MÙI CAO CẤP CHÍNH HÃNG GIÁ TỐT', 'gertech.vn1_-600x410.jpg', 'post 2', '2023-11-11 08:36:07', '<p>Có thể nhiều người đánh giá thấp, nhưng máy hút mùi lại đóng vai trò quan trọng đối với nhà bếp hơn bạn nghĩ. Máy hút mùi không chỉ là một thiết bị thông thường trong căn bếp, mà còn là một người bạn đồng hành đáng tin cậy trong quá trình nấu nướng. Chức năng chính của máy hút mùi đúng như tên gọi, đó là loại bỏ mùi, hơi nóng, và khói xuất hiện trong khi nấu ăn. Giá máy hút mùi tùy thuộc vào thương hiệu và thiết kế của nó.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_.jpg\" alt=\"nhà bếp đẹp\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_.jpg 4583w, http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_-300x205.jpg 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_-768x525.jpg 768w, http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_-1024x700.jpg 1024w, http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_-180x123.jpg 180w, http://thegioigiadungonline.com.vn/wp-content/uploads/2020/02/gertech.vn1_-600x410.jpg 600w\" sizes=\"100vw\" width=\"500\" height=\"342\"></p><p>&nbsp;</p><h2><strong>1. Những lợi ích của máy hút mùi</strong></h2><p>Máy hút mùi cải thiện chất lượng không khí trong phòng bếp bằng cách loại bỏ mùi hôi, dầu mỡ và các chất gây ô nhiễm khác từ quá trình nấu ăn. Đây là một phần không thể thiếu để tạo ra một môi trường sống an lành và thoáng đãng trong căn bếp.</p><h3><strong>Loại bỏ mùi hôi</strong></h3><p>Máy hút mùi sử dụng bộ lọc hoặc hệ thống lọc mạnh để loại bỏ mùi hôi từ quá trình nấu nướng. Một số máy hút mùi sử dụng các bộ lọc than hoạt tính để hấp thụ mùi hôi và chất gây ô nhiễm khác trong không khí. Tạo ra không gian thoáng đãng và dễ chịu cho gia đình.</p><h3><strong>Loại bỏ dầu mỡ và chất gây ô nhiễm</strong></h3><p>Máy hút mùi hút và hấp thụ dầu mỡ và các chất gây ô nhiễm từ không khí. Loại bỏ chất ô nhiễm và ngăn chúng tạo thành một lớp bụi mỡ trên tường và nội thất bếp. Điều này giúp giữ sạch sẽ không gian bếp, hạn chế vi khuẩn và ánh sáng mặt trời. Giữ cho căn bếp luôn trong tình trạng tươi mới và dễ dàng dọn dẹp.</p><h3><strong>Tạo ra không khí trong lành</strong></h3><p>Máy hút mùi giúp điều chỉnh độ ẩm và nhiệt độ trong phòng bếp. Điều này giúp ngăn chặn mục đích hình thành của nấm mốc và vi khuẩn. Một môi trường bếp khô ráo và thoáng đãng không chỉ tạo ra một không gian làm việc tốt hơn. Mà còn giúp bảo vệ sức khỏe gia đình.</p><h3><strong>Giảm tiếng ồn</strong></h3><p>Một trong những ưu điểm của máy hút mùi là giảm tiếng ồn từ các hoạt động nấu nướng. Các máy hút mùi hiện đại sử dụng công nghệ và thiết kế tiên tiến. Giúp giảm tiếng ồn tạo ra bởi quạt và động cơ hoạt động.</p><h2><strong>2. Các loại máy hút mùi hiện nay</strong></h2><h3><strong>2.1. Máy hút mùi âm tủ</strong></h3><p>Máy hút mùi âm tủ được thiết kế gắn bên trong tủ bếp treo trên tường. Đặc biệt phù hợp cho những căn bếp có diện tích hạn chế. Phần hút của máy hút mùi âm tủ có thể được kéo ra một cách dễ dàng khi sử dụng. Khi không dùng, phần này có thể được đẩy lại bên trong tủ. Giúp tiết kiệm không gian và duy trì vẻ tinh tế cho căn bếp.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f.jpg\" alt=\"nhà bếp hiện đại\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f.jpg 1200w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f-300x375.jpg 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f-600x750.jpg 600w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f-240x300.jpg 240w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f-819x1024.jpg 819w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/09/z3703075940660_f1d39df7d7c8807b78811349884fe18f-768x960.jpg 768w\" sizes=\"100vw\" width=\"500\" height=\"625\"></p><p>Công suất hút của các máy hút mùi âm tủ thường nằm trong khoảng từ <strong>200 m3/h – 1000 m3/h</strong>. Với đồ ồn&nbsp;chỉ dừng ở mức <strong>50 – 70dB.</strong> Không gây khó chịu và ảnh hưởng quá lớn cho người sử dụng.</p><h3><strong>2.2. Máy hút mùi kính vát</strong></h3><p>Điểm đặc trưng của dòng máy hút mùi này chính là mặt kính được thiết kế vát ở góc độ nghiêng. Tạo ra một góc nhìn độc đáo và hiện đại. Máy hút mùi kính vát thường có khả năng hút mạnh mẽ, đảm bảo khả năng loại bỏ mùi và hơi dầu mỡ hiệu quả. Đây là sự lựa chọn thú vị cho những người yêu thích thiết kế hiện đại và độc đáo cho không gian bếp.</p><p>&nbsp;</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266.jpeg\" alt=\"hút mùi vát nghiêng\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266.jpeg 900w, http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266-300x300.jpeg 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266-150x150.jpeg 150w, http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266-768x768.jpeg 768w, http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266-600x600.jpeg 600w, http://thegioigiadungonline.com.vn/wp-content/uploads/2023/08/hut-mui-gt-h266-100x100.jpeg 100w\" sizes=\"100vw\" width=\"500\" height=\"500\"></p><p>Được đánh giá là loại máy hút mùi có công suất hút khá lớn khoảng <strong>hơn 1000m3/h</strong>, độ ồn <strong>nhỏ hơn 55dB</strong></p><h3><strong>2.3. Máy hút mùi đảo</strong></h3><p>Máy hút mùi đảo (độc lập) là một loại máy hút mùi có thiết kế độc lập và không cần gắn liền với tường hoặc tủ bếp. Điều này cho phép linh hoạt trong việc bố trí không gian bếp. Máy hút mùi đảo đi kèm với nhiều tùy chọn điều khiển, bao gồm tốc độ hút, đèn chiếu sáng. Và một số còn có thể điều khiển bằng điều khiển từ xa hoặc thông qua ứng dụng điện thoại.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/may-hut-mui-dao-2.jpg\" alt=\"Tại sao nhà ở chung cư nên trang bị máy hút mùi?\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/may-hut-mui-dao-2.jpg 600w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/may-hut-mui-dao-2-300x200.jpg 300w\" sizes=\"100vw\" width=\"500\" height=\"333\"></p><p>Công suất hút lớn đạt tới <strong>1000m3/h</strong> được sử dụng cho không gian bếp độc lập. Cơ chế hút đảo 2 chiều độc đáo sẽ hút mọi loại mùi hôi khó chịu trong bếp và tự động lọc ngay trong máy trả lại không khí trong lành cho bếp.</p><p>Giá các loại máy hút mùi bếp đảo thường đắt hơn so với các loại máy hút mùi bếp thông thường từ 3-5 lần.</p><h2><strong>3. Bảng giá máy hút mùi</strong></h2><h3><strong>Máy hút mùi giá dưới 6.5 triệu:</strong></h3><p>Nổi bật với những mẫu máy hút mùi âm tủ với thiết kế nhỏ gọn. Công suất hút của máy dao động từ 650m3/h – 750m3/h. Một số mẫu bán chạy nhất:<i> hút mùi âm tủ GT-H262, GT-H303…</i></p><h3><strong>Máy hút mùi giá 8 triệu – 12 triệu:&nbsp;</strong></h3><p>Bao gồm những mẫu máy hút mùi kính vát sang trọng. Máy thiết kế hiện đại phù hợp với diện tích phòng bếp rộng, công suất hút của máy khỏe từ 1000m3/h. Tiêu biểu với <i>hút mùi nghiêng GT-H317, GT-H305; hút mùi vát nghiêng GT-H266…</i></p><h3><strong>Máy hút mùi giá trên 10 triệu:&nbsp;</strong></h3><p>Quý khách có thể tham khảo mẫu <i>máy hút mùi đảo GT-H263, GT-H801</i>… Máy hút mùi đảo rất thích hợp cho các không gian bếp rộng, thiết kế bếp dạng quầy Bar, thiết kế bếp theo phong cách châu Âu với bàn bếp độc lập giữa nhà.</p><h2><strong>4. Gia dụng Gertech chuyên cung cấp máy hút mùi cao cấp giá tốt nhất thị trường hiện nay</strong></h2><p>Gertech chuyên cung cấp <a href=\"http://thegioigiadungonline.com.vn/may-hut-mui/\">máy hút mùi</a> cao cấp giá tốt, bảo hành chính hãng. Tự tin mang đến sự hài lòng nhất cho mọi khách hàng. Khi mua máy hút mùi nhà bếp tại đây bạn sẽ được tư vấn thiết kế chi tiết và bảo hành lên đến 12 tháng. Hy vọng bài viết sẽ mang đến những thông tin bổ ích cho người tiêu dùng thuận tiện và dễ dàng hơn khi chọn mua máy hút mùi.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/1-5.png\" alt=\"thông số GT-H236\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/1-5.png 960w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/1-5-300x237.png 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/1-5-600x474.png 600w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/1-5-768x606.png 768w\" sizes=\"100vw\" width=\"500\" height=\"395\"></p>'),
(4, 'BÙNG NỔ DEAL 44K TẠI TIỆC SINH NHẬT NAGAWA SHOP, SĂN NGAY KẺO LỠ!', '540_trang_chu_naga.jpg', '', '2023-11-13 14:38:52', '<p>Nagakawa Shop đang hân hoan chào đón sự kiện đặc biệt nhất trong năm - Sinh nhật 4 tuổi! Trong suốt hành trình phát triển và phục vụ người tiêu dùng, Nagakawa Shop đã nhận được sự ủng hộ nhiệt thành và tình cảm chân thành từ phía bạn. Để tri ân và chia sẻ niềm vui này, Shop đã chuẩn bị một loạt chương trình khuyến mại đặc biệt, và đáng chú ý nhất chính là \"DEAL&nbsp;44K\" - một cơ hội mua sắm CÓ 1 - 0 - 2 trong lịch sử bán hàng.</p><p>&nbsp;</p><p><img src=\"https://shop.nagakawa.com.vn/media/news/1610_trangchunagawebkichthuoc-02.png\" alt=\"\" width=\"1921\" height=\"1001\"></p><p>DEAL 44K - Đúng như tên gọi, mỗi khách hàng sẽ có 01 cơ hội mua kèm deal&nbsp;44k khi tham gia mua sắm tại Nagakawa Shop từ 16.10 - 15.11 . Đây chắc chắn là một trong những ưu đãi không thể đặc sắc hơn, những món hàng giá trị cao hàng triệu đồng được bán rẻ hơn cốc trà sữa, giúp bạn tiết kiệm đáng kể khi mua sắm tại Nagakawa Shop. Cụ thể:</p><p>💟 Ấm siêu tốc inox NAG0308 CHỈ 44K</p><p>💟 Bàn là khô Nagakawa NAG1502 (tím) CHỈ 44K&nbsp;</p><p>💟 Chảo chống dính đáy từ Nagakawa NAG2001 CHỈ 44K&nbsp;</p><p>Lưu ý:</p><p>- Áp dụng khi mua đơn hàng bất kỳ sẽ được mua kèm deal sốc 44K</p><p>- Mỗi khách hàng chỉ được mua 1 deal hot trong chương trình khuyến mại</p><p><img src=\"https://shop.nagakawa.com.vn/media/news/1410_LDPnagashop-05.png\" alt=\"\" width=\"2501\" height=\"1990\"></p><p>Ngoài ra, chúng tôi còn có nhiều chương trình ưu đãi khác nhau, như giảm giá tới 49%, quà tặng tới 8 triệu đồng, voucher đến 1 triệu đồng và nhiều chương trình hấp dẫn khác đang chờ đón bạn.</p><p>Thời gian diễn ra chương trình: từ ngày 16.10 đến ngày 06.11. Hãy mua sắm với Nagakawa Shop trong thời gian này để không bỏ lỡ cơ hội đặc biệt này. Cảm ơn bạn đã ủng hộ Nagakawa Shop trong suốt 4 năm qua.</p>'),
(5, 'TIÊU CHÍ ĐÁNH GIÁ BẾP TỪ TỐT MÀ BẠN NÊN BIẾT!', '2.jpg', '', '2023-11-20 16:25:01', '<p>Với những ưu điểm vượt trọi mà bếp từ mang lại, thiết bị này nhanh chóng chiếm được tình cảm của nhiều hộ gia đình Việt Nam. Tuy nhiên để lựa chọn được một sản phẩm bếp từ tốt không phải là điều đơn giản. Trong bài viết này, hãy cùng chung toi tìm hiểu về những tiêu chí đánh giá bếp từ tốt qua bài iết dưới đây nhé!</p><h2><strong>1. Tiêu chí đánh giá bếp từ – Nhu cầu sử dụng</strong></h2><p>Nhu cầu sử dụng là tiêu chí đánh giá bếp từ đầu tiên bạn cần xác định trước khi quyết định mua một sản phẩm nào đó. Với bếp từ cũng vậy, việc xác định rõ nhu cấu sử dụng sẽ giúp bạn lựa chọn được một chiếc bếp từ phù hợp nhất.</p><p>Chẳng hạn, gia đình có 4-5 thành viên thì nên chọn loại bếp từ có 3 cùng nấy để bạn có thể nấu nướng nhiều món ăn trong cùng một lúc. Còn nếu gia đình chỉ có hai người hay bạn đang sống độc thân thì bếp từ đôi và bếp từ đơn là sự lựa chọn thông minh, tiết kiệm.</p><h2><strong>2. Lựa chọn loại bếp</strong></h2><p>Hiện nay, trên thị trường có hai loại bếp từ đó là bếp từ âm và bếp từ dương:</p><p>Bếp từ dương: Là loại bếp từ có thiết kế hình vuông, hình chữ nhật nhất định. Chúng ta không cần lắp đặt và có thể di chuyển đến bất kỳ địa điểm nào mà bạn mong muôn. Bếp từ dương thường phù hợp với những ngôi nhà có không gian nhỏ và thường xuyên tổ chức các buổi liên hoan, lẩu, nướng di động.</p><p>Bếp từ âm: Là loại bếp được lắp đặt âm xuống bề mặt bếp tạo nên một không gian vô cùng sang trọng và hiện đại. Bếp từ âm thường có kiểu dáng đẹp mắt, thiết kế tỉ mẩn và có giá thành cao hơn bếp từ dương. Tuy nhiên, nhược điểm của loại bếp từ âm đó là cố định một vị trí nên bạn khó tháo rời khi muốn di chuyển bếp tới địa điểm khác.</p><p>Dựa và nhu cầu sử dụng cũng như không gian bếp của mỗi gia đình mà chúng ta có thêt lựa chọn loại bếp từ phù hợp. Xét về chi phí, bếp từ dương sẽ có giá thành rẻ hơn so với bếp từ âm.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/2.jpg\" alt=\"tiêu chí đánh giá bếp từ\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/2.jpg 500w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/2-300x200.jpg 300w\" sizes=\"100vw\" width=\"500\" height=\"333\"></p><h2><strong>3. Tiêu chí đánh giá bếp từ – Chất liệu mặt bếp từ</strong></h2><p>Tiêu chí tiếp theo bạn cần quan tâm khi đánh giá một chiếc bếp từ đó là chất liệu của mặt bêp. Mọt chiếc bếp từ tốt sẽ có thiết kế mặt bếp được làm bằng chất liệu kính để dễ lau chùi và tăng tính thẩm mỹ. Trên thị trường có 4 loại mặt kính bếp từ phổ biến như sau:</p><ul><li><strong>Kính Schott cao cấp:</strong>&nbsp;Là loại kính có giá thành khá cao. Đổi lại, chúng có rất nhiều ưu điểm đó là dày gấp 3 lần so với những loại kính thông thường và có khả năng chịu nhiệt lên tới 700°C. Nhờ vậy loại bỏ hoàn toàn những hiện tượng như nứt, nổ hay xước.</li><li><strong>Kính Eurokera:</strong>&nbsp;Có xuất xứ từ nước Pháp với ưu điểm chịu nhiệt cao tương tự kính Schott, khó nứt vỡ và dễ lau chùi trong quá trình sử dụng. Hơn thế, kính Eurokera còn có nhiều màu sắc và kiểu dáng khác nhau để bạn lựa chọn.</li><li><strong>Kính chịu nhiệt:</strong>&nbsp;Đây là loại kính thường được sử dụng nhất trên thị trường hiện nay với ưu điểm là giá thành rẻ nhưng vẫn đáp ứng được những nhu cầu tối thiểu. Kính chịu nhiệt có khả năng chịu lực, chịu nhiệt, chống va đập và độ sáng bóng cao.</li><li><strong>Kính pha lê:</strong>&nbsp;Loại kính này giống sứ Ceramic nhưng ưu điểm đó là đạt được độ bóng bẩy cao hơn.</li></ul><h2><strong>4. Hiệu suất sử dụng</strong></h2><p>Bếp từ được đánh giá là thiết bị nấu nướng nhanh nhất bởi sự sản sinh nhiệt nhanh chóng và làm nóng rất nhanh mà không phải mất thời gian đợi như bếp điện hay bếp gas. Bếp từ sử dụng nguyên lý dòng điện Fuco kết hợp với tính năng tự động nhận diện mặt nồi khiến nhiệt tập trung vào đúng vị trí, không nóng lan sang các điểm không cần thiết, đem lại hiệu quả làm nóng tức thì. Từ đó giúp giảm thời gian cũng như giảm lượng điện năng tiêu thụ cần thiết.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/21102924_cach-mo-khoa-an-toan-bep-tu-bosch.jpg\" alt=\"tiêu chí đánh giá bếp từ\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/21102924_cach-mo-khoa-an-toan-bep-tu-bosch.jpg 500w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/21102924_cach-mo-khoa-an-toan-bep-tu-bosch-300x176.jpg 300w\" sizes=\"100vw\" width=\"500\" height=\"293\"></p><h2><strong>5. Bảng điều khiển</strong></h2><p>Bảng điều khiển của bếp từ có thiết kế bằng những nút bấm cảm ứng và nút ấn thông thường giúp bạn dễ dàng thao tác trong khi sử dụng.</p><ul><li>Bảng điều khiển bằng nút ấn thông thường sẽ có kèm theo tiếng Việt giúp bạn dễ sử dụng nhưng nhược điểm là kém thu hút.</li><li>Bảng điều khiển bằng nút bấm cảm ứng có độ nhạy cao và bền bỉ, sang trọng</li></ul><p>Tuy nhiên, theo thời gian các phím bấm trên màn hình có thể sẽ không còn nhạy và nhiều trường hợp bị “chết” phím hay “liệt” phần cảm ứng. Chính vì vậy, hãy kiểm tra kỹ mức độ nhạy của bảng điều khiển để đảm bảo chúng sẽ hoạt động tốt. Trên thị trường hiện nay cũng có rất nhiều loại bếp từ cao cấp được trang bị thêm đèn Led hay màn hình TFT hiển thị đầy đủ các tính năng để bạn dễ dàng sử dụng.</p><h2><strong>6. Tiêu chí đánh giá bếp từ – Tiện ích kèm theo</strong></h2><p>Bếp từ hiện này ngày một đa dạng và được bổ sung nhiều tính năng thông minh để giúp ta có một cuộc sống tiện nghi, thoải mái. Một số tính năng tiện ích được tích hợp thêm cho bếp từ đó là khóa an toàn, tính năng hẹn giờ nấu, các chế độ nấu tự động, tự ngắt, cảnh báo khi bếp mở lâu mà không đặt nồi,…</p><p>Tuy nhiên, bếp từ càng hiện đại thì giá thành càng cao. Vì vậy hãy cân nhắc kỹ trước khi đưa ra quyết định lựa chọn loại bếp từ cho gian bếp nhà mình nhé!</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/1-300x200.jpg\" alt=\"Tiêu chí đánh giá bếp từ \" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/1-300x200.jpg 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/12/1.jpg 600w\" sizes=\"100vw\" width=\"500\" height=\"333\"></p><h2><strong>7. Độ an toàn khi sử dụng</strong></h2><p>Nhờ tính năng tập trung độ nóng ở vị trí đáy nồi nên khi không có nồi hay đặt nồi không đúng vị trí, bếp sẽ tự động ra cảnh báo và sẽ tự tắt sau khoảng 2-3 phút. Bên cạnh đó, bếp từ còn có các tính năng ưu việt như chức năng khóa bếp đối với trẻ nhỏ.</p><p>Do vậy, bếp từ rất an toàn khi dùng nếu bạn lựa chọn được những thương hiệu uy tín và chính hãng.</p><h2><strong>8. Tiêu chí đánh giá bếp từ – Thương hiệu uy tín</strong></h2><p>Thương hiệu đóng vai trò vô cùng quan trọng khi bạn quyết định mua bất cứ một loại sản phẩm nào. Hãy lựa chọn những loại bếp từ có thương hiệu uy tín, giấy tờ tem mác đầy đủ để đảm bảo chiếc bếp của bạn hoạt động một cách an toàn nhất. Tránh tình trạng mua phải những sản phẩm bếp từ hàng giả, hàng nhái, hàng kém chất lượng sẽ gây nguy hiểm trong quá trình sử dụng. Gertech cũng là một thương hiệu bếp Đức được nhiều hộ gia đình tin tưởng sử dụng, hãy đến với chúng tôi để được trải nghiệm những sản phẩm chất lượng và dịch vụ hàng đầu nhé!</p><h2><strong>9. Chế độ bảo hành</strong></h2><p>Chế độ bảo hành là một trong những đánh giá sản phẩm bếp từ tốt. Hãy cân nhắc kỹ thời gian và những trường hợp bạn được bảo hành để bạn được một sản phẩm bếp từ phù hợp. Nhờ đó bạn có thể an tâm khi sử dụng bếp và tiết kiệm một khoản cho phí trong trường hợp bếp gặp những lỗi không mong muốn.</p><p><img src=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH-300x150.jpg\" alt=\"Thương hiệu GERTECH\" srcset=\"http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH-300x150.jpg 300w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH-600x300.jpg 600w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH-1024x512.jpg 1024w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH-768x384.jpg 768w, http://thegioigiadungonline.com.vn/wp-content/uploads/2022/11/BANNER-GERTECH.jpg 1200w\" sizes=\"100vw\" width=\"500\" height=\"250\"></p><h2><strong>10. Bếp điện từ GT-866D</strong></h2><h3><strong>Thông số kỹ thuật</strong></h3><ul><li>Thông số kỹ thuật</li><li>Số mặt bếp: 02</li><li>Bảng điều khiển thanh trượt dạng ẩn&nbsp; mặt bếp riêng biệt</li><li>Bếp được bo viền nhôm Anode giúp bảo vệ mặt kính bếp</li><li>Công nghệ Inverter giúp kiểm soát công suất của thiết bị, tránh hao phí năng lượng, tiết kiệm điện năng.</li><li>Mặt kính Schott Ceran chịu lực, chịu nhiệt</li><li>Điện áp: 230V/50-60Hz</li><li>Công suất gia nhiệt nhanh: Bếp trái 3000W – bếp phải 3000W</li><li>Công suất thực tế: bếp trái 2300W – bếp phải 2300W</li><li>Kích thước: 740X430X410 mm</li><li>Kích thước khoét đá: 710X410 mm</li><li>Tích hợp nhiều tính năng hiện đại: Hẹn giờ, Tạm dừng, Hấp nóng</li><li>Cảm biến nhiệt dư, Tự động dừng khi quá nhiệt</li><li>Tự động nhận diện nồi tương thích</li><li>Tính năng chống tràn</li><li>Bảo hành 3 năm</li></ul><h3><strong>Tính năng nổi bật</strong></h3><p>– Bếp từ đôi GT-866D là giải pháp hoàn hảo, khắc phục nhược điểm của các loại bếp từ thông thường nhờ vào ưu điểm nổi trội. Cụ thể:</p><p>– Chức năng Booster của bếp từ giúp tăng công suất lên mức cao nhất rút ngắn thời gian đuan nấu.</p><p>– An toàn với người sử dụng nhờ vào những tính năng vượt trội phím hẹn giờ, khóa trẻ em, tự nhận diện vùng nấu, cảnh báo nhiệt và tự động ngắt bếp khi nước tràn trên bàn phím</p><p>– Bo viền nhôm giúp nâng đỡ mặt kính: Ngoài ấn tượng về thiết kế thì bo viền nhôm giúp nâng đỡ mặt kính, tránh khả năng bị rạn nứt</p><p>– Mặt kính Schott Ceran chịu lực, chịu nhiệt tốt, chống xước.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `Status` bit(5) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Creatdate` timestamp NULL DEFAULT current_timestamp(),
  `Totalbuy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `price`, `Status`, `CategoryID`, `Description`, `Image`, `Creatdate`, `Totalbuy`) VALUES
(1, 'Nồi áp suất đa năng KOCHI KC 01 (6L)', 1351000, b'00000', 1, 'Đây là đồ nấu ăn', '01.jpg', '2023-10-18 17:00:00', 0),
(2, 'Bộ nồi 4 món Fissler Luno Black', 11250000, b'00000', 1, 'Bộ nồi 4 món Fissler Luno Black', 'anh2.jpg', '2023-10-18 17:00:00', 0),
(4, 'Lò nướng điện thông minh GERTECH GT-688', 13000000, b'00000', 4, 'Lò nướng điện thông minh GERTECH GT-688', 'Lo-nuong-GT-688-02.jpg', '2023-10-19 17:00:00', 0),
(5, 'DAO CHẶT XƯƠNG CÁN GỖ THÁI LAN', 470000, b'00000', 4, 'DAO CHẶT XƯƠNG CÁN GỖ THÁI LAN', 'dao.jpg', '2023-10-18 17:00:00', 0),
(6, 'Máy Xay  Chống Ồn Đa Năng GERTECH ', 4951000, b'00000', 6, 'Máy Xay Nấu Cách Âm Chống Ồn Đa Năng GERTECH GT-686 Chính Hãng', 'Máy-xay-nấu-độ-ồn-thấp-GT-008.jpg', '2023-10-18 17:00:00', 1),
(7, 'Bộ nồi Elmich EIV 630R Chính hãng', 964000, b'00000', 1, 'Bộ nồi Elmich EIV 630R', 'sp154-600x376.jpg', '2023-10-12 17:00:00', 16),
(8, 'Bộ nồi Fivestar 5 chiếc vung kính', 850000, b'00000', 1, 'Bộ nồi inoxfivestar được sản xuất với chất liệu sáng bóng là inox 430 giúp cho các bà nội trợ dễ dàng làm vệ sinh sau khi sử dụng đồng thời nó cũng không bị gỉ sét cũng như không gây độc hại cho người sử dụng...', 'sp150.jpg', '2023-10-18 17:00:00', 5),
(10, 'CHẬU RỬA CHÉN MS 1044P CAO CẤP', 3740000, b'00000', 3, '<p>Dòng sản phẩm mới chế tạo bán thủ công Rổ lọc rác bằng inox tiện lợiChậu rửa chén MS 1044P</p>', 'MS-1044.png', '2023-10-23 17:00:00', 4),
(11, 'Tủ giữ nóng thực phẩm HW-862', 4500000, b'00000', 2, 'Kiểu dáng gọn gàng, đẹp mắt với chất liệu inox cao cấp', 'tu-giu-nong-thuc-pham-hw-862-ava-1.jpg', '2023-10-23 17:00:00', 3),
(12, 'Tủ giữ nóng thức ăn kính phẳng HW-60-2', 7890000, b'00000', 2, 'Tủ có kiểu dáng hiện đại với 4 mặt kính cường lực trong suốt', 'avta3-min-5.jpg', '2023-10-23 17:00:00', 1),
(17, 'Máy Ép Chậm GERTECH GT-J206 cao cấp ', 3920000, b'00000', 6, '', 'anh33.jpg', '2023-11-07 14:47:44', 0),
(18, 'Bếp nướng điện không khói KOCHI ', 660000, b'00000', 1, '', 'Chảo-nướng-Kochi-1.jpg', '2023-11-07 15:44:39', 0),
(19, 'Máy xay sinh tố Roshi RS302', 1650000, b'00000', 6, '', 'may-xay-roshi-rs302-1.jpg', '2023-11-07 15:50:04', 1),
(20, 'Máy xay sinh tố Roshi RS302', 6700000, b'00000', 6, '', 'mayep.jpg', '2023-11-07 15:58:18', 1),
(21, 'Bộ nồi  Elmich Royal Classic EL-370', 1750000, b'00000', 1, '', 'sp156.jpg', '2023-11-07 16:04:15', 1),
(24, 'Đèn Để Bàn Học 3 Khe Bút 858', 74100, b'00000', 7, '', 'den-de-ban-hoc-3-khe-but-858.jpg', '2023-11-07 16:51:06', 1),
(25, 'Dây Đèn Bảng Lớn Trang Trí Noel 5M', 50700, b'00000', 7, '', 'day-den-bang-lon-trang-tri-noel-5m.jpg', '2023-11-08 00:03:57', 1),
(32, 'Bóng Đèn Trụ Bọc Nhôm Dsy 40W', 55900, b'00000', 7, 'test', 'bong-den-tru-boc-nhom-dsy-40w.jpg', '2023-11-13 16:48:55', 4),
(33, 'Đèn Pin Cầm Tay L832 ( Hàng Mới )', 71500, b'00000', 7, 'test', 'den-pin-cam-tay-l832-1.jpg', '2023-11-13 17:02:08', 1),
(34, 'Đèn Trang Trí Giáng Sinh Cổ Điển Cầm Tay', 30000, b'00000', 7, 'test', 'den-trang-tri-giang-sinh-co-dien-cam-tay.jpg', '2023-11-13 17:14:01', 1),
(35, 'Chảo Tổ Ong 28Cm Đáy Bằng', 121000, b'00000', 1, 'test', 'chao-to-ong-28cm-day-bang.jpg', '2023-11-13 17:20:45', 0),
(36, 'Dao Nhỏ Gọt Trái Cây Nhật Bản 513', 10000, b'00000', 4, 'test dao', 'dao-nho-got-trai-cay-nhat-ban-513-1.jpg', '2023-11-13 17:25:15', 2),
(37, 'Máy Xay Cầm Tay Sokany 1708', 250900, b'00000', 6, 'Sản phẩm Máy Xay Cầm Tay Sokany 1708 đang được bán tại cửa hàng với giá 250,900 VNĐ / 1 sản phẩm. Đặt mua ONLINE ngay hôm nay để nhận ưu đãi', 'may-xay-cam-tay-sokany-1708.jpg', '2023-11-22 14:14:50', 0),
(38, 'Máy Xay Sinh Tố Sokany Sk-146S', 552500, b'00000', 6, 'Chất liệu Nhựa PC siêu bền, thuỷ tinh cường lực , an toàn sức khỏe, Chức năng Xay hoa quả, sinh tố + xay thịt, cá, tôm + xay thực phẩm khô Chất liệu lưỡi dao Inox cao cấp, Điện áp 220 V/ 50 Hz', '12_0345-ma-y-xay-sinh-to-sokany-sk-146s-1.jpg', '2023-11-22 14:21:18', 0),
(39, 'Máy Xay Trái Cây Cầm Tay Sạc Usb 18.59.8', 154700, b'00000', 6, 'Máy xay nhỏ gọn, dễ dàng mang theo đi làm hay đi du lịch Vỏ bọc silicone ngoài thân máy tạo điểm nhấn cho sản phẩm, đồng thời giúp bạn cầm nắm chắc tay hơn Thao tác mở máy và tắt máy đơn giản chỉ bằng một nút bấm (bấm nút hai lần: mở máy,...', 'may-xay-trai-cay-cam-tay-sac-usb-18-59-8-cm.jpg', '2023-11-22 14:25:50', 0),
(40, 'Máy Ép Hoa Quả Sokany 4000', 624000, b'00000', 6, 'Thiết kế thông minh nên máy hoạt động rất êm ái, tiếng ồn thấp chỉ khoảng 45dB giúp bạn có thể ép được mọi lúc, mọi nơi.', '12_0135-may-ep-hoa-qua-sokany-4000-1.jpg', '2023-11-22 14:32:01', 0),
(41, 'Chảo Chiên Trứng Nhiều Hình 4 Lỗ', 76000, b'00000', 1, 'Chảo chống dính 4 lỗ Chiên trứng chiên, làm bánh tiện dụng.Chảo chống dính 4 lỗ Chiên trứng chiên có thể hỗ trợ bạn làm nhiều món cùng một lúc trên một chiếc chảo tiện dụng, đa năng. Thông tin sản phẩm: Chảo rán trứng ốp la 4 khuôn Kitchen Art men chống dính 24cm...', 'chao-chien-trung-nhieu-hinh-4-lo-7.jpg', '2023-11-22 14:37:52', 0),
(42, 'Miếng mút rửa ly chén của Nhật Bản KZ118', 44500, b'00000', 3, 'nhóm 4 test', '46d4473aab9aa0b5135426a53d4f69a3.jpg', '2023-11-22 14:45:05', 0),
(43, 'DỤNG CỤ RỬA BÁT, LAU CHÙI THÔNG MINH - SA1577', 47250, b'00000', 3, 'test', 'anh1.jpg', '2023-11-22 14:50:01', 0),
(44, 'Chậu Rửa Bát 1 Hố Malloca MYST K86S', 31200000, b'00000', 3, 'Bề mặt phủ Nano Bạc, diệt khuẩn 100%', 'myst-k86s.jpg', '2023-11-22 15:02:53', 0),
(45, 'BẾP ĐIỆN TỪ ĐÔI AMG MODEL JG 5202', 9900000, b'00000', 4, 'Công nghệ Tăng cường cảm ứng InductionBOOSTChức năng tạm dừng, hẹn giờ, giữ ấmChức năng an toàn điện chống quá nóngChức năng khóa an toàn cho trẻ em', 'bepdiwn.jpg', '2023-11-22 15:12:51', 0),
(46, 'DAO PHA LỌC THỰC PHẨM Cao Cấp', 1650000, b'00000', 4, '<p>Chất liệu: thép nguyên khốiCông dụng: Pha lọc thực phẩm…Xuất xứ : Thái lan</p>', 'daothai.jpg', '2023-11-22 15:16:38', 0),
(47, 'DAO CHẶT ĐÚC NGUYÊN KHỐI Cao Cấp', 2150000, b'00000', 4, 'Dao chặt thái lanTrọng lượng: 900gThép nhập khẩu từ ĐứcChặt xương, sử dụng cho gia đình, nhà hàngXuất xứ: Thái Lan', '2.1.jpg', '2023-11-22 15:19:46', 1),
(48, 'Webcam Tròn Ct01 (Chân Kẹp)', 78000, b'00000', 5, 'Sản phẩm Webcam Tròn Ct01 (Chân Kẹp) đang được bán tại cửa hàng với giá 78,000 VNĐ / 1 sản phẩm. Đặt mua ONLINE ngay hôm nay để nhận ưu đãi.', 'webcam-tron-ct01-chan-kep.jpg', '2023-11-22 15:24:42', 1),
(49, 'Camera Wifi Yoosee Ptz 6M 3515', 455000, b'00000', 5, 'Camera Wifi PTZ 4 Râu 6.0MP dùng app: YOOSEE Hệ thống tín hiệu: PAL/NTSC Tốc độ video: 25 FPS hoặc 30 FPS Phát hiện chuyển động: Có Hỗ trợ chụp ảnh: Có Hỗ trợ NVR: Có Đầu vào âm thanh: Microphone tích hợp Đàm Thoại 2 chiều Đầu ra âm thanh: Microphone tích hợp, tai...', 'camera-wifi-yoosee-ptz-6m-3515.jpg', '2023-11-22 15:28:26', 0),
(50, 'Pin Sạc Aa (2A) Pujimax 3400Mah ', 43000, b'00000', 5, 'Kiểu pin: Pin sạc 1.2v 3400mah Ni-MH ( dùng cho micro, máy ảnh, đồ chơi, đồng hồ, két điện tử) Khối lượng : 29g 1pin Chu kì sạc : 1000 lần Nhiệt độ sạc : 0-45 độ C Điện áp 1,2V -1,42V Tính năng An toàn khi sử dụng', 'pin-sac-aa-2a-pujimax-3400mah-1-vien-1.jpg', '2023-11-22 15:31:51', 1),
(51, 'Cáp Hdmi Từ Điện Thoại Lên Tivi Cổng Lightnin', 109000, b'00000', 5, 'Thiết bị tương thích các đời máy ios từ ip5 trở lên ,ipad&nbsp; Đặc điểm vật lý :vỏ dây trơn , dai , chống đứt và chịu lực tốt dây to dày chắc chắn chiều dài dây 2m thoải mái kết nối Cáp hdmi có 3 đầu cắm chân hdmi cắm vào cổng hdmi trên...', 'cap-hdmi-tu-dien-thoai-len-tivi-cong-lightning.jpg', '2023-11-22 15:33:23', 0),
(52, 'Cục Nguồn Sony 12V 2A Chui Lớn', 39000, b'00000', 5, '– Được làm từ chất liệu nhựa cao cấp, an toàn khi sử dụng – Đủ thông số 2A – Độ ổn định điện áp cao – Thiết kế thông minh, dễ dàng sử dụng – Kích thước nhỏ gọn, không cồng kềnh – Điện đầu vào: 100-240V, 50/60Hz, 0.4A max – Điện áp đầu...', 'cuc-nguon-sony-12v-2a-chui-lon.jpg', '2023-11-22 15:35:58', 3),
(54, 'Quạt Đứng Điều Khiển My40-6, 599', 448000, b'00000', 5, 'test', 'quat-dung-dieu-khien-my40-6-599.jpg', '2023-11-22 16:06:20', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_deltail`
--

CREATE TABLE `product_deltail` (
  `ID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `Brand` varchar(40) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Import` varchar(40) NOT NULL,
  `Guarantee` varchar(40) NOT NULL,
  `parameter` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_deltail`
--

INSERT INTO `product_deltail` (`ID`, `productID`, `Brand`, `Model`, `Import`, `Guarantee`, `parameter`) VALUES
(2, 1, 'Kochi ', 'KO772', '100% từ Đức & EU', '24 Tháng', 'Khối lượng hàng: 4.6 Kg.\r\nDung tích: 6 L.\r\nCông suất: 1000W.\r\nĐiện áp: 220V – 50Hz.'),
(3, 2, 'FISSLER', 'BL0987', '100% từ Đức', '24 Tháng', 'Loại Sản Phẩm: Bộ nồi\r\nKích Thước: 24cm - 20cm - 18cm - 18cm\r\nMàu Sắc: Tùy theo năm sản xuất\r\nChống Dính: Chống dính Protectal+\r\nĐặc Điểm Riêng: Công nghệ Cookstar độc quyền với đáy nồi 3 lớp'),
(4, 4, 'GERTECH', 'GT-688', '100% từ Đức & EU', '12 Tháng', 'Công suất: 3365 W\r\nNhiệt độ tùy chỉnh từ 40°C – 250°C\r\nThời gian hẹn giờ lên đến 24 giờ\r\nĐiện áp : 220-240V / 50Hz\r\nĐèn: 25W/300 độ C\r\nKích thước (Cao x Dài x Sâu): 590 x 595 x 550 mm\r\nKích thước cắt đá (Cao x Dài x Sâu): 580-583 x 560 x 550 mm'),
(5, 5, '', 'DG14590', 'Thái Lan', 'không bảo hành', 'Chất liệu:\r\n•  Lưỡi dao: Inox không gỉ.\r\n•  Cán dao: gỗ.\r\nCân nặng: \r\n•  Dao : nặng hơn 30g.\r\nMàu sắc:\r\n•  Lưỡi dao màu trắng kim loại, sáng bóng.\r\n•  Cán dao: nâu đậm, nâu nhạt, vàng.'),
(6, 6, 'GERTECH', 'GT8907', '100% từ Đức & EU', '12 Tháng', 'Trọng lượng: 3,5 kg\r\nThể tích: 1,75 lít\r\nCông suất: 800W (Xay) – 800W (Làm nóng)\r\n09 tốc độ xay; 08 chương trình chế biến thực phẩm; Cùng chức năng tùy chỉnh tốc độ, thời gian xay\r\nLưỡi dao: 3 lớp – 8 lưỡi'),
(7, 7, 'Elmich', 'E124590', '100% từ Đức & EU', '6 Tháng', 'Sử dụng tốt trên tất cả các loại bếp\r\nTruyền nhiệt đều, giữ nhiệt lâu, chống cháy khét cục bộ\r\nBảo toàn vitamin và dinh dưỡng trong quá trình nấu\r\nSản xuất trên dây chuyền công nghệ Châu Âu\r\nLòng trong phủ chống dính Greblon C2 an toàn cho sức khỏe số 1 của Đức\r\nTay cầm chống nóng, an toàn cho người sử dụng\r\nThiết kế sang trọng, chất lượng tiêu chuẩn Châu Âu'),
(8, 8, 'Fivestar', 'FT08913', '100% từ Đức & EU', '6 Tháng', 'Kích thước: 1 nồi: 24 x 14 cm; 1 nồi 20 x 10 cm và 1 nồi 18 x 10 cm; 1 chảo: 24 x 6.5 cm và 1 xửng 24 x 8 cm'),
(9, 10, 'Malloca', 'MA-7809', 'Trung Quốc', '12 Tháng', 'Dòng sản phẩm mới chế tạo bán thủ công\r\nThép không rỉ 304\r\nĐộ dày 1.2 mm\r\nRổ lọc rác bằng inox tiện lợi\r\nBộ xả thông minh ngăn mùi hiệu quả\r\nLớp chống ồn và chống ngưng tụ nước dưới đáy chậu\r\nKích thước: W440 x D440 x H200mm\r\nKích thước cắt đá : 1. Lắp nổi: W420 x D420mm\r\n2. Lắp âm: W400 x D400mm (R10)'),
(10, 11, ' NEWSUN', 'NE-09871', '100% từ Đức & EU', '12 Tháng', 'Điện áp: 220-240V/50-60Hz\r\nCông suất: 1300W\r\nNhiệt độ: 30-110°C\r\nSố tầng: 3 tầng inox\r\nKích thước: 650*455*580mm\r\nTrọng lượng: 33kg'),
(11, 12, ' NEWSUN', 'NE-09872', '100% từ Đức & EU', '6 Tháng', '<p>Điện áp: 220-240V/50-60Hz<br>Công suất: 1840 W<br>Nhiệt độ: 30 – 110 độ C<br>Kích thước: 900*480*610mm<br>Trọng lượng: 50kg</p>'),
(14, 25, '', 'DBL-325', 'Trung Quốc', '7 ngày', '<p>Dây Đèn Led Ruy Băng Trang Trí Noel&nbsp;<br>Chất liệu:vải, đèn led<br>Số lượng bóng đèn: 40 bóng<br>Kích thước: Dài 4m<br>Dây ruy băng đèn Led trang trí cây thông Noel và gói quà<br>Sử dụng đèn Led không tỏa nhiệt, dây dễ uốn cong để tạo hình tùy ý.<br>Sử dụng nguồn từ 3 Pin AA (không kèm pin).<br>Màu sắc: vàng, trắng</p>'),
(15, 24, '', 'DBH-23', 'Trung Quốc', '3 tháng', '<ul><li>&nbsp;Công nghệ LED tiết kiệm, tiệu thụ ít điện (2-10W) nhưng cường độ sáng lớn</li><li>Phím cảm ứng nhạy, thông minh.</li><li>&nbsp;Khi giảm sáng có thể dùng làm đèn ngủ.</li><li>Tích điện: Ngoài Cắm điện để dùng, đèn còn có phân loại</li></ul>'),
(16, 21, 'Elmich ', 'EL-01', 'Việt Nam', '12 Tháng', '<p>Chưa có chi tiết</p><p>&nbsp;</p>'),
(17, 20, 'ROSHI', 'RS-1026', 'Đức ', '12 tháng', '<ul><li>Máy xay sinh tố ROSHI</li><li>Model: RS302</li><li>Điện áp: 220V~50Hz</li><li>Công suất: 218W</li></ul>'),
(18, 19, 'ROSHI', 'RS-1027', 'Đức ', '12 tháng', '<p>Chưa có thông tin</p>'),
(19, 18, 'KOCHI', 'KC-123', 'Đức ', '12 tháng', '<p>Kích thước khu vực nướng: 30 x 50 cm.</p>'),
(20, 17, 'GERTECH ', 'GT-2349', 'Đức ', '12 Tháng', '<p>– Công suất: 250W<br>– Tốc độ xay nghiền: 58 vòng/phút<br>– Trọng lượng máy: 5 kg<br>– Miệng ống nạp: 75mm<br>– Lưới lọc bã mịn</p>'),
(21, 32, '', 'BD-022', 'Việt Nam', '3 tháng', '<p>THÔNG SỐ KĨ THUẬT – Điện áp: 220V/50Hz – Chỉ số hoàn màu: CRI&gt;80 – Công suất:10w,20w,30w,40w,50w – Chui xoay: E27 bọc – Tuổi thọ: 30.000 H – Ánh sáng: Trắng</p>'),
(22, 33, '', 'DP-30921', 'Việt Nam', '3 tháng', '<p>Công suất: 30W – Đèn dài 22cm, đường kính pha đèn 7cm<br>Pin Lithium cao cấp dung lượng 3000mAh<br>Phạm vi chiếu xa: 500m với độ sáng cực mạnh</p>'),
(23, 34, '', 'DT-342', 'Việt Nam', 'Test', '<p>Chống gió: Với chụp đèn bằng nhựa chống gió, cổ điển và bền.&nbsp;</p>'),
(24, 35, '', 'CT-5091', 'Việt Nam', '3 tháng', '<p>size 28,chảo chống dính 5 lớp inox 304 dùng cho mọi loại bếp</p>'),
(25, 36, '', 'DH-091882', 'Nhật Bản', 'Test', '<p>Lưỡi dao bằng thép, sắc bén. Chuyên dùng gọt trái cây, cắt, thái, rau, củ, quả vừa &amp; nhỏ.</p>'),
(26, 37, 'Sokany', 'SO-1089', '100% Đức và EU', '6 Tháng', '<p>Test</p>'),
(27, 38, 'Sokany', 'SO-1090', '100% Đức và EU', '12 Tháng', '<p>Điện áp 220 V/ 50 Hz</p>'),
(28, 39, '', 'DHHH01', '100% Đức và EU', '6 Tháng', '<p>Test</p>'),
(29, 40, 'Sokany', 'SO-1091', '100% Đức và EU', '6 Tháng', '<p>Test</p>'),
(30, 41, '', 'CCT-0932', '100% Đức và EU', '6 Tháng', '<p>test thôi&nbsp;</p>'),
(31, 42, 'OEM', 'OM-0987', 'Nhật Bản', '12 Tháng', '<p>Miếng: 145×78×18mm ~ Gói: 60×78×155mm</p>'),
(32, 43, 'OEM', 'OM-0988', 'Nhật Bản', '6 Tháng', ''),
(33, 44, 'Malloca ', 'Ma-09876', 'Italy', '12 Tháng', ''),
(34, 45, 'AMG', 'AMG-190', '100% Đức ', '12 Tháng', '<ul><li>Điện áp: 180 – 240V/50Hz.</li><li>Công nghệ Tăng cường cảm ứng InductionBOOST</li><li>Chức năng tạm dừng, hẹn giờ, giữ ấm</li><li>Chức năng an toàn điện chống quá nóng</li><li>Chức năng khóa an toàn cho trẻ em</li></ul>'),
(35, 46, '', 'DH-09182', 'Thái Lan', '6 Tháng', '<ul><li>Chất liệu: thép nguyên khối</li><li>Công dụng: Pha lọc thực phẩm…</li><li>Xuất xứ : Thái lan</li></ul>'),
(36, 47, '', 'DH-09183', 'Thái Lan', '6 Tháng', '<ul><li>Dao chặt thái lan</li><li>Trọng lượng: 900g</li><li>Thép nhập khẩu từ Đức</li><li>Chặt xương, sử dụng cho gia đình, nhà hàng</li><li>Xuất xứ: Thái Lan</li></ul>'),
(37, 48, '', 'CT-09871', 'Nhật Bản', '6 Tháng', '<p>Chưa có thông tin</p>'),
(38, 49, 'Yoosee', 'Y-09871', 'Nhật Bản', '6 Tháng', '<p>Chưa có</p>'),
(39, 50, 'Pujimax', 'P-09871', '100% Đức và EU', '12 Tháng', '<p>Chưa có&nbsp;</p>'),
(40, 51, '', 'CPP-09812', 'Nhật Bản', '12 Tháng', '<p>Thiết bị tương thích các đời máy ios từ ip5 trở lên ,ipad&nbsp;</p>'),
(41, 52, 'Sony', 'S-098172', 'Nhật Bản', '12 Tháng', '<p>Không có</p>'),
(43, 54, '', 'My-09912', '100% Đức và EU', '12 Tháng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Status` bit(5) NOT NULL,
  `Descrption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`RoleID`, `Name`, `Status`, `Descrption`) VALUES
(1, 'Khách Hàng', b'00000', 'Quyền Nhân viên'),
(2, 'Admin', b'00000', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `ID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Creat_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Descrption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`ID`, `Email`, `Creat_at`, `Descrption`) VALUES
(3, 'hoangkha1287@gmail.com', '2023-11-16 03:20:16', '<p>Test hai</p>'),
(5, 'xuanngocj4561@gmail.com', '2023-11-16 03:17:01', '<p>Test</p>'),
(6, 'manhdome@gmail.com', '2023-11-16 03:21:34', '<p>3 %</p>'),
(7, 'hoangnguyen90a@gmail.com', '2023-11-19 18:37:18', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `user` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Adress` varchar(30) NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `Password`, `user`, `Email`, `Phone`, `Adress`, `RoleID`) VALUES
(3, '0e153710651e4aa3aba7212b10222f82', 'Nhat12', 'nhatdz22222@gmail.com', 372583407, 'Hà Nội', 1),
(4, 'ef46d35a18f5e54a2e7bc41e82ccb05f', 'hunga', 'hung23@gmail.com', 372583409, '<p>Hai Duong</p>', 1),
(7, 'a45d20693942c8cec2638526e27c2a7c', 'hoang12', 'hoang128p@gmail.com', 372999999, '<p>14, truong chinh, Ha Noi</p', 1),
(8, '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'Admin@gmail.com', 372222222, '<p>Ha Noi</p>', 2),
(9, '827ccb0eea8a706c4c34a16891f84e7b', 'duy12', 'duynguyen123@gmail.com', 372678999, 'Hà Nội', 1),
(10, '827ccb0eea8a706c4c34a16891f84e7b', 'hung123', 'hung@gmail.com', 0, '13 linh nam', 1),
(11, '202cb962ac59075b964b07152d234b70', 'nam', 'nam@gmail.com', 123456789, 'Thai Binh', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_image` (`ProductID`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `oder_deltail`
--
ALTER TABLE `oder_deltail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_oderdeltail` (`oderID`),
  ADD KEY `fk_oder_product` (`productID`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `fk_product_cate` (`CategoryID`);

--
-- Chỉ mục cho bảng `product_deltail`
--
ALTER TABLE `product_deltail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_productdeltail` (`productID`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `FK_role` (`RoleID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `image_product`
--
ALTER TABLE `image_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `oder_deltail`
--
ALTER TABLE `oder_deltail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `product_deltail`
--
ALTER TABLE `product_deltail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `FK_image` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `oder_deltail`
--
ALTER TABLE `oder_deltail`
  ADD CONSTRAINT `fk_oder_product` FOREIGN KEY (`productID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `fk_oderdeltail` FOREIGN KEY (`oderID`) REFERENCES `oder` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_cate` FOREIGN KEY (`CategoryID`) REFERENCES `categorys` (`CategoryID`);

--
-- Các ràng buộc cho bảng `product_deltail`
--
ALTER TABLE `product_deltail`
  ADD CONSTRAINT `fk_productdeltail` FOREIGN KEY (`productID`) REFERENCES `products` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_role` FOREIGN KEY (`RoleID`) REFERENCES `role` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
