-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2018 年 12 月 19 日 12:03
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fruit`
--
CREATE DATABASE `fruit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fruit`;

-- --------------------------------------------------------

--
-- 表的结构 `shop_admin`
--

CREATE TABLE IF NOT EXISTS `shop_admin` (
  `aid` tinyint(3) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `shop_admin`
--

INSERT INTO `shop_admin` (`aid`, `username`, `password`, `logtime`) VALUES
(1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2016-01-11 18:21:05'),
(2, 'cz', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2016-09-26 23:03:40');

-- --------------------------------------------------------

--
-- 表的结构 `shop_cart`
--

CREATE TABLE IF NOT EXISTS `shop_cart` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '购买者ID',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '加入购物车时间',
  `goods_id` int(10) NOT NULL COMMENT '购买商品ID',
  `num` tinyint(3) NOT NULL DEFAULT '1' COMMENT '购买商品数量',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 导出表中的数据 `shop_cart`
--

INSERT INTO `shop_cart` (`cid`, `user_id`, `add_time`, `goods_id`, `num`) VALUES
(14, 14, '2018-12-18 09:12:46', 2, 25);

-- --------------------------------------------------------

--
-- 表的结构 `shop_goods`
--

CREATE TABLE IF NOT EXISTS `shop_goods` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) DEFAULT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '商品编号',
  `name` varchar(40) NOT NULL COMMENT '商品名',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `stock` int(10) NOT NULL COMMENT '库存量',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `album` text NOT NULL COMMENT '商品相册',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL DEFAULT 'yes' COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `cost` text COMMENT '原价',
  `recycle` enum('yes','no') CHARACTER SET ucs2 NOT NULL DEFAULT 'no' COMMENT '是否删除',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `shop_goods`
--

INSERT INTO `shop_goods` (`pid`, `category_id`, `sn`, `name`, `price`, `stock`, `thumb`, `album`, `on_sale`, `recommend`, `add_time`, `cost`, `recycle`) VALUES
(1, 1, '01', '熟甘栗仁坚果栗子熟制休闲零食即食贵州特产新鲜', 32.00, 265, '2018-12/19/1545206534.jpg', 'album/goods1.png', 'yes', 'yes', '2018-12-15 11:19:26', '45', 'no'),
(2, 1, '02', '奶油味碧根果500g坚果炒货零食干果坚果', 29.00, 566, '2018-12/15/1544843995.jpg', 'album/goods2.png', 'yes', 'yes', '2018-12-15 11:19:56', '35', 'no'),
(3, 1, '03', '甘肃天水花牛苹果新鲜当季水果刮泥粉面应季蛇果', 49.00, 666, '2018-12/19/1545215825.jpg', 'album/goods3.png', 'yes', 'yes', '2018-12-15 11:20:19', '65', 'no'),
(4, 2, '04', '当季鲜果百香果广西百香果当季一级水果', 28.00, 999, '2018-12/19/1545216263.jpg', 'album/goods4.png', 'yes', 'yes', '2018-12-15 11:21:27', '45', 'no'),
(5, 2, '05', '黄柠檬四川安岳柠檬新鲜当季水果皮薄新鲜柠檬', 19.00, 999, '2018-12/19/1545216398.jpg', 'album/goods5.png', 'yes', 'yes', '2018-12-15 11:21:59', '89', 'no'),
(6, 4, '06', '云南蒙自大石榴甜红石榴当季新鲜水果', 78.00, 999, '2018-12/19/1545216724.jpg', 'album/goods6.png', 'yes', 'yes', '2018-12-15 11:22:45', '138', 'no'),
(7, 2, '07', '汇优鲜果陕西徐香猕猴桃周至绿心奇异果当季新鲜水果', 39.00, 999, '2018-12/19/1545217222.jpg', 'album/goods7.png', 'yes', 'yes', '2018-12-15 11:23:07', '68', 'no'),
(8, 4, '08', '云南夏黑葡萄1kg 无籽葡萄新鲜水果现摘现发新鲜当季', 16.00, 999, '2018-12/19/1545217467.jpg', 'album/goods8.png', 'yes', 'yes', '2018-12-15 11:23:30', '38', 'no'),
(9, 3, '09', '农夫山泉100%NFC果汁纯果蔬汁汲自然鲜榨果汁', 158.00, 999, '2018-12/15/1544844253.jpg', 'album/goods9.png', 'yes', 'no', '2018-12-15 11:24:13', '185', 'no'),
(10, 3, '10', '冷压榨NFC奇异果汁饮料鲜榨果汁(12瓶装)', 168.00, 999, '2018-12/15/1544844286.jpg', 'album/goods10.png', 'yes', 'no', '2018-12-15 11:24:46', '255', 'no'),
(11, 3, '11', '汲自然100%nfc果汁冷压鲜榨混合果蔬汁饮品', 160.00, 999, '2018-12/15/1544844308.jpg', 'album/goods11.png', 'yes', 'no', '2018-12-15 11:25:08', '185', 'no'),
(12, 4, '12', '纯饮轻断食复合果蔬汁代餐detox juice', 298.00, 999, '2018-12/19/1545220849.jpg', 'album/goods12.png', 'yes', 'no', '2018-12-15 11:25:32', '666', 'no'),
(13, NULL, '13', '泰国山竹新鲜进口山竹水果新鲜当季鲜果', 99.00, 999, '2018-12/19/1545217720.jpg', 'album/goods13.png', 'yes', 'yes', '2018-12-19 19:08:40', '188', 'no'),
(14, NULL, '14', '牛油果水果新鲜农家现摘现发当季甜鲜果', 64.00, 11, '2018-12/19/1545217911.jpg', 'album/goods14.png', 'yes', 'yes', '2018-12-19 15:32:09', '86', 'no');

-- --------------------------------------------------------

--
-- 表的结构 `shop_user`
--

CREATE TABLE IF NOT EXISTS `shop_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `consignee` varchar(30) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 导出表中的数据 `shop_user`
--

INSERT INTO `shop_user` (`uid`, `username`, `password`, `reg_time`, `phone`, `email`, `consignee`, `address`) VALUES
(15, 'lrz', 'e014c3fb074eeeb4a86f2a6647d95eab17a30487', '2018-12-18 20:07:17', NULL, NULL, NULL, NULL),
(14, 'caiweishigou', 'e014c3fb074eeeb4a86f2a6647d95eab17a30487', '2018-12-17 22:40:22', NULL, NULL, NULL, NULL);
