-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 23, 2018 lúc 08:46 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `url`, `parent`, `description`) VALUES
(1, 'Uncategory', 'Uncategory', 0, NULL),
(2, 'News', 'News', NULL, 'Tin thá»i sá»±');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text NOT NULL,
  `userid` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `timedate` datetime NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `userid`, `category_id`, `timedate`, `url`) VALUES
(2, 'Programing is life', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic corrupti amet laudantium maxime quas, doloremque inventore, fugit nihil at doloribus asperiores unde repellendus vitae, voluptate labore ad praesentium accusamus beatae deserunt dolorem eos temporibus dolore quod sint magnam? Non velit, voluptates a laborum, quidem sunt dolores. Autem magni dolorum quis?', 1, 1, '0000-00-00 00:00:00', 'programing-is-life'),
(3, 'Cháº³ng biáº¿t nÃ³i gÃ¬ hÆ¡n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti blanditiis nesciunt voluptates, hic iure harum nisi at ullam delectus excepturi iste obcaecati saepe consequatur perferendis necessitatibus earum neque, maiores nihil voluptatum itaque maxime reiciendis!</p>\r\n', 1, 2, '2018-02-05 00:00:00', ''),
(4, 'Hello world', '<p>Tap is hieu</p>\r\n', 1, 1, '2018-02-19 06:59:28', 'Hello-world');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'sufuijk', 'sufuijk');

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
  ADD KEY `userid` (`userid`),
  ADD KEY `category_id` (`category_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
