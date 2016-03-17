-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2015 at 04:00 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alterapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `barcodes`
--

CREATE TABLE `barcodes` (
`id` int(10) unsigned NOT NULL,
  `barcode` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` text COLLATE utf8_unicode_ci NOT NULL,
  `image1` text COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `image3` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barcodes`
--

INSERT INTO `barcodes` (`id`, `barcode`, `name`, `desc`, `price`, `cat`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, '232345', 'Product 1', '', '30', '', 'assets/uploads/products/S3cG4f_cloud_at.png', 'assets/uploads/products/iTvLMJ_cloud_at.png', 'assets/uploads/products/uewvna_cloud_at.png', '0000-00-00 00:00:00', '2015-02-22 23:16:17'),
(2, '454545454545', 'Product 2 Edited', '', '50', '', '', '', '', '0000-00-00 00:00:00', '2015-02-21 17:25:07'),
(3, '435345', 'Product 3', '', '30', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '56565656', 'Product 4 Image test', '', '40', '', '', '', '', '0000-00-00 00:00:00', '2015-02-22 23:09:42'),
(5, '333333', 'Product 5', '', '30', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '111111', 'Product 6', '', '40', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '234324', 'Product 7', '', '30', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '888888', 'Product 8', '', '40', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '4354354355', 'Product inserted', '', '99', '', 'assets/uploads/products/ufr1Lm_icona-altertech.png', 'assets/uploads/products/c4NcuJ_geniesis_logo.png', 'assets/uploads/products/7oC73P_geniesis_logo.png', '2014-09-22 08:50:58', '2014-09-22 08:50:58'),
(10, '7867868756', 'Prodotto modificato', '', '80', '', '', '', '', '2015-02-21 17:03:31', '2015-02-21 17:03:31'),
(11, '457547547', 'Edited Product 1', '', '20', '', 'assets/uploads/products/66ne1j_cloud_at.png', 'assets/uploads/products/pkMVdP_cloud_at.png', 'assets/uploads/products/tS5lYN_cloud_at.png', '2015-02-21 17:05:09', '2015-02-21 17:05:09'),
(12, '495849584', 'Product Image Test', '', '60', '', 'assets/uploads/products/gTpsMN_cloud_at.png', 'assets/uploads/products/I2EDWX_cloud_at.png', 'assets/uploads/products/jGcYpQ_cloud_at.png', '2015-02-22 23:06:02', '2015-02-22 23:06:02'),
(17, '42443517', 'Auto Barcode 8 leght', '', '90', '', '', '', '', '2015-02-23 00:23:01', '2015-02-23 00:24:05'),
(18, '3681751356', 'Auto Code 10 lenght', '', '80', '', 'assets/uploads/products/518K10_Wordpress.com-LOGO-use-this.png', 'assets/uploads/products/h32a1B_Wordpress.com-LOGO-use-this.png', 'assets/uploads/products/5ufcSx_Wordpress.com-LOGO-use-this.png', '2015-02-23 00:24:52', '2015-02-23 00:24:52'),
(20, '4448846197', 'Bikini Slim', 'Bikini styled by Bigbabert and suited in polymer and Laravel for best web api and hig performance.', '120', 'Developer', '', '', '', '2015-02-23 22:25:37', '2015-02-23 22:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
`id` int(10) unsigned NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `mainImage` text COLLATE utf8_unicode_ci NOT NULL,
  `skills` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle1` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage1` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc1` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub1` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle2` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage2` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc2` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub2` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle3` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage3` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc3` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub3` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle4` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage4` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc4` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub4` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle5` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage5` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc5` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub5` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioTitle6` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioImage6` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioDesc6` text COLLATE utf8_unicode_ci NOT NULL,
  `portfolioSub6` text COLLATE utf8_unicode_ci NOT NULL,
  `aboutTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `about1` text COLLATE utf8_unicode_ci NOT NULL,
  `about2` text COLLATE utf8_unicode_ci NOT NULL,
  `mapsTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `skeletonTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `skeleton1` text COLLATE utf8_unicode_ci NOT NULL,
  `skeleton2` text COLLATE utf8_unicode_ci NOT NULL,
  `skeleton3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsTitle1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductTitle1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductDesc1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsPrice1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsDesc1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsSub1` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsTitle2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductTitle2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductDesc2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsPrice2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsDesc2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsSub2` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsTitle3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductTitle3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsProductDesc3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsPrice3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsDesc3` text COLLATE utf8_unicode_ci NOT NULL,
  `chartsSub3` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle1` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize1` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle2` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize2` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle3` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize3` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle4` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize4` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle5` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize5` text COLLATE utf8_unicode_ci NOT NULL,
  `googlizeTitle6` text COLLATE utf8_unicode_ci NOT NULL,
  `googlize6` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `aboutTitle1` text COLLATE utf8_unicode_ci NOT NULL,
  `about3` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `title`, `mainImage`, `skills`, `portfolioTitle`, `portfolioTitle1`, `portfolioImage1`, `portfolioDesc1`, `portfolioSub1`, `portfolioTitle2`, `portfolioImage2`, `portfolioDesc2`, `portfolioSub2`, `portfolioTitle3`, `portfolioImage3`, `portfolioDesc3`, `portfolioSub3`, `portfolioTitle4`, `portfolioImage4`, `portfolioDesc4`, `portfolioSub4`, `portfolioTitle5`, `portfolioImage5`, `portfolioDesc5`, `portfolioSub5`, `portfolioTitle6`, `portfolioImage6`, `portfolioDesc6`, `portfolioSub6`, `aboutTitle`, `about1`, `about2`, `mapsTitle`, `skeletonTitle`, `skeleton1`, `skeleton2`, `skeleton3`, `chartsTitle`, `chartsTitle1`, `chartsProductTitle1`, `chartsProductDesc1`, `chartsPrice1`, `chartsDesc1`, `chartsSub1`, `chartsTitle2`, `chartsProductTitle2`, `chartsProductDesc2`, `chartsPrice2`, `chartsDesc2`, `chartsSub2`, `chartsTitle3`, `chartsProductTitle3`, `chartsProductDesc3`, `chartsPrice3`, `chartsDesc3`, `chartsSub3`, `googlizeTitle`, `googlizeTitle1`, `googlize1`, `googlizeTitle2`, `googlize2`, `googlizeTitle3`, `googlize3`, `googlizeTitle4`, `googlize4`, `googlizeTitle5`, `googlize5`, `googlizeTitle6`, `googlize6`, `location`, `aboutTitle1`, `about3`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'Alter Developing', 'assets/site/img/profile.png', 'Web Developer - Graphic Artist - User Experience Designer', 'Portfolio Section', 'Project Title 1', 'assets/site/img/portfolio/cabin.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'Project Title 2', 'assets/site/img/portfolio/cake.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'Project Title 3', 'assets/site/img/portfolio/circus.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'Project Title 4', 'assets/site/img/portfolio/game.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'Project Title 5', 'assets/site/img/portfolio/safe.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'Project Title 6', 'assets/site/img/portfolio/submarine.png', 'Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!', '<li>\r\nClient:<strong><a href="http://www.blog.altertech.it/">StartDeveloping</a></strong>\r\n</li>\r\n<li>\r\nDate:<strong><a href="http://www.blog.altertech.it/">April 2014</a></strong>\r\n</li>\r\n<li>\r\nService:<strong><a href="http://www.blog.altertech.it/">Web Development</a></strong>\r\n</li>', 'About Section', 'Alter Developing is a free bootstrap theme created by Altertech. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.', 'Whether you''re a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!', 'Maps Section', 'SKELETON SIDEBAR', 'Skeleton is a small collection of well-organized CSS . It''s based on a responsive grid, but also provides very basic CSS for typography, buttons, forms and media queries. Go ahead, resize this super basic page to see the grid in action.', 'The easiest way to really get started with Skeleton is to check out the full docs and info at www.getskeleton.com.. Skeleton is also open-source and has a project on git, so check that out if you want to report bugs.', 'Skeleton is a small collection of well-organized CSS . It''s based on a responsive grid, but also provides very basic CSS for typography, buttons, forms and media queries. Go ahead, resize this super basic page to see the grid in action.', 'PRICING OVERVIEW', '6 nights', 'Daily Price Overview', 'Use this area of the page to describe your offer. The table above is part of a free feature set by <a href="https://blog.altertech.it/">Alter Developing</a>. On our website, you can download our free set with 16 tables!', '<sup>€</sup>\r\n<span>89</span>\r\n<sub>/day</sub>', '<li style="color:red;">Check-in: 09:00</li>\r\n<li>Caution <strong>€ 100</strong></li>\r\n<li>+ <strong>€ 15</strong> x night with 2 guys</li>\r\n<li>Adsl</li>', 'Daily Price', '7 nights', 'Weekly Price Overview', 'Use this area of the page to describe your offer. The table above is part of a free feature set by <a href="https://blog.altertech.it/">Alter Developing</a>. On our website, you can download our free set with 16 tables!', '<sup>€</sup>\r\n<span>550</span>\r\n<sub>/week</sub>', '<li style="color:red;">Check-in: Free</li>\r\n<li>Caution <strong>€ 100</strong></li>\r\n<li>+<strong>€ 15</strong> x night with 2 guys</li>\r\n<li>Adsl</li>', 'Weekly Price', '30 nights', 'Monthly Price Overview', 'Use this area of the page to describe your offer. The table above is part of a free feature set by <a href="https://blog.altertech.it/">Alter Developing</a>. On our website, you can download our free set with 16 tables!', '<sup>€</sup>\r\n<span>1650</span>\r\n<sub>/month</sub>', '<li style="color:red;">Check-in: Free</li>\r\n<li>Caution € 100</li>\r\n<li>+<strong>€ 15</strong> x night with 2 guys</li>\r\n<li>Adsl</li>', 'Monthly Price', 'GOOGLE WIDGET', 'MULTI-DEVICE LAYOUTS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, velit, illum iure id in saepe laborum. Doloribus, eaque, assumenda inventore eos iusto tenetur error dolorem suscipit molestiae natus ullam aliquam?', 'IMAGES, AUDIO AND VIDEO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugit ea maiores omnis ad iste autem sed reiciendis amet quam deleniti sapiente laboriosam voluptate pariatur veniam quod beatae sunt architecto?', 'FORMS AND USER INPUT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, velit, illum iure id in saepe laborum. Doloribus, eaque, assumenda inventore eos iusto tenetur error dolorem suscipit molestiae natus ullam aliquam?', 'OPTIMIZING PERFORMANCE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugit ea maiores omnis ad iste autem sed reiciendis amet quam deleniti sapiente laboriosam voluptate pariatur veniam quod beatae sunt architecto?', 'Key Takeaways', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Remember', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '40100 Bologna<br>Italia, Emilia Romagna', 'About Alter Developing', 'Alter Developing is a free to use, open source Bootstrap theme created by <a href="http://www.blog.altertech.it/">Altertech</a>.', 1, '2014-09-05 19:00:00', '2014-09-05 19:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Users', '{"users":1}', '2014-09-14 22:27:55', '2014-09-14 22:27:55'),
(2, 'Admins', '{"admin":1,"users":1}', '2014-09-14 22:27:55', '2014-09-14 22:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 2),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 2),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 2);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(2, 1, NULL, 0, 0, 0, NULL, NULL, NULL),
(3, 3, NULL, 1, 0, 0, '2015-02-21 22:08:46', NULL, NULL),
(4, 4, NULL, 0, 0, 0, NULL, NULL, NULL),
(5, 5, NULL, 0, 0, 0, NULL, NULL, NULL),
(6, 9, NULL, 0, 0, 0, NULL, NULL, NULL),
(7, 10, NULL, 0, 0, 0, NULL, NULL, NULL),
(8, 8, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'bigbabert@gmail.com', NULL, '$2y$10$.YyTT0BeckzhTRuXBHjVXu7OuH/hkm7Or/ufpp17H9iro81WQR8yi', NULL, 1, NULL, NULL, '2015-02-23 23:00:48', '$2y$10$ByIT6SNne.YBulxTz2u80eVVr11V4Pz1pHWvJ38QdmrZxxt.i6EoS', NULL, 'Alberto', 'Cocchiara', '2014-09-14 22:27:56', '2015-02-23 23:00:48'),
(10, 'b-bert@hotmail.it', NULL, '$2y$10$7zcAHVJ9UU0KePMTGeexlujlec/zP7SXzMBlteU3oAPrMO0bG/7Wq', NULL, 1, 'SgHtTWslO53KttjJ6CgapqNRgz7sEWLc2jgTuA2Ay6', NULL, '2015-02-23 21:53:18', '$2y$10$XQ9LXOriaCQS37qMibi6/usgXoso5odLl2nNk.sIlF34PapLkkghm', NULL, 'Utente', 'Test', '2015-02-22 17:53:13', '2015-02-23 21:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcodes`
--
ALTER TABLE `barcodes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barcodes`
--
ALTER TABLE `barcodes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
