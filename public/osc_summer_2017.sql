/*
Navicat MySQL Data Transfer

Source Server         : ILA
Source Server Version : 50630
Source Host           : 103.27.236.85:8683
Source Database       : osc_summer_2017

Target Server Type    : MYSQL
Target Server Version : 50630
File Encoding         : 65001

Date: 2017-02-06 15:19:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `multi_countries` tinyint(1) NOT NULL DEFAULT '0',
  `home_show` tinyint(1) NOT NULL DEFAULT '0',
  `img_slide` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES ('1', 'Mỹ', 'my', '1', '1', '2017-01-19 09:53:09', '2017-01-24 10:12:42', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485247582_USA-500X333.jpg', '', '0', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485252762_USA-600X325.jpg');
INSERT INTO `countries` VALUES ('2', 'Canada', 'canada', '1', '2', '2017-01-19 10:14:18', '2017-01-24 10:12:10', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485252730_CANADA-500X333.jpg', '', '0', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485247482_CANADA-600X325.jpg');
INSERT INTO `countries` VALUES ('3', 'Anh', 'anh', '1', '3', '2017-01-19 10:15:14', '2017-01-24 10:18:48', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485247571_uk-500.jpg', '', '0', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485253128_UK-600X325.jpg');
INSERT INTO `countries` VALUES ('4', 'Úc', 'uc', '1', '4', '2017-01-19 10:15:55', '2017-01-24 10:17:49', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485253069_AU-500X333.jpg', '', '0', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485247430_AU-660X325.jpg');
INSERT INTO `countries` VALUES ('5', 'Singapore', 'singapore', '1', '5', '2017-01-19 10:16:20', '2017-01-24 08:44:57', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1484820980_Sing.jpg', '', '0', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485247497_SING-600x325.jpg');
INSERT INTO `countries` VALUES ('6', 'Liên tuyến Singapore - Malaysia', 'lien-tuyen-singapore-malaysia', '1', '6', '2017-01-19 10:17:48', '2017-02-06 04:13:56', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485252751_SING-MALAY-500X333.jpg', '', '1', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1484883768_SING-Malaysia-landscape.jpg');
INSERT INTO `countries` VALUES ('7', 'Liên tuyến Úc - Newzealand', 'lien-tuyen-uc-newzealand', '1', '7', '2017-01-19 10:18:56', '2017-02-06 04:14:06', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485247547_AU-NZ-500X333.jpg', '', '1', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485252713_AU-NZ-600X325.jpg');
INSERT INTO `countries` VALUES ('8', 'Liên tuyến Anh - Pháp', 'lien-tuyen-anh-phap', '1', '8', '2017-01-19 10:19:20', '2017-02-06 04:14:15', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/1485252972_UK-FR-500X333.jpg', '', '1', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/country/slider/1485253165_UK-FR-600X325.jpg');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/image/1485157313_OSChe_Web_banner01-01.png', '1485157313_OSChe_Web_banner01-01', '1', '1', '2017-01-23 07:41:53', '2017-01-23 07:41:53', 'banner');

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_city` int(11) NOT NULL,
  `id_center` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of locations
-- ----------------------------
INSERT INTO `locations` VALUES ('1', '48', '1', 'Hồ Chí Minh', 'ho-chi-minh', '1', '1', '2017-01-19 10:53:39', '2017-01-19 10:53:39');
INSERT INTO `locations` VALUES ('2', '20', '16', 'Hà Nội', 'ha-noi', '1', '2', '2017-01-19 10:55:06', '2017-01-19 10:55:06');
INSERT INTO `locations` VALUES ('3', '1', '19', 'Đà Nẵng', 'da-nang', '1', '3', '2017-01-19 10:56:39', '2017-01-19 10:56:49');
INSERT INTO `locations` VALUES ('4', '70', '18', 'Vũng Tàu', 'vung-tau', '1', '4', '2017-01-19 10:57:15', '2017-01-19 10:57:15');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for promotions
-- ----------------------------
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `img_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of promotions
-- ----------------------------
INSERT INTO `promotions` VALUES ('1', 'Dành cho<Br/> học viên cũ 2016', 'danh-cho-br-hoc-vien-cu-2016', 'Dành cho học sinh đã tham gia đoàn du học hè 2016 ', '<p>\r\n	D&agrave;nh cho học sinh đ&atilde; tham gia đo&agrave;n du học h&egrave; 2016&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363806_hocviencu-ic.jpg', '1', '1', '2017-01-19 10:20:46', '2017-02-06 07:02:54', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363806_hocviencu-ic.jpg');
INSERT INTO `promotions` VALUES ('2', 'Dành cho<br/> học viên ILA ', 'danh-cho-br-hoc-vien-ila-', 'Dành cho học sinh hiện đang theo học các khoá tiếng Anh tại ILA ', '<p>\r\n	D&agrave;nh cho học sinh hiện đang theo học c&aacute;c kho&aacute; tiếng Anh tại ILA&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363855_hocvienILA-ic.jpg', '1', '2', '2017-01-19 10:21:14', '2017-02-06 07:03:03', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363855_hocvienILA-ic.jpg');
INSERT INTO `promotions` VALUES ('3', 'Dành cho<br/> học viên đăng ký sớm ', 'danh-cho-br-hoc-vien-dang-ky-som-', 'Dành cho học sinh đăng ký sớm trước thời hạn', '<p>\r\n	D&agrave;nh cho học sinh đăng k&yacute; sớm trước thời hạn</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363874_dangkysom-ic.jpg', '1', '3', '2017-01-19 10:21:31', '2017-02-06 07:03:10', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363874_dangkysom-ic.jpg');
INSERT INTO `promotions` VALUES ('4', 'Dành cho<br/> học viên giới thiệu bạn tham gia', 'danh-cho-br-hoc-vien-gioi-thieu-ban-tham-gia', 'Dành cho học sinh đăng ký du học hè cùng với bạn bè', '<p>\r\n	D&agrave;nh cho học sinh đăng k&yacute; du học h&egrave; c&ugrave;ng với bạn b&egrave;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363890_gioithieuban-ic.jpg', '1', '4', '2017-01-19 10:21:56', '2017-02-06 07:03:37', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/promotion/1486363890_gioithieuban-ic.jpg');

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_city` int(11) DEFAULT NULL,
  `id_center` int(11) DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `content_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inquiry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', 'Phan Minelim', '0123456789', 'liemphan@ilavietnam.edu.vn', null, null, '3', 'sadas', 'du-hoc-he', 'Du Hoc He 2017', '2017-01-19 11:10:31', '2017-01-19 11:10:31', 'a63ebae656f9958c64d83d4bd9408a9e');

-- ----------------------------
-- Table structure for schedules
-- ----------------------------
DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `tour_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `schedules_tour_id_foreign` (`tour_id`),
  CONSTRAINT `schedules_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of schedules
-- ----------------------------

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `focus` tinyint(1) DEFAULT '0',
  `img_slides` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES ('1', 'Thái Hải Đăng  - Du học hè 2016', 'thai-hai-dang-du-hoc-he-2016', 'Thái Hải Đăng ', 'Đi rất là vui Được gặp thêm bạn mới thầy cô mới và tham quan những địa điểm nổi tiếng Được học nhiều điều hay đặc biệt khi về e thấy tự tin hơn', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 13px; white-space: pre-wrap;\">Đi rất l&agrave; vui Được gặp th&ecirc;m bạn mới thầy c&ocirc; mới v&agrave; tham quan những địa điểm nổi tiếng Được học nhiều điều hay đặc biệt khi về e thấy tự tin hơn</span></p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1484821715_Haidang.jpg', '1', '1', '2017-01-19 10:28:35', '2017-02-03 09:34:24', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486114463_haidang-canh.jpg');
INSERT INTO `testimonials` VALUES ('2', 'Nguyễn Thị Thuỳ Dương - Du học hè 2016', 'nguyen-thi-thuy-duong-du-hoc-he-2016', 'Nguyễn Thị Thuỳ Dương ', 'Con thấy chương trình Mỹ - Ca con được tham gia hè vừa rồi rất vui và bổ ích.', '<p>\r\n	Con thấy chương tr&igrave;nh Mỹ - Ca con được tham gia h&egrave; vừa rồi rất vui v&agrave; bổ &iacute;ch. C&aacute;c trường học b&ecirc;n đ&oacute; m&agrave; trung t&acirc;m ILA kết nối để cho tụi con sang học đều l&agrave; c&aacute;c trường c&oacute; điều kiện cơ sở tốt, b&ecirc;n cạnh đ&oacute; Tamwood cũng l&agrave; tổ chức r&egrave;n luyện v&agrave; gi&aacute;o dục về kỹ năng sống cũng như c&aacute;c kiến thức cho ch&uacute;ng con học hỏi th&ecirc;m rất nhiều điều. Qua chương tr&igrave;nh n&agrave;y của ILA th&igrave; con được tiếp x&uacute;c với c&aacute;c nền văn h&oacute;a kh&aacute;c nhau v&agrave; tập c&aacute;ch sống tự lập để sau n&agrave;y c&oacute; cơ hội đi du học. Trưởng đo&agrave;n dẫn ch&uacute;ng con đi - c&ocirc; Tr&acirc;m Anh cũng l&agrave; người c&oacute; kinh nghiệm dẫn đo&agrave;n v&agrave; gi&uacute;p đỡ ch&uacute;ng con nhiều trong qu&atilde;ng thời gian cả đo&agrave;n ở b&ecirc;n đ&oacute;. Con mong trung t&acirc;m ILA sẽ c&oacute; th&ecirc;m nhiều chương tr&igrave;nh như vậy để c&aacute;c bạn học sinh c&oacute; thể tham gia v&agrave; trải nghiệm cuộc sống.</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1484822291_ThuyDuong.jpg', '1', '2', '2017-01-19 10:37:59', '2017-02-03 06:23:29', '1', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1484883867_my2600x400.jpg');
INSERT INTO `testimonials` VALUES ('3', 'Lầu Mỹ Khiết - Du học hè 2016', 'lau-my-khiet-du-hoc-he-2016', 'Lầu Mỹ Khiết ', 'Em Lầu Mỹ Khiết , du học hè 2016 đến Los Angeles & Hawaii, Mỹ: \"Sau chuyến du học hè này con thấy mình biết nhiều hơn về nước Mỹ, được tiếp xúc với nhiều thầy cô và bạn bè', '<p>\r\n	Em Lầu Mỹ Khiết , du học h&egrave; 2016 đến Los Angeles &amp; Hawaii, Mỹ: &quot;Sau chuyến du học h&egrave; n&agrave;y con thấy m&igrave;nh biết nhiều hơn về nước Mỹ, được tiếp x&uacute;c với nhiều thầy c&ocirc; v&agrave; bạn b&egrave;, được đi tham quan c&aacute;c khu vui chơi rồi c&aacute;c địa điểm nổi tiếng. Với trong chương tr&igrave;nh c&oacute; tổ chức mấy tr&ograve; chơi theo nh&oacute;m rất th&uacute; vị. Sau chuyến đi về th&igrave; con thấy m&igrave;nh năng nổ hoạt b&aacute;t hơn, biết tự gi&aacute;c, tự l&agrave;m nhiều thứ khi kh&ocirc;ng c&oacute; ba mẹ b&ecirc;n cạnh.&quot;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1486115427_MyKhiet-avatar.jpg', '1', '3', '2017-01-19 10:40:35', '2017-02-03 09:50:27', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486115427_MyKhiet-canh.jpg');
INSERT INTO `testimonials` VALUES ('4', 'Huỳnh Văn Duy Đạt  - Du học hè 2016', 'huynh-van-duy-dat-du-hoc-he-2016', 'Huỳnh Văn Duy Đạt ', 'Chị Lan, có con du học hè 2016 đến Washington Dc, New York & Boston, Mỹ: \"Cho phụ huynh cám ơn thầy Trung \"nam thần\" và cô An \"dễ thương\" hiền lành nhé. ', '<p>\r\n	Chị Lan, c&oacute; con du học h&egrave; 2016 đến Washington Dc, New York &amp; Boston, Mỹ: &quot;Cho phụ huynh c&aacute;m ơn thầy Trung &quot;nam thần&quot; v&agrave; c&ocirc; An &quot;dễ thương&quot; hiền l&agrave;nh nh&eacute;. Đ&acirc;y l&agrave; biệt danh của thầy c&ocirc; do c&aacute;c ch&aacute;u Duy Đạt v&agrave; Duy Th&agrave;nh mến tặng v&agrave; kể cho phụ huynh nghe suốt.&quot;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1486117130_duydat-avatar.jpg', '1', '4', '2017-01-19 10:41:24', '2017-02-03 10:18:51', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486117130_duydat-canh.jpg');
INSERT INTO `testimonials` VALUES ('5', 'Phúc Khang - Du học hè 2016', 'phuc-khang-du-hoc-he-2016', 'Phúc Khang', 'Chị Mai Anh, có con du học hè 2016 đến Singapore: \"Các con từ hôm qua từ sân bay về nhắc tới hai anh chị trưởng đoàn suốt, cứ khen anh chị tốt và tình cảm. Sang năm mình sẽ lại cho các con đi tiếp, hy vọng lại được anh chị chăm sóc. Gửi lời cảm ơn của vợ chồng mình và hai con đến thầy Khánh nhé.\"', '<p>\r\n	Chị Mai Anh, c&oacute; con du học h&egrave; 2016 đến Singapore: &quot;C&aacute;c con từ h&ocirc;m qua từ s&acirc;n bay về nhắc tới hai anh chị trưởng đo&agrave;n suốt, cứ khen anh chị tốt v&agrave; t&igrave;nh cảm. Sang năm m&igrave;nh sẽ lại cho c&aacute;c con đi tiếp, hy vọng lại được anh chị chăm s&oacute;c. Gửi lời cảm ơn của vợ chồng m&igrave;nh v&agrave; hai con đến thầy Kh&aacute;nh nh&eacute;.&quot;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1484822683_vu-phuc-avatar.jpg', '1', '5', '2017-01-19 10:42:36', '2017-02-03 06:29:38', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486103378_PhucKhang-canh.jpg');
INSERT INTO `testimonials` VALUES ('6', 'Lý Nguyễn Thiên Y - Du học hè 2016', 'ly-nguyen-thien-y-du-hoc-he-2016', 'Lý Nguyễn Thiên Y', 'Qua chuyến đi du học hè Mĩ - Canada, con đã được học rất nhiều điều mới lạ, con được quen rất nhiều bạn mới từ khắp các quốc gia. Tiếng Anh của con đã có tiến bộ nhiều hơn hẳn qua chuyến đi này.', '<p>\r\n	Qua chuyến đi du học h&egrave; Mĩ - Canada, con đ&atilde; được học rất nhiều điều mới lạ, con được quen rất nhiều bạn mới từ khắp c&aacute;c quốc gia. Tiếng Anh của con đ&atilde; c&oacute; tiến bộ nhiều hơn hẳn qua chuyến đi n&agrave;y. C&aacute;c thầy c&ocirc; của Tamwood v&agrave; c&ocirc; Tr&acirc;m Anh rất tận t&igrave;nh, lu&ocirc;n gi&uacute;p đỡ con. Con cảm ơn ILA v&igrave; cho con chuyến đi nay v&igrave; chuyến đi giup con lớn hơn</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1484822730_thieny.jpg', '1', '6', '2017-01-19 10:45:30', '2017-02-03 06:28:57', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486103337_thieny-canh.jpg');
INSERT INTO `testimonials` VALUES ('7', 'Minh Thanh & Minh Tâm - Du học hè 2016', 'minh-thanh-minh-tam-du-hoc-he-2016', 'Minh Thanh & Minh Tâm', '“Con tôi học tiếng Anh tại ILA đã được 7 năm, từ khi cho con theo học tại đây, tôi nhận thấy các con không còn nhút nhát như xưa mà trở nên tự tin trong giao tiếp và năng động hơn. Đợt vừa rồi, tôi có đăng kí cho các con tham gia chương trình du học hè tại Mỹ do ILA Du học tổ chức....', '<p>\r\n	&ldquo;Con t&ocirc;i học tiếng Anh tại ILA đ&atilde; được 7 năm, từ khi cho con theo học tại đ&acirc;y, t&ocirc;i nhận thấy c&aacute;c con kh&ocirc;ng c&ograve;n nh&uacute;t nh&aacute;t như xưa m&agrave; trở n&ecirc;n tự tin trong giao tiếp v&agrave; năng động hơn. Đợt vừa rồi, t&ocirc;i c&oacute; đăng k&iacute; cho c&aacute;c con tham gia chương tr&igrave;nh du học h&egrave; tại Mỹ do ILA Du học tổ chức. Sau chuyến đi, t&ocirc;i cảm thấy c&aacute;c con m&igrave;nh trưởng th&agrave;nh hơn, biết lo lắng, chăm s&oacute;c cho nhau v&agrave; đặc biệt l&agrave; biết lập kế hoạch chi ti&ecirc;u hợp l&yacute;. Ngo&agrave;i ra, con t&ocirc;i c&ograve;n học được c&aacute;ch quan t&acirc;m đến mọi người bằng c&aacute;ch mua những m&oacute;n qu&agrave; lưu niệm &yacute; nghĩa d&agrave;nh tặng cho gia đ&igrave;nh v&agrave; bạn b&egrave;. T&ocirc;i hi vọng chuyến đi n&agrave;y l&agrave; một trải nghiệm th&uacute; vị gi&uacute;p c&aacute;c con tự tin hơn, kh&ocirc;ng c&ograve;n bỡ ngỡ về chặng đường du học d&agrave;i hạn trong tương lai.&rdquo;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/1485236689_avatar.jpg', '1', '7', '2017-01-19 10:46:21', '2017-02-03 09:34:36', '0', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/testimonial/slide/1486114476_minhtam-canh.jpg');

-- ----------------------------
-- Table structure for tour_location
-- ----------------------------
DROP TABLE IF EXISTS `tour_location`;
CREATE TABLE `tour_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tour_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tour_location_tour_id_foreign` (`tour_id`),
  KEY `tour_location_location_id_foreign` (`location_id`),
  CONSTRAINT `tour_location_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tour_location_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tour_location
-- ----------------------------
INSERT INTO `tour_location` VALUES ('1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('2', '2', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('3', '3', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('4', '4', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('5', '5', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('6', '6', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('7', '7', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('8', '8', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('9', '9', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('10', '10', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('11', '11', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('12', '12', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('13', '13', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('14', '14', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('15', '15', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('16', '16', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('17', '17', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('18', '18', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('19', '19', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('20', '20', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('21', '21', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('22', '22', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('23', '23', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('24', '24', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('25', '25', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('26', '26', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tour_location` VALUES ('27', '27', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tours
-- ----------------------------
DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `week` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tours_country_id_foreign` (`country_id`),
  CONSTRAINT `tours_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tours
-- ----------------------------
INSERT INTO `tours` VALUES ('1', 'Los Angeles + Las Vegas', 'los-angeles-las-vegas', 'Mùa hè tuyệt vời để khám phá học hỏi những tinh hoa tinh túy của hai thành phố bậc nhất Hoa Kỳ. Thực nghiệm tiếng Anh cũng như học hỏi nếp sống văn hóa Mỹ tại ký túc xá', '<p>\r\n	M&ugrave;a h&egrave; tuyệt vời để kh&aacute;m ph&aacute; học hỏi những tinh hoa tinh t&uacute;y của hai th&agrave;nh phố bậc nhất Hoa Kỳ. Thực nghiệm tiếng Anh cũng như học hỏi nếp sống văn h&oacute;a Mỹ tại k&yacute; t&uacute;c x&aacute;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485166000_LA&LV.jpg', '', '', '', '03-06-2017', '', '$5.390', 'Từ 12 - 17 tuổi', '1', '1', '1', '2017-01-20 04:46:25', '2017-01-23 10:06:40');
INSERT INTO `tours` VALUES ('2', 'Los Angeles + Hawaii', 'los-angeles-hawaii', 'Trải nghiệm môi trường học tập và đời sống của một du học sinh tại Khuôn viên trường Đại Học hàng đầu cũa Mỹ là Đại học Azusa Pacific và Đại học Hawaii, Manoa. Khám phá nét độc đáo của nền văn hóa bản địa đầy màu sắc', '<p>\r\n	Trải nghiệm m&ocirc;i trường học tập v&agrave; đời sống của một du học sinh tại Khu&ocirc;n vi&ecirc;n trường Đại Học h&agrave;ng đầu cũa Mỹ l&agrave; Đại học Azusa Pacific v&agrave; Đại học Hawaii, Manoa. Kh&aacute;m ph&aacute; n&eacute;t độc đ&aacute;o của nền văn h&oacute;a bản địa đầy m&agrave;u sắc</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485158250_LA&HW.jpg', '', '', '', '17-06-2017', '', '$6.750', 'Từ 12 - 17 tuổi', '1', '2', '1', '2017-01-20 04:56:59', '2017-01-23 07:57:30');
INSERT INTO `tours` VALUES ('3', 'Los Angeles Northridge', 'los-angeles-northridge', 'Đến với kinh đô điện ảnh Hollywood, trải nghiệm sâu sắc văn hóa bản địa miền Tây nước Mỹ tại Los Angeles', '<p>\r\n	Đến với kinh đ&ocirc; điện ảnh Hollywood, trải nghiệm s&acirc;u sắc văn h&oacute;a bản địa miền T&acirc;y nước Mỹ tại Los Angeles</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485165093_LANorth.jpg', '', '', '', '18-06-2017', '', '$6.240', 'Từ 10 - 17 tuổi', '1', '3', '1', '2017-01-20 04:57:51', '2017-01-23 09:51:33');
INSERT INTO `tours` VALUES ('4', 'Los Angeles + Las Vegas 2', 'los-angeles-las-vegas-2', 'Mùa hè tuyệt vời để khám phá học hỏi những tinh hoa tinh túy của hai thành phố bậc nhất Hoa Kỳ. Thực nghiệm tiếng Anh cũng như học hỏi nếp sống văn hóa Mỹ với nhà bản xứ.', '<p>\r\n	M&ugrave;a h&egrave; tuyệt vời để kh&aacute;m ph&aacute; học hỏi những tinh hoa tinh t&uacute;y của hai th&agrave;nh phố bậc nhất Hoa Kỳ. Thực nghiệm tiếng Anh cũng như học hỏi nếp sống văn h&oacute;a Mỹ với nh&agrave; bản xứ.</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485165226_LA&LV2.jpg', '', '', '', '25-06-2017', '', '$6.630', 'Từ 13 - 17 tuổi', '1', '4', '1', '2017-01-20 05:05:43', '2017-01-23 11:54:49');
INSERT INTO `tours` VALUES ('5', 'Brooklyn', 'brooklyn', 'Được xem là 1 trong 5 quận hiện đại nhất của New York; chương trình mùa hè tại Brooklyn sẽ đem lại cho các em những trải nhiệm mới lạ', '<p>\r\n	Được xem l&agrave; 1 trong 5 quận hiện đại nhất của New York; chương tr&igrave;nh m&ugrave;a h&egrave; tại Brooklyn sẽ đem lại cho c&aacute;c em những trải nhiệm mới lạ</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485165332_Brooklyn.jpg', '', '', '', '25-06-2017', '', '$6.500', 'Từ 12 - 17 tuổi', '1', '5', '1', '2017-01-20 05:06:19', '2017-01-23 09:55:32');
INSERT INTO `tours` VALUES ('6', 'Los Angeles - San Francisco', 'los-angeles-san-francisco', 'Gặp gỡ, làm quen và cùng trải nghiệm những hoat động học tập và vui chơi đầy thú vị xuyên qua 2 thành phố với các du học sinh quốc tế', '<p>\r\n	Gặp gỡ, l&agrave;m quen v&agrave; c&ugrave;ng trải nghiệm những hoat động học tập v&agrave; vui chơi đầy th&uacute; vị xuy&ecirc;n qua 2 th&agrave;nh phố với c&aacute;c du học sinh quốc tế</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485166346_LA&SF.jpg', '', '', '', '02-07-2017', '', '$7.480', 'Từ 13 - 17 tuổi', '1', '6', '1', '2017-01-20 05:07:00', '2017-01-23 10:12:26');
INSERT INTO `tours` VALUES ('7', 'New York - Thử làm sinh viên đại học Mỹ', 'new-york-thu-lam-sinh-vien-dai-hoc-my', 'Chương trình được thiết kế đặc biệt cho học sinh trải nghiệm cách học tại Đại Học Mỹ. Chương trình được tổ chức theo hình thức lớp học, giảng đường… do chính giáo sư Đại học giảng dạy ', '<p>\r\n	Chương tr&igrave;nh được thiết kế đặc biệt cho học sinh trải nghiệm c&aacute;ch học tại Đại Học Mỹ. Chương tr&igrave;nh được tổ chức theo h&igrave;nh thức lớp học, giảng đường&hellip; do ch&iacute;nh gi&aacute;o sư Đại học giảng dạy&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485166437_Newyork.jpg', '', '', '', '05-07-2017', '', '$6.970', 'Từ 14 - 17 tuổi', '1', '7', '1', '2017-01-20 05:09:13', '2017-01-23 10:13:57');
INSERT INTO `tours` VALUES ('8', 'San Diego', 'san-diego', 'Chương trình được tổ chức bởi tổ chức UTP - mang đậm tính học thuật - sự chuẩn bị hoàn hảo cho học sinh có ý định học THPT tại Mỹ ', '<p>\r\n	Chương tr&igrave;nh được tổ chức bởi tổ chức UTP - mang đậm t&iacute;nh học thuật - sự chuẩn bị ho&agrave;n hảo cho học sinh c&oacute; &yacute; định học THPT tại Mỹ&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485166567_SanDiageo.jpg', '', '', '', '16-07-2017', '', '$6.280', 'Từ 14 - 17 tuổi', '1', '8', '1', '2017-01-20 06:32:01', '2017-01-23 10:16:07');
INSERT INTO `tours` VALUES ('9', 'Washington DC - New York - Boston', 'washington-dc-new-york-boston', 'Đặt chân đến với cái nôi của nền giáo dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard & MIT, học tập và khám phá nhiều điều thú vị tại New York và Washington DC cùng với chuỗi các hoạt động đội nhóm, cuộc thi tài năng  phát triển kỹ năng mềm và khả năng lãnh đạo.', '<p>\r\n	Đặt ch&acirc;n đến với c&aacute;i n&ocirc;i của nền gi&aacute;o dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard &amp; MIT, học tập v&agrave; kh&aacute;m ph&aacute; nhiều điều th&uacute; vị tại New York v&agrave; Washington DC c&ugrave;ng với chuỗi c&aacute;c hoạt động đội nh&oacute;m, cuộc thi t&agrave;i năng&nbsp; ph&aacute;t triển kỹ năng mềm v&agrave; khả năng l&atilde;nh đạo.</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485166977_WC-NY-BT.jpg', '', '', '', '03-06-2017', '', '$6.920', 'Từ 12 - 17 tuổi', '1', '9', '1', '2017-01-20 06:32:59', '2017-01-23 10:22:57');
INSERT INTO `tours` VALUES ('10', 'Boston - New York - Philadelphia - Washington DC', 'boston-new-york-philadelphia-washington-dc', 'Đặt chân đến với cái nôi của nền giáo dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard & MIT, học tập và khám phá nhiều điều thú vị tại New York và Washington DC cùng với chuỗi các hoạt động đội nhóm, cuộc thi tài năng  phát triển kỹ năng mềm và khả năng lãnh đạo.', '<p>\r\n	Đặt ch&acirc;n đến với c&aacute;i n&ocirc;i của nền gi&aacute;o dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard &amp; MIT, học tập v&agrave; kh&aacute;m ph&aacute; nhiều điều th&uacute; vị tại New York v&agrave; Washington DC c&ugrave;ng với chuỗi c&aacute;c hoạt động đội nh&oacute;m, cuộc thi t&agrave;i năng&nbsp; ph&aacute;t triển kỹ năng mềm v&agrave; khả năng l&atilde;nh đạo.</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485169725_PHIL.jpg', '', '', '', '25-06-2017', '', '$6.960', ' Từ 14 - 17 tuổi', '1', '10', '1', '2017-01-20 06:33:29', '2017-01-23 11:08:46');
INSERT INTO `tours` VALUES ('11', 'Boston - New York - Washington DC', 'boston-new-york-washington-dc', 'Đặt chân đến với cái nôi của nền giáo dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard & MIT, học tập và khám phá nhiều điều thú vị tại New York và Washington DC cùng với chuỗi các hoạt động đội nhóm, cuộc thi tài năng  phát triển kỹ năng mềm và khả năng lãnh đạo.', '<p>\r\n	Đặt ch&acirc;n đến với c&aacute;i n&ocirc;i của nền gi&aacute;o dục Mỹ - Boston với 2 trường đại học nổi tiếng Đại học Harvard &amp; MIT, học tập v&agrave; kh&aacute;m ph&aacute; nhiều điều th&uacute; vị tại New York v&agrave; Washington DC c&ugrave;ng với chuỗi c&aacute;c hoạt động đội nh&oacute;m, cuộc thi t&agrave;i năng&nbsp; ph&aacute;t triển kỹ năng mềm v&agrave; khả năng l&atilde;nh đạo.</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485167300_TORONTO.jpg', '', '', '', '10-07-2017', '', '$6.920', 'Từ 12 - 17 tuổi', '1', '11', '1', '2017-01-20 06:34:20', '2017-01-23 10:28:20');
INSERT INTO `tours` VALUES ('12', 'Hamilton - Toronto - Ottawa - Montreal - Quebec', 'hamilton-toronto-ottawa-montreal-quebec', 'Trường Trung học quốc tế lớn nhất Canada sẽ mang đến những trải nghiệm không thể quên đối với du học sinh Việt Nam', '<p>\r\n	Trường Trung học quốc tế lớn nhất Canada sẽ mang đến những trải nghiệm kh&ocirc;ng thể qu&ecirc;n đối với du học sinh Việt Nam</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/assets/frontend/images/default-img/country-default.jpg', '', '', '', '02-07-2017', '', '$6.190', 'Từ 9 - 17 tuổi', '1', '12', '2', '2017-01-20 06:35:46', '2017-01-20 07:22:26');
INSERT INTO `tours` VALUES ('13', 'Vancouver - Whistler - Toronto', 'vancouver-whistler-toronto', 'Gặp gỡ, làm quen và cùng trải nghiệm những hoat động học tập và vui chơi đầy thú vị xuyên qua 2 thành phố với các du học sinh quốc tế', '<p>\r\n	Gặp gỡ, l&agrave;m quen v&agrave; c&ugrave;ng trải nghiệm những hoat động học tập v&agrave; vui chơi đầy th&uacute; vị xuy&ecirc;n qua 2 th&agrave;nh phố với c&aacute;c du học sinh quốc tế</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485167396_VANCOUVER.jpg', '', '', '', '16-07-2017', '', '$7.480', 'Từ 13 - 17 tuổi', '1', '13', '2', '2017-01-20 06:36:39', '2017-01-23 10:29:56');
INSERT INTO `tours` VALUES ('14', 'Langley - Whistler - Squamish - Vancouver', 'langley-whistler-squamish-vancouver', 'Mùa hè thú vị với chương trình chuyên sâu về các kỹ năng tiếng Anh qua những lớp học về văn hóa và lịch sử Canada. Bên cạnh đó, những chuyến đi dã ngoại sẽ mang tới cho các em trải nghiệm đáng nhớ ', '<p>\r\n	M&ugrave;a h&egrave; th&uacute; vị với chương tr&igrave;nh chuy&ecirc;n s&acirc;u về c&aacute;c kỹ năng tiếng Anh qua những lớp học về văn h&oacute;a v&agrave; lịch sử Canada. B&ecirc;n cạnh đ&oacute;, những chuyến đi d&atilde; ngoại sẽ mang tới cho c&aacute;c em trải nghiệm đ&aacute;ng nhớ&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485167477_LANGLEY.jpg', '', '', '', '30-07-2017', '', '$4.880', 'Từ 10 -17 tuổi', '1', '14', '2', '2017-01-20 06:37:28', '2017-01-23 10:31:17');
INSERT INTO `tours` VALUES ('15', 'London Docklands - Brighton', 'london-docklands-brighton', 'Chiêm ngưỡng những công trình cổ kính, tham quan Đại học Cambridge, Oxford và những khóa học tiếng Anh qua lớp học truyền thống và các hoạt động ngoại khóa đầy thú vị', '<p>\r\n	Chi&ecirc;m ngưỡng những c&ocirc;ng tr&igrave;nh cổ k&iacute;nh, tham quan Đại học Cambridge, Oxford v&agrave; những kh&oacute;a học tiếng Anh qua lớp học truyền thống v&agrave; c&aacute;c hoạt động ngoại kh&oacute;a đầy th&uacute; vị</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485167573_LONDONEDOCKLAND.jpg', '', '', '', '18-06-2017', '', '$5.950', 'Từ 11 - 17 tuổi', '1', '15', '3', '2017-01-20 06:38:35', '2017-01-23 10:32:54');
INSERT INTO `tours` VALUES ('16', 'London - Paris', 'london-paris', 'Khoảng thời gian để cóp nhặt những nét thi vị trong nền văn hóa truyền thống, cổ kính của Âu Châu. Khám phá lịch sử lâu đời của cái nôi của nền văn học lãng mạn và kinh đô thời trang của thế giới', '<p>\r\n	Khoảng thời gian để c&oacute;p nhặt những n&eacute;t thi vị trong nền văn h&oacute;a truyền thống, cổ k&iacute;nh của &Acirc;u Ch&acirc;u. Kh&aacute;m ph&aacute; lịch sử l&acirc;u đời của c&aacute;i n&ocirc;i của nền văn học l&atilde;ng mạn v&agrave; kinh đ&ocirc; thời trang của thế giới</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485167936_LONDONPARIS.jpg', '', '', '', '02-07-2017', '', '$6.580', 'Từ 12 - 17 tuổi', '1', '16', '8', '2017-01-20 06:39:34', '2017-01-23 10:38:56');
INSERT INTO `tours` VALUES ('17', 'Sydney - Giao lưu văn hóa', 'sydney-giao-luu-van-hoa', 'Thử sức học và sinh hoạt suốt 2 tuần cùng với học sinh người Úc cùng tuổi và gia đình bản xứ tại trường Trung học', '<p>\r\n	Thử sức học v&agrave; sinh hoạt suốt 2 tuần c&ugrave;ng với học sinh người &Uacute;c c&ugrave;ng tuổi v&agrave; gia đ&igrave;nh bản xứ tại trường Trung học</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168024_SYDNEY.jpg', '', '', '', '28-05-2017', '', '$4.930', 'Từ 12 - 17 tuổi', '1', '17', '4', '2017-01-20 06:40:28', '2017-01-23 10:40:24');
INSERT INTO `tours` VALUES ('18', 'Sydney - Canberra - Melbourne - Giao lưu văn hóa', 'sydney-canberra-melbourne-giao-luu-van-hoa', 'Thử sức học và sinh hoạt suốt 3 tuần cùng với học sinh người Úc cùng tuổi và gia đình bản xứ tại trường Trung học', '<p>\r\n	Thử sức học v&agrave; sinh hoạt suốt 3 tuần c&ugrave;ng với học sinh người &Uacute;c c&ugrave;ng tuổi v&agrave; gia đ&igrave;nh bản xứ tại trường Trung học</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168107_SYDNEY-CANBERRA.jpg', '', '', '', '28-05-2017', '', '$5.660', 'Từ 12 - 17 tuổi', '1', '18', '4', '2017-01-20 06:41:22', '2017-01-23 10:41:47');
INSERT INTO `tours` VALUES ('19', 'Melbourne - Canberra - Sydney - Gold Coast - Brisbane', 'melbourne-canberra-sydney-gold-coast-brisbane', 'Thiết lập một  kế hoạch du học thành công. Chuyến đi mang đến sự hiểu biết rõ hơn về địa lý, khí hậu, văn hóa và con người các thành phố lớn với nhiều Trung học và Đại học danh tiếng của nước Úc. ', '<p>\r\n	Thiết lập một&nbsp; kế hoạch du học th&agrave;nh c&ocirc;ng. Chuyến đi mang đến sự hiểu biết r&otilde; hơn về địa l&yacute;, kh&iacute; hậu, văn h&oacute;a v&agrave; con người c&aacute;c th&agrave;nh phố lớn với nhiều Trung học v&agrave; Đại học danh tiếng của nước &Uacute;c.&nbsp;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168188_MELBURN.jpg', '', '', '', '20-06-2017', '', '$6.290', 'Từ 12 - 17 tuổi', '1', '19', '4', '2017-01-20 06:42:14', '2017-01-23 10:43:08');
INSERT INTO `tours` VALUES ('20', 'Sydney', 'sydney', 'Chuyến đi sẽ mang đến sự hiểu biết rõ hơn về địa lý, khí hậu, văn hóa và con người ở Sydney', '<p>\r\n	Chuyến đi sẽ mang đến sự hiểu biết r&otilde; hơn về địa l&yacute;, kh&iacute; hậu, văn h&oacute;a v&agrave; con người ở Sydney</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168256_SYDNEY4.jpg', '', '', '', '02-07-2017', '', '$5.100', 'Từ 13 - 17 tuổi', '1', '20', '4', '2017-01-20 06:42:53', '2017-01-23 10:44:16');
INSERT INTO `tours` VALUES ('21', 'Melbourne - Sydney - Auckland', 'melbourne-sydney-auckland', 'Hành trình  xuyên 2 quốc gia với 3 thành phố nổi tiếng mang đến một cảm nhận  văn hóa bản địa sâu sắc', '<p>\r\n	H&agrave;nh tr&igrave;nh&nbsp; xuy&ecirc;n 2 quốc gia với 3 th&agrave;nh phố nổi tiếng mang đến một cảm nhận&nbsp; văn h&oacute;a bản địa s&acirc;u sắc</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485169537_AU+NEWZL.jpg', '', '', '', '15-07-2017', '', '$6.060', 'Từ 12 - 17 tuổi', '1', '21', '7', '2017-01-20 06:43:44', '2017-01-23 11:05:37');
INSERT INTO `tours` VALUES ('22', 'Singapore - Nhà lãnh đạo trẻ', 'singapore-nha-lanh-dao-tre', 'Khóa học ngắn hình thành tư duy và kiến thức về cuộc sống ngày nay', '<p>\r\n	Kh&oacute;a học ngắn h&igrave;nh th&agrave;nh tư duy v&agrave; kiến thức về cuộc sống ng&agrave;y nay</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168461_SING.jpg', '', '', '', '28-05-2017', '', '$2.280', 'Từ 7 - 17 tuổi', '1', '22', '5', '2017-01-20 06:44:41', '2017-01-23 10:47:41');
INSERT INTO `tours` VALUES ('23', 'Singapore - Nhà lãnh đạo trẻ 2', 'singapore-nha-lanh-dao-tre-2', 'Khóa học ngắn hình thành tư duy và kiến thức về cuộc sống ngày nay', '<p>\r\n	Kh&oacute;a học ngắn h&igrave;nh th&agrave;nh tư duy v&agrave; kiến thức về cuộc sống ng&agrave;y nay</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168687_SING2-NHALANHDAOTRE.jpg', '', '', '', '18-06-2017', '', '$2.280', 'Từ 7 - 17 tuổi', '1', '23', '5', '2017-01-20 06:54:55', '2017-01-23 11:55:01');
INSERT INTO `tours` VALUES ('24', 'Singapore - Giao lưu văn hóa', 'singapore-giao-luu-van-hoa', 'Trại hè bổ sung kiến thức và kỹ năng toàn diện kết hợp với chuyến tham quan 2 ngày tại Malaysia', '<p>\r\n	Trại h&egrave; bổ sung kiến thức v&agrave; kỹ năng to&agrave;n diện kết hợp với chuyến tham quan 2 ng&agrave;y tại Malaysia</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/assets/frontend/images/default-img/country-default.jpg', '', '', '', '18-06-2017', '', '$2.560', 'Từ 8 - 17 tuổi', '1', '24', '5', '2017-01-20 06:55:52', '2017-01-20 07:39:26');
INSERT INTO `tours` VALUES ('25', 'Singapore - Malay - Giao lưu văn hóa', 'singapore-malay-giao-luu-van-hoa', 'Trại hè bổ sung kiến thức và kỹ năng toàn diện kết hợp với chuyến tham quan 2 ngày tại Malaysia', '<p>\r\n	Trại h&egrave; bổ sung kiến thức v&agrave; kỹ năng to&agrave;n diện kết hợp với chuyến tham quan 2 ng&agrave;y tại Malaysia</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168559_SING+MALAYGIAOLUUVH.jpg', '', '', '', '04-06-2017', '', '$2.980', 'Từ 8 - 17 tuổi', '1', '25', '6', '2017-01-20 06:56:50', '2017-01-23 10:49:19');
INSERT INTO `tours` VALUES ('26', 'Singapore - Malay - Trải nghiệm Singapore', 'singapore-malay-trai-nghiem-singapore', 'Trại hè bổ sung kiến thức và kỹ năng toàn diện qua các lớp học thực tế như nấu ăn, khoa học, sinh học …', '<p>\r\n	Trại h&egrave; bổ sung kiến thức v&agrave; kỹ năng to&agrave;n diện qua c&aacute;c lớp học thực tế như nấu ăn, khoa học, sinh học &hellip;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168794_SINGMALAYTRAINGHIEMSING.jpg', '', '', '', '11-06-2017', '', '$3.160', 'Từ 7 - 17 tuổi', '1', '26', '6', '2017-01-20 06:57:35', '2017-01-23 10:53:15');
INSERT INTO `tours` VALUES ('27', 'Singapore - Malay - Trải nghiệm Singapore', 'singapore-malay-trai-nghiem-singapore', 'Trại hè bổ sung kiến thức và kỹ năng toàn diện qua các lớp học thực tế như nấu ăn, khoa học, sinh học …', '<p>\r\n	Trại h&egrave; bổ sung kiến thức v&agrave; kỹ năng to&agrave;n diện qua c&aacute;c lớp học thực tế như nấu ăn, khoa học, sinh học &hellip;</p>\r\n', 'http://ila-duhoc.edu.vn/duhoche2017/public/upload/tour/1485168892_TRAINGHIEMSING2.jpg', '', '', '', '09-07-2017', '', '$3.160', 'Từ 7 - 17 tuổi', '1', '27', '6', '2017-01-20 06:58:29', '2017-01-23 10:54:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Liêm Phan', 'liemphan@ilavietnam.edu.vn', '$2y$10$7PMdNJBr1BmdnoW7.RINOefvMVt4roxNiXMFGKJB060/uuOwl9zA6', null, '2017-01-19 09:52:24', '2017-01-19 09:52:24');
