-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 17, 2021 lúc 01:59 PM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_blog_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL,
  `img_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `img_category`) VALUES
(1, 'fast food', 'uploads/499681.jpg'),
(2, 'healthy', 'uploads/Screenshot from 2021-05-12 16-13-27.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `teaser` text NOT NULL,
  `teaser_img` varchar(800) DEFAULT NULL,
  `content` longtext NOT NULL,
  `author` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `teaser`, `teaser_img`, `content`, `author`, `created`, `category_id`, `user_id`) VALUES
(35, 'Scrum Master làm gì trong suốt một ngày?', 'vvvvvvvvvv', 'aaaaaaaaaaaaaa', 'ccccccccccc', 'bbbbbbbbb', '2021-05-14', 1, 1),
(38, 'Họp xong việc và họp thêm việc123444', 'ddddd', 'dsa', 'aaaaaaaa', 'bbbbbbbbb', '2021-05-06', 1, 1),
(39, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsa', 'aaaaaaaa', 'bbbbbbbbb', '2021-05-06', 1, 1),
(40, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsa', 'aaaaaaaa', 'bbbbbbbbb', '2021-05-06', 1, 1),
(41, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsa', 'aaaaaaaa', 'bbbbbbbbb', '2021-05-06', 1, 1),
(42, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsa', 'aaaaaaaa', 'bbbbbbbbb', '2021-05-06', 1, 1),
(43, 'Scrum Master làm gì trong suốt một ngày?', 'ddddd', 'asdasd', 'ccccccccccc', 'ddddddddd', '2021-05-21', 1, 1),
(45, 'Scrum Master làm gì trong suốt một ngày?', 'ddddd', 'asdasd', 'ccccccccccc', 'ddddddddd', '2021-05-21', 1, 1),
(46, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsadas', 'dddddddd', 'bbbbbbbbb', '2021-05-18', 1, 1),
(47, 'Họp xong việc và họp thêm việc21', 'ddddd', 'dsadas', 'dddddddd', 'bbbbbbbbb', '2021-05-18', 1, 1),
(48, 'Họp xong việc và họp thêm việc1', 'ddddd', 'asdasd', 'ccccccccccc', 'bbbbbbbbb', '2021-05-22', 1, 1),
(49, 'Vì sao bạn nên phân tích đối thủ để đưa ra giải pháp thiết kế tốt hơn', 'ddddd', 'dsadas', 'dsadas', 'dasda', '2021-05-10', 1, 1),
(50, 'Họp xong việc và họp thêm việc', '1', 'dsadas', 'dsadas', 'dasda', '2021-05-10', 1, 1),
(51, 'Vì sao bạn nên phân tích đối thủ để đưa ra giải pháp thiết kế tốt hơn', 'ddddd', 'dsa', 'dsadas', 'bbbbbbbbb', '2021-05-07', 1, 1),
(56, 'Họp xong việc và họp thêm việc', 'ddddd', NULL, 'ccccccccccc', 'bbbbbbbbb', '2021-05-14', 1, 2),
(57, 'Họp xong việc và họp thêm việcccaswda', '1111111111111111', 'uploads/499681.jpg', '222222222222', '3333333333', '2021-05-21', 2, 1),
(58, 'Scrum Master làm gì trong suốt một ngày? fffffffffffffffffffffffffff', '1', 'uploads/m8c20gchf7231.jpg', '22222222222222', '333333333333', '2021-05-18', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `birthday_user` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `gmail` varchar(40) NOT NULL,
  `address` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `permission` int(2) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `birthday_user`, `phone_number`, `gmail`, `address`, `img`, `permission`, `password`) VALUES
(1, 'itachi123', 'ccc', '2021-04-28', 3222222, 'sdsss', 'sssss', 'uploads/499681.jpg', 0, '2'),
(2, 'kakashi22', 'kakashi', '2021-05-05', 32225555, 'dadasdasD@gmail.com', 'ffffffffffffff', 'uploads/m8c20gchf7231.jpg', 0, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
