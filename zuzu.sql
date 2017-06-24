-- create tables

create table `user` (
  `username` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `stuid` int(10) NOT NULL primary key,
  `password` varchar(40) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `academy` varchar(15) NOT NULL,
  `sex` VARCHAR(1) NOT NULL,
  `wechat` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `avatar` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

CREATE TABLE `task` (
  `taskid` int(10) NOT NULL primary key,
  `stuid` int(10) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `detail` text,
  `time` datetime NOT NULL,
  `location` varchar(20) NOT NULL,
  `price` int(4) NOT NULL,
  foreign key(stuid) references user(stuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='任务表';

CREATE TABLE `record` (
  `recordid` int(10) NOT NULL primary key,
  `taskid` int(10) NOT NULL,
  `accepter` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `status` int(1) NOT NULL,
  foreign key(taskid) references task(taskid),
  foreign key(accepter) references user(stuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='记录表';

CREATE TABLE `tokens` (
  `stuid` int(10) NOT NULL,
  `token` VARCHAR(40) NOT NULL,
  `deadline` datetime NOT NULL,
  PRIMARY KEY (stuid, token),
  foreign key(stuid) references user(stuid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tokens表';

INSERT INTO `user` (username, name, stuid, password, phone, academy, wechat, email, avatar) VALUES
  ('zuzu1', '1号猪猪', 2015222001, '2015222001', 18915222001, '猪猪学院', 'mr-rent-1', 'zuzu1@mrrent.cn', 'default.jpg'),
  ('zuzu2', '2号猪猪', 2015222002, '2015222002', 18915222002, '猪猪学院', 'mr-rent-2', 'zuzu2@mrrent.cn', 'default.jpg'),
  ('zuzu3', '3号猪猪', 2016222003, '2016222003', 18916222003, '猪猪学院', 'mr-rent-3', 'zuzu3@mrrent.cn', 'default.jpg'),
  ('zuzu4', '4号猪猪', 2016222004, '2016222004', 18916222004, '猪猪学院', 'mr-rent-4', 'zuzu4@mrrent.cn', 'default.jpg'),
  ('guest1', '1号客人', 2015333001, '2015333001', 18915333001, '创业学院', 'guest-1', '2015333001@qq.com', 'default.jpg'),
  ('guest2', '2号客人', 2015333002, '2015333002', 18915333002, '创业学院', 'guest-2', '2015333002@qq.com', 'default.jpg'),
  ('guest3', '3号客人', 2016333003, '2016333003', 18916333003, '创业学院', 'guest-3', '2016333003@qq.com', 'default.jpg');
