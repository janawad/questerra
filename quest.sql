-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 12:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` text NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `date_created`, `date_updated`, `about_title`, `about_desc`, `deleted`) VALUES
(1, '2017-02-25 10:31:14', '0000-00-00 00:00:00', 'wqew', 'qwrwetet', 0),
(2, '2017-02-25 10:31:48', '0000-00-00 00:00:00', '', '', 0),
(3, '2017-02-25 10:32:43', '0000-00-00 00:00:00', 'dsfg', 'fdhdfh', 0),
(4, '2017-02-25 10:33:08', '0000-00-00 00:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `about_us_slider`
--

CREATE TABLE IF NOT EXISTS `about_us_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` varchar(9) NOT NULL,
  `date_updated` varchar(9) NOT NULL,
  `title` varchar(44) NOT NULL,
  `description` varchar(44) NOT NULL,
  `image` varchar(44) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=active,1=inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `about_us_slider`
--

INSERT INTO `about_us_slider` (`id`, `date_created`, `date_updated`, `title`, `description`, `image`, `deleted`) VALUES
(3, '2015-02-1', '2015-02-1', 'vasim', 'he is developer', '1424329041Lighthouse.jpg', 1),
(4, '2015-02-1', '', 'hi', 'ghghgjh', '1424089825Penguins.jpg', 1),
(5, '2015-02-1', '', 'vasim', 'hi hi hi ', '1424328466Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(260) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-superadmin,2-admin',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`) VALUES
(11, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 9876543210, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `apply_form`
--

CREATE TABLE IF NOT EXISTS `apply_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `education` text NOT NULL,
  `role` text NOT NULL,
  `domain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `apply_form`
--

INSERT INTO `apply_form` (`id`, `date_created`, `name`, `gender`, `dob`, `email`, `nationality`, `number`, `education`, `role`, `domain`) VALUES
(2, '2017-03-25 14:36:57', 'aj', '0', '', 'aja@gmail.com', '0', 0, '0', '0', 'fdghg hfgioh ihrg;p'),
(3, '2017-03-25 15:30:12', 'fgh', '0', '03/22/2017', '1@gmail.com', '0', 0, '0', '0', 'sdgfsgddggdsa'),
(4, '2017-03-25 15:31:08', 'dgfhd', 'female', '03/11/2017', 'aj@gmail.com', '0', 0, '0', '0', 'fghghfghfh  fgh'),
(5, '2017-03-25 15:33:55', 's', 'male', '03/28/2017', 's@g.i', '0', 0, '0', '0', 'afddsf'),
(6, '2017-03-25 15:45:09', '1', 'male', '03/01/2017', '1@gmail.com', '1', 1, '1111', '111122', '2223');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(225) NOT NULL,
  `blog_image_details` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `blog_title`, `blog_desc`, `blog_image`, `blog_image_details`, `deleted`) VALUES
(3, 3, '2014-11-24 00:00:00', '2017-01-24 17:48:27', 'WHAT HAPPENS IN KOSHYâ€™S STAYS IN KOSHYâ€™S ', ' Koshyâ€™s is not for the faint-hearted, nor is it for those with low threshold for the odd. So before you enter, promise yourself, you will not stare or squirm.\r\nSo, whatâ€™s odd about this place? The crowd. Period. You have all kinds. That reaffirms the saying, â€˜to each his ownâ€™. So, let them while they let you be.\r\nAlso, as a side note: nobody goes to Koshyâ€™s for the food. While food is good, itâ€™s not what people go there for. Itâ€™s not what I go there for.\r\n\r\nI go there for comfort. A comfort that says, â€˜just beâ€™; comfort that says, â€˜why not eat some bread and butter and a glass cold bournvita?â€™; comfort that says, â€˜sure drop in, let me know if you need something, I will be aroundâ€™; and especially a comfort that says, â€˜good to see you, where have you been?â€™.\r\n\r\nFirst what strikes you about Koshyâ€™s is its old world charm, the high ceiling, the uniform of the staff and the incessant hum. People do come to Koshyâ€™s to eat but mostly to talk. They talk a lot. And when talking makes them hungry, they eat. They talk about things from this world and another [I am pretty sure of that], they meet, greet, eat and then talk some more. Youâ€™ll discover the most eclectic crowd ever. Yes, thatâ€™s Koshyâ€™s for you. Pleasing to the senses and if you order right, will please your pallet as well.\r\n\r\nThere is one to the left and one to the right. While the menu is relatively the same, the prices and dÃ©cor arenâ€™t. Soft napkins replace paper tissues and the usual spoons and forks make way for fine cutleries. So, when in a group, or alone head to the one in the left. And if you are on a dateâ€¦ the one on the right will be the right one for you.\r\n\r\nI recommend the cold bournvita [request for without sugar], the fish and fries, the mutton broth and the classic bread and butter sandwich. This is comfort.', '1484982728blog1.jpg', '1485260307post-img.jpg', 0),
(4, 4, '2017-01-05 12:47:38', '2017-01-24 17:48:46', 'WHAT HAPPENS IN KOSHYâ€™S STAYS IN KOSHYâ€™S ', 'No dustbin nearby, check! Wet clothes need to be packed in a suitcase, check! Earrings might go missing, check! What more can you keep on checking while setting off for a holiday? It is time you quit all these and turn your vacation the coolest, funniest and stress-free affair of life. And some smart travel hacks can actually make your trip enjoyable and hitch-free. Do not hesitate to follow some of our smart travel tips we have mentioned below for you and your much desired vacation.', '1484982773blog5.jpg', '1485260326post-img.jpg', 0),
(15, 5, '2017-01-11 11:56:32', '2017-01-24 17:49:01', 'WHAT HAPPENS IN KOSHYâ€™S STAYS IN KOSHYâ€™S ', 'best in the world', '1484982757blog4.jpg', '1485260341post-img.jpg', 0),
(17, 6, '2017-01-11 11:57:36', '2017-01-24 17:49:14', 'WHAT HAPPENS IN KOSHYâ€™S STAYS IN KOSHYâ€™S ', ' Koshyâ€™s is not for the faint-hearted, nor is it for those with low threshold for the odd. So before you enter, promise yourself, you will not stare or squirm.\r\nSo, whatâ€™s odd about this place? The crowd. Period. You have all kinds. That reaffirms the saying, â€˜to each his ownâ€™. So, let them while they let you be.\r\nAlso, as a side note: nobody goes to Koshyâ€™s for the food. While food is good, itâ€™s not what people go there for. Itâ€™s not what I go there for.\r\n\r\nI go there for comfort. A comfort that says, â€˜just beâ€™; comfort that says, â€˜why not eat some bread and butter and a glass cold bournvita?â€™; comfort that says, â€˜sure drop in, let me know if you need something, I will be aroundâ€™; and especially a comfort that says, â€˜good to see you, where have you been?â€™.\r\n\r\nFirst what strikes you about Koshyâ€™s is its old world charm, the high ceiling, the uniform of the staff and the incessant hum. People do come to Koshyâ€™s to eat but mostly to talk. They talk a lot. And when talking makes them hungry, they eat. They talk about things from this world and another [I am pretty sure of that], they meet, greet, eat and then talk some more. Youâ€™ll discover the most eclectic crowd ever. Yes, thatâ€™s Koshyâ€™s for you. Pleasing to the senses and if you order right, will please your pallet as well.\r\n\r\nThere is one to the left and one to the right. While the menu is relatively the same, the prices and dÃ©cor arenâ€™t. Soft napkins replace paper tissues and the usual spoons and forks make way for fine cutleries. So, when in a group, or alone head to the one in the left. And if you are on a dateâ€¦ the one on the right will be the right one for you.\r\n\r\nI recommend the cold bournvita [request for without sugar], the fish and fries, the mutton broth and the classic bread and butter sandwich. This is comfort.', '1484982749blog3.jpg', '1485260354post-img.jpg', 0),
(19, 3, '2017-01-13 13:06:18', '2017-04-15 13:23:45', 'CUBBON PARK IS just PERFECT TO work on your', 'No matter what your choice of exercise is â€“ running, jogging, hopping, skipping, walking or saluting the sun, you will fall in love with it. \r\n\r\nI have certainly fallen in love with mine. There is really no better place to workout than at Cubbon Park. Itâ€™s greener than the greenest thing you can think of. And way lovelier and bigger than the title â€˜parkâ€™ suggests. Itâ€™s a sanctuary. An escape from all things urban, from all things manmade and manipulated. Parts of it actually come close to a jungle. However, pretty squirrels and some birds [whose names I donâ€™t know] are the only ones from the animal kingdom.\r\n\r\nAnd of course Cubbon Park is also perfect for exercising the mind or gaining some perspective. Pick a bench at one of the many, many quiet corners and ponder over life, love, the bucket-list and the to-do list. Whatever you choose to do with your time here, Cubbon Park will do you good.\r\n\r\n', '1492242825questchanges.txt', '1485260294post-img.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile_number` int(13) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pkg_cat_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `date_created`, `firstname`, `lastname`, `mobile_number`, `address`, `city`, `state`, `zip`, `email`, `pkg_cat_id`) VALUES
(1, '2017-03-08 15:07:47', '0', '0', 1324865748, '0', '0', '0', 122346, '0', '1'),
(2, '2017-03-08 15:09:14', '0', '0', 2147483647, '0', '0', '0', 586125, '0', '1'),
(3, '2017-03-08 15:09:46', '0', '0', 0, '0', '0', '0', 0, '0', '0'),
(4, '2017-03-08 15:24:03', 'Anil', 'Janawad', 2147483647, 'babaladi', 'bijapur', 'karnataka', 586125, 'a@gmail.com', '1'),
(5, '2017-03-08 15:24:55', 'Anil', 'Janawad', 2147483647, 'babaladi', 'bijapur', 'karnataka', 586125, 'a@gmail.com', '1'),
(6, '2017-03-08 15:28:38', 'Anil', 'Janawad', 2147483647, 'babaladi', 'bijapur', 'karnataka', 586125, 'janawadanil@gmail.com', '2'),
(7, '2017-03-08 15:29:16', '', '', 0, '', '', '', 0, '', ''),
(8, '2017-03-28 16:14:42', '', '', 0, '', '', '', 0, '', ''),
(9, '2017-03-28 16:47:35', '', '', 0, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `contact_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `map` varchar(225) NOT NULL,
  `phone_no` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `date_created`, `date_updated`, `contact_name`, `email`, `address`, `map`, `phone_no`, `deleted`) VALUES
(1, '2014-11-23', '2017-01-04', 'Contact Us', 'test@gmail.com', 'TN Subhadra Devi, #16/15 2nd Main, Marrenhalli, ViyaNagar , Bangalore : -560040', 'Bangalore', '21474836472', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE IF NOT EXISTS `enquiry_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `date_created`, `name`, `email`, `phone`, `country`, `message`) VALUES
(1, '2014-12-16 22:01:10', 'suresh', 'surisureshnayak@gmell,com', 9964101938, '', 'sar/medam i am suresh my intrest cors 1year b,com corasponding in gorment college in bangalor'),
(2, '2015-01-01 06:09:35', 'Angelina', 'vivplsaixd@hotmail.com', 0, '', 'Hi, my name is Angelina and I am the marketing manager at StarSEO Marketing. I was just looking at your site and see that your site has the potential to become very popular. I just want to tell you, In case you don''t already know... There is a website network which already has more than 16 million users, and most of the users are looking for niches like yours. By getting your site on this network you have a chance to get your site more visitors than you can imagine. It is free to sign up and you can read more about it here: http://butik.y-photo.se/yourls/5x9i - Now, let me ask you... Do you need your site to be successful to maintain your business? Do you need targeted traffic who are interested in the services and products you offer? Are looking for exposure, to increase sales, and to quickly develop awareness for your site? If your answer is YES, you can achieve these things only if you get your site on the service I am talking about. This traffic service advertises you to thousands, while also giving you a chance to test the service before paying anything. All the popular sites are using this service to boost their readership and ad revenue! Why arenâ€™t you? And what is better than traffic? Itâ€™s recurring traffic! That''s how running a successful website works... Here''s to your success! Read more here: http://berjadigi.com/1DyG\r\nAngelina http://shibam-news.com/i/ti'),
(4, '2015-01-04 01:18:52', 'Antoniodemo', 'antonionoma@mail.ru', 123456, '', 'Great looking internet site. Think you did a great deal of best imported cigarettes your very own  html coding.'),
(5, '2015-01-08 09:55:52', 'Santosh ', 'prashant.mecas@gmail.com', 9031469633, '', 'I wanna do admission in c v raman 4 diploma course (electrical). Tell me d process '),
(6, '2015-01-08 14:45:10', 'fbgcbv', '', 59872395924, '', 'bLtYZa  capazlmpnaqb, [url=http://uzdhyvwtpuqz.com/]uzdhyvwtpuqz[/url], [link=http://blokmvrpjett.com/]blokmvrpjett[/link], http://ubeiuoxexmse.com/'),
(7, '2015-01-09 01:18:51', 'ConstanLutwyche', 'melissiakrigbaumke2706@yahoo.com', 77, '', 'If you have saved enough while you were working, you will have a lot of savings when you retire. So, the advantages to underarm whitening would be to possess your skin colour match the remainder of your skin, look radiant and healthy. " When playing his instrument on the other hand, he is less spontaneous as he is constantly worrying about whether he has the right note, if it is in tune, etc.'),
(9, '2015-01-10 08:53:22', 'ramya', 'ramz1804@gmail.com', 0, '', 'Hello ...loookin for online mba courses...pls provide me wid details on this'),
(10, '2015-01-10 22:44:29', 'mwoohkgm', '', 93617852658, '', 'mw8g6H  lltfmatdicok, [url=http://fhpkbntytfsw.com/]fhpkbntytfsw[/url], [link=http://bzklujtbdrdj.com/]bzklujtbdrdj[/link], http://irzrzhuvupzd.com/'),
(11, '2015-01-19 10:17:05', 'ASWANI. S.R', 'aswanisr10@gmail.com', 8893230045, '', 'I want to study degree course BSC correspondence.. How to apply for this course ? How much fee.Any consideration of backward cast.'),
(14, '2015-01-21 20:48:59', 'VelmaETSCsfwmlr', 'roarkeshelllou@yahoo.com', 157, '', 'Please let me know if you''re looking for a writer for your site. You have some really great posts and I feel I would be a good asset. If you ever want to take some of the load off, I''d love to write some articles for your blog in exchange for a link back to mine. Please send me an email if interested. Cheers!'),
(15, '2015-01-27 01:22:42', 'Durga prasad', 'prasadyallapu25@gmail.com', 8688734875, '', 'Sir, \r\n  I pursued my btech in cs, passed out in 2014.I am glad to inform you that i am aware of html,css and bootstrap and i done works related to UI.\r\nRegards,\r\nDurga prasad '),
(16, '2015-01-29 04:53:45', 'Laxmikant ', 'ldhage1984@gmail.com', 9962019236, '', 'I want to BA cource as one sitting is it possible please let me know. '),
(18, '2015-01-30 07:22:51', 'Jason Johnson', 'jjwebdesignstudio@gmail.com', 208, '', ''),
(20, '2017-01-20 12:06:05', 'vasim', 'vasim@test.com', 8792241961, '', 'test'),
(21, '2017-01-20 13:08:55', 'aravind ', 'aravind@test,com', 12345677889, '', 'test 2'),
(22, '2017-01-20 13:11:37', 'aravind ', 'aravind@test,com', 12345677889, '', 'test 2'),
(23, '2017-01-20 13:14:02', 'aravind', 'test@gmail.com', 123456, '', 'xczxczxcd'),
(24, '2017-03-08 15:02:39', 'a', 'a@gmail.com', 1232456798, '', 'sgffdghg'),
(25, '2017-03-08 15:07:47', '', 'dfh@gmail.com', 0, '', ''),
(26, '2017-03-08 18:24:08', 'aaa', 'aaa@gmail.com', 1234567890, 'India', 'aaa'),
(27, '2017-03-08 18:27:17', 'y', 'y@gm.com', 1234444444, 'India', 'lllllll'),
(28, '2017-03-09 15:55:33', '', '', 0, '', ''),
(29, '2017-03-09 16:02:42', 'fgh', 'dfhg@f.vb', 0, '', ''),
(30, '2017-03-09 16:11:40', 'gk', 'jgk@fg.fg', 0, '', ''),
(31, '2017-03-09 16:16:09', 'ani', 'ani@gmail.com', 0, '', ''),
(32, '2017-03-09 16:18:27', 'fd', 'dh@sd.hj', 0, '', ''),
(33, '2017-03-25 14:18:39', 'jhk', 'ajanawad@gmail.com', 1234567887, 'Algeria', 'gyjuhjhgjhg'),
(34, '2017-03-25 14:27:13', 'fdg', 'dgf@gm.co', 7895461230, 'Barbados', 'fdgfdd'),
(35, '2017-03-25 14:27:13', 'fdg', 'dgf@gm.co', 7895461230, 'Barbados', 'fdgfdd'),
(36, '2017-03-25 14:31:08', 'anil', 'aj@gmail.com', 1472589630, '', 'fdbbfdfbh rsgfg'),
(37, '2017-03-25 14:31:08', 'anil', 'aj@gmail.com', 1472589630, '', 'fdbbfdfbh rsgfg'),
(38, '2017-03-25 14:32:01', '12', '1@gmail.com', 7536982140, '', 'ggggggg'),
(39, '2017-03-25 14:32:01', '12', '1@gmail.com', 7536982140, '', 'ggggggg'),
(40, '2017-03-25 14:34:05', 'fg', 'gfd@g.bg', 1478956230, '', 'hhj'),
(41, '2017-03-25 14:36:58', 'aj', 'aja@gmail.com', 0, '', 'fdghg hfgioh ihrg;p'),
(42, '2017-03-25 15:30:12', 'fgh', '1@gmail.com', 0, '', 'sdgfsgddggdsa'),
(43, '2017-03-25 15:31:09', 'dgfhd', 'aj@gmail.com', 0, '', 'fghghfghfh  fgh'),
(44, '2017-03-25 15:33:55', 's', 's@g.i', 0, '', 'afddsf'),
(45, '2017-03-25 15:45:09', '1', '1@gmail.com', 0, '', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE IF NOT EXISTS `facts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `facts_title` varchar(225) NOT NULL,
  `facts_desc` text NOT NULL,
  `facts_image` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `date_created`, `date_updated`, `facts_title`, `facts_desc`, `facts_image`, `deleted`) VALUES
(1, '2017-01-05 17:07:23', '2017-01-27 15:51:34', 'Aravind', 'â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. This is not a sales pitch. This term, â€˜crumple zone,â€™ I would find use for in my article... about the lights, these are all high-tech things that I think readers would find interesting. Those are the kinds of specifics I would be looking for.â€cnnnnnnnnnn', '1484987771tip1.jpg', 0),
(12, '2017-01-06 17:44:11', '2017-01-21 14:08:54', 'Tour information', 'saccscasc', '1484987795tip2.jpg', 0),
(13, '2017-01-07 11:59:42', '2017-01-21 14:07:32', 'vasim tital', 'test', '1484987852tip7.jpg', 0),
(21, '2017-01-07 13:11:39', '2017-01-21 14:07:19', 'qqqaa', 'qaqaqa', '1484987839tip5.jpg', 0),
(32, '2017-01-09 16:07:11', '2017-01-31 12:59:32', 'anil', 'demo', '1484987808tip3.jpg', 0),
(35, '2017-01-13 13:09:05', '2017-01-21 14:07:45', 'vdkg blohn   thdkljh ;/nmhgdp pjhd''', 'nbhdpoj djr'' po jk[', '1484987865tip8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `date_created`, `name`, `email`) VALUES
(1, '2017-03-09 16:18:27', 'fd', 'dh@sd.hj'),
(2, '2017-03-25 13:43:33', 'asfdfdsa', 'sadff');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `icon_image` varchar(250) NOT NULL,
  `package_title` varchar(225) NOT NULL,
  `package_price` varchar(250) NOT NULL,
  `location1` varchar(250) NOT NULL,
  `location2` varchar(250) NOT NULL,
  `location3` varchar(250) NOT NULL,
  `pkg_date` varchar(250) NOT NULL,
  `slider_desc1` varchar(250) NOT NULL,
  `slider_image1` varchar(250) NOT NULL,
  `slider_desc2` varchar(250) NOT NULL,
  `slider_image2` varchar(250) NOT NULL,
  `slider_desc3` varchar(250) NOT NULL,
  `slider_image3` varchar(250) NOT NULL,
  `itinerary` text NOT NULL,
  `title1` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `desc1` text NOT NULL,
  `title2` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `desc2` text NOT NULL,
  `title3` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `desc3` text NOT NULL,
  `title4` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `desc4` text NOT NULL,
  `title5` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `desc5` text NOT NULL,
  `title6` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `desc6` text NOT NULL,
  `title7` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `desc7` text NOT NULL,
  `title8` varchar(255) NOT NULL,
  `image8` varchar(255) NOT NULL,
  `desc8` text NOT NULL,
  `title9` varchar(255) NOT NULL,
  `image9` varchar(255) NOT NULL,
  `desc9` text NOT NULL,
  `title10` varchar(255) NOT NULL,
  `image10` varchar(255) NOT NULL,
  `desc10` text NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `icon_image`, `package_title`, `package_price`, `location1`, `location2`, `location3`, `pkg_date`, `slider_desc1`, `slider_image1`, `slider_desc2`, `slider_image2`, `slider_desc3`, `slider_image3`, `itinerary`, `title1`, `image1`, `desc1`, `title2`, `image2`, `desc2`, `title3`, `image3`, `desc3`, `title4`, `image4`, `desc4`, `title5`, `image5`, `desc5`, `title6`, `image6`, `desc6`, `title7`, `image7`, `desc7`, `title8`, `image8`, `desc8`, `title9`, `image9`, `desc9`, `title10`, `image10`, `desc10`, `deleted`) VALUES
(7, 7, '2017-01-28 12:38:56', '2017-04-05 10:29:42', '1485595747Architechture.jpg', 'Building Blocks', '1400', 'North India (Coming soon)', 'South India', 'South india 2', '3 feb 2017 to 15feb 2017, 18feb 2017 to 25 feb 2017', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485587336slider-1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485587336slider-2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485587336slider-3.jpg', '', '', '1491368382', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. sdigo gafdsuy fduf sfajsh\r\nfdgdyghfhjufgys\r\n', 'soul', '148595186615940586_10211713486262605_5385897442528833443_n.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'fashion', '1485951866classical_india_1.jpg', '', 'food', '1485951866eb796faaa11d62005682e9c9a8fe7bb2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'travel', '148595186616787e04cdab4d01872361e189cb0f31.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'history', '1485951866classical_india_1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'act', '1485951866indian-artefact.jpg', 'Donec Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  Â  non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas\r\n\r\nnun felis,Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  porta vel vehicula nec, tristique id urna. Donec non mi placerat,Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. hgjjkjkh hgkkjh hgk hgk fdh t\r\n', 'architeture', '1485951866Konark-Sun-Temple.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'place', '1485951866unnamed_(27).jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'safdsaf', '1485951866vitthala-temple-hampi-ancient-india-s.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.\r\n', 0),
(8, 1, '2017-01-28 15:12:36', '2017-03-30 14:05:54', '1485596556History.jpg', 'Rumbling Runs', '1400', 'North India (Coming soon)', 'South India', 'South india 2', '2 feb 2017 to 15feb 2017, 18feb 2017 to 25 feb 2017 ', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596556slider-1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596556slider-2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596556slider-3.jpg', '', 'timeless', '148595136216787e04cdab4d01872361e189cb0f31.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'soul', '148595136215936453_10211713287857645_5942929177950173427_o.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'history', '148595136215936519_10211713268977173_6273393329182752860_o.jpg', '', 'culture', '148595136215940586_10211713486262605_5385897442528833443_n.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'north', '148595136215941111_10211713513983298_2891551481005359624_n.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'south', '148595136215941396_10211713525343582_8624183918190357106_n.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'east', '1485951362akshardhamtemple.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.\r\n', 'west', '1485951362download.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'assafg', '1485951362eb796faaa11d62005682e9c9a8fe7bb2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'ahghdsh', '1485951362ef787d5edbe1a708e455ca87296d0534.jpg', 'sdffg\r\n\r\ngfhhgf\r\n\r\njhk\r\n\r\nDonec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna. fjdgkljh klhgfdlhklgf\r\n', 0),
(9, 6, '2017-01-28 15:13:42', '2017-03-30 14:04:13', '1485596622Music_and_dance.jpg', 'Melody & Movements', '1400', 'North India (Coming soon)', 'South India', 'South india 2', '4 feb 2017 to 15feb 2017, 18feb 2017 to 25 feb 2017 ', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596622slider-1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596622slider-2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596622slider-3.jpg', '', 'soul', '1485950798vitthala-temple-hampi-ancient-india-s.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.1', 'art', '1485950798ancient-india-city1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.2', 'arch', '1485951040download.jpg', '', 'uip', '1485951090akshardhamtemple.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.4', 'places', '1485951090ece3a71384c310e984ff9ff2927931ae.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'vicale', '1485951146eb796faaa11d62005682e9c9a8fe7bb2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'food', '1485950967cultural-trips-in-south-india-1-400x268.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'timeless', '1485951146indian-artefact.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'music', '1485951146sas-bahu-temple1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'dance', '1485951187eb796faaa11d62005682e9c9a8fe7bb2.jpg', 'ghj\r\n\r\nkl;;\r\n\r\nDonec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.\r\n', 0),
(10, 3, '2017-01-28 15:14:43', '2017-03-30 13:18:34', '1485596683Fasion.jpg', 'Runway to Ramp', '1400', 'North India (Coming soon)', 'South India', 'South india 2', '1 feb 2017 to 15feb 2017, 18feb 2017 to 25 feb 2017 ', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485928860f61dd72149f3fbf548b5822e5bf15473.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596683slider-2.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', '1485596683slider-3.jpg', '', 'timeless', '1489558537India.jpg', 'The Tour will cost you 1400 USD plus Local Taxes. This Includes all Local Transports after your reach the designated start point in Bangalore. All Breakfasts, 8 Lunches and 8 Dinners included.Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â  Â Â Â Â Â Â Â Â Â Â  What''s included :\r\n\r\n                                                                                  ', 'fashion', '1489559987Map.jpg', 'The Tour will cost you 1400 USD plus Local Taxes. This Includes all Local Transports after your reach the designated start point in Bangalore. All Breakfasts, 8 Lunches and 8 Dinners included.Â Â Â Â Â Â Â Â Â Â                                 What''s included :\r\n\r\n                                                                                  ', 'fashion2', '1485951588south_asia-poster.jpg', '', 'soul', '1485951588somanathapura_keshava_temple.jpeg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'fashion3', '1485951653download.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'fashion4', '1485951588sas-bahu-temple1.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'fashion_abc', '1485951693download.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.\r\n', 'asfsdhg', '1485951588kusuma-sarovar.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'sahdshh', '1485951588Hampi_chariot.jpg', 'Donec non mi placerat, sagittis orci non, lacinia nibh. Quisque nec porttitor elit. Nulla ut iaculis erat. Maecenas nunc felis, porta vel vehicula nec, tristique id urna.', 'shfdfhah', '1485951479vitthala-temple-hampi-ancient-india-s.jpg', 'fdshjgfkdsfhgkgfdsajkh\r\nbrdsgjkhfgkd fsudaf ', 0),
(13, 0, '2017-03-30 12:59:27', '0000-00-00 00:00:00', '1490858967', 'vcb', 'bnv', 'xvc', 'n', 'nbvnbv', '', 'bvcn', '1490858967', 'vcbn', '1490858967', 'b,m,', '1490858967', '', 'n,m', '1490858967', 'n,m', 'n,m', '1490858967', ',mmn,', 'nm,', '1490858967', 'n,m', ',mn', '1490858967', ',mn', ',mn', '1490858967', ',n', ',n', '1490858967', ',mn', ',m', '1490858967', 'nm,', 'nm', '1490858967', ',m', 'n,m', '1490858967', 'nm,', ',mn', '1490858967', '                                            This is my textarea to be replaced with CKEditor.\r\n                    mn,\r\n,m\r\nn\r\nm,\r\nm,\r\n,m', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages_category`
--

CREATE TABLE IF NOT EXISTS `packages_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `packages_category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `packages_category_image` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = active ,1 = inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `packages_category`
--

INSERT INTO `packages_category` (`id`, `date_created`, `date_updated`, `packages_category_name`, `description`, `packages_category_image`, `deleted`) VALUES
(1, '2014-11-13 23:23:23', '2017-01-18 14:16:32', 'History & Culture', '', '1416697949college3.jpg', 0),
(2, '2014-11-13 23:24:18', '2017-01-18 14:17:18', 'Social Entrepreneurship & Many Moreâ€¦', '', '1416697988college6.jpg', 0),
(3, '2014-11-13 23:25:22', '2017-01-18 14:16:46', 'Fashion', '', '1416697962college4.jpg', 0),
(5, '2014-11-13 23:28:00', '2017-01-18 14:17:03', 'Business and Commerce', '', '1416697977college5.jpg', 0),
(6, '2014-11-21 15:58:11', '2017-01-18 14:16:14', 'Music and Dance', '', '1416697933college2.jpg', 0),
(7, '2014-11-25 23:01:00', '2017-01-18 14:15:36', 'Architecture', '', '1484722848Chrysanthemum.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_highlight`
--

CREATE TABLE IF NOT EXISTS `package_highlight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `highlights_title` varchar(250) NOT NULL,
  `highlights_desc` text NOT NULL,
  `highlights_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `package_highlight`
--

INSERT INTO `package_highlight` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `highlights_title`, `highlights_desc`, `highlights_image`, `deleted`) VALUES
(9, 1, '2017-01-31 18:27:20', '2017-01-31 19:50:31', 'Experiences', 'Journey''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.', '1485872431akshardhamtemple.jpg', 0),
(11, 2, '2017-01-31 18:27:51', '2017-01-31 20:03:48', 'soul', 'Journey''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.setterrty', '1485873228ece3a71384c310e984ff9ff2927931ae.jpg', 0),
(12, 3, '2017-01-31 18:28:03', '2017-01-31 20:01:57', 'Exuberance', 'Journey''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.\r\nJourney''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.', '1485873117download.jpg', 0),
(13, 5, '2017-01-31 18:28:20', '2017-01-31 19:07:52', 'Timeless', 'Journey''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.dsftdt', '14858675009.jpg', 0),
(14, 1, '2017-01-31 18:28:34', '2017-01-31 19:52:05', 'Places covered', 'Journey''s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.try6uurt', '1485872525ancient-india-city1.jpg', 0),
(17, 1, '2017-01-31 19:53:48', '0000-00-00 00:00:00', 'Overnight activities', 'As we try to get more out of your tour, we try to have maximum journeys over night. In the case that we have a bight halt, you could take a pick between me time and group networking events.', '1485872628classical_india_1.jpg', 0),
(18, 3, '2017-01-31 19:55:51', '0000-00-00 00:00:00', 'Food', 'Mostly local fare; Networking nights planned around eating experiences; ''Me time'' advice /ood guide to best restaurants in town. Look for how many meals covered in the detailed tour guide.', '1485872751vitthala-temple-hampi-ancient-india-s.jpg', 0),
(21, 1, '2017-01-31 20:00:10', '2017-01-31 20:01:07', 'questerra', 'Most of journey are on board air conditioned state of the art german coaches; as journeys are overnight, we hope you rest well to be up for an action packed day!', '1485873067architecture-of-india.jpg', 0),
(22, 2, '2017-01-31 20:02:45', '2017-01-31 20:04:32', 'Tours', 'Most of journey are on board air conditioned state of the art german coaches; as journeys are overnight, we hope you rest well to be up for an action packed day!', '1485873272f61dd72149f3fbf548b5822e5bf15473.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_currency` varchar(255) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_transaction`
--

CREATE TABLE IF NOT EXISTS `payment_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` text NOT NULL,
  `amount` int(11) NOT NULL,
  `currency_type` text NOT NULL,
  `item_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `press_media`
--

CREATE TABLE IF NOT EXISTS `press_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `press_media_title` varchar(250) NOT NULL,
  `press_media_desc` text NOT NULL,
  `press_media_image` varchar(250) NOT NULL,
  `press_media_link` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `press_media`
--

INSERT INTO `press_media` (`id`, `date_created`, `date_updated`, `press_media_title`, `press_media_desc`, `press_media_image`, `press_media_link`, `deleted`) VALUES
(6, '2017-01-27 12:25:20', '2017-01-27 16:00:23', 'Doec Mostie Balndit', 'â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. ', '1485500120Koala.jpg', 'http://macle.co.in/', 0),
(8, '2017-01-27 14:20:36', '2017-01-27 16:00:35', 'Mauris sit amet sodale', 'â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. ', '1485507036Lighthouse.jpg', 'http://facebook.com', 0),
(9, '2017-01-27 15:50:52', '2017-01-27 16:00:42', 'questerra', 'â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. ', '1485512452Penguins.jpg', 'http://questerra.co', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_image`, `price`, `status`) VALUES
(1, 'Demo Product 1', 'demo_product.jpg', 15.00, 1),
(2, 'Demo Product 2', 'demo_product.jpg', 25.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile_number` int(13) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pkg_cat_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `testimonials_name` varchar(255) NOT NULL,
  `position` varchar(250) NOT NULL,
  `testimonials_desc` text NOT NULL,
  `testimonials_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = active , 0 = inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `date_created`, `date_updated`, `testimonials_name`, `position`, `testimonials_desc`, `testimonials_image`, `deleted`) VALUES
(4, '2014-11-21 17:53:11', '2017-01-21 11:31:07', 'aravind', 'Project Manager, Macle Grafics Pvt. Ltd. ', 'aravind Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibend.', '1484906120testimonial2.jpg', 1),
(5, '2017-01-04 14:45:05', '2017-01-21 11:30:55', 'anil', 'Web Developer, Macle Grafics Pvt. Ltd.', 'anil- Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibend.', '1484905916testimonial1.jpg', 1),
(14, '2017-01-09 16:06:20', '2017-01-21 11:31:18', 'vasim ', 'Sr Web Developer, Macle Grafics Pvt. Ltd. ', 'vasim- Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibend.', '1484906137testimonial3.jpg', 1),
(15, '2017-01-20 16:11:53', '0000-00-00 00:00:00', 'jorge', 'Python Developer, Macle Grafics Pvt Ltd', 'This very nice website', '1484908913testimonial2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `place_desc` text NOT NULL,
  `place_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = active , 0 = inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `date_created`, `date_updated`, `place_name`, `package_name`, `place_desc`, `place_image`, `deleted`) VALUES
(13, '2017-01-10 15:56:02', '2017-01-12 18:25:10', 'goa', 'Architecture', 'Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibend.\r\nPhasellus condimentum lacus nec justo lacinia sodales. Pellentesque pellente sque ultricies urna, at pretium.', '1484043962Hydrangeas.jpg', 1),
(14, '2017-01-10 17:05:46', '2017-01-11 11:42:03', 'ss', 'Architecture', 'Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sed commodo tempor dapibus. Duis convallis turpis in tortor volutpat, eget rhoncus nisi fringilla. Phasellus ornare risus ineuismod varius nullam feugiat ultrices. Sed condimentum est libero, aliquet iaculis diam bibend.\r\nPhasellus condimentum lacus nec justo lacinia sodales. Pellentesque pellente sque ultricies urna, at pretium.', '1484048146Koala.jpg', 1),
(16, '2017-01-11 11:42:56', '2017-01-13 12:46:31', 'hampi hgahvah hbhahs', 'History and Culture', 'good place in india ', '1484291791Tulips.jpg', 1),
(17, '2017-01-11 14:59:23', '2017-01-13 12:12:06', 'bijapur Karnataka India', 'Architecture', 'good place in the world', '1484126963Tulips.jpg', 1),
(19, '2017-01-11 18:04:54', '2017-01-11 18:05:16', 'kk', 'History and Culture', 'sssss', '1484138094Koala.jpg', 1),
(26, '2017-01-13 12:20:11', '2017-01-13 12:20:46', 'hampi karnataka india asia world galaxy', 'History and Culture', 'hampi is the good place in karnataka and every famous in world . this place belong to the unisco wrold center.', '1484290211Lighthouse.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_highlight`
--

CREATE TABLE IF NOT EXISTS `tour_highlight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `timeless_desc` text NOT NULL,
  `timeless_image` varchar(250) NOT NULL,
  `soul_desc` text NOT NULL,
  `soul_image` varchar(250) NOT NULL,
  `exuberance_desc` text NOT NULL,
  `exuberance_image` varchar(250) NOT NULL,
  `places_covered_desc` text NOT NULL,
  `places_covered_image` varchar(250) NOT NULL,
  `experiences_desc` text NOT NULL,
  `experiences_image` varchar(250) NOT NULL,
  `mentorship_networking` text NOT NULL,
  `mentorship_image` varchar(250) NOT NULL,
  `economics_desc` text NOT NULL,
  `economics_image` varchar(250) NOT NULL,
  `accommodation_desc` text NOT NULL,
  `accommodation_image` varchar(250) NOT NULL,
  `food_desc` text NOT NULL,
  `food_image` varchar(250) NOT NULL,
  `personal_time_desc` text NOT NULL,
  `personal_time_image` varchar(250) NOT NULL,
  `overnight_activities_desc` text NOT NULL,
  `overnight_activities_image` varchar(250) NOT NULL,
  `transportation_desc` text NOT NULL,
  `transportation_image` varchar(250) NOT NULL,
  `must_pack_desc` text NOT NULL,
  `must_pack_image` varchar(250) NOT NULL,
  `faq_desc` text NOT NULL,
  `faq_image` varchar(250) NOT NULL,
  `booking_conditions_desc` text NOT NULL,
  `booking_conditions_image` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tour_highlight`
--

INSERT INTO `tour_highlight` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `timeless_desc`, `timeless_image`, `soul_desc`, `soul_image`, `exuberance_desc`, `exuberance_image`, `places_covered_desc`, `places_covered_image`, `experiences_desc`, `experiences_image`, `mentorship_networking`, `mentorship_image`, `economics_desc`, `economics_image`, `accommodation_desc`, `accommodation_image`, `food_desc`, `food_image`, `personal_time_desc`, `personal_time_image`, `overnight_activities_desc`, `overnight_activities_image`, `transportation_desc`, `transportation_image`, `must_pack_desc`, `must_pack_image`, `faq_desc`, `faq_image`, `booking_conditions_desc`, `booking_conditions_image`, `deleted`) VALUES
(51, 7, '2017-01-30 15:09:19', '2017-01-30 18:35:04', '1', '14857698553.jpg', '2', '14857691592.jpg', '3', '14857691593.jpg', '4', '14857691593.png', '5', '14857691594.jpg', '6', '14857691593.png', '7', '14857691593.png', '8', '14857691593.png', '9', '14857691593.png', '10', '14857691593.png', '11', '14857691593.png', '12', '14857691593.png', '13', '14857691593.png', '14', '14857691593.png', '15', '14857691593.png', 0),
(53, 6, '2017-01-30 15:45:11', '2017-01-30 18:35:54', 'svdfheaggggg rsh hgfdsl;rsfhyiykkkkffffffffffffffffffffff sgjl;/ k[epto-[ jueyo] guygfdsp vuhvijj ted6oik][ ', '14857713116.jpg', 'hgfdsl;rsfhyiykkkkffffffffffffffffffffff sgjl;/ k[epto-[ jueyo] guygfdsp vuhvijj ted6oik][ ', '14857713117.jpg', 'dfhg', '14857713118.jpg', 'hjk', '14857713119.jpg', 'kl;iutgu hroigh', '14857713113.png', 'ogih90uy09u0', '14857713113.png', 'iohg; [p9rp0 fejp', '14857713113.png', 'wrtei0i0 =-9-09 t0i', '14857713113.png', '3qr0i0- i0i0ir', '14857713113.png', 'ur9r0- jkjoi ', '14857713113.png', 'vjkjnl iogury09', '14857713113.png', 'urup098r0 0978r90yf ', '14857713113.png', '0w4tugyh 0yhg9y', '14857713113.png', '0yr0yr09 09y90', '14857713113.png', 'bvkjh0 y0', '14857713113.png', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
