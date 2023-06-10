-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2023 at 10:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selft_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', 0),
(2, 'Super Admin', 'superAdmin@gmail.com', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` int NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone_number`, `address`, `token`) VALUES
(1, 'Dang Van Tuan Linh', '20010908@st.phenikaa-uni.edu.vn', '1', 987337285, 'Cầu Giấy Hà Nội', 'user_64061e651b9d57.00315880'),
(2, 'Dang Tuan Minh', 'dvtlinh26@gmail.com', '2', 966312198, 'Cầu Giấy Hà Nội', NULL),
(3, 'Vu Ngoc Anh', 'englishabak52@gmail.com', '3', 223223653, 'Ha Dong', NULL),
(4, 'Vu Ngoc Anh', 'englisha3k52@gmail.com', '3', 223223653, 'Ha Dong', NULL),
(5, 'Long VŨ', '20010934@st.phenikaa-uni.edu.vn', '2', 346386451, 'Hà Cầu Hà Đông', NULL),
(6, 'Dang Van Tuan Linh', '200109082@st.phenikaa-uni.edu.vn', '123', 987337285, 'Cầu Giấy Hà Nội', NULL),
(7, 'Dang Tuan Minh', 'dvtlinh216@gmail.com', '12312', 8496631, 'Cầu Giấy Hà Nội', NULL),
(8, 'Dang Tuan Minh', 'dvtlinh1216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(9, 'Dang Tuan Minh', 'dvtlinh123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(10, 'Dang Tuan Minh', 'dvtlinh231231123216@gmail.com', '12', 8496631, 'Cầu Giấy Hà Nội', NULL),
(11, 'Dang Tuan Minh', 'dvtlinh1123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(12, 'Dang Tuan Minh', 'dvtlinh2331231123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(13, 'Dang Tuan Minh', 'dvtlinh23131231123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(14, 'Dang Tuan Minh', 'dvtlinh21331231123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(15, 'Dang Tuan Minh', 'dvtlinh021331231123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(16, 'Dang Tuan Minh', 'dvtlinh2341331231123216@gmail.com', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(17, 'Dang Tuan Minh', 'dvtlinh23421331231123216@gmail.com', '', 8496631, 'Cầu Giấy Hà Nội', NULL),
(18, 'Dang Tuan Minh', '20010908100@st.phenikaa-uni.edu.vn', '1', 8496631, 'Cầu Giấy Hà Nội', NULL),
(19, 'Dang Tuan Minh', 'dvtlinh21312331231123216@gmail.com', '123', 8496631, 'Cầu Giấy Hà Nội', NULL),
(20, 'Cao Tiến Anh', 'tienanh12@gmail.com', '34', 312431241, 'Ocean Park ', NULL),
(21, 'Cao Tiến Anh', 'tienanh132@gmail.com', '123', 53453453, 'Ocean Park', NULL),
(22, 'Cao Tiến Anh', 'tienanh1322@gmail.com', '232', 3123414, 'Ocean Park', NULL),
(23, 'Cao Tiến Anh', 'tienanh13222313@gmail.com', '13123', 3123414, 'Ocean Park', NULL),
(24, 'Cao Tiến Anh', 'tienanh1313@gmail.com', '231231', 3123414, 'Ocean Park', NULL),
(25, 'Cao Tiến Anh', 'tienanh113@gmail.com', '2312', 3123414, 'Ocean Park', NULL),
(26, 'Cao Tiến Hải ', 'tienan113@gmail.com', '123', 3123414, 'Ocean Park', NULL),
(27, 'Cao Tiến Hải', 'tiena113@gmail.com', '123', 3123414, 'Ocean Park', NULL),
(28, 'Cao Tiến Hải', 'tien113@gmail.com', '123', 3123414, 'Ocean Park', NULL),
(29, 'Cao Tiến Hải', 'tienanh1513@gmail.com', '546', 3123414, 'Ocean Park', NULL),
(30, 'Cao Tiến Hải', 'tienanh112513@gmail.com', '32123', 3123414, 'Ocean Park', NULL),
(31, 'Cao Tiến Hải', 'tiena2513@gmail.com', '31412', 3123414, 'Ocean Park', NULL),
(32, 'Cao Tiến Hải', 'tiena2532313@gmail.com', '23123124', 3123414, 'Ocean Park', NULL),
(33, 'Dang Tuan Duong', '20010903231238@st.phenikaa-uni.edu.vn', '45234', 12432354, 'Ha Dong', NULL),
(34, 'Dang Tuan Duong', '2001008@st.phenikaa-uni.edu.vn', '42342', 342342, 'Ha Dong', NULL),
(35, '', '200903238@st.phenikaa-uni.edu.vn', '234', 463454445, 'Ha Dong', NULL),
(36, 'Dang Tuan Duong', '2009032238@st.phenikaa-uni.edu.vn', '123123', 23123, 'Ha Dong', NULL),
(37, 'Dang Tuan Duong', '20085464@st.phenikaa-uni.edu.vn', '342342', 2347867, 'Ha Dong', NULL),
(38, 'Dang Tuan Duong', '2089384@st.phenikaa-uni.edu.vn', '23123', 2347867, 'Ha Dong', NULL),
(39, 'Cao Tiến Hải', 'ti513@gmail.com', '879789', 3123414, 'Ocean Park', NULL),
(40, 'Cao Tiến Hải', 'ti5121313@gmail.com', '123123', 3123414, 'Ocean Park', NULL),
(41, 'Cao Tiến Hải', 'ti512z33@gmail.com', '12312', 3123414, 'Ocean Park', NULL),
(42, 'Cao Tiến Hải', 'ti5123z33@gmail.com', '154', 3123414, 'Ocean Park', NULL),
(43, 'Cao Tiến Hải', 'ti5121231z33@gmail.com', '1231231', 3123414, 'Ocean Park', NULL),
(44, 'Cao Tiến Hải', 'ti533@gmail.com', '3231', 3123414, 'Ocean Park', NULL),
(45, 'Dang Tuan Duong', '200854qqwe64@st.phenikaa-uni.edu.vn', 'weqw', 2347867, 'Ha Dong', NULL),
(46, 'Cao Tien Dung', 'dung1995@gmail.com', '1231', 84787321, 'TP Ho Chi Minh', NULL),
(47, 'Dang Van Tuan Linh', '2001090801@st.phenikaa-uni.edu.vn', 'linh', 987337285, 'Cầu Giấy Hà Nội', NULL),
(48, 'Dang Tuan Minh', '20010093@st.phenikaa-uni.edu.vn', 'linh', 8496631, 'Cầu Giấy Hà Nội', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `customer_id` int NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forgot_password`
--

INSERT INTO `forgot_password` (`customer_id`, `token`, `created_at`) VALUES
(1, 'Dang Van Tuan Linh', '2023-03-02 15:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `name_receiver` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_receiver` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_receiver` int NOT NULL,
  `status` int NOT NULL,
  `total_price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name_receiver`, `address_receiver`, `phone_receiver`, `status`, `total_price`, `created_at`) VALUES
(1, 2, 'Dang Tuan Minh', 'Cầu Giấy Hà Nội', 966312198, 2, 23123100000, '2023-03-01 17:05:24'),
(2, 2, 'Dang Tuan Minh', 'Cầu Giấy Hà Nội', 966312198, 2, 23123100000, '2023-03-01 17:08:11'),
(3, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 1, 103767000, '2023-03-06 05:30:46'),
(4, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 1, 138739000000, '2023-03-06 16:07:23'),
(5, 2, 'Dang Tuan Minh', 'Cầu Giấy Hà Nội', 966312198, 1, 117084000, '2023-03-06 16:08:08'),
(6, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 9450380, '2023-03-06 17:10:14'),
(7, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 195043000, '2023-03-20 09:40:13'),
(8, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 101205000, '2023-03-20 09:45:07'),
(9, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 46253600000, '2023-05-03 03:12:40'),
(10, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 93837800, '2023-05-05 03:25:28'),
(11, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 1, 23123600000, '2023-05-05 15:41:44'),
(12, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 46347400000, '2023-05-05 15:52:24'),
(13, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 2, 93837800, '2023-05-05 15:54:58'),
(14, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 23123600000, '2023-05-05 15:58:24'),
(15, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 93837800, '2023-05-05 16:02:53'),
(16, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 29469500, '2023-05-08 08:47:13'),
(17, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 7367380, '2023-05-08 09:19:00'),
(18, 1, 'Dang Van Tuan Linh', 'Cầu Giấy Hà Nội', 987337285, 0, 187676000, '2023-05-08 09:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`) VALUES
(2, 1, 1),
(3, 2, 1),
(3, 4, 1),
(3, 5, 1),
(4, 1, 6),
(5, 3, 3),
(5, 4, 1),
(5, 5, 10),
(6, 5, 1),
(7, 2, 2),
(7, 3, 1),
(8, 2, 1),
(8, 3, 1),
(9, 1, 2),
(9, 3, 1),
(10, 2, 1),
(11, 1, 1),
(11, 4, 1),
(12, 1, 2),
(12, 2, 1),
(12, 3, 1),
(13, 2, 1),
(14, 1, 1),
(14, 4, 1),
(15, 2, 1),
(16, 3, 4),
(17, 3, 1),
(18, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `link_photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `name`, `address`, `phone`, `link_photo`) VALUES
(1, 'Tập Đoàn Vingroup', '2WX8+RM5, Đối diện TTTM Vincom, Khu đô thị Vinhomes Riverside, Long Biên, Hà Nội', 39748888, 'https://vingroup.net/assets/images/logo.png'),
(2, 'Tesla', 'Austin, Texas, Hoa Kỳ', 5183752, 'data:image/png;base64,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'),
(3, 'Microsoft', 'Microsoft Redmond Campus\r\nRedmond, Washington, Hoa Kỳ', 8659408, 'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWCZER?ver=1433&q=90&m=6&h=195&w=348&b=%23FFFFFFFF&l=f&o=t&aim=true'),
(4, 'Apple Inc', 'Cupertino, California, Mỹ', 669027144, 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAABMCAMAAABgWtjWAAAA7VBMVEX///+oVqjoUk7/wzL5lSdxxFgAruOkVqzsUkdsxFmlxE7rXUn/xTL7qCv5kyf6miOXZbEAtOhowUxtw1MAqOHt9+tjv0XM6MSZ04nb79Z9yGelTqWjSKNKu+jy+fC+4rWNznvj8t/U7M5XvDSo2Zuy3aeEy3ChwT7/3Jn/wB3/7s7/5bb+6sP/zWD/14X/y1P8u2T+9Oz5kBb7tn37sG76nkH7nzj6lgz/8ODufW/qVD7ypJ3xm5rnQT386+r2xMLramfteXfzrqu8icLEk8Tt4O3NpczYwNuNW66gc7fX8/2e1/F3x+vG5/fo9furWcugAAABmUlEQVRoge3UWVPCMBSG4QgE6y5pmy60FBAX3MV9KeKCCxT+/8+xFHG4IXGc+cKMk/eqzc0z5wRKiE6n0+l0ur9Xiar2HFSXM15TzjrMpJQpnzfidFRFMetlrOkqZkk2LOWeYjZi2bhVxSzxs3GZ6tu1+Vy2TOqpy6i6/1DFHm+2vsX8aHyAx2sNn5qm7zrpszfivOyAVh2kmn4VzezHZDLuOrbtbZtscsBwsmeOkQnN+dQ75ajvR51TYWwHwtb4kiTeQLjLsnYhN7zXzItr7iNYImUPIOyhzD2CsORY4oK2TE5WxeUx7NmapFOQ21oX1jpHuQVhc3MvQK6YLRQuMS652hB3fYNxb1fE3d1j3AcjJy5uQ9zHWOLmOhC3LXWNJwjckbk5o4NY9XNsSIsRIweL0sovAPe1vCAr6ALcbiBjIeP+YmDIuGmSgYM3DEvePzZFfYJYQsKSoGIP5g6Ls7P6MJaQnjWTTYAsIYMf2CqGYcmy1LDpxKURZVlJdpvDQWjBl/zdIAmTKaaXhGF/iGd1Op1Op/s/fQH7LTlnTkKBsgAAAABJRU5ErkJggg=='),
(5, 'Samsung', 'Tầng 40 toà nhà Samsung Electronics, 11, Seocho-daero 74-gil, Seocho-gu, Seoul, Hàn Quốc[1]', 7267864, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/2560px-Samsung_Logo.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_producer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `photo`, `price`, `description`, `id_producer`) VALUES
(1, 'Lightning 1', 'photos/1677690111.jpg', 23123100000, 'first model to destroy a country', 1),
(2, 'Barbatos', 'photos/1678080236.jpg', 93837800, 'MG (Master Grade) là dòng Gunpla cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Dòng MG khác với dòng 1/100 ở chi tiết, khớp nối và tỉ lệ chỉ kém hơn dòng PG. Tất cả các dòng MG đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Để người xem có thể hình dung được cỡ của gundam so với người thì rất nhiều mẫu MG có chứa cỡ 1/100 của phi công điều khiển. Một vài mẫu có cỡ 1/20 của phi công. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng Master Grade dưới tên gọi ‘’Ver.Ka’’ (Katori Version). Hầu hết các phiên bản Ver.ka được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất cỡ MG như Dragon Ball Z, One Piece.', 3),
(3, 'Armor Unicorn', 'photos/1678080396.jpg', 7367380, '– Thuộc Series: Mobile Suit Gundam Unicorn\r\n\r\n– Mẫu Gundam Phenex phiên bản mới, chuẩn bị xuất hiện trong phim Mobile Suit Gundam Narrative với trang thái Destroy Mode hé lộ phần Psycho Frame bên trong cực ngầu\r\n\r\n– Trang bị: Armed Armor DE x2, Beam Magnum\r\n\r\n– Hai chiếc khiên Armed Armor DE có thể gắn sau lưng tựa hai cánh, ngoài ra còn có cả phần “đuôi phượng” đẹp mắt, giữ vai trò ổn định cân bằng', 2),
(4, 'Throne Ins', 'photos/1678080465.jpg', 478437, 'Là dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 5),
(5, 'Hirm Astray', 'photos/1678080495.jpg', 9450380, 'Cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Tất cả các cỡ 1/100 đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng 1/100. Hầu hết các phiên bản 1/100 được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất cỡ 1/100 như Dragon Ball Z, One Piece.\r\n\r\nGiới thiệu về Gundam Bandai 1/100 Hirm Astray Red Frame:\r\n\r\n+ Mô hình sử dụng decal để tăng thêm độ chi tiết.\r\n+ Mô hình có khung xương với biên độ cử động và độ chi tiết ở mức tuyệt vời.\r\n+ Mô hình có khung xương đã được ráp sẵn.\r\n\r\n– Đồ đạc đi kèm:\r\n+ Gerbera straight × 1\r\n+ Beam sabel × 2\r\n+ Beam rifle × 1\r\n+ Shield × 1\r\n+ Molded article × 14\r\n+ Completed frame × 1\r\n+ Marking stick × 1\r\n+ Instruction manual × 1', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `order_detail_ibfk_1` (`product_id`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producer` (`id_producer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD CONSTRAINT `forgot_password_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
