-- create tables

create table user (
  `username` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `stuid` int(10) NOT NULL primary key,
  `password` varchar(32) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `academy` varchar(15) NOT NULL,
  `wechat` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `avatar` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

CREATE TABLE `item` (
  `itemid` int(10) NOT NULL primary key,
  `stuid` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `type` varchar(6) NOT NULL,
  `status` int(1) NOT NULL,
  `price` int(4) NOT NULL,
  `deposit` int(4) NOT NULL,
  `description` text,
  `photo1` varchar(22) NOT NULL,
  `photo2` varchar(22) DEFAULT NULL,
  `photo3` varchar(22) DEFAULT NULL,
  `photo4` varchar(22) DEFAULT NULL,
  foreign key(stuid) references user(stuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='物品表';

CREATE TABLE `record` (
  `recordid` int(10) NOT NULL primary key,
  `itemid` int(10) NOT NULL,
  `borrower` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `remark` text DEFAULT NULL,
  `duration` int(3) NOT NULL,
  `status` int(1) NOT NULL,
  foreign key(itemid) references item(itemid),
  foreign key(borrower) references user(stuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='交易记录表';

CREATE TABLE `comment` (
  `recordid` int(10) NOT NULL primary key,
  `time` datetime NOT NULL,
  `content` text NOT NULL,
  foreign key(recordid) references record(recordid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

-- TODO : create trigger & event


-- TODO : insert test data

INSERT INTO `user` (username, name, stuid, password, phone, academy, wechat, email, avatar) VALUES
  ('zuzu1', '1号猪猪', 2015222001, '2015222001', 18915222001, '猪猪学院', 'mr-rent-1', 'zuzu1@mrrent.cn', 'default.jpg'),
  ('zuzu2', '2号猪猪', 2015222002, '2015222002', 18915222002, '猪猪学院', 'mr-rent-2', 'zuzu2@mrrent.cn', 'default.jpg'),
  ('zuzu3', '3号猪猪', 2016222003, '2016222003', 18916222003, '猪猪学院', 'mr-rent-3', 'zuzu3@mrrent.cn', 'default.jpg'),
  ('zuzu4', '4号猪猪', 2016222004, '2016222004', 18916222004, '猪猪学院', 'mr-rent-4', 'zuzu4@mrrent.cn', 'default.jpg'),
  ('guest1', '1号客人', 2015333001, '2015333001', 18915333001, '创业学院', 'guest-1', '2015333001@qq.com', 'default.jpg'),
  ('guest2', '2号客人', 2015333002, '2015333002', 18915333002, '创业学院', 'guest-2', '2015333002@qq.com', 'default.jpg'),
  ('guest3', '3号客人', 2016333003, '2016333003', 18916333003, '创业学院', 'guest-3', '2016333003@qq.com', 'default.jpg');

INSERT INTO `item` (itemid, stuid, name, type, status, price, deposit, description, photo1, photo2, photo3, photo4) VALUES
  (10001, 2015222001, 'BOSE耳机', '电子', 1, 5, 200, 'BOSE QC20 主动降噪入耳式耳机', '10001-1.jpg', NULL, NULL, NULL),
  (10002, 2015222001, '仙人掌摆件', '家居', 1, 2, 20, '仙人掌摆件仿真植物盆栽北欧家居装饰品摆设客厅书房陶瓷创意摆件', '10002-1.jpg', NULL, NULL, NULL),
  (10003, 2015222002, '升降电脑桌', '电子周边', 1, 20, 500, '乐歌M1S笔记本台式站立办公桌移动折叠升降电脑桌桌上站立工作台', '10003-1.jpg', NULL, NULL, NULL),
  (10004, 2015222002, '无线鼠标', '电子周边', 0, 5, 40, '雷柏7200P无线鼠标游戏省电台式笔记本平板电脑超薄光电办公', '10004-1.jpg', NULL, NULL, NULL),
  (10005, 2016222003, '花瓶', '家居', 0, 10, 200, '水晶美式玻璃创意现代家居装饰品客厅电视柜摆件装饰欧式酒柜花瓶', '10005-1.jpg', NULL, NULL, NULL),
  (10006, 2016222003, '书签', '其他', 0, 10, 350, '创意书签 没有一页的一本书 透明书签 创意礼品', '10006-1.jpg', '10006-2.png', NULL, NULL),
  (10007, 2016222003, '流量卡', '通信', 1, 3, 100, '上海电信4G/3G流量卡上网卡60G/48G24G包年卡16G8G上网卡手机号码', '10007-1.jpg', NULL, NULL, NULL),
  (10008, 2015333001, '手工琉璃艺术品', '艺术品', 0, 2, 20, '玻璃鲸鱼手工琉璃艺术品北欧设计风格家饰家居动物摆件创意礼物', '10008-1.jpg', NULL, NULL, NULL),
  (10009, 2015333001, '电脑桌', '家居', 0, 10, 100, '宿舍神器简易悬空上铺笔记本电脑桌子大学生床上用懒人书桌学习桌', '10009-1.jpg', '10009-2.jpg', NULL, NULL),
  (10010, 2015333002, '无线网卡', '电子周边', 1, 2, 20, '腾达 usb无线网卡 台式机电脑外置随身wifi无线接收器发射器 免驱', '10010-1.jpg', NULL, NULL, NULL),
  (10011, 2015333002, '电脑', '电子', 0, 70, 2000, '国行Apple/苹果 MK442CH/A 21.5英寸iMac 台式一体机办公学习电脑', '10011-1.jpg', NULL, NULL, NULL),
  (10012, 2015333002, '贴膜', '技能', 0, 3, 0, 'NEXUS 5钢化膜 D820 d821手机膜 5x高清保护膜LG nexus5贴膜', '10012-1.jpg', NULL, NULL, NULL),
  (10013, 2016333003, '白夜行', '书籍', 1, 1, 10, '东野圭吾作品:白夜行 东野圭吾著 日系侦探/悬疑/推理小说', '10013-1.jpg', NULL, NULL, NULL),
  (10014, 2016333003, 'Python基础教程', '书籍', 0, 1, 14, '正版 Python基础教程(第2版修订版)/图灵程序设计丛书', '10014-1.jpg', NULL, NULL, NULL);

INSERT INTO `record` (recordid, itemid, borrower, time, duration, status) VALUES
  (60001, 10001, 2015333001, '2017-05-12 13:43:48', 2, 0),
  (60002, 10003, 2016333003, '2017-05-17 12:43:44', 5, 0),
  (60003, 10002, 2016222004, '2017-05-05 19:54:46', 3, 0),
  (60004, 10005, 2016222004, '2017-05-19 05:15:36', 7, 1),
  (60005, 10007, 2016222004, '2017-05-09 19:58:56', 2, 0),
  (60006, 10010, 2015222001, '2017-06-01 15:12:57', 8, 0),
  (60007, 10013, 2015333002, '2017-06-23 21:16:25', 1, 0),
  (60008, 10011, 2016222003, '2017-06-17 06:48:36', 6, 1);

INSERT INTO `comment` (recordid, time, content) VALUES
  (60004, '2017-5-12 13:43:48', '很强，很棒，谢谢'),
  (60008, '2017-5-15 18:23:35', '有点小贵');
