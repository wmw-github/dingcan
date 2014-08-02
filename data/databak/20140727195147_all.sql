-- MySQL database dump

-- Created by DBAction class, Power By TaoTao. 

-- http://blog.kisscn.com 

--

-- 主机: 

-- 生成日期: 2014 年  07 月 27 日 19:51

-- MySQL版本: 5.6.12-log

-- PHP 版本: 5.4.16



--

-- 数据库: `waimai`

--

-- -------------------------------------------------------



--

-- 表的结构wm_area

--

DROP TABLE IF EXISTS `wm_area`;

CREATE TABLE `wm_area` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_area

--



INSERT INTO `wm_area` VALUES('1','罗一路');

INSERT INTO `wm_area` VALUES('2','罗二路');

INSERT INTO `wm_area` VALUES('3','罗三路');

INSERT INTO `wm_area` VALUES('4','罗四路');

--

-- 表的结构wm_article

--

DROP TABLE IF EXISTS `wm_article`;

CREATE TABLE `wm_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `acid` int(11) DEFAULT NULL,
  `atitle` varchar(150) DEFAULT NULL,
  `pic` varchar(300) DEFAULT NULL,
  `alink` varchar(300) DEFAULT NULL,
  `content` mediumtext,
  `create_time` int(13) DEFAULT NULL,
  `top` int(2) DEFAULT '0',
  `sort` int(3) DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `aid` (`aid`,`acid`,`atitle`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_article

--



INSERT INTO `wm_article` VALUES('39','15','可乐买一送一','','','&lt;p&gt;买一送一了，快来抢购吧&lt;/p&gt;','1403254362','0','0');

INSERT INTO `wm_article` VALUES('40','13','第三篇文章','','','&lt;p&gt;测试文章&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://www.wmwcom.com/Public/ueditor/php/../../uploads/pimg/20140621/1403359120107192.jpg&quot; title=&quot;0.jpg&quot;/&gt;&lt;/p&gt;','1403359123','0','0');

--

-- 表的结构wm_article_cat

--

DROP TABLE IF EXISTS `wm_article_cat`;

CREATE TABLE `wm_article_cat` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `afid` int(11) DEFAULT NULL,
  `aname` varchar(80) DEFAULT NULL,
  `dir` char(20) DEFAULT NULL,
  `atop` int(2) DEFAULT '0',
  `apic` varchar(300) DEFAULT NULL,
  `wap` int(2) DEFAULT '0',
  `sort` int(2) DEFAULT '0',
  `keyword` char(200) DEFAULT NULL,
  `ades` char(200) DEFAULT NULL,
  `acreate_time` int(13) DEFAULT NULL,
  `ispic` int(2) DEFAULT '0',
  PRIMARY KEY (`acid`),
  KEY `acid` (`acid`,`afid`,`aname`,`dir`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_article_cat

--



INSERT INTO `wm_article_cat` VALUES('13','0','常见问题','question','0','','0','0','','','1396075063','0');

INSERT INTO `wm_article_cat` VALUES('15','0','优惠活动','youhui','0','','0','0','','','1396081003','0');

--

-- 表的结构wm_config

--

DROP TABLE IF EXISTS `wm_config`;

CREATE TABLE `wm_config` (
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_config

--



INSERT INTO `wm_config` VALUES('2','0','title','1','首页标题','首页标题','0','订餐系统','0');

INSERT INTO `wm_config` VALUES('1','0','name','1','网站名称','网站名称或店铺名称','0','罗庄订餐系统','0');

INSERT INTO `wm_config` VALUES('3','0','url','1','网站URL','网站域名,不带/','0','http://127.0.0.1','0');

INSERT INTO `wm_config` VALUES('4','0','logo','5','logo','logo上传','0','/templates/kfc/images/logo/logo.png','0');

INSERT INTO `wm_config` VALUES('5','0','key','1','关键字','网站SEO关键字','0','在线订餐','0');

INSERT INTO `wm_config` VALUES('6','0','des','2','网站描述','网站SEO描述','0','外卖订餐系统','0');

INSERT INTO `wm_config` VALUES('7','0','tj','1','统计','网站流量统计代码','0','百度统计','0');

INSERT INTO `wm_config` VALUES('12','0','icp','1','网站备案号','网站备案号','0','ICP备19042558号\r\n\r\n','0');

--

-- 表的结构wm_food

--

DROP TABLE IF EXISTS `wm_food`;

CREATE TABLE `wm_food` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `fcid` int(10) DEFAULT NULL,
  `fnum` int(10) DEFAULT NULL,
  `fname` char(90) DEFAULT NULL,
  `ftitle` char(150) DEFAULT NULL,
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
  KEY `fid` (`fid`,`fcid`,`fnum`,`fname`,`fprice`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_food

--



INSERT INTO `wm_food` VALUES('87','30','','红烧肉','','23.00','/uploads/fimg/20140727/53d48f118aa86.jpg','0','0','1406439185','0','','1','9');

INSERT INTO `wm_food` VALUES('88','30','','大碗米饭','','2.00','/uploads/fimg/20140727/53d48fce80169.jpg','0','0','1406439374','0','','1','9');

INSERT INTO `wm_food` VALUES('89','30','','西红柿炒鸡蛋','','10.00','/uploads/fimg/20140727/53d49036a7187.jpg','0','0','1406439478','0','','1','9');

INSERT INTO `wm_food` VALUES('90','30','','酸辣土豆丝','','8.00','/uploads/fimg/20140727/53d490a03ae36.jpg','0','0','1406439584','0','','1','9');

INSERT INTO `wm_food` VALUES('91','27','','红烧茄子','','15.00','/uploads/fimg/20140727/53d4911b8acde.jpg','0','0','1406439707','0','','1','9');

INSERT INTO `wm_food` VALUES('92','28','','麻辣小龙虾','','30.00','/uploads/fimg/20140727/53d491cadf8df.jpg','0','0','1406439883','0','','1','9');

INSERT INTO `wm_food` VALUES('93','27','','大盘鸡','','35.00','/uploads/fimg/20140727/53d493c80bd63.jpg','0','0','1406440392','0','','1','10');

INSERT INTO `wm_food` VALUES('94','27','','铁锅鲶鱼','','25.00','/uploads/fimg/20140727/53d4966ed4f22.jpg','0','0','1406441071','0','','1','10');

INSERT INTO `wm_food` VALUES('95','27','','宫保鸡丁','','16.00','/uploads/fimg/20140727/53d496ac059ce.jpg','0','0','1406441132','0','','1','10');

INSERT INTO `wm_food` VALUES('96','27','','豆角茄子','','10.00','/uploads/fimg/20140727/53d496f37f1bd.jpg','0','0','1406441203','0','','1','10');

INSERT INTO `wm_food` VALUES('97','29','','过桥米线','','12.00','/uploads/fimg/20140727/53d497ab94751.jpg','0','0','1406441387','0','','1','11');

INSERT INTO `wm_food` VALUES('98','29','','砂锅米线','','10.00','/uploads/fimg/20140727/53d497e7f1eb0.jpg','0','0','1406441448','0','','1','11');

--

-- 表的结构wm_foodcat

--

DROP TABLE IF EXISTS `wm_foodcat`;

CREATE TABLE `wm_foodcat` (
  `fcid` int(10) NOT NULL AUTO_INCREMENT,
  `fcname` char(90) DEFAULT NULL,
  `fpid` int(15) DEFAULT '0',
  `fcsort` int(5) DEFAULT '0',
  `fctop` int(5) DEFAULT '0',
  `ctime` int(15) DEFAULT NULL,
  `sid` int(10) DEFAULT NULL,
  `fcount` int(5) DEFAULT NULL,
  PRIMARY KEY (`fcid`),
  KEY `fcid` (`fcid`,`fcname`,`fpid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_foodcat

--



INSERT INTO `wm_foodcat` VALUES('31','蛋糕','0','0','0','1406436089','','');

INSERT INTO `wm_foodcat` VALUES('30','快餐','0','0','0','1406436081','','');

INSERT INTO `wm_foodcat` VALUES('29','小吃','0','0','0','1406436073','','');

INSERT INTO `wm_foodcat` VALUES('28','西餐','0','0','0','1406436056','','');

INSERT INTO `wm_foodcat` VALUES('27','中餐','0','0','0','1406436047','','');

--

-- 表的结构wm_foodorder

--

DROP TABLE IF EXISTS `wm_foodorder`;

CREATE TABLE `wm_foodorder` (
  `oid` int(30) NOT NULL AUTO_INCREMENT,
  `orderprice` float(10,2) DEFAULT NULL,
  `ordercount` int(10) DEFAULT NULL,
  `pay` float(10,2) DEFAULT NULL,
  `ucount` int(10) DEFAULT '0',
  `uid` int(15) DEFAULT NULL,
  `uname` char(60) DEFAULT NULL,
  `pid` char(100) DEFAULT NULL,
  `shopspay` int(11) DEFAULT '0' COMMENT '配送费用',
  `shopname` char(100) DEFAULT NULL,
  `gid` char(90) DEFAULT NULL,
  `order_ctime` int(16) DEFAULT NULL,
  `order_endtime` int(16) DEFAULT NULL,
  `print_time` int(16) DEFAULT NULL,
  `print_name` char(100) DEFAULT NULL,
  `morecontent` char(200) DEFAULT NULL,
  `otel` char(80) DEFAULT NULL,
  `oman` char(100) DEFAULT NULL,
  `oaddress` char(200) DEFAULT NULL,
  `orderstatus` int(1) DEFAULT '1',
  `ordersource` char(40) DEFAULT NULL,
  `couponid` int(30) DEFAULT '0',
  PRIMARY KEY (`oid`),
  KEY `oid` (`oid`,`orderprice`,`ordercount`,`orderstatus`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 CHECKSUM=1;



--

-- 转存表中的数据 wm_foodorder

--



INSERT INTO `wm_foodorder` VALUES('4','8.00','1','','0','','','','0','','','1406456623','','','','','13365393611','我没问','山东临沂','1','','0');

--

-- 表的结构wm_foodorderext

--

DROP TABLE IF EXISTS `wm_foodorderext`;

CREATE TABLE `wm_foodorderext` (
  `oid` bigint(30) DEFAULT NULL,
  `did` int(6) DEFAULT NULL,
  `fid` int(6) DEFAULT NULL,
  `fname` char(100) DEFAULT NULL,
  `fcid` int(15) DEFAULT NULL,
  `fcname` char(100) DEFAULT NULL,
  `fprice` float(10,2) DEFAULT NULL,
  `fcount` int(10) DEFAULT NULL,
  `prices` float(10,2) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `gid` char(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_foodorderext

--



INSERT INTO `wm_foodorderext` VALUES('1','','79','1.25升装百事可乐','','','12.00','2','24.00','0','');

INSERT INTO `wm_foodorderext` VALUES('2','','79','1.25升装百事可乐','','','12.00','1','12.00','0','');

INSERT INTO `wm_foodorderext` VALUES('3','','81','土豆泥','','','6.00','1','6.00','0','');

INSERT INTO `wm_foodorderext` VALUES('4','','90','酸辣土豆丝','','','8.00','1','8.00','0','');

--

-- 表的结构wm_link

--

DROP TABLE IF EXISTS `wm_link`;

CREATE TABLE `wm_link` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `type` int(1) DEFAULT '0',
  `linkname` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `top` int(2) DEFAULT '0',
  `create_time` int(15) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



--

-- 转存表中的数据 wm_link

--



INSERT INTO `wm_link` VALUES('12','0','民伟网络','http://www.wangminwei.com','0','1403245820');

INSERT INTO `wm_link` VALUES('13','0','在线订餐','http://www.wmwcom.com','0','1403245836');

--

-- 表的结构wm_members

--

DROP TABLE IF EXISTS `wm_members`;

CREATE TABLE `wm_members` (
  `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(60) NOT NULL,
  `userpass` char(90) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL,
  `useremail` varchar(100) NOT NULL DEFAULT '',
  `usertel` int(15) DEFAULT '0',
  `nickname` varchar(50) DEFAULT NULL,
  `userqq` int(15) NOT NULL,
  `usersex` int(3) DEFAULT NULL,
  `usergroup` int(8) DEFAULT '0',
  `last_login_ip` varchar(16) NOT NULL,
  `last_login_time` int(15) DEFAULT NULL,
  `create_time` int(15) DEFAULT NULL,
  `userlevel` varchar(60) NOT NULL DEFAULT '0',
  `userpoint` smallint(6) DEFAULT '0',
  `userstatus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `user_nicename` (`nickname`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_members

--



INSERT INTO `wm_members` VALUES('2','admin888','7fef6171469e80d32c0559f88b377245','','','0','','0','','0','127.0.0.1','1406435901','1406446098','99','0','0');

INSERT INTO `wm_members` VALUES('1','','d41d8cd98f00b204e9800998ecf8427e','','','0','','0','1','0','www.wmwcom.com','2014','0','99','0','0');

--

-- 表的结构wm_pages

--

DROP TABLE IF EXISTS `wm_pages`;

CREATE TABLE `wm_pages` (
  `pagid` int(11) NOT NULL AUTO_INCREMENT,
  `page_fid` int(11) DEFAULT '0',
  `pagedir` char(30) DEFAULT NULL,
  `page_title` varchar(150) DEFAULT NULL,
  `page_content` mediumtext,
  `page_header` varchar(1000) DEFAULT NULL,
  `page_footer` varchar(1000) DEFAULT NULL,
  `page_key` char(100) DEFAULT NULL,
  `page_des` char(200) DEFAULT NULL,
  `pic` varchar(300) DEFAULT NULL,
  `pic2` varchar(300) DEFAULT NULL,
  `pic3` varchar(300) DEFAULT NULL,
  `pic4` varchar(300) DEFAULT NULL,
  `sort` int(2) DEFAULT '0',
  `create_time` int(13) DEFAULT NULL,
  `page_top` int(1) DEFAULT '0',
  PRIMARY KEY (`pagid`),
  KEY `pagid` (`pagid`,`pagedir`,`page_title`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_pages

--



INSERT INTO `wm_pages` VALUES('11','0','about','关于我们','&lt;p&gt;fdsfdfdsfdfdfd&lt;/p&gt;','','','','','','','','','0','1396074870','0');

INSERT INTO `wm_pages` VALUES('12','0','add','加入我们','&lt;p&gt;fdsf&lt;/p&gt;','','','','','','','','','0','1396074928','0');

INSERT INTO `wm_pages` VALUES('13','0','yins','隐私条款','&lt;p&gt;fdsfdfdyyyy&lt;/p&gt;','','','','','','','','','0','1396087696','0');

INSERT INTO `wm_pages` VALUES('14','0','law','法律条款','&lt;p&gt;欢迎您使用肯德基宅急送网络订餐服务，包括但不限于通过肯德基宅急送互联网订餐网站，肯德基宅急送手机App订餐客户端，以及肯德基宅急送基于互联网或手机上网功能开发的其他订餐平台（如肯德基宅急送移动互联网订餐网站），提供的服务（以下简称“我们的服务”）。请仔细阅读本法律条款。您使用我们的服务即表示您已同意本条款。我们的服务范围可能会拓展，因此有时还会适用一些附加条款或要求。附加条款将会与相关服务一同提供，并且在您使用这些服务后，成为您与我们所达成的协议的一部分。本法律条款适用于您当前及未来使用的我们的服务。&lt;/p&gt;&lt;p&gt;&lt;strong class=&quot;ersee-lp-subtitle-bottom&quot;&gt;&lt;/strong&gt;&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;我们的服务中所涉及的商标、服务标志、设计、文字或图案及相关知识产权等均属百胜咨询（上海）有限公司或其关联公司（以下简称：百胜公司）所有、或已取得所有人的正式授权，受法律保护，在未取得百胜公司或有关第三方书面授权之前，任何人不得擅自使用，包括但不限于复制、复印、修改、出版、公布、传送、分发我们的服务中使用的文本、图象、影音、镜像等内容，否则将承担相应法律责任。使用我们的服务并不让您拥有我们的服务或您所访问的内容的任何知识产权。本条款并未授予您使用我们的服务中所用的任何商标、标志、设计、文字等的权利。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;我们在提供服务时将会尽到商业上合理水平的技能和注意义务，希望您会喜欢我们的服务，但有些关于服务的事项恕我们无法作出承诺。因此，在法律允许的范围内，我们的服务对信息的准确性和及时性不给予任何明示或默示的保证。我们的服务不承担因您进入或使用我们的服务而导致的任何直接的、间接的、意外的、因果性的损害责任。请使用合法软件和设备。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;您在使用我们的服务时，可以自愿选择是否提交个人信息资料。如果您提交个人信息，即表示您接受我们的服务隐私权条款，我们的服务对于您的个人信息和隐私权予以尊重和保密。您在使用我们的服务时传送的任何其他资料、信息，包括但不限于意见、客户反馈、喜好、建议、支持、请求、问题等内容，将被当作非保密资料和非专有资料处理；您的传送行为即表示您同意这些资料用作我们的调查、统计等目的而由我们无偿使用。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;当您在使用我们的服务时，某些信息可以通过各种技术和方法不经您主动提供而被收集，这些方法包括IP地址、Cookies，设备信息，日志数据收集等。这些信息不足以使他人辨认您个人的身份，收集上述信息的目的旨在为您提供更完善的服务。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;您在使用我们的服务时不得传送和发放带有中伤、诽谤、造谣、色情及其他违法或不道德的资料和言论，我们有权对此进行管理和监督，但并不对您的上述行为承担任何责任。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;我们的服务无意向18岁以下未成年人提供网络订餐服务或收集个人信息，家长或监护人应承担未成年人在网络环境下的隐私权的首要责任。请家长或监护人对其子女或被监护人使用我们的服务进行监管和负责。由于我们的服务无法辨认用户是否为未成年人，因此如有未成年人使用我们的服务，则表示其已获得家长或监护人认可，任何相关后果由其家长或监护人承担。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;如果我们的服务提供了第三方网站链接，仅仅是为了向您提供便利。如果您使用这些链接，您将离开本站。我们无法评估此类第三方网站，也不对任何此类第三方网站或这些网站提供的产品、服务或内容负责。因此，对于此类第三方网站，或此类网站上提供的任何信息、软件、产品、服务或材料，或使用这些网站可能得到的任何结果，您需自行评估及承担使用风险。&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;我们可以修改本条款或相关条款并会予以更新和公布，所有修改的适用不具有追溯力。但是，对服务新功能的特别修改或由于法律原因所作的修改将立即生效。如果您不同意服务的修改条款，应停止使用我们的服务。&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;','','','','','','','','','0','1396074998','0');

INSERT INTO `wm_pages` VALUES('15','0','pays','支付方式','&lt;p&gt;支付方式内容编辑　&lt;/p&gt;','','','','','','','','','0','1397633115','0');

INSERT INTO `wm_pages` VALUES('16','0','sess','服务费用','&lt;p&gt;服务费用&lt;/p&gt;','','','','','','','','','0','1397633186','0');

--

-- 表的结构wm_shop

--

DROP TABLE IF EXISTS `wm_shop`;

CREATE TABLE `wm_shop` (
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
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 wm_shop

--



INSERT INTO `wm_shop` VALUES('9','宁宇盒饭','1207491516@qq.com','2147483647','15.00','/uploads/logo/20140727/53d4840aa956e.jpg','快速定盒饭，种类齐全。','1','31','1406456262','99','0','0');

INSERT INTO `wm_shop` VALUES('10','如意小炒鸡店','1207491516@qq.com','13365393611','20.00','/uploads/logo/20140727/53d493226c8ea.jpg','炒菜类品种丰富，味美价廉，欢迎品尝','1','27','1406440226','0','0','0');

INSERT INTO `wm_shop` VALUES('11','罐罐香米线','1207491516@qq.com','13365393611','8.00','/uploads/logo/20140727/53d497661cfb0.jpg','友情提示:就餐高峰期，由于订单较多，为了确保您的就餐时间。请提前30分钟下单，谢谢理解与配合。','1','29','1406441318','0','0','0');

INSERT INTO `wm_shop` VALUES('12','大小爱吃盒饭','1207491516@qq.com','13365393611','10.00','/uploads/logo/20140727/53d4ba9bbe855.jpg','大小爱吃盖饭温馨提示-请提前定餐','1','30','1406450332','0','0','0');

INSERT INTO `wm_shop` VALUES('13','东北大盒饭','1207491516@qq.com','13365393611','15.00','/uploads/logo/20140727/53d4bb6dcdabb.jpg','东北大盒饭，量大，经济实惠，好吃不贵','1','30','1406450542','0','0','0');

INSERT INTO `wm_shop` VALUES('14','重庆鸡公煲','1207491516@qq.com','13365393611','30.00','/uploads/logo/20140727/53d4bbe70ca06.jpg','重庆鸡公煲，经济实惠，美味可口，老少皆宜，欢迎捧场','1','27','1406450663','99','0','0');

