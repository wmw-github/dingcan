-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 27 日 11:48
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
  `a_id` int(11) NOT NULL AUTO_INCREMENT,	//地区id
  `a_name` varchar(50) NOT NULL,	//地区名
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;



--
-- 表的结构 `wm_article`
--

CREATE TABLE IF NOT EXISTS `wm_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,	//文章id
  `acid` int(11) DEFAULT NULL,	//文章分类id
  `atitle` varchar(150) DEFAULT NULL,	//文章名
  `pic` varchar(300) DEFAULT NULL,		//图片
  `content` mediumtext,		//文章内容
  `create_time` int(13) DEFAULT NULL, //创建时间
  `top` int(2) DEFAULT '0',		//是否置顶
  `sort` int(3) DEFAULT '0',	//排序
  PRIMARY KEY (`aid`),
  KEY `aid` (`aid`,`acid`,`atitle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;



--
-- 表的结构 `wm_article_cat`
--

CREATE TABLE IF NOT EXISTS `wm_article_cat` (
  `acid` int(11) NOT NULL AUTO_INCREMENT, //分类id
  `aname` varchar(80) DEFAULT NULL, //分类名
  `dir` char(20) DEFAULT NULL,	//目录
  `sort` int(2) DEFAULT '0',  //排序
  PRIMARY KEY (`acid`),
  KEY `acid` (`acid`,`afid`,`aname`,`dir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;



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
-- 表的结构 `wm_food`
--

CREATE TABLE IF NOT EXISTS `wm_food` (
  `fid` int(10) NOT NULL AUTO_INCREMENT, //美食id
  `fcid` int(10) DEFAULT NULL,	//美食分类id
  `fname` char(90) DEFAULT NULL,	//美食名
  `fprice` float(10,2) DEFAULT NULL,	//价格
  `fpic` char(200) DEFAULT NULL,	//图片
  `fsort` int(5) DEFAULT '0',	//排序
  `ftop` int(5) DEFAULT '0',	//置顶
  `fctime` int(16) DEFAULT NULL,	//创建时间
  `status` int(1) DEFAULT '0',  //状态
  `salecount` int(10) DEFAULT NULL, //销售统计
  `farea` varchar(50) NOT NULL DEFAULT '0' COMMENT '地区', 
  `fshop` int(10) NOT NULL COMMENT '所属商家',
  PRIMARY KEY (`fid`),
  KEY `fid` (`fid`,`fcid`,`fnum`,`fname`,`fprice`,`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;



--
-- 表的结构 `wm_foodcat`
--

CREATE TABLE IF NOT EXISTS `wm_foodcat` (
  `fcid` int(10) NOT NULL AUTO_INCREMENT,  //分类id
  `fcname` char(90) DEFAULT NULL,  //分类名
  `fcsort` int(5) DEFAULT '0',	//排序
  PRIMARY KEY (`fcid`),
  KEY `fcid` (`fcid`,`fcname`,`fpid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;



--
-- 表的结构 `wm_foodorder`
--

CREATE TABLE IF NOT EXISTS `wm_foodorder` (
  `oid` int(30) NOT NULL AUTO_INCREMENT,	//订单号
  `orderprice` float(10,2) DEFAULT NULL,	//总计
  `ordercount` int(10) DEFAULT NULL,	//订单统计
  `shopspay` int(11) DEFAULT '0' COMMENT '配送费用',
  `shopname` char(100) DEFAULT NULL, //商家名
  `order_ctime` int(16) DEFAULT NULL, //下单时间
  `order_endtime` int(16) DEFAULT NULL, //结束时间
  `morecontent` char(200) DEFAULT NULL, //备注
  `otel` char(80) DEFAULT NULL,	//电话
  `oman` char(100) DEFAULT NULL, //订单人
  `oaddress` char(200) DEFAULT NULL,	//地址
  `orderstatus` int(1) DEFAULT '1',	//状态
  PRIMARY KEY (`oid`),
  KEY `oid` (`oid`,`orderprice`,`ordercount`,`orderstatus`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 CHECKSUM=1 AUTO_INCREMENT=5 ;


--
-- 表的结构 `wm_foodorderext`
--

CREATE TABLE IF NOT EXISTS `wm_foodorderext` (
  `oid` bigint(30) DEFAULT NULL, //订单号
  `fid` int(6) DEFAULT NULL, //菜品id
  `fname` char(100) DEFAULT NULL,	//菜名
  `fprice` float(10,2) DEFAULT NULL,  //单价
  `fcount` int(10) DEFAULT NULL,  //点菜个数
  `prices` float(10,2) DEFAULT NULL, //总价
  `status` int(1) DEFAULT '0', //状态
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



--
-- 表的结构 `wm_link`
--

CREATE TABLE IF NOT EXISTS `wm_link` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,  //链接id
  `type` int(1) DEFAULT '0',	//类型
  `linkname` varchar(200) DEFAULT NULL,  //名字
  `link` varchar(300) DEFAULT NULL,  //超链接
  `top` int(2) DEFAULT '0',   //置顶
  `create_time` int(15) DEFAULT NULL,   //创建时间
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;



--
-- 表的结构 `wm_members`
--

CREATE TABLE IF NOT EXISTS `wm_members` (
  `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  //id
  `username` char(60) NOT NULL,  //管理员名
  `userpass` char(90) NOT NULL DEFAULT '',  //密码
  `usergroup` int(8) DEFAULT '0',  //管理组
  `last_login_ip` varchar(16) NOT NULL,  //ip
  `last_login_time` int(15) DEFAULT NULL,  //登录时间
  `create_time` int(15) DEFAULT NULL,  //创建时间
  `userlevel` varchar(60) NOT NULL DEFAULT '0',  //等级
  `userstatus` int(11) NOT NULL DEFAULT '0',  //状态
  PRIMARY KEY (`uid`),
  KEY `user_nicename` (`nickname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;


--
-- 表的结构 `wm_pages`
--

CREATE TABLE IF NOT EXISTS `wm_pages` (
  `pagid` int(11) NOT NULL AUTO_INCREMENT,   //单页id
  `page_fid` int(11) DEFAULT '0',  //分类id
  `pagedir` char(30) DEFAULT NULL,  //目录
  `page_title` varchar(150) DEFAULT NULL,  //标题
  `pic` varchar(300) DEFAULT NULL,  //图片
  `pic2` varchar(300) DEFAULT NULL,
  `pic3` varchar(300) DEFAULT NULL,
  `pic4` varchar(300) DEFAULT NULL,
  `sort` int(2) DEFAULT '0',  //排序
  `create_time` int(13) DEFAULT NULL,  //时间
  `page_top` int(1) DEFAULT '0',  //置顶
  PRIMARY KEY (`pagid`),
  KEY `pagid` (`pagid`,`pagedir`,`page_title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;



--
-- 表的结构 `wm_shop`
--

CREATE TABLE IF NOT EXISTS `wm_shop` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,  //商家id
  `sname` varchar(50) NOT NULL,  //商家名
  `semail` varchar(20) NOT NULL,  //邮箱
  `sphone` varchar(20) NOT NULL,  //电话
  `sprice` float(10,2) NOT NULL,  //人均消费
  `spic` char(200) NOT NULL,  //logo
  `scontent` varchar(100) NOT NULL,  //内容
  `sarea` int(10) NOT NULL,  //地区
  `scid` int(10) NOT NULL,  //口味
  `stime` int(16) NOT NULL,  //创建时间
  `ssort` int(5) NOT NULL,  //排序
  `stop` int(5) NOT NULL,   //置顶
  `sstatus` int(1) NOT NULL DEFAULT '0',  //状态
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;
