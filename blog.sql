-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 05:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `url`, `parent`, `description`) VALUES
(1, 'Uncategory', 'Uncategory', 0, 'Linh tinh'),
(3, 'News', 'News', NULL, 'Tin thá»i sá»±'),
(4, 'IT', 'IT', NULL, 'Programing');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 NOT NULL,
  `content` text NOT NULL,
  `userid` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `timedate` datetime NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `userid`, `category_id`, `timedate`, `url`) VALUES
(18, ' Máº¥u chá»‘t khá»§ng hoáº£ng cá»§a Facebook', '<p>H&atilde;ng n&agrave;y ph&aacute;t triá»ƒn c&aacute;c m&ocirc; h&igrave;nh ph&acirc;n loáº¡i t&iacute;nh c&aacute;ch dá»±a v&agrave;o nghi&ecirc;n cá»©u cá»§a c&aacute;c trÆ°á»ng Stanford v&agrave; Cambridge. C&aacute;c nghi&ecirc;n cá»©u n&agrave;y láº¥y dá»¯ liá»‡u tá»« app cá»§a Facebook c&oacute; t&ecirc;n myPersonality (T&iacute;nh c&aacute;ch cá»§a t&ocirc;i) vá»›i khoáº£ng 100 c&acirc;u há»i do trung t&acirc;m Ä‘o t&iacute;nh c&aacute;ch Psychometrics Center cá»§a Äáº¡i há»c Cambridge nháº±m Ä‘&aacute;nh gi&aacute; t&iacute;nh c&aacute;ch má»™t ngÆ°á»i c&oacute; cá»Ÿi má»Ÿ, hÆ°á»›ng ngoáº¡i, dá»… gáº§n,&hellip; - c&aacute;c t&iacute;nh c&aacute;ch thÆ°á»ng Ä‘Æ°á»£c trong giá»›i gá»i váº¯n táº¯t l&agrave; Ocean.</p>\r\n\r\n<hr />\r\n<p>Ráº¥t nhiá»u ngÆ°á»i khi thá»±c hiá»‡n b&agrave;i Ä‘iá»u tra myPersonality n&agrave;y cho ph&eacute;p app Ä‘&oacute; láº¥y th&ocirc;ng tin cá»§a há» tr&ecirc;n profile Facebook v&agrave; láº¥y th&ocirc;ng tin cá»§a nhá»¯ng ngÆ°á»i báº¡n cá»§a há» - khi Ä‘&oacute; Facebook cho ph&eacute;p láº¥y data váº­y. Viá»‡c n&agrave;y cho ph&eacute;p nhá»¯ng nh&agrave; nghi&ecirc;n cá»©u Ä‘á»‘i chiáº¿u káº¿t quáº£ th&ocirc;ng qua c&aacute;c &ldquo;likes&rdquo; Facebook v&agrave; dá»±ng ra Ä‘Æ°á»£c m&ocirc; h&igrave;nh v&agrave; c&aacute;c má»‘i li&ecirc;n quan.</p>\r\n\r\n<p>Tá»« m&ocirc; h&igrave;nh n&agrave;y, nhá»¯ng nh&agrave; nghi&ecirc;n cá»©u c&oacute; thá»ƒ dá»± Ä‘o&aacute;n ch&iacute;nh x&aacute;c vá» t&iacute;nh c&aacute;ch sá»­ dá»¥ng chá»‰ báº±ng c&aacute;c &ldquo;like&rdquo; tr&ecirc;n Facebook.</p>\r\n\r\n<p>Má»™t nghi&ecirc;n cá»©u cá»§a Psychometrics Center, Ä‘Æ°á»£c Ä‘Äƒng tr&ecirc;n táº¡p ch&iacute; Proceedings cá»§a Viá»‡n H&agrave;n l&acirc;m Khoa há»c Quá»‘c gia Má»¹, dá»±a tr&ecirc;n &ldquo;likes&rdquo; v&agrave; Ä‘iá»ƒm sá»‘ Ocean cá»§a hÆ¡n 70.000 ngÆ°á»i tá»«ng tráº£ lá»i thÄƒm d&ograve; myPersonality tr&ecirc;n Facebook.</p>\r\n\r\n<p>Nghi&ecirc;n cá»©u ph&aacute;t hiá»‡n ráº±ng nhá»¯ng ngÆ°á»i th&iacute;ch phim &ldquo;Fight Club&rdquo; cháº³ng háº¡n, thÆ°á»ng cá»Ÿi má»Ÿ vá»›i nhá»¯ng tráº£i nghiá»‡m hÆ¡n l&agrave; nhá»¯ng ngÆ°á»i th&iacute;ch coi &ldquo;American Idol&rdquo;.</p>\r\n\r\n<p>Trong nghi&ecirc;n cá»©u Ä‘&oacute;, c&aacute;c nh&agrave; nghi&ecirc;n cá»©u so s&aacute;nh Ä‘á»™ ch&iacute;nh x&aacute;c cá»§a m&ocirc; h&igrave;nh cá»§a m&igrave;nh vá»›i nhá»¯ng Ä‘&aacute;nh gi&aacute; t&iacute;nh c&aacute;ch m&agrave; báº¡n b&egrave; cá»§a ngÆ°á»i d&ugrave;ng Ä‘&oacute; Ä‘Æ°a ra. Nhá»¯ng ngÆ°á»i báº¡n Ä‘&oacute; tráº£ lá»i 10 c&acirc;u há»i vá» t&iacute;nh c&aacute;ch cá»§a nhá»¯ng ngÆ°á»i n&agrave;y.</p>\r\n\r\n<p>Dá»±a v&agrave;o dá»¯ liá»‡u cá»§a hÆ¡n 32.000 ngÆ°á»i tham gia Ä‘Æ°á»£c Ä‘&aacute;nh gi&aacute; th&ocirc;ng qua cáº£ báº±ng m&ocirc; h&igrave;nh thuáº­t to&aacute;n v&agrave; dá»±a báº±ng báº¡n b&egrave;, c&aacute;c nh&agrave; nghi&ecirc;n cá»©u tháº¥y m&ocirc; h&igrave;nh chá»‰ cáº§n d&ugrave;ng 10 &ldquo;likes&rdquo; l&agrave; c&oacute; thá»ƒ dá»± Ä‘o&aacute;n ch&iacute;nh x&aacute;c hÆ¡n cáº£ Ä‘á»“ng nghiá»‡p. Vá»›i 70 likes, c&oacute; thá»ƒ dá»± Ä‘o&aacute;n ch&iacute;nh x&aacute;c hÆ¡n cáº£ ngÆ°á»i á»Ÿ c&ugrave;ng ph&ograve;ng; 150 likes, c&oacute; thá»ƒ ch&iacute;nh x&aacute;c hÆ¡n cáº£ ngÆ°á»i trong gia Ä‘&igrave;nh, v&agrave; vá»›i 300 like, ch&iacute;nh x&aacute;c hÆ¡n cáº£ vá»£/chá»“ng.</p>\r\n', 1, 3, '2018-03-21 05:52:57', 'Kh'),
(25, 'ChÃ¡y chung cÆ° cao cáº¥p á»Ÿ SÃ i GÃ²n', '<p>Theo &ocirc;ng HÆ°á»Ÿng, khi tiáº¿p nháº­n th&ocirc;ng tin, cáº£nh s&aacute;t PCCC Ä‘&atilde; Ä‘iá»u Ä‘á»™ng 34 xe cá»©u há»a c&ugrave;ng 200 chiáº¿n sÄ© Ä‘áº¿n hiá»‡n trÆ°á»ng, tiáº¿p cáº­n dáº­p lá»­a, cá»©u ngÆ°á»i. C&aacute;c chiáº¿n sÄ© chia l&agrave;m nhiá»u mÅ©i, máº·c Ä‘á»“ báº£o há»™ v&agrave;o tá»«ng cÄƒn há»™ Ä‘á»ƒ giáº£i cá»©u h&agrave;ng trÄƒm ngÆ°á»i.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="Chay chung cu cao cap o Sai Gon, 13 nguoi thiet mang hinh anh 1" class="img-responsive" src="https://znews-photo-td.zadn.vn/w660/Uploaded/oqivovbv/2018_03_23/chaychungcu_zing_1.jpg" width="2048" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ch&aacute;y chung cÆ° Carina Plaza. áº¢nh:&nbsp;<em>L&ecirc; Trai.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tuy nhi&ecirc;n, kh&oacute;i lá»­a bá»‘c l&ecirc;n ng&ugrave;n ngá»¥t khiáº¿n nhiá»u ngÆ°á»i máº¯c káº¹t, Ä‘áº¿n 4h s&aacute;ng nay, c&oacute; Ä‘áº¿n 13 ngÆ°á»i tá»­ vong, trong Ä‘&oacute; c&oacute; nhiá»u phá»¥ ná»¯. Lá»±c lÆ°á»£ng chá»©c nÄƒng TP.HCM Ä‘ang phong tá»a hiá»‡n trÆ°á»ng, Ä‘iá»u tra vá»¥ viá»‡c.</p>\r\n\r\n<p>Táº¡i há»p b&aacute;o s&aacute;ng 23/3, thÆ°á»£ng t&aacute; Nguyá»…n Thanh HÆ°á»Ÿng cho biáº¿t c&oacute; 13 &ocirc;t&ocirc; bá»‹ ch&aacute;y trong Ä‘&oacute; c&oacute; 5 chiáº¿c ch&aacute;y ho&agrave;n to&agrave;n. CÆ¡ quan chá»©c nÄƒng sáº½ kh&aacute;m nghiá»‡m hiá»‡n trÆ°á»ng Ä‘á»ƒ t&igrave;m ra nguy&ecirc;n nh&acirc;n.&nbsp;</p>\r\n', 1, 3, '2018-03-23 03:11:49', 'Chay-chung-cu-cao-cap-o-Sai-Gon'),
(26, 'Mourinho cá»©ng ráº¯n trong cuá»™c chiáº¿n quyá»n lá»±c vá»›i sao MU', '<p><strong>Jose Mourinho c&oacute; há»£p Ä‘á»“ng vá»›i Ä‘á»™i b&oacute;ng, c&ograve;n cáº§u thá»§ MU quyá»n lá»±c tr&ecirc;n Ä‘&ocirc;i ch&acirc;n. Giá»¯a há» kh&ocirc;ng ai chá»‹u nhÆ°á»ng nhá»‹n trong cuá»™c Ä‘áº¥u Ä‘&aacute; ná»™i bá»™ á»Ÿ ph&ograve;ng thay Ä‘á»“ c&acirc;u láº¡c bá»™.</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tá»&nbsp;<em>Daily Mail</em>&nbsp;Ä‘Æ°a tin huáº¥n luyá»‡n vi&ecirc;n&nbsp;<a href="https://news.zing.vn/hlv-mourinho-tieu-diem.html">Mourinho</a>&nbsp;sáº½ cá»©ng ráº¯n vá»›i nhá»¯ng ng&ocirc;i sao nhÆ° Paul Pogba v&agrave; Luke Shaw, cho ráº±ng quyá»n lá»±c cá»§a há» v&ocirc; nghÄ©a trong viá»‡c Ä‘á»‹nh Ä‘oáº¡t tÆ°Æ¡ng lai cá»§a &ocirc;ng á»Ÿ Old Trafford. Ä&acirc;y nhÆ° lá»i tuy&ecirc;n chiáº¿n cá»§a cá»±u HLV Chelsea vá»›i há»c tr&ograve;, theo Ä‘&oacute; muá»‘n kháº³ng Ä‘á»‹nh r&otilde; ai má»›i l&agrave; &ocirc;ng chá»§ tr&ecirc;n s&acirc;n.</p>\r\n\r\n<h1>Heading 1</h1>\r\n\r\n<p><img alt="Mourinho cung ran trong cuoc chien quyen luc voi sao MU hinh anh 3" class="img-responsive center" src="https://znews-photo-td.zadn.vn/w660/Uploaded/BzcwvoBL/2018_03_25/923119760.jpg" width="594" /></p>\r\n\r\n<p>Jose Mourinho muá»‘n báº¯t ká»‹p Man City cá»§a Pep Guardiola táº¡i Premier League, tuy nhi&ecirc;n, phÆ°Æ¡ng ch&acirc;m &ocirc;ng hÆ°á»›ng Ä‘áº¿n l&agrave; x&acirc;y dá»±ng Ä‘á»™i b&oacute;ng dá»±a tr&ecirc;n h&agrave;ng thá»§ vá»¯ng cháº¯c. Do Ä‘&oacute;, nhá»¯ng cáº§u thá»§ - d&ugrave; c&oacute; gi&aacute; chuyá»ƒn nhÆ°á»£ng ráº¥t cao nhÆ° Pogba - náº¿u kh&ocirc;ng chá»‹u há»£p t&aacute;c Ä‘á»u c&oacute; thá»ƒ bá»‹ &quot;tráº£m&quot;.</p>\r\n\r\n<h2>Heading 2</h2>\r\n\r\n<p>ChÆ°a biáº¿t cuá»™c chiáº¿n quyá»n lá»±c giá»¯a Mourinho v&agrave; nhá»¯ng ng&ocirc;i sao trong Ä‘á»™i sáº½ diá»…n tiáº¿n tháº¿ n&agrave;o, chá»‰ biáº¿t lá»‹ch sá»­ chá»‰ ra &quot;NgÆ°á»i Ä‘áº·c biá»‡t&quot; thÆ°á»ng kh&ocirc;ng nháº­n káº¿t th&uacute;c c&oacute; háº­u sau khi g&acirc;y chiáº¿n vá»›i há»c tr&ograve;. Hai láº§n táº¡i Chelsea, &ocirc;ng tháº§y ngÆ°á»i Bá»“ Ä&agrave;o Nha Ä‘á»u bá»‹ sa tháº£i v&igrave; Ä‘&aacute;nh máº¥t ph&ograve;ng thay Ä‘á»“.Vá»«a qua, HLV Didier Deschamps dáº«n dáº¯t tuyá»ƒn Ph&aacute;p báº¥t ngá» chá»‰ tr&iacute;ch Mourinho, &ocirc;ng b&ecirc;nh vá»±c Pogba vá»›i nhá»¯ng chia sáº» nhÆ° sau: &quot;L&agrave;m sao cáº­u ta c&oacute; thá»ƒ háº¡nh ph&uacute;c vá»›i nhá»¯ng g&igrave; diá»…n ra á»Ÿ CLB&quot;. C&aacute;ch n&oacute;i n&agrave;y h&agrave;m &yacute; Mourinho Ä‘ang &quot;Ä‘&agrave;y áº£i&quot; tiá»n vá»‡ 25 tuá»•i, li&ecirc;n tá»¥c bá» sá»‘ 6 cá»§a MU tr&ecirc;n bÄƒng gháº¿ dá»± bá»‹.</p>\r\n\r\n<p>CÅ©ng theo&nbsp;<em>Daily Mail</em>, h&egrave; 2018 nhiá»u kháº£ nÄƒng chá»©ng kiáº¿n sá»± x&aacute;o trá»™n lá»›n vá» nh&acirc;n sá»± á»Ÿ MU. Ngay cáº£ t&ecirc;n tuá»•i nhÆ° Mata, Martial, Smalling cÅ©ng c&oacute; thá»ƒ pháº£i ra Ä‘i. Ngo&agrave;i ra, Matteo Darmian, Ander Herrera v&agrave; Daley Blind cÅ©ng náº±m trong danh s&aacute;ch bá»‹ Ä‘áº©y khá»i &quot;Nh&agrave; h&aacute;t cá»§a nhá»¯ng giáº¥c mÆ¡&quot;</p>\r\n\r\n<p><img alt="Mourinho cung ran trong cuoc chien quyen luc voi sao MU hinh anh 3" class="img-responsive center" src="https://znews-photo-td.zadn.vn/w660/Uploaded/BzcwvoBL/2018_03_25/923119760.jpg" width="594" /></p>\r\n\r\n<p>Jose Mourinho muá»‘n báº¯t ká»‹p Man City cá»§a Pep Guardiola táº¡i Premier League, tuy nhi&ecirc;n, phÆ°Æ¡ng ch&acirc;m &ocirc;ng hÆ°á»›ng Ä‘áº¿n l&agrave; x&acirc;y dá»±ng Ä‘á»™i b&oacute;ng dá»±a tr&ecirc;n h&agrave;ng thá»§ vá»¯ng cháº¯c. Do Ä‘&oacute;, nhá»¯ng cáº§u thá»§ - d&ugrave; c&oacute; gi&aacute; chuyá»ƒn nhÆ°á»£ng ráº¥t cao nhÆ° Pogba - náº¿u kh&ocirc;ng chá»‹u há»£p t&aacute;c Ä‘á»u c&oacute; thá»ƒ bá»‹ &quot;tráº£m&quot;.</p>\r\n\r\n<p>B&aacute;o Anh ph&acirc;n t&iacute;ch ban l&atilde;nh Ä‘áº¡o MU váº«n h&agrave;i l&ograve;ng vá»›i nhá»¯ng g&igrave; Mourinho l&agrave;m tá»›i l&uacute;c n&agrave;y, d&ugrave; Ä‘iá»u Ä‘&oacute; pháº£n truyá»n thá»‘ng CLB.</p>\r\n\r\n<h2>Heading @</h2>\r\n\r\n<p><strong><a href="https://news.zing.vn/video-mourinho-to-huyen-thoai-mu-hai-doi-nha-post825141.html" target="_blank">Mourinho &#39;tá»‘&#39; huyá»n thoáº¡i MU háº¡i Ä‘á»™i nh&agrave;</a></strong>&nbsp;L&yacute; giáº£i vá» viá»‡c Ä‘Æ°a Rashford rá»i s&acirc;n, HLV Mourinho cho biáº¿t &ocirc;ng sá»£ &aacute;p lá»±c m&agrave; Gary Neville g&acirc;y ra khi b&igrave;nh luáº­n tr&ecirc;n s&oacute;ng Skysports sáº½ khiáº¿n cáº­u há»c tr&ograve; pháº£i nháº­n tháº» Ä‘á».</p>\r\n\r\n<h3>Heading 3</h3>\r\n\r\n<p><strong><a href="https://news.zing.vn/video-mourinho-to-huyen-thoai-mu-hai-doi-nha-post825141.html" target="_blank">Mourinho &#39;tá»‘&#39; huyá»n thoáº¡i MU háº¡i Ä‘á»™i nh&agrave;</a></strong>&nbsp;L&yacute; giáº£i vá» viá»‡c Ä‘Æ°a Rashford rá»i s&acirc;n, HLV Mourinho cho biáº¿t &ocirc;ng sá»£ &aacute;p lá»±c m&agrave; Gary Neville g&acirc;y ra khi b&igrave;nh luáº­n tr&ecirc;n s&oacute;ng Skysports sáº½ khiáº¿n cáº­u há»c tr&ograve; pháº£i nháº­n tháº» Ä‘á».</p>\r\n', 1, 3, '2018-03-25 11:07:18', 'Mourinho-cung-ran-trong-cuoc-chien-quyen-luc-voi-sao-MU');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` text NOT NULL,
  `phanquyen` int(11) NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(5) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phanquyen`, `firstname`, `lastname`, `email`, `gender`, `image`) VALUES
(1, 'sufuijk', 'sufuijk', 0, 'Tá»« Minh', 'Hiáº¿u', 'sufuijk@gmail.com', 'Male', 'Zalo_635710400106193035.jpg'),
(2, 'buihien', 'ttlbmyn1', 1, 'BÃ¹i Hiá»n', 'Minh', 'gsbuihien@gmail.com', 'Male', 'Zalo_635710400106193035.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
