-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 29 日 03:09
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `waimai`
--
CREATE DATABASE IF NOT EXISTS `waimai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `waimai`;

-- --------------------------------------------------------

--
-- 表的结构 `wm_area`
--

CREATE TABLE IF NOT EXISTS `wm_area` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `wm_area`
--

INSERT INTO `wm_area` (`a_id`, `a_name`) VALUES
(1, '罗一路'),
(2, '罗二路'),
(3, '罗三路'),
(4, '罗四路'),
(6, '罗五路'),
(7, '罗六路');

-- --------------------------------------------------------

--
-- 表的结构 `wm_article`
--

CREATE TABLE IF NOT EXISTS `wm_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `acid` int(11) DEFAULT NULL,
  `atitle` varchar(150) DEFAULT NULL,
  `pic` varchar(300) DEFAULT NULL,
  `content` mediumtext,
  `create_time` int(13) DEFAULT NULL,
  `top` int(2) DEFAULT '0',
  `sort` int(3) DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `aid` (`aid`,`acid`,`atitle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `wm_article`
--

INSERT INTO `wm_article` (`aid`, `acid`, `atitle`, `pic`, `content`, `create_time`, `top`, `sort`) VALUES
(39, 15, '可乐买一送一', NULL, '&lt;p&gt;买一送一了，快来抢购吧&lt;/p&gt;', 1403254362, 0, 0),
(40, 13, '第三篇文章', NULL, '&lt;p&gt;测试文章&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://www.wmwcom.com/Public/ueditor/php/../../uploads/pimg/20140621/1403359120107192.jpg&quot; title=&quot;0.jpg&quot;/&gt;&lt;/p&gt;', 1403359123, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wm_article_cat`
--

CREATE TABLE IF NOT EXISTS `wm_article_cat` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(80) DEFAULT NULL,
  `dir` char(20) DEFAULT NULL,
  `atop` int(2) DEFAULT '0',
  `sort` int(2) DEFAULT '0',
  `acreate_time` int(13) DEFAULT NULL,
  PRIMARY KEY (`acid`),
  KEY `acid` (`acid`,`aname`,`dir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `wm_article_cat`
--

INSERT INTO `wm_article_cat` (`acid`, `aname`, `dir`, `atop`, `sort`, `acreate_time`) VALUES
(13, '常见问题', 'question', 0, 0, 1396075063),
(15, '优惠活动', 'youhui', 0, 0, 1396081003);

-- --------------------------------------------------------

--
-- 表的结构 `wm_comment`
--

CREATE TABLE IF NOT EXISTS `wm_comment` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `shop_id` int(10) NOT NULL COMMENT '商家id',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `comment` varchar(50) NOT NULL COMMENT '评论内容',
  `star` int(2) NOT NULL DEFAULT '3' COMMENT '评分',
  `ctime` int(15) NOT NULL COMMENT '日期',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `wm_comment`
--

INSERT INTO `wm_comment` (`comment_id`, `shop_id`, `tel`, `comment`, `star`, `ctime`) VALUES
(1, 10, '13365393611', '很好吃 下次光顾', 5, 1406534143),
(2, 11, '18766997929', '送餐很及时，很喜欢过桥米线！', 4, 1406541284),
(3, 9, '18766997929', '宁宇盒饭不错，很好吃', 4, 1406594530),
(4, 15, '13365393611', '米饭量很多，下次还来', 5, 1406595164),
(5, 15, '13365393611', '这个歌二十四史', 5, 1406596926),
(6, 15, '13365393611', '再一次评论，谢谢分享', 4, 1406596998),
(7, 15, '18766997929', '呵呵呵呵呵', 3, 1406597284),
(8, 11, '13365393611', '这是默认评论内容', 3, 1406597409),
(9, 11, '13365393611', '请认真做好评论，谢谢', 3, 1406597529),
(10, 10, '13365393611', '炒鸡很好吃', 3, 1406601491),
(11, 10, '13365393611', '我在这里购物了，所以我能评论', 3, 1406602529),
(12, 11, '13365393611', '很好', 3, 1406602971),
(13, 11, '13365393611', '哈哈哈', 3, 1406603103),
(14, 11, '13365393611', '必须超过二个汉字', 5, 1406603128);

-- --------------------------------------------------------

--
-- 表的结构 `wm_config`
--

CREATE TABLE IF NOT EXISTS `wm_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `cate` int(3) DEFAULT '0' COMMENT '0为基本设置，1为支付设置，2登录设置,3店铺设置,4积分设置',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置说明',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `wm_config`
--

INSERT INTO `wm_config` (`id`, `cate`, `name`, `type`, `title`, `remark`, `status`, `value`, `sort`) VALUES
(2, 0, 'title', 1, '首页标题', '首页标题', 0, '订餐系统', 0),
(1, 0, 'name', 1, '网站名称', '网站名称或店铺名称', 0, '罗庄订餐系统', 0),
(3, 0, 'url', 1, '网站URL', '网站域名,不带/', 0, 'http://127.0.0.1', 0),
(4, 0, 'logo', 5, 'logo', 'logo上传', 0, '/templates/kfc/images/logo/logo.png', 0),
(5, 0, 'key', 1, '关键字', '网站SEO关键字', 0, '在线订餐', 0),
(6, 0, 'des', 2, '网站描述', '网站SEO描述', 0, '外卖订餐系统', 0),
(7, 0, 'tj', 1, '统计', '网站流量统计代码', 0, '百度统计', 0),
(12, 0, 'icp', 1, '网站备案号', '网站备案号', 0, 'ICP备19042558号\r\n\r\n', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wm_food`
--

CREATE TABLE IF NOT EXISTS `wm_food` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `fcid` int(10) DEFAULT NULL,
  `fname` char(90) DEFAULT NULL,
  `fprice` float(10,2) DEFAULT NULL,
  `fpic` char(200) DEFAULT NULL,
  `fsort` int(5) DEFAULT '0',
  `ftop` int(5) DEFAULT '0',
  `fctime` int(16) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `salecount` int(10) DEFAULT NULL,
  `farea` varchar(50) NOT NULL DEFAULT '0' COMMENT '地区',
  `fshop` int(10) NOT NULL COMMENT '所属商家',
  PRIMARY KEY (`fid`),
  KEY `fid` (`fid`,`fcid`,`fname`,`fprice`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- 转存表中的数据 `wm_food`
--

INSERT INTO `wm_food` (`fid`, `fcid`, `fname`, `fprice`, `fpic`, `fsort`, `ftop`, `fctime`, `status`, `salecount`, `farea`, `fshop`) VALUES
(87, 30, '红烧肉', 23.00, '/uploads/fimg/20140727/53d48f118aa86.jpg', 0, 0, 1406439185, 0, NULL, '1', 9),
(88, 30, '大碗米饭', 2.00, '/uploads/fimg/20140727/53d48fce80169.jpg', 0, 0, 1406439374, 0, NULL, '1', 9),
(89, 30, '西红柿炒鸡蛋', 10.00, '/uploads/fimg/20140727/53d49036a7187.jpg', 0, 0, 1406439478, 0, NULL, '1', 9),
(90, 30, '酸辣土豆丝', 8.00, '/uploads/fimg/20140727/53d490a03ae36.jpg', 0, 0, 1406439584, 0, NULL, '1', 9),
(91, 27, '红烧茄子', 15.00, '/uploads/fimg/20140727/53d4911b8acde.jpg', 0, 0, 1406439707, 0, NULL, '1', 9),
(92, 28, '麻辣小龙虾', 30.00, '/uploads/fimg/20140727/53d491cadf8df.jpg', 0, 0, 1406439883, 0, NULL, '1', 9),
(93, 27, '大盘鸡', 35.00, '/uploads/fimg/20140727/53d493c80bd63.jpg', 0, 0, 1406440392, 0, NULL, '1', 10),
(94, 27, '铁锅鲶鱼', 25.00, '/uploads/fimg/20140727/53d4966ed4f22.jpg', 0, 0, 1406441071, 0, NULL, '1', 10),
(95, 27, '宫保鸡丁', 16.00, '/uploads/fimg/20140727/53d496ac059ce.jpg', 0, 0, 1406441132, 0, NULL, '1', 10),
(96, 27, '豆角茄子', 10.00, '/uploads/fimg/20140727/53d496f37f1bd.jpg', 0, 0, 1406441203, 0, NULL, '1', 10),
(97, 29, '过桥米线', 12.00, '/uploads/fimg/20140727/53d497ab94751.jpg', 0, 0, 1406441387, 0, NULL, '1', 11),
(98, 29, '砂锅米线', 10.00, '/uploads/fimg/20140727/53d497e7f1eb0.jpg', 0, 0, 1406441448, 0, NULL, '1', 11);

-- --------------------------------------------------------

--
-- 表的结构 `wm_foodcat`
--

CREATE TABLE IF NOT EXISTS `wm_foodcat` (
  `fcid` int(10) NOT NULL AUTO_INCREMENT,
  `fcname` char(90) DEFAULT NULL,
  `fcsort` int(5) DEFAULT '0',
  `ctime` int(15) DEFAULT NULL,
  PRIMARY KEY (`fcid`),
  KEY `fcid` (`fcid`,`fcname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `wm_foodcat`
--

INSERT INTO `wm_foodcat` (`fcid`, `fcname`, `fcsort`, `ctime`) VALUES
(31, '蛋糕', 0, 1406436089),
(30, '快餐', 0, 1406436081),
(29, '小吃', 0, 1406436073),
(28, '西餐', 0, 1406436056),
(27, '中餐', 0, 1406436047);

-- --------------------------------------------------------

--
-- 表的结构 `wm_foodorder`
--

CREATE TABLE IF NOT EXISTS `wm_foodorder` (
  `oid` int(30) NOT NULL AUTO_INCREMENT,
  `orderprice` float(10,2) DEFAULT NULL,
  `ordercount` int(10) DEFAULT NULL,
  `shopspay` int(11) DEFAULT '0' COMMENT '配送费用',
  `shopname` char(100) DEFAULT NULL,
  `order_ctime` int(16) DEFAULT NULL,
  `order_endtime` int(16) DEFAULT NULL,
  `morecontent` char(200) DEFAULT NULL,
  `otel` char(80) DEFAULT NULL,
  `oman` char(100) DEFAULT NULL,
  `oaddress` char(200) DEFAULT NULL,
  `orderstatus` int(1) DEFAULT '1',
  PRIMARY KEY (`oid`),
  KEY `oid` (`oid`,`orderprice`,`ordercount`,`orderstatus`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 CHECKSUM=1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wm_foodorder`
--

INSERT INTO `wm_foodorder` (`oid`, `orderprice`, `ordercount`, `shopspay`, `shopname`, `order_ctime`, `order_endtime`, `morecontent`, `otel`, `oman`, `oaddress`, `orderstatus`) VALUES
(4, 8.00, 1, 0, NULL, 1406456623, NULL, NULL, '13365393611', '我没问', '山东临沂', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wm_foodorderext`
--

CREATE TABLE IF NOT EXISTS `wm_foodorderext` (
  `oid` bigint(30) DEFAULT NULL,
  `fid` int(6) DEFAULT NULL,
  `fname` char(100) DEFAULT NULL,
  `fprice` float(10,2) DEFAULT NULL,
  `fcount` int(10) DEFAULT NULL,
  `prices` float(10,2) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wm_foodorderext`
--

INSERT INTO `wm_foodorderext` (`oid`, `fid`, `fname`, `fprice`, `fcount`, `prices`, `status`) VALUES
(1, 79, '1.25升装百事可乐', 12.00, 2, 24.00, 0),
(2, 79, '1.25升装百事可乐', 12.00, 1, 12.00, 0),
(3, 81, '土豆泥', 6.00, 1, 6.00, 0),
(4, 90, '酸辣土豆丝', 8.00, 1, 8.00, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wm_link`
--

CREATE TABLE IF NOT EXISTS `wm_link` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(1) DEFAULT '0',
  `linkname` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `top` int(2) DEFAULT '0',
  `create_time` int(15) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `wm_link`
--

INSERT INTO `wm_link` (`lid`, `type`, `linkname`, `link`, `top`, `create_time`) VALUES
(12, 0, '民伟网络', 'http://www.wangminwei.com', 0, 1403245820),
(13, 0, '在线订餐', 'http://www.wmwcom.com', 0, 1403245836);

-- --------------------------------------------------------

--
-- 表的结构 `wm_members`
--

CREATE TABLE IF NOT EXISTS `wm_members` (
  `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(60) NOT NULL,
  `userpass` char(90) NOT NULL DEFAULT '',
  `usergroup` int(8) DEFAULT '0',
  `last_login_ip` varchar(16) NOT NULL,
  `last_login_time` int(15) DEFAULT NULL,
  `create_time` int(15) DEFAULT NULL,
  `userlevel` varchar(60) NOT NULL DEFAULT '0',
  `userstatus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `wm_members`
--

INSERT INTO `wm_members` (`uid`, `username`, `userpass`, `usergroup`, `last_login_ip`, `last_login_time`, `create_time`, `userlevel`, `userstatus`) VALUES
(2, 'admin888', '7fef6171469e80d32c0559f88b377245', 0, '127.0.0.1', 1406435901, 1406446098, '99', 0),
(1, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'www.wmwcom.com', 2014, 0, '99', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wm_pages`
--

CREATE TABLE IF NOT EXISTS `wm_pages` (
  `pagid` int(11) NOT NULL AUTO_INCREMENT,
  `page_fid` int(11) DEFAULT '0',
  `pagedir` char(30) DEFAULT NULL,
  `page_title` varchar(150) DEFAULT NULL,
  `page_content` mediumtext,
  `pic` varchar(300) DEFAULT NULL,
  `pic2` varchar(300) DEFAULT NULL,
  `pic3` varchar(300) DEFAULT NULL,
  `pic4` varchar(300) DEFAULT NULL,
  `sort` int(2) DEFAULT '0',
  `create_time` int(13) DEFAULT NULL,
  `page_top` int(1) DEFAULT '0',
  PRIMARY KEY (`pagid`),
  KEY `pagid` (`pagid`,`pagedir`,`page_title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `wm_pages`
--

INSERT INTO `wm_pages` (`pagid`, `page_fid`, `pagedir`, `page_title`, `page_content`, `pic`, `pic2`, `pic3`, `pic4`, `sort`, `create_time`, `page_top`) VALUES
(11, 0, 'about', '关于我们', '&lt;p&gt;关于我们&lt;/p&gt;', '', '', '', '', 0, 1406467698, 0),
(12, 0, 'add', '加入我们', '&lt;p&gt;fdsf&lt;/p&gt;', '', '', '', '', 0, 1396074928, 0),
(13, 0, 'yins', '隐私条款', '&lt;p&gt;隐私条款&lt;/p&gt;', '', '', '', '', 0, 1406467721, 0),
(14, 0, 'law', '法律条款', '&lt;p&gt;法律条款&lt;/p&gt;', '', '', '', '', 0, 1406467661, 0),
(15, 0, 'pays', '支付方式', '&lt;p&gt;支付方式内容编辑　&lt;/p&gt;', '', '', '', '', 0, 1397633115, 0),
(16, 0, 'sess', '服务费用', '&lt;p&gt;服务费用&lt;/p&gt;', '', '', '', '', 0, 1397633186, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wm_shop`
--

CREATE TABLE IF NOT EXISTS `wm_shop` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `semail` varchar(20) NOT NULL,
  `sphone` varchar(20) NOT NULL,
  `sprice` float(10,2) NOT NULL,
  `spic` char(200) NOT NULL,
  `scontent` varchar(100) NOT NULL,
  `sarea` int(10) NOT NULL,
  `scid` int(10) NOT NULL,
  `stime` int(16) NOT NULL,
  `ssort` int(5) NOT NULL,
  `stop` int(5) NOT NULL,
  `sstatus` int(1) NOT NULL DEFAULT '0',
  `opentime` int(16) NOT NULL COMMENT '营业时间',
  `closetime` int(16) NOT NULL COMMENT '打烊时间',
  `sdizhi` varchar(50) NOT NULL COMMENT '地址',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `wm_shop`
--

INSERT INTO `wm_shop` (`sid`, `sname`, `semail`, `sphone`, `sprice`, `spic`, `scontent`, `sarea`, `scid`, `stime`, `ssort`, `stop`, `sstatus`, `opentime`, `closetime`, `sdizhi`) VALUES
(9, '宁宇盒饭', '1207491516@qq.com', '13365393611', 15.00, '/uploads/logo/20140727/53d4840aa956e.jpg', '快速定盒饭，种类齐全。', 1, 30, 1406469708, 99, 0, 0, 10, 14, '罗一路南30米'),
(10, '如意小炒鸡店', '1207491516@qq.com', '13365393611', 20.00, '/uploads/logo/20140727/53d493226c8ea.jpg', '炒菜类品种丰富，味美价廉，欢迎品尝', 1, 27, 1406469464, 99, 0, 0, 9, 20, '罗一路与罗二路交汇处'),
(11, '罐罐香米线', '1207491516@qq.com', '13365393611', 8.00, '/uploads/logo/20140727/53d497661cfb0.jpg', '友情提示:就餐高峰期，由于订单较多，为了确保您的就餐时间。请提前30分钟下单，谢谢理解与配合。', 1, 28, 1406470758, 99, 0, 0, 8, 15, '罗一路与罗二路交汇处'),
(12, '大小爱吃盒饭', '1207491516@qq.com', '13365393611', 10.00, '/uploads/logo/20140727/53d4ba9bbe855.jpg', '大小爱吃盖饭温馨提示-请提前定餐', 1, 30, 1406450332, 0, 0, 0, 0, 0, ''),
(13, '东北大盒饭', '1207491516@qq.com', '13365393611', 15.00, '/uploads/logo/20140727/53d4bb6dcdabb.jpg', '东北大盒饭，量大，经济实惠，好吃不贵', 1, 30, 1406450542, 0, 0, 0, 0, 0, ''),
(14, '重庆鸡公煲', '1207491516@qq.com', '13365393611', 30.00, '/uploads/logo/20140727/53d4bbe70ca06.jpg', '重庆鸡公煲，经济实惠，美味可口，老少皆宜，欢迎捧场', 1, 31, 1406470734, 0, 0, 0, 8, 17, '罗一路北20米'),
(15, '黄焖鸡米饭', '1207491516@qq.com', '13365393611', 16.00, '/uploads/logo/20140727/53d50085b1e7d.jpg', '一级棒黄焖鸡米饭', 1, 28, 1406468230, 99, 0, 0, 7, 23, ''),
(16, '成都美食', '1207491516@qq.com', '13365393611', 15.00, '/uploads/logo/20140727/53d5020f721bf.jpg', '四川风味，欢迎捧场', 1, 30, 1406469242, 0, 0, 0, 0, 0, '罗一路北20米'),
(17, '百步香鸡架饭', '1207491516@qq.com', '13365393611', 15.00, '/uploads/logo/20140728/53d5af59effb4.jpg', '暑假正常营业，欢迎新老客户光临', 2, 29, 1406512986, 0, 0, 0, 7, 18, '罗二路北20米'),
(18, '鸡蛋灌饼', '1207491516@qq.com', '13365393611', 5.00, '/uploads/logo/20140728/53d5b763eec54.jpg', '鸡蛋灌饼，营养美味，仅供早餐', 2, 29, 1406515044, 0, 0, 0, 5, 9, '罗一路北20米');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
